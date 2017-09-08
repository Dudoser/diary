<?php
	require_once "blocks/session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		$title = 'Главная'; 
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
					$result = todayOrganizer($_SESSION['id']);
					$day =getDay($result['day'][0]['WEEKDAY(date)']);	
				?>
				<div class="col-md-8" id="content">
					<?php if ($result): ?>
						<div class="row">
							<div class="col-md-12">
								<?php 
									echo "<h2 id=\"h2\">План на " . $day . " (" . dateOrTime($result[0]['date'], false, true) . ") </h2>";
								?>
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<!-- <ol  id="ul-target">
									<div class="li-target">
										<li class="target">Номер 1</li>
										<li class="description">Описание для задачи возможно даже это просто описание задания или цели № 1Описание для задачи возможно даже это просто описание задания или цели № 1</li>
									</div>
									<div class="li-target">
										<li class="target">Номер 2</li>
										<li class="description">Описание для задачи № 2</li>
									</div>
									<div class="li-target">
										<li class="target">Номер 3</li>
										<li class="description">Описание для задачи № 3</li>
									</div>
									<div class="li-target">
										<li class="target">Номер 4</li>
										<li class="description">Описание для задачи № 4</li>
									</div>
									<div class="li-target">
										<li class="target">Номер 5</li>
										<li class="description">Описание для задачи № 5</li>
									</div>
								</ol> -->
								<div>
									<?php
									  	echo $result[0]['text'];
									?>
								</div>
							</div>
						</div>
					<?php else: ?>
						<img id="empty-img" src="image/arrow.png" />
						<p id="empty">У вас еще нет плана на день, создайте его</p>
						<div id="for-a">
							<a id="a-empty" href="create-organizer.php">Создать план</a>
						</div>
					<?php endif ?>
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