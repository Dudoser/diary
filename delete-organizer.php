<?php	
	session_start();
	require_once "db.php";
	require_once "functions.php";
	$id = $_GET['id'];

	connectDB();
	$result = $mysqli->query("DELETE FROM `diary`.`organizer` WHERE `organizer`.`id` = $id");
	closeDB();
	header("location: history-organizer.php");
?>