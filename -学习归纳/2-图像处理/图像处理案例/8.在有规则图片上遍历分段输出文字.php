<?php



//===== 以外部图像作为画布的资源
//===== 在有规则图片上遍历分段输出文字

	header("content-type:image/jpeg");
	$img=imagecreatefromjpeg("1.jpg");

	$color=imagecolorallocate($img,255,255,0);
	
	$code=array(1=>'你睢啥？','瞧你咋地！','能动手尽量别吵吵');
	
	$height=945;
	$eveheight=ceil(945/3);
	
	foreach($code as $key=>$v){
		$x=30;
		$y=$eveheight*$key-30;
		imagettftext($img,20,0,$x,$y,$color,'./simhei.ttf',$v);
	}
	

	imagejpeg($img);
	imagedestroy($img);
	
?>








