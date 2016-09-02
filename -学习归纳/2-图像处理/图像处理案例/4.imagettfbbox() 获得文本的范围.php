<?php



	//header("content-type:image/jpeg");
	$img=imagecreatetruecolor(500,500);
	$bgcolor=imagecolorallocate($img,255,255,0);
	$colortext=imagecolorallocate($img,255,0,0);
	imagefill($img,0,0,$bgcolor);


//===== imagettfbbox() 获得文本的范围

	imagettftext($img,20,10,50,200,$colortext,'./simhei.ttf','这是一段文字');
	$info=imagettfbbox(20,10,'./simhei.ttf','这是一段文字');
	var_dump($info);

  		 //参数：(大小,角度,字体文件,文本);  获得文本的范围

				// 将会返回一个数组
				// 0 左下角 X 位置 
				// 1 左下角 Y 位置 
				// 2 右下角 X 位置 
				// 3 右下角 Y 位置 
				// 4 右上角 X 位置 
				// 5 右上角 Y 位置 
				// 6 左上角 X 位置 
				// 7 左上角 Y 位置
				// 返回的这些元素我们主要用来获得字体的宽度和高度
				// 获得字体宽度
				// abs($info[0] - $info[2]);
				// 获得字体的高度
				// abs($info[7] - $info[1]);


	
	//imagejpeg($img);
	//imagedestroy($img);
	









?>



