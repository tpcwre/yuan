<?php
//==== file_exists() 判断文件或目录是否存在 

	var_dump(file_exists('c:\xampp\htdocs\lisihan\a\one.php'));

	
	
//==== filetype() 判断文件的类型

	echo '<br>';
	var_dump(filetype('c:\xampp\htdocs\lisihan\a'));
	echo '<br>';
	var_dump(filetype('c:\xampp\htdocs\lisihan\a\one.php'));

//==== filesize()	获取文件的大小
	echo '<br>';
	var_dump(filesize('c:\xampp\htdocs\lisihan\a\one.php'));
?>