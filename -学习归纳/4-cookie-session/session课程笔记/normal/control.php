<?php
	$id=$_GET['id'];
	$name=$_GET['name'];
	
	session_start();

	$_SESSION[$id]=$name;
	echo $_SESSION[$id]." ：成功添加到购物车！<br>";
	echo "<a href='book.php'>返回继续购买</a>";

?>