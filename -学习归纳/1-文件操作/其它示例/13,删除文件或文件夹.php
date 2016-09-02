<?php
	$file='./a/a';
	if(file_exists($file)){
		unlink($file);
	}else{
		echo '文件不存在或以删除';
	}
	echo '<br>';
	
	$dir='./a';
	if(is_dir($dir)){
		rmdir($dir);
	}else{
		echo "文件夹不存在或以删除";
	}





?>