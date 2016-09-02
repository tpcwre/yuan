<?php
	header("content-type:text/html;charset=utf-8");
	if(file_exists('/zhengguofangs')){	//file_exists() 判断文件或目录是否存在
		echo '文件以存在！';
	}else{
		mkdir('/zhengguofangs');	// mkdir()  创建一个文件夹
									//   '/' 创建在C盘根目录下
		mkdir('./zhengguofangs');	//  './' 创建在同级目录下
	}
	
	echo "<hr>";
	
	$path="C:/xampp/htdocs/lisihan/a/3.php";
	$path1="C:/xampp/htdocs/lisihan/a";

	var_dump(basename($path));		//basename() 获取路径中的文件名
	echo "<br>";
	var_dump(basename($path1));	
	echo "<br>";
	
	
	
	var_dump(dirname($path));		// dirname() 获取路径中的目录部分
	echo "<br>";			
	var_dump(dirname($path1));
			


?>