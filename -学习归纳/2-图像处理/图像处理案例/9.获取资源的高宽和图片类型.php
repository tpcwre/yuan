<?php


//===== ��ȡ��Դ�ĸ߿��ͼƬ����

	//header("content-type:image/jpeg");
	$img=imagecreatefromjpeg("./1.jpg");


//===== ��ȡ��ԴͼƬ�ĸ�

	$height=imagesy($img);
	var_dump($height);	echo "<br>";
	
//===== ��ȡ��ԴͼƬ�Ŀ�
	$width=imagesx($img);
	var_dump($width);	echo "<br>";
	
//===== ��ȡ�����ͼƬ��Ϣ

	echo "<pre>";
	var_dump(getimagesize("./1.jpg"));
	echo "</pre>";
	//imagejpeg($img);
	//imagedestroy($img);



?>







