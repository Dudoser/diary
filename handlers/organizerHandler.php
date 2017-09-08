<?php
	session_start();
	require_once "../db.php";
	require_once "../functions.php";
	if (isset($_POST['done'])) {
		if (isset($_POST['text-organizer'])) {
			$text = $_POST['text-organizer'];
			if (strlen($text) <= 4) {
				$_SESSION['errors']="Вы должны написать хотя бы 5 буквы";
				header("location:../create-organizer.php");
				die;
			}	
		}
			$date = $_POST['datepicker'];
			if ($date = '') {
				$_SESSION['errors']="Вы не указали дату";
				header("location:../create-organizer.php");
				die;
			}
		$text = stripslashes($text);
		// $text =htmlspecialchars($text);
		$text = rtrim($text);

		$data = $_POST['datepicker'];
		if (!$data) {
				$_SESSION['errors']="Вы не указали дату";
				header("location:../create-organizer.php");
				die;
			}
		$id = $_SESSION['id'];

		connectDB();
		$result = $mysqli->query("INSERT INTO `organizer` (user_id, text, date) VALUE ($id, '$text', '$data')");
		closeDB();
		if ($result) {
			header("location:../create-organizer.php");
		}
	}
	
	if (isset($_POST['done-update'])) {
		$text = $_POST['text-organizer-up'];
		$date = $_POST['date-up'];
		$id = $_SESSION['id-orgznizer'];

		$text = stripslashes($text);
		// $text =htmlspecialchars($text);
		$text = rtrim($text);
		$date = stripslashes($date);
		// $date =htmlspecialchars($date);
		$date = rtrim($date);

		connectDB();
		// $result = $mysqli->query("UPDATE `organizer` SET `text`=`$text`, `date`=`$date` WHERE `id` = $id");
		$result = $mysqli->query("UPDATE `diary`.`organizer` SET `text` = '$text', `date` = '$date' WHERE `organizer`.`id` = $id");
		closeDB();
		if ($result) {
			header("location:../history-organizer.php");
		}
		else
			echo "bad";
	}




?>