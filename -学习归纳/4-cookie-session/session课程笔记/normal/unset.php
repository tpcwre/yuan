<?php
	$id=$_GET['id'];
	
	session_start();
	unset($_SESSION[$id]);

	header("Location:show.php");
?>