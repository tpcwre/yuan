<?php
//===== 给图片加水印
	header("content-type:image/jpeg");
	$img=imagecreatefromjpeg('./2.jpg');		//引入要加水印的图片
	$yin=imagecreatefrompng("./logo.png");		//引入水印图片

	$yw=imagesx($yin);			//获取水印的宽
	$yh=imagesy($yin);			//获取水印的高
	
	imagecopy($img,$yin,10,10,0,0,$yw,$yh);		//将水印图上放在原图上

	imagejpeg($img);			//输出保存片
	imagedestroy($img);			//关闭资源 
	imagedestroy($yin);			//关闭资源 



?>







