<?php
//=====验证码关联网页
	header("content-type:image/jpeg");
	$img=imagecreatetruecolor(150,50);
	$bgcolor=imagecolorallocate($img,rand(125,255),rand(125,255),rand(125,255));
	imagefill($img,0,0,$bgcolor);
	for($i=1;$i<1000;$i++){
		$colord=imagecolorallocate($img,rand(0,125),rand(0,125),rand(0,125));
		$x=rand(5,145);
		$y=rand(5,45);
		imagesetpixel($img,$x,$y,$colord);
	}
	$str='abcdefghijklmnopqrstuvwxyz0123456789';
	for($j=1;$j<=4;$j++){
		$colort=imagecolorallocate($img,rand(1,125),rand(1,125),rand(1,125));
		$size=rand(15,25);	//大小
		$text=$str[rand(0,strlen($str)-1)];
		$info=imagettfbbox($size,0,'./simhei.ttf',$text);
		//var_dump($info);
		
		$x=(100/4)*$j;
		$y = 50 - abs($info[7] - $info[1]);
		//$y = 50 - abs($info[7] - $info[1]);//随机处来的y的位置
		imagettftext($img,$size,0,$x,$y,$colort,'./simhei.ttf',$text);
	}
	imagejpeg($img);
	imagedestroy($img);
	

?>





