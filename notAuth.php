<?php
	session_start();
	header('Content-type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ошибка &#9785;</title>
	<?php require_once "blocks/head.php";?>
</head>
<body id="body-error">
	<div class="row" >
		<div class="col-md-12">
			<img id="img-error" src="image/123.png">
		</div>
		<p id="in">Что делать?</p>
		<p id="in-1">верните меня назад!</p>
		<?php
			if ($_SESSION['msg']) {
				echo "<h1>" . $_SESSION['msg'] . "</h1>";
				unset($_SESSION['msg']);
			}
			else
				echo "<h1>Ошибка 403 (Вы не авторизовались/ не зарегистрированы)</h1>";
		?>
		<p id="info-error">Вам нужно вернуться на страницу авторизации &rarr; <a href="index.php">перейти</a></p>
	</div>
</body>
</html>