<?php
	session_start();

	if(!$_SESSION['login']) {
		header("location:notAuth.php");
		die;
		// exit ("<body><div align='center'><br/><br/><br/>
			// <h3>Извините, Вы не авторизовались." . "<a href='index.php'> <b>Назад</b> </a></h3></div></body>");
	}
	
	/*echo "<pre>";

  	print_r($_SESSION);

  	echo "</pre>";*/
?>