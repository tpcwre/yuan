<?php

	//接收要修改的值。
	$title=$_POST["title"];
	$keywords=$_POST["keywords"];
	$description=$_POST["description"];

	//将要修改的值拼接成一个字串，准备存入文件
	$str="[config]\r\n";
	$str .="title=".$title."\r\n";
	$str .="keywords=".$keywords."\r\n";
	$str .="description=".$description."\r\n";
	
	//清空指定文件并将字串存入
	file_put_contents("./config.ini",$str);
	
	

?>

<a href='index.php'>返回</a>