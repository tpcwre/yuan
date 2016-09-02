<?php

//===== 其它示例请 到 http://docs.upyun.com/download/ 下载查看 PHP-SDK示例

	require "upyun.class.php";
	$u = new UpYun('youle2','youle1','youle123');
	echo '<pre>';
	

		
//-- 给图片创建大小不同或加水印的版本
	/*
		进入空间服务-》防盗链-》自定义版本->创建缩略图版本
				如定制了一个a1 版本为 固定长宽为 100px X 100px 
				就会显示与设置一样的图片，如下 
				http://youle2.b0.upaiyun.com/1.png!a1
	
	*/
	
//-- 获取图片文件的信息
	/*
		进入空间服务-》防盗链-》自定义版本-》创建图片信息版本
			创建 一个aa 
			http://youle2.b0.upaiyun.com/1.png!aaa	获取
			
				返回结果为JSON数据格式的信息：{"width":590,"height":276,"frames":1,"type":"PNG","B_EXIF":""}
	
	
	*/
	

//-- 创建目录	(可直接创建多级目录)
	// echo $u->makeDir('/youle5/new/one');
	
	
	
	
//-- 删除目录 （需要一层一层的删）
	//echo $u->delete('/youle5/new/one');
	//echo $u->delete('/youle5/new');
	//echo $u->delete('/youle5');
	
	
	
	
//-- 上传文件	(可直接创建多级目录)
	//$re1 = fopen('2.png','r');
	//$s1 = $u->writeFile('/newdir/5.png',$re1);  //1，上传后的名字。2，上传的文件名	
	//$s1 = $u->writeFile('/youle2/aa.png',$re1);  //1，上传后的名字。2，上传的文件名	
	//var_dump($s1);
	
	
		//查看上传后的文件 	http://youle2.b0.upaiyun.com/1.png
		
		

//-- 读取报有文件

	print_r($upyun->readDir('/'));			//读取所有文件
	
	foreach($upyun->readDir('/') as $v){
		if($v->type=='folder')continue;
			echo $v->name;					//获取文件名
	}
	
		
		
		
		
		
//-- 下载文件
	//$str = $u->readFile('/newdir/2.png');	//服务器上文件的路径 
	//file_put_contents('2.png',$str);
	
	
	//$arr = $u->getFolderUsage('/');
	//var_dump($arr);
	
	
	//$arr = $u->getFileInfo('/youle1');
	//var_dump($arr);
	
	
//-- 删除目录 （要逐级删除，只能删空目录）
	//echo $u->rmDir('/youle4/new/one');
	//echo $u->rmDir('/youle4/new');
	//echo $u->rmDir('/youle4');
	
	
	
//-- 删除文件
	//echo $u->deleteFile('/youle3/new/one/aa.png');
	
	
	
//-- 获取空间使用情况 
	//echo $u->getBucketUsage('/');


//-- 获取文件信息
	$arr = $u->getFileInfo('/youle2/aa.png');
	var_dump($arr);
	
	
//-- 读取目录(获取文件列表)
	print_r($u->getList('/youle2'));
	//print_r($u->readDir('/'));		
		//可以看到指定目录中的目录或文件   包括文件（目录）名，类型，创建时间及大小 
	
		
	

	







