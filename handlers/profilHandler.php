<?php
	session_start();
	require_once "../db.php";
	require_once "../functions.php";
	$id = $_SESSION['id'];

// debug($_FILES);
	if (isset($_POST['complate'])) {
		if (!empty($_FILES['file']['tmp_name'])) {
			if (!empty($_FILES['file']['error'])) {
				$_SESSION['errors']="произошла ошибка загрузки";
				header("location:../profile.php");
				die;
			}
			if ($_FILES['file']['size'] > 2 * 1024 * 1024) {
				$_SESSION['errors']="Файл слишком большой";
				header("location:../profile.php");
				die;
			}
			switch ($_FILES['file']['type']) {
				
				case 'image/jpeg':
				case 'image/pjpeg':
				$type = 'jpeg';
				break;
				
				case 'image/png':
				case 'image/x-png':
				$type = 'png';
				break;

				case 'image/gif':
				 $type = 'gif';
				 break;

				default:
				$_SESSION['errors']="не правильный тип изображения";
				header("location:../profile.php");
				die;
				break;
			}
			if (!move_uploaded_file($_FILES['file']['tmp_name'], '../image/profile/' . $_FILES['file']['name'])) {
				$_SESSION['errors']="не удалось загрузить файл";
				header("location:../profile.php");
				die;
			}
			else {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				$img = $_FILES['file']['name'];

				$name = stripslashes($name);
				$email = stripslashes($email);
				$pass = stripslashes($pass);
				$name = rtrim($name);
				$email = rtrim($email);
				$pass = rtrim($pass);
				$id = $_SESSION['id'];

				$image = getUser($id);
				$im = "user.jpg";

				if ($image['image'] != $im) {
					@unlink("../image/profile/" . $image['image']);
				}
				connectDB();			
				$result = $mysqli->query("UPDATE  `diary`.`users` SET  name = '$name', email = '$email', password = '$pass', image = '$img' WHERE id = $id");
				closeDB();
				if ($result) {
					$_SESSION['id']=$id;
					$_SESSION['login']=$name; 
		    		$_SESSION['email']=$email;
		    		$_SESSION['pass']=$pass;
					$_SESSION['msg']="данные изменены";
					header("location:../profile.php");
				}
				else 
					echo "badd";
			}
		}
		/*else {
				$_SESSION['msg']="Вы не загрузили файл";
				header("location:../profile.php");
		}*/
		else {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];

			$name = stripslashes($name);
			$email = stripslashes($email);
			$pass = stripslashes($pass);
			$name = rtrim($name);
			$email = rtrim($email);
			$pass = rtrim($pass);

			connectDB();
			$result = $mysqli->query("UPDATE  `diary`.`users` SET  name = '$name', email = '$email', password = '$pass' WHERE id = $id");
			closeDB();

			if ($result) {
				$_SESSION['login']=$name; 
	    		$_SESSION['id']=$id;
	    		$_SESSION['email']=$email;
	    		$_SESSION['pass']=$pass;
	    		$_SESSION['msg']="данные изменены";
				header("location:../profile.php");
			}
			else 
				echo "bad";
		}
	}

?>