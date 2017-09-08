<?php
	require_once "blocks/session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = 'Создание плана';
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
				<div class="col-md-8" id="content">
					<!-- <form>
						<ul type="none" id="ul">
							<div class="create-or">
								<li>
									<label>Ваша цель: </label>
									<input type="text" name="num1">
								</li>
								<li class="description">
									<label>Описание: </label>
									<textarea rows="1" cols="40" name="num0"></textarea>
								</li>
								<div id="del"><span>Удалить пункт: </span><img src="image/del.png"></div>
							</div>
							<div class="create-or">
								<li>
									<label>Ваша цель: </label>
									<input type="text" name="2">
								</li>
								<li class="description">
									<label>Описание: </label>
									<textarea rows="1" cols="40" name="num02"></textarea>
								</li>
								<div id="del"><span>Удалить пункт: </span><img src="image/del.png"></div>
							</div>
						</ul>
						<div id="img-plus"><span>Добавить Цель: </span><img src="image/plus.png"></div>
					</form> -->
					<div class="row" >
							<div class="col-md-12">
								<h2>Создавай план</h2>
								<?php
									if (isset($_SESSION['errors'])) {
										echo "<div style=\"display: inline !important; float: left; width: 96% !important;\" id=\"as\">" . $_SESSION['errors'] . "</div>";
										unset($_SESSION['errors']);
									}
								?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<form action="handlers/organizerHandler.php" method="post">
									<textarea id="created-diary" name="text-organizer" rows="10" cols="90"></textarea>
									<input type="text" id="datepicker" name="datepicker">
									<input type="submit" name="done" id="done" value="Создать">
								</form>
							</div>
						</div>
						<script type="text/javascript">
							
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		CKEDITOR.replace("text-organizer");
	</script>
	<!-- end content -->
	<!-- start footer -->
	<?php require_once "blocks/footer.php"; ?>
	<!-- end footer -->
</body>
</html>