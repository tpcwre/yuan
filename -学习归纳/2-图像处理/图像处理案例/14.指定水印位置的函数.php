<?php

//===== 指定水印位置的函数


shuiYin(3);
function shuiYin($pos=0){
	header("content-type:image/jpeg");
	$img=imagecreatefromjpeg('2.jpg');
	$yin=imagecreatefrompng('logo.png');

	$iw=imagesx($img);	//原图宽
	$ih=imagesy($img);	//原图高
	$yw=imagesx($yin);	//水印宽
	$yh=imagesy($yin);	//水印高
	
	if($pos<0 || $pos>5){
		return false;
	}
	if($pos==0){
		$pos=rand(1,5);
	}
	switch($pos){
		case 1:
			$x=0;
			$y=0;
		break;
		case 2:
			$x=$iw-$yw;
			$y=0;
		break;
		case 3:
			$x=0;
			$y=$ih-$yh;
		break;
		case 4:
			$x=$iw-$yw;
			$y=$ih-$yh;
		break;
		case 5:
			$x=($iw-$yw)/2;
			$y=($ih-$yh)/2;
		break;
			
			
			
	}

	imagecopy($img,$yin,$x,$y,0,0,$yw,$yh);

	imagejpeg($img);
	imagedestroy($img);
	imagedestroy($yin);

}

?>





