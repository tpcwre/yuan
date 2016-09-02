<?php
//==== 计数器
	$fp=fopen('./two','r');
	$count=fgets($fp);
	fclose($fp);
	
	echo $count;

	$fp=fopen("./two",'w');
	$count += 1;
	fwrite($fp,$count);
	fclose($fp);




?>