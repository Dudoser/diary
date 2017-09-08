<?php
	session_start();
	require_once "../db.php";
	require_once "../functions.php";
	if (isset($_POST['done'])) {
		if (isset($_POST['text-diary'])) {
			$text = $_POST['text-diary'];
			if ($text <= 4) {
				$_SESSION['errors']="Вы должны написать хотя бы 5 символов";
				header("location:../create-diary.php");
				die;
			}	
		}

		// debug($_POST['text-diary']);
		$text = stripslashes($text);
		// $text = htmlspecialchars($text);
		$text = trim($text);

		$id = $_SESSION['id'];
		$today = fullDate();

		$result = createDiary($id, $text, $today);
		var_dump($result);
		debug($text);
		if ($result) {
			header("location:../create-diary.php");
		}
	}
	else {
		echo "bad";
	}
?>