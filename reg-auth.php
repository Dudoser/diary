<?php
	session_start();
	header('Content-type: text/html; charset=utf-8');
	require_once "db.php";

	if (isset($_POST['done'])) {
		authenticationSite($_POST['login'], $_POST['password']);
	}

    else {
	    registrationSite($_POST['login_reg'], $_POST['password_reg'], $_POST['email_reg']);
	}

?>