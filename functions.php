<?php
	
	/*
		It's function get full date example -> (2017-08-23 05:25:31) and cuting she.
		return if second argument "true" -> 05:25:31
		return if second argument "false" -> 05:25 cuting second
	*/
	function dateOrTime($argument, $second = false, $date = false){
		$result = explode(" ", $argument);
		if ($date) {
			return $result[0];
		}
		else {
			if ($second == true) {
				return $result[1];
			}
			else {
				$vari = $result[1];
				$res = explode(":", $vari);
				unset($res[2]);
				unset($result);
				$result = implode(":", $res);
				return $result;
			}
		}
	}

	/*
		here i'm get full date
	*/
	function fullDate() {
		return date("Y-m-d H:i:s");
	}

	function debug($arr)
	{
		echo '<pre>'. print_r($arr, true) .'</pre>';
	}

	function getDay($day) {

		$days = ['Понедельник', 'Вторник', 'Среду', 'Четверг', 'Пятницу', 'Субботу', 'Воскресенье'];

		for ($i=0; $i < count($days); $i++) { 
			if ($day == $i) {
				$tobay = $days[$i];
			}
		}
		return $tobay;
	}

	function validDateForm ($data) {
		if (isset($data)) { 
			$string = $data;
			if ($string == '') { 
				unset($string);
			} 
		}
		if (isset($string)) {
			$string = stripslashes($string);
			$string = htmlspecialchars($string);
			$string = trim($string);
			return $string;
		}
		else
			return false;
	}

	function authenticationSite ($login, $password) {
		$login = validDateForm($_POST['login']);
		$password = validDateForm($_POST['password']);

	    if (empty($login) or empty($password) or $login === false or $password === false) {
	    	$_SESSION['msg'] = 'Вы ввели не всю информацию, вернитесь назад и заполните все поля!';
	    	header("location:notAuth.php");
	    }
	    
	    $myrow = getInfoUser(false, $login);
	    if (empty($myrow["password"])) {
			$_SESSION['msg'] = 'Извините, введённый вами Имя или пароль неверный.';
	    	header("location:notAuth.php");
	    }
	    else {
	    	if ($myrow["password"] == $password) {
		    	$_SESSION['login'] = $login; 
		    	$_SESSION['id'] = $myrow["id"];
		    	$_SESSION['email'] = $myrow["email"];
		    	$_SESSION['pass'] = $myrow["password"];
		   		header("Location:main.php"); 
	    }
	 	else {
			$_SESSION['msg'] = 'Извините, введённый вами Имя или пароль неверный.';
	    	header("location:notAuth.php");
	    	}
	    }
	}

	function registrationSite ($login, $password, $email) {
		$login_reg = validDateForm($_POST['login_reg']);
		$pass_reg = validDateForm($_POST['password_reg']);
		$email_reg = validDateForm($_POST['email_reg']);
		if (empty($login_reg) or empty($pass_reg) or empty($email_reg) or $login_reg === false or $pass_reg === false or $email_reg === false) {
	    	$_SESSION['msg'] = 'Вы ввели не всю информацию, вернитесь назад и заполните все поля!';
	    	header("location:notAuth.php");
	    }
	    $auth = regUser($login_reg, $email_reg, $pass_reg);
	    if ($auth) {
	    	$_SESSION['login']=$login_reg;
	    	$_SESSION['reg'] = "Поздравляю!";
	    	header("Location:index.php"); 
	    }
	}

?>