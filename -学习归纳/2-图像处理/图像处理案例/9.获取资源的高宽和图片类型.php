<?php


//===== 获取资源的高宽和图片类型

	//header("content-type:image/jpeg");
	$img=imagecreatefromjpeg("./1.jpg");


//===== 获取资源图片的高

	$height=imagesy($img);
	var_dump($height);	echo "<br>";
	
//===== 获取资源图片的宽
	$width=imagesx($img);
	var_dump($width);	echo "<br>";
	
//===== 获取更多的图片信息

	echo "<pre>";
	var_dump(getimagesize("./1.jpg"));
	echo "</pre>";
	//imagejpeg($img);
	//imagedestroy($img);



?>







