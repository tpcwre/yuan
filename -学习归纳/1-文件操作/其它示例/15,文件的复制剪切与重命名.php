<?php
	//文件的拷贝
	
	$srcDir="demo1/demo1.zip";
	$desDir="demo2/demo2.zip";
	copy($srcDir,$desDir);
	

	

	//文件的剪切与重命名
	$path1='./demo1/demo2.zip';
	$path2='./demo2/demo3.rar';
	
	if(is_file($path1)){
		rename($path1,$path2);
	}else{
		echo "文件以被剪切或重命名！";
	}



?>