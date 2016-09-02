<?php
//===== 图片的等比缩放
	header("content-type:image/jpeg");
	$oimg=imagecreatefromjpeg('2.jpg');	//引入要绽放的图片

	$nw=200;			//设置预计要绽放的高宽
	$nh=300;
	$ow=imagesx($oimg);		//获取要绽放图片的高宽
	$oh=imagesy($oimg);

	if($ow && ($ow <$oh)){			//按公式将预设的宽高进行缩小并得到缩小后的值
		$nw=($nh / $oh) * $ow;
	}else{
		$nh=($nw / $ow) * $oh;
	}


	$nimg=imagecreatetruecolor($nw,$nh);	//创建一个画布，高宽使用缩放后的值，

	imagecopyresampled($nimg,$oimg,0,0,0,0,$nw,$nh,$ow,$oh);	//用函数将图片缩放

	imagejpeg($nimg,'new2.jpg');		//保存图片
	imagedestroy($nimg);			//关闭资源
	imagedestroy($oimg);
	
?>