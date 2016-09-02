<?php
	$bg = imagecreatetruecolor(400,300);
	$white = imagecolorallocate($bg,235,235,235); 
	imagefill($bg,0,0,$white);
	$red=imagecolorallocate($bg,255,0,0);
	$gre=imagecolorallocate($bg,0,255,0);
	$blu=imagecolorallocate($bg,0,0,255);
	$red1=imagecolorallocate($bg,200,0,0);
	$gre1=imagecolorallocate($bg,0,200,0);
	$blu1=imagecolorallocate($bg,0,0,200);
	//imagefilledarc($bg,100,100,100,50,0,35,$red1,IMG_ARC_PIE);
	for($i=180;$i>=100;$i--){	//调节高度可以改变$i=180的值。
		imagefilledarc($bg,100,$i,100,50,0,35,$red1,IMG_ARC_PIE);
		imagefilledarc($bg,100,$i,100,50,35,70,$gre1,IMG_ARC_PIE);
		imagefilledarc($bg,100,$i,100,50,70,360,$blu1,IMG_ARC_PIE);
	}
		imagefilledarc($bg,100,100,100,50,0,35,$red,IMG_ARC_PIE);
		imagefilledarc($bg,100,100,100,50,35,70,$gre,IMG_ARC_PIE);
		imagefilledarc($bg,100,100,100,50,70,360,$blu,IMG_ARC_PIE);
	header('content-type: image/png');
	imagepng($bg);
