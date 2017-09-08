<?php
	require_once "blocks/session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		$title = 'Редактирование органайзера'; 
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
				<?php require_once "blocks/menu.php";?>
				<!-- end menu -->
				<div class="col-md-8" id="content">
					<!-- <form>
						<ul type="none" id="ul">
							<div class="create-or">
								<li>
									<label>Ваша цель: </label>
									<input type="text" name="">
								</li>
								<li class="description">
									<label>Описание: </label>
									<textarea rows="1" cols="40"></textarea>
								</li>
								<div id="del"><span>Удалить пункт: </span><img src="image/del.png"></div>
							</div>
							<div class="create-or">
								<li>
									<label>Ваша цель: </label>
									<input type="text" name="">
								</li>
								<li class="description">
									<label>Описание: </label>
									<textarea rows="1" cols="40"></textarea>
								</li>
								<div id="del"><span>Удалить пункт: </span><img src="image/del.png"></div>
							</div>
						</ul>
						<div id="img-plus"><span>Добавить Цель: </span><img src="image/plus.png"></div>
						<input type="submit" name="done" id="done" value="Сохранить">
					</form> -->

					<?php 
						$variable = getOrganizer($_GET['id']);
						$_SESSION['id-orgznizer'] = $variable["id"];
					?>
					<div class="row">
						<div class="col-md-12">
							<h2>Изменяй план</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form action="handlers/organizerHandler.php" method="post">
								<textarea id="created-diary" name="text-organizer-up" rows="10" cols="90"><?php echo $variable['text']; ?></textarea>
								<p>Укажите дату: <input type="text" id="datepicker" value="<?php echo $variable['date']; ?>"></p>
								<input type="submit" name="done-update" id="done-up" value="Создать">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		CKEDITOR.replace("text-organizer-up");
	</script>
	<!-- end content -->
	<!-- start footer -->
	<?php require_once "blocks/footer.php"; ?>
	<!-- end footer -->
</body>
</html>