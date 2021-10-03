<?php

	session_start();
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
		header("Location:http://localhost/Uni_Project/index.php");
		exit;
		?>
