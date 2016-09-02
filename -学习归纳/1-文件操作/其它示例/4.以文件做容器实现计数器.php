<?php
//==== 计数器1
	$fp=fopen('./two','r');
	$count=fgets($fp);
	fclose($fp);
	
	echo $count;

	$fp=fopen("./two",'w');
	$count += 1;
	fwrite($fp,$count);
	fclose($fp);










//==== 计数器2

	$fp=fopen('./three','r+');
	$count=fgets($fp);
	echo $count;
	rewind($fp);
	$count +=1;
	fwrite($fp,$count);
	fclose($fp);

?>