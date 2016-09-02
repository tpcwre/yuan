<?php
	$sid=$_GET['sid'];
	unset($_SESSION['user']);
	header("Location:login.php?sid=$sid");
?>