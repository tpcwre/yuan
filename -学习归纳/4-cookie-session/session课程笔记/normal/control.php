<?php
	$id=$_GET['id'];
	$name=$_GET['name'];
	
	session_start();

	$_SESSION[$id]=$name;
	echo $_SESSION[$id]." ���ɹ���ӵ����ﳵ��<br>";
	echo "<a href='book.php'>���ؼ�������</a>";

?>