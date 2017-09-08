<?php
	require_once "blocks/session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = 'Дневник';
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
							<a href="create-diary.php"><div id="create-diary">Записать в дневник</div></a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<?php 
								/*$res = getDiary($_SESSION['id']); 
								for ($i=0; $i <count($res); $i++) {
									echo "<div class=\"diary-time\">Запись за " . dateOrTime($res[$i]["date"], false, true) . "<span>Время:" . dateOrTime($res[$i]["date"]) . "</span></div>";
									echo "<p class=\"diary-text\">" . $res[$i]["text"] . "</p>";
								}*/

								$pages = 0;
								$count = 3;
								$min = 0;
								$max = $count;
								$res = getDiary($_SESSION['id']);
								$pages = ceil(count($res) / $count);

								/*for ($i = $min; $i < $max; $i++) { 
									$min++;

								}*/


								echo "<ul type=none id=\"pagination-ul\">";
									for ($i=1; $i < $pages + 1; $i++) { 
										echo "<li id='" . $i . "'>" . $i . "</li>";
									}
								echo "</ul>";
							?>
							<nav aria-label="Page navigation">
							 	<ul class="pagination">
							    	<li>
							      		<a href="#" aria-label="Previous">
							        		<span aria-hidden="true">&laquo;</span>
							      		</a>
							    	</li>
									<?php
										for ($i=1; $i < $pages + 1; $i++) { 
											echo "<li id='" . $i . "'><a href=\"diary.php?page=" . $i . "\">" . $i . "</a></li>";
										}
									?>
								    <li>
								      	<a href="#" aria-label="Next">
								       		<span aria-hidden="true">&raquo;</span>
								      	</a>
							    	</li>
							  	</ul>
							</nav>
							
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