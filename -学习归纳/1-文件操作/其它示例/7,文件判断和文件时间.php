<?php
	date_default_timezone_set('PRC');				//设置使用的时区

	$path="C:/xampp/htdocs/lisihan/a/1.php";		//设置一个路径指向

	
	var_dump(is_dir($path));	echo "<br>";		//is_dir 判断路径指向是否为文件夹
	
	var_dump(is_file($path));	echo '<br>';		//is_file 判断路径指向是否为一个文件
	
	var_dump(is_executable($path));	echo '<br>';		//is_executable 判断文件是否可执行
	
	var_dump(is_writable($path)); echo "<br>";		//is_writable 判断文件是否可写
	
	var_dump(is_readable($path)); echo '<br>';		//is_readable 判断文件是否可读
	
	
	echo date("Y-m-d H:i:s",fileatime($path)).'<br>';	//fileatime() 获取文件的访问时间(access)

	echo date("Y-m-d H:i:s",filectime($path)).'<br>';	//filectime() 获取文件创建时间(create)
	
	echo date("Y-m-d H:i:s",filemtime($path)).'<br>';	//filemtime() 获取文件的修改时间modify




?>