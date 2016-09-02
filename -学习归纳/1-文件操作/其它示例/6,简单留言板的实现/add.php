<?php
	header('content-type:text/html;charset=utf-8');
	$addr = $_SERVER['REMOTE_ADDR'];	//用户
	$time = time();						//时间
	$content = $_POST['content'];		//内容

	$fp=fopen('./data','a');

	$str = $addr.'|()|'.$time.'|()|'.$content."\r\n";

	$stat=fwrite($fp,$str);
	fclose($fp);
	if($stat>0){
		header("Location:index.php?stat=1");
		exit();
	}


?>







