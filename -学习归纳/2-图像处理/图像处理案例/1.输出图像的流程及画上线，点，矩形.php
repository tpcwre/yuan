<?php

//===== 输出图像的流程及画上线，点，矩形


	header("content-type:image/jpg");	//通知页面这是一张图片
	$img=imagecreatetruecolor(500,500);	//创建一张画布
	$bgcolor=imagecolorallocate($img,255,255,255);	//创建一个颜色
	$color1=imagecolorallocate($img,0,0,255);
	imagefill($img,0,0,$bgcolor);				//填充背景色
	imageline($img,0,0,500,500,$color1);		//画一条线
	imagesetpixel($img,40,50,$color1);			//画一个点
	imagerectangle($img,50,50,200,200,$color1);	//画一个矩形
	
	
	imagejpeg($img);		//输出保存图像
	imagedestroy($img);		//关闭资源
	

?>







