<?php

//===== ��ʱ�������������ļ���

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
	//�ü��ܺ��ʱ����������������ļ���
	imagejpeg($nimg,$name.'.jpg');
	imagedestroy($oimg);
	imagedestroy($img);

?>