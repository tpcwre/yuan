<?php
//==== 图像的绽放
	//header("content-type:image/jpeg");
	$nimg=imagecreatetruecolor(200,200);	//新图像资源
	$oimg=imagecreatefromjpeg('./1.jpg');	//老图像资源
	
	//===== 获取老图片的宽和高
	$oheight=imagesy($oimg);
	$owidth=imagesx($oimg);
	imagecopyresampled($nimg,$oimg,0,0,0,0,200,200,$owidth,$oheight);
	
	
	
	
	
	imagejpeg($nimg,'./new3.jpg');
	imagedestroy($oimg);
	imagedestroy($nimg);
	
	
	
	




?>