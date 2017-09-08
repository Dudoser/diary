<?php
	require_once "functions.php";
	$mysqli = false;
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli ("localhost", "root", "", "diary");
		$mysqli->query("SET NAMES 'utf8'");
		// hasMany();
	}

	function closeDB () {
		global $mysqli;
		$mysqli->close();
	}

	function hasMany () {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("ALTER TABLE `users` ADD FOREIGN KEY (diary_id) REFERENCES `text-diary` (user_id)");
		closeDB();
		if ($result) {
			return true;
		}
		else {
			return false;
		}
	}

	function getInfoUser ($id = false, $login = false) {
		global $mysqli;
	    connectDB();
		if ($id === false) {
			$result = $mysqli->query("SELECT * FROM `users` WHERE name='$login'");
		}
		else {
			$result = $mysqli->query("SELECT * FROM `users` WHERE id = $id");
		}
		closeDB();
	    return $result->fetch_assoc();
	}

	function regUser ($login_reg, $email_reg, $pass_reg) {
		global $mysqli;
		connectDB();
		// $result = $mysqli->query("INSERT INTO diary . `users` (name, email, password) VALUES ('$login_reg', '$email_reg', '$pass_reg')");
		$result = $mysqli->query("INSERT INTO `diary`.`users` (`id`, `diary_id`, `name`, `email`, `password`, `image`) VALUES (NULL, '0', '$login_reg', '$email_reg', '$pass_reg', 'user.jpg')");
		closeDB();
		return $result;
	}

	function getDiary($id) {
		global $mysqli;
		connectDB();
		// $result = $mysqli->query("SELECT * FROM `text-diary`");
		// $result = $mysqli->query("SELECT * FROM `users` LEFT JOIN `text-diary` ON `text-diary` . user_id = `users` . id");
		$result = $mysqli->query("SELECT * FROM `diary`.`text-diary` WHERE user_id = $id ORDER BY date DESC");
		closeDB();
		return resultToArray($result);
	}

	function createDiary ($id, $text, $today) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("INSERT INTO `diary`.`text-diary` (`id`, `user_id`, `text`, `date`) VALUES (NULL, '$id', '$text', '$today')");
		closeDB();
		return $result;
	}

	function getOrganizers($id) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `organizer` WHERE user_id = $id ORDER BY date DESC");
		closeDB();
		return resultToArray($result);
	}

	function getOrganizer($id) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `organizer` WHERE id = $id");
		closeDB();
		return 	$result->fetch_assoc();
	}

	function todayOrganizer($id) {
		global $mysqli;
		connectDB();
		// $result = $mysqli->query("SELECT * FROM `organizer` WHERE user_id = $id AND date = NOW() OR user_id = $id AND date > NOW() - INTERVAL 1 DAY  LIMIT 1");
		$date = dateOrTime(fullDate(), false, true);
		$result = $mysqli->query("SELECT * FROM `organizer` WHERE user_id = $id AND date = '$date 00:00:00' LIMIT 1");
		// $result = $mysqli->query("SELECT * FROM `organizer` WHERE user_id = $id AND date > NOW() - INTERVAL 1 DAY   ");
		/*if ($one) {
			$result = $one;
		}
		else
			$result = $two;*/
		// $result = $mysqli->query("SELECT * FROM `organizer` WHERE user_id = $id AND WHERE date BETWEEN MAX(date) AND MIN(date) ORDER BY date DESC LIMIT 1");
		closeDB();
		return resultToArray($result);
	}
/*
	function insert () {
		global $mysqli;
		connectDB();
		$resiult = $mysqli->query("INSERT INTO `text-diary` (id, text, date) VALUE ()");
		closeDB();
	}*/
	function resultToArray ($result) {
		$array = array ();
		while (($row = $result->fetch_assoc()) != false) 
			$array[] = $row;
		return $array;
	}



?>