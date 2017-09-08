<?php
	require_once "blocks/session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = 'Создание дневника';
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

					<div class="row">
						<div class="col-md-12">
							<h2>Запись в дневник</h2>
							<?php
								if (isset($_SESSION['errors'])) {
									echo "<div id=\"as\">" . $_SESSION['errors'] . "</div>";
									unset($_SESSION['errors']);
								}
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<b>ХРЕН ЕГО ЗНАЕТ ПОЧЕМУ ОНО НЕ СОХРАНЯЕТ!!! В КОДЕ ВСЕ ПРАВИТЬНО!!!
							(это что бы не забыть)</b>
							<br />
							<br />
							<br />
							<form action="handlers/diaryHandler.php" method="post">
								<textarea id="created-diary" name="text-diary" rows="10" cols="90"></textarea>
								<input type="submit" name="done" id="done" value="Сохранить">
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		CKEDITOR.replace("text-diary");
	</script>
	<!-- end content -->
	<!-- start footer -->
	<?php require_once "blocks/footer.php"; ?>
	<!-- end footer -->
</body>
</html>