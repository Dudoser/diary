<?php
	require_once "blocks/session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		$title = 'История органайзера'; 
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
						<div class="col-md-12 space">

							<!-- <div class="diary-time">План на: 21.07.2017<a href="update-organizer.php"><span>Редактировать</span></a></div>
								<ul type="none" id="ul-target-history" class="ul-history">
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
								</ul>
							</div>	 -->
						<?php  
							$res = getOrganizers($_SESSION['id']);
							
							for ($i=0; $i < count($res); $i++) { 
								echo '<div class="diary-time">План на: ' . dateOrTime($res[$i]["date"], false, true) . '<a href="delete-organizer.php?id='.$res[$i]["id"].'" name="del"><span>Удалить</span></a><a href="update-organizer.php?id='.$res[$i]["id"].'" name="go"><span>Редактировать</span></a></div>';
								echo "<p class=\"diary-text\">" . $res[$i]["text"] . "</p>";
							}
						?>
						</div>
					</div>
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