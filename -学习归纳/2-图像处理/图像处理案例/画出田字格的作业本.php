<?php
	header("content-type:image/jpeg");	//通知页面这是图片
	$img=imagecreatetruecolor(500,500);	//创建画布
	$bgcolor=imagecolorallocate($img,255,255,0);	//创建颜色
	$colorline=imagecolorallocate($img,0,0,0);		
	imagefill($img,0,0,$bgcolor);				//填充背景色


//===== 画出田字格的作业本

	for($i=1;$i<500;$i+=20){					//显示横线
		imageline($img,0,$i,500,$i,$colorline);
	}
	for($i=1;$i<500;$i+=20){					//显示坚线
		imageline($img,$i,0,$i,500,$colorline);
	}
	imagejpeg($img);							//输出或保存图像
	imagedestroy($img);							//关闭资源


?>