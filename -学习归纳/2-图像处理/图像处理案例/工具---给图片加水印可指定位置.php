<?php

//===== 给图片加水印，并指定水印的位置





//===== js 变换验证码图片


//<img src="code.php" onclick="this.src='code.php?id='+Math.random()"/>













//===== 给图片加水印，并指定水印的位置


/*
*@函数功能：给图片加水印，并指定水印的位置
*
*@author:	sihan
*
*@date:		2015.07.18
*
*
*@parm1:	必选-源图片路径
*@parm2:	必选-水印图片路径
*@parm3:	可选-水印位置 取值(0-5)
*@							0：随机
*@							1：左上
*@							2：右上
*@							3：左下
*@							4：右下
*@							5：剧中
*@parm4:	可选-用户指定水印的横坐标 默认为0  
*@parm5:	可选-用户指定水印的纵坐标 默认为0
*		
*@注意	parm4,5给定坐标时，parm3随机系统坐标将失效！
*
*
*
*@待开发功能： 设置源图以及水印的高宽或比例
*
*/
	
	
shuiYin('./yuan.jpg','close.jpg',0);	

function shuiYin($tu,$yin,$position=0,$yx=0,$yy=0){
	
	//控制参数3-$position取值范围0-5
	if($position>5 || $position<0){		
		echo "parm3 is error,expect number(0-5)";
		return "parm3 is error,expect number(0-5)";
	}
	$tus=getimagesize($tu);		//获取源图的高宽及类型
	$yins=getimagesize($yin);	//获取水印的高宽及类型
	
	$imagetype=array(1=>'gif','jpeg','png');	//设置图片类型
	
	//设置源图创建资源的动态语句
	$tcreate='imagecreatefrom'.$imagetype[$tus[2]];	
	$tu=$tcreate($tu);		//创建源图画布资源
	
	//设置水印创建资源的动态语句
	$ycreate='imagecreatefrom'.$imagetype[$yins[2]]; 
	$yin=$ycreate($yin);	//创建水印画布资源
	
	if($position==0){		//判断用户选择水印位置是否随机
		$position=rand(1,5);
	}
	switch($position){		//判断水印位置的选择
		case 1:
			$x=0;
			$y=0;
		break;
		case 2:
			$x=$tus[0]-$yins[0];
			$y=0;
		break;
		case 3:
			$x=0;
			$y=$tus[1]-$yins[1];
		break;
		case 4:
			$x=$tus[0]-$yins[0];
			$y=$tus[1]-$yins[1];
		break;
		case 5:
			$x=($tus[0]-$yins[0])/2;
			$y=($tus[1]-$yins[1])/2;
		break;
	}
	if($yx!=0 || $yy!=0){
		$x=$yx;
		$y=$yy;
	}
	if($yx > $tus[0]-$yins[0]){
		$x=$tus[0]-$yins[0];
	}
	if($yy > $tus[1]-$yins[1]){
		$y=$tus[1]-$yins[1];
	}
	
	imagecopy($tu,$yin,$x,$y,0,0,$yins[0],$yins[1]);  //将水印拷贝到图片上
	
	
	$names=md5(date("Y-m-d H:i:s")).rand(10000,99999).'.'.$imagetype[$tus[2]]; //设置图片名
	
	header('content-type:image/jpeg');		//通知浏览器以图片方式打开
	imagejpeg($tu,$names);						//输出图片
	imagedestroy($tu);							//关闭资源
	imagedestroy($yin);
}





?>











