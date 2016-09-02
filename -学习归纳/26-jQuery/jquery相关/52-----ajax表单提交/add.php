<?php
	sleep(1);
	require "mysqltools.php";
	
	$mysql=new Mysql('localhost','root','abcd12345','wanhao');
	
	$sql="insert into zhiwen(user,pass,email,date) values('{$_POST['user']}',sha1('{$_POST['pass']}'),'{$_POST['email']}',now())";
	
	if($_POST['user'] && $_POST['pass']){
		$mysql->dml($sql)or die('新增失败'.mysql_error());
		//echo mysql_affected_rows();
		$mysql->close();
	}else{
		echo "没有接收到数据";
	}





?>