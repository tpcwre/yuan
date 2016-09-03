
<?php

	$lname = $_GET['del'];

	require "redis.php";
	
	$redis->del($lname);
	
	header("location:index.php");
	
	
	
	
	