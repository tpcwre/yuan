<?php
	$sid=$_GET['PHPSESSID'];
	if($sid){
		session_id($sid);
	}
	$id=$_GET['id'];
	
	session_start();
	unset($_SESSION[$id]);

	header("Location:show.php?".SID);
?>