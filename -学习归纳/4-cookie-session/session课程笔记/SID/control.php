<?php
	$id=$_GET['id'];
	$name=$_GET['name'];
	$sid=$_GET['PHPSESSID'];
	if($sid){
		session_id($sid);
	}
	session_start();
	$_SESSION[$id]=$name;
	echo $_SESSION[$id]." ���ɹ���ӵ����ﳵ��<br>";
	echo "<a href='book.php?".SID."'>���ؼ�������</a>";
?>