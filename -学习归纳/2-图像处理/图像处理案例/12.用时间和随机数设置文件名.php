<?php

//===== 用时间和随机数设置文件名

	//header("content-type:image/jpeg");

	$nw=200;
	$nh=300;
	$oimg=imagecreatefromjpeg('2.jpg');
	
	$ow=imagesx($oimg);
	$oh=imagesy($oimg);
	
	if($nw && ($ow <$oh)){
		$nw=($nh /$oh) * $ow;
	}else{
		$nh=($nw/$ow) * $oh;
	}
	$nimg=imagecreatetruecolor($nw,$nh);
	imagecopyresampled($nimg,$oimg,0,0,0,0,$nw,$nh,$ow,$oh);
	
	$name=md5(date("Y-m-d H:i:s")).rand(100,999);
	//用加密后的时间数和随机数设置文件名
	imagejpeg($nimg,$name.'.jpg');
	imagedestroy($oimg);
	imagedestroy($img);

?>