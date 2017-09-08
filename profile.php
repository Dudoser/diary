<?php
	require_once "blocks/session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		$title = 'Мой кабинет'; 
		require_once "blocks/head.php"; 
	?>
</head>
<body id="bod">
	<!-- start header -->
	<?php require_once "blocks/header.php"; ?>
	<!-- end header -->
	<!-- start content -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- start menu -->
				<?php require_once "blocks/menu.php"; ?>
				<!-- end menu -->
				<?php
					$res = getInfoUser($_SESSION['id'], false);
				?>
				<div class="col-md-8" id="content">
					<div id="as"></div>
					<?php

						if ($_SESSION['msg']) {
							echo "<div style=\"display: inline !important;\" id=\"alertt\">" . $_SESSION['msg'] . "</div>";
							unset($_SESSION['msg']);
						}
						if ($_SESSION['errors']) {
							echo "<div style=\"display: inline !important; background-color: #e05b5b !important;\" id=\"alertt\">" . $_SESSION['errors'] . "</div>";
							unset($_SESSION['errors']);
						}

					?>
					
					<form enctype="multipart/form-data" action="handlers/profilHandler.php" method="post">
						<ul type="none" class="ul" id="ul">
							<li>
								<label>Ваше Имя: </label>
								<input type="text" name="name" id="name-profil" value="<?php echo $_SESSION['login']; ?>">
							</li>
							<li>
								<label>Ваш E-mail: </label>
								<input type="email" name="email" id="email-profil" value="<?php echo $_SESSION['email']; ?>">
							</li>
							<li>					
								<label>Исменить фотографию: </label>
								<input type="file" name="file">
							</li>
						</ul>
						<ul type="none" class="ul" >
							<li id="li-pass">
								<label>Изменить ваш пароль: </label>
								<input type="text" name="pass" id="pass-profil" value="<?php echo $_SESSION['pass']; ?>">
							</li>
						</ul>
						<input type="submit" name="complate" id="done" value="Принять">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- start footer -->
	<?php require_once "blocks/footer.php"; ?>
	<!-- end footer -->
</body>
</html>