<?php

//===== 动态加水印函数

function shuiYin($img,$yin){
	//header("content-type:image/jpeg");
	$iinfo=getimagesize($img);		//获取原图信息集
	$iwidth=$iinfo[0];				// 原 高
	$iheight=$iinfo[1];				// 原 宽
	$itype=$iinfo[2];				// 原 类型
	
	$yinfo=getimagesize($yin);		//获取水印信息集
	$ywidth=$yinfo[0];				//印 高
	$yheight=$yinfo[1];				//印 宽
	$ytype=$yinfo[2];				//印 类型
	
	$types=array(1=>'gif','jpeg','png');	//设置图片类型
	
	
	$icreate='imagecreatefrom'.$types[$itype];	//原图资源函数名
	$ycreate='imagecreatefrom'.$types[$ytype];	//水印资源函数名
	
	$image='image'.$types[$itype];	//输出或保存使用的函数名
	
	
	$imgs=$icreate($img);		//动态函数创建原图资源 
	$yins=$ycreate($yin);		//动态函数创建水印资源
	
	//添加水印
	imagecopy($imgs,$yins,0,0,0,0,$ywidth,$yheight);
	
	//输出或保存
	$newFileName=md5(date("Y-m-d H:i:s")).rand(100,999).'.'.$types[$itype];
	
	
	
	$image($imgs,$newFileName);		//动态函数输出或保存图像
	imagedestroy($imgs);			//关闭资源 
	imagedestroy($yins);
}

shuiYin('2.jpg','logo.png');
?>