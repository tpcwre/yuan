<?php
	$id=$_GET['id'];
	$name=$_GET['name'];
	$sid=$_GET['PHPSESSID'];
	if($sid){
		session_id($sid);
	}
	session_start();
	$_SESSION[$id]=$name;
	echo $_SESSION[$id]." ：成功添加到购物车！<br>";
	echo "<a href='book.php?".SID."'>返回继续购买</a>";
?>