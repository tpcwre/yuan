<?php
	//�ļ��Ŀ���
	
	$srcDir="demo1/demo1.zip";
	$desDir="demo2/demo2.zip";
	copy($srcDir,$desDir);
	

	

	//�ļ��ļ�����������
	$path1='./demo1/demo2.zip';
	$path2='./demo2/demo3.rar';
	
	if(is_file($path1)){
		rename($path1,$path2);
	}else{
		echo "�ļ��Ա����л���������";
	}



?>