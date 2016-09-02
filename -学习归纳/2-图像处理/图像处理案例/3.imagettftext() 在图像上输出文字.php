<?php
	header("content-type:image/jpeg");
	$img=imagecreatetruecolor(500,500);
	$bgcolor=imagecolorallocate($img,255,255,0);
	$color1=imagecolorallocate($img,255,0,0);
	
	imagefill($img,0,0,$bgcolor);
	
	for($i=0;$i<500;$i+=20){
		imageline($img,0,$i,500,$i,$color1);
		imageline($img,$i,0,$i,500,$color1);
	}
			

//======  在图像上输出文字


	imagettftext($img,50,10,50,350,$color1,'./simhei.ttf','这是文字');
	
	imagejpeg($img);
	imagedestroy($img);
	


?>