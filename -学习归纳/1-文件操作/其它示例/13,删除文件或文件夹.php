<?php
	$file='./a/a';
	if(file_exists($file)){
		unlink($file);
	}else{
		echo '�ļ������ڻ���ɾ��';
	}
	echo '<br>';
	
	$dir='./a';
	if(is_dir($dir)){
		rmdir($dir);
	}else{
		echo "�ļ��в����ڻ���ɾ��";
	}





?>