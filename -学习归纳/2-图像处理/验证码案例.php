<?php
	header("content-type:text/html;chreset=utf-8");
	$img=imagecreatetruecolor(150,50);				//设置验证码画布资源
	$sw=20;		//预设绽放的宽
	$sh=20;		//预设绽放的高
	$sf=imagecreatefromjpeg('./img/3.JPG');		//引用要缩放的图片
	$sfw=imagesx($sf);				//获取被缩图的宽
	$sfh=imagesy($sf);				//获取被缩图的高
	if($sw && ($sfw < $sfh)){		//按公式将预设的宽高等比绽放
		$sw = ($sh / $sfh) * $sfw;
	}else{
		$sh = ($sw / $sfw) * $sfh;
	}
	$sf2=imagecreatetruecolor($sw,$sh);		//使用缩放后的宽高创建一个新画布资源
	imagecopyresampled($sf2,$sf,0,0,0,0,$sw,$sh,$sfw,$sfh);  //将图片绽放到新资源中
	
	$x1=rand(3,145);	//设置绽放图片在源图片上显示的随机x坐标
	$y1=rand(20,50);	//设置绽放图片在源图片上显示的随机y坐标
	imagecopy($img,$sf2,$x1,$y1,0,0,$sw,$sh);
	
	
	$yin1=imagecreatefrompng("./img/hu.png");		//引用外部水印图片资源
	$yin2=imagecreatefrompng("./img/jing.png");
	$yin3=imagecreatefrompng("./img/shen.png");
	$yin4=imagecreatefrompng("./img/yue.png");
	$yinrand=rand(1,4);		//随机水印资源
	switch($yinrand){		//判断使用哪个水印资源
		case 1:
			$yin=$yin1;		
		break;
		case 2:
			$yin=$yin2;
		break;
		case 3:
			$yin=$yin3;
		break;
		case 4:
			$yin=$yin4;
		break;
	}
	$w=imagesx($yin);	//获取水印的宽度
	$h=imagesy($yin);	//获取水印的高度
	$cx=rand(0,140);	//设置随机水印x坐标
	$cy=rand(-5,45);	//设置随机水印y坐标
	imagecopy($img,$yin,$cx,$cy,0,0,$w,$h);	//将水印拷贝到图片上,坐标每次随机变换

	$bgcolor=imagecolorallocate($img,rand(125,255),rand(125,255),rand(125,255)); //设置动态背景色
	imagefill($img,0,0,$bgcolor);	//填充背景色，让背景色动态随机变换
	for($i=0;$i<1000;$i++){				//遍历随机位置显示1000个干扰点
		$colord=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));	//随机出点的颜色
		$dx=rand(3,147);		//随机点的X坐标
		$dy=rand(3,47);			//随机点的Y坐标
		imagesetpixel($img,$dx,$dy,$colord);	//坐标随机颜色随机画出10000个点
	}
	$str='abcdefghijklmnopqrstuvwxyz1234567890';		//设置验证码的满园
	$tx=0;			//设置码x坐标
	$ty=17;			//设置码y坐标
	for($i=0;$i<4;$i++){		//遍历出四个码
		$colort=imagecolorallocate($img,rand(0,100),rand(0,100),rand(0,100));	//设置文字颜色
		$text=$str[rand(0,strlen($str)-1)];		//让每个码在字串中随机抽取
		$tx+=rand(5,35);		//设置码x坐标随机变动 
		$ty+=rand(0,33);		//设置码y坐标随机变动 
		imagettftext($img,20,0,$tx,$ty,$colort,'./simhei.ttf',$text);	//显示出文字
		$ty=17;		//将y坐标重置初始状态，不然会依次往下排，越排越低了
	}
	header("content-type:image/jpeg");
	imagejpeg($img);	//输出图像
	imagedestroy($img);	//关闭资源 
	imagedestroy($sf);
	imagedestroy($sf2);
	imagedestroy($yin1);
	imagedestroy($yin2);
	imagedestroy($yin3);
	imagedestroy($yin4);
?>
