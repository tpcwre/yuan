<?php
	header("content-type:text/html;charset=gbk");
							//iconv() 转换编码格式
	$path=iconv('utf-8','gbk',"c:/xampp/htdocs/lisihan/a/中文文件夹");
	echo $path.'<br>';
	$op=opendir($path);		// opendir() 获取一个目录资源

	var_dump($op);





?>