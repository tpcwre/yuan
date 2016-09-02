<?php

//===== 保存图片
//===== 引用外部图片创建资源
	//header("content-type:image/jpeg");
	$img=imagecreatefromjpeg("./2.jpg");
	$color=imagecolorallocate($img,255,255,0);
	imagettftext($img,60,5,100,300,$color,'./simhei.ttf','这是一个美少女');
	
    	imagejpeg($img,'./xxoo1.jpg');
	imagedestroy($img);

?>









