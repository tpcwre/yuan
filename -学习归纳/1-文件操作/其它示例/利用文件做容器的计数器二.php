<?php
	$fp=fopen('./three','r+');
	$count=fgets($fp);
	echo $count;
	rewind($fp);
	$count +=1;
	fwrite($fp,$count);
	fclose($fp);
?>