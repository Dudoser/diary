<?php
	session_start();
	header('Content-type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>
<head>
	<?php
		$title = 'Авторизация'; 
		require_once "blocks/head.php"; 
	?>
</head>
<body >
	<!-- start background video -->
	<div id="video-bg">
		<video width="100%" height="auto" preload="auto" autoplay="autoplay" loop="loop" poster="image/26_2640.jpg" muted="muted">
			<!-- <source src="video/bg_0.mp4" type="video/mp4"> -->
			<source src="video/bbb.mp4" type="video/mp4">
		</video>
	</div>
	<!-- end background video -->
	<div class="row">
		<div class="col-md-12">
		<?php 
			if ($_SESSION['reg']) {
				echo "<div id=\"regg\">" . $_SESSION['reg'] . " " . $_SESSION['login'] . " Вы успешно Зарегистрировались!</div>";
				unset($_SESSION['reg']);
			}

		?>
			<div id="auth">
				<h2>Вход</h2>
			</div>
			<div id="reg-title">
				<h2>Регистрация</h2>
			</div>
			<!-- start form auth -->
			<div class="col-md-6">
				<div class="bg">
					<form action="reg-auth.php" method="post">
						<label>Имя пользователя: </label>
						<input type="text" name="login" id="name"  placeholder="name" />
						<label>Пароль пользователя: </label>
						<input type="password" name="password" id="pass" placeholder="password" />
						<button type="submit" name="done">Войти</button>
					</form>
				</div>
			</div>
			<!-- end form for auth -->
			<!-- start form for reg-->
			<div class="col-md-6">
				<div class="reg">
					<form action="reg-auth.php" method="post">
						<label>Имя пользователя: </label>
						<input type="text" name="login_reg" id="name_reg"  placeholder="name" />
						<label>E-mail пользователя: </label>
						<input type="text" name="email_reg" id="email_reg"  placeholder="e-mail" />
						<label>Пароль пользователя: </label>
						<input type="password" name="password_reg" id="pass_reg" placeholder="password" />
						<button type="submit" name="done_reg">Зарегистрироваться</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end form for reg-->
</body>
</html>