<!-- start menu -->
<div class="col-md-3" id="menu">
	<div class="row">
		<div class="col-md-12" id="ava">
			<?php $user = getInfoUser($_SESSION['id'], false); ?>
			<div>
				<?php echo " <img src=\"image/profile/" . $user['image'] . "\"> ";?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ul type="none">
				<a href="profile.php"><li>Профиль<span></span></li></a>
				
				<a href="diary.php"><li>Дневник</li></a>
				<span></span>
				<a href="create-organizer.php"><li>Создать план на день</li></a>
				<span></span>
				<a href="history-organizer.php"><li>История ежедневников</li></a>
				<span></span>
			</ul>
		</div>
	</div>
</div>
<!-- end menu -->