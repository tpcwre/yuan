<?php
	//类型集
	$types=$_FILES['upload']['type'];

	//文件名集
	$names=$_FILES['upload']['name'];
	//大小集
	$sizes=$_FILES['upload']['size'];
	//临名集
	$tmps=$_FILES['upload']['tmp_name'];
	//错误号集
	$errors=$_FILES['upload']['error'];
	
	//设置一个存储报错信息的变量
	$message=array(); 	
	
	//设置文件类型集
	$mimeAll=array('image/jpeg','image/jpg','image/png','image/gif');
	
	//设置文件格式集
	$extAll=array('jpg','jpeg','png','gif');
	
	//所有文件的信息下标都是相同的，所以遍历一个属性时，其它属性也可以使用同一个下标来操作
	foreach($tmps as $k=>$v){
		$tmp=$v;	//每一个临时文件名
		$name=$names[$k];	//每一个文件名
		$type=$types[$k];	//每一个文件的类型
		$error=$errors[$k];	//每一个错误信息
		$size=$sizes[$k];	//每一个文件的大小 
	
		//1.判断错误
		switch($error){
			case 1:
			case 2:
				$message['error'][$k+1] ='文件过大';
				continue 2;
			break;
			case 3:
			case 6:
			case 7:
				$message['error'][$k+1] ='上传失败';
				continue 2;
			break;
			case 4:
				$message['error'][$k+1] ='是空的';
				continue 2;
			break;
		}
		
		
		//2,判断文件大小 
		
		if($size>1024*1024*3){
			$message['size'][$k+1]='文件过大';
			continue;
		}
		
		
		
		//3,判断mime类型
		if(!in_array($type,$mimeAll)){
			$message['type'][$k+1]='文件类型不正确';
			continue;
		}
		
		
		//4.判断文件格式 
		$ext=pathinfo($name,PATHINFO_EXTENSION);
		if(!in_array($ext,$extAll)){
			$message['ext'][$k+1]='文件格式不正确';
			continue;
		}
		
		
		
		
		//5.判断是否为http协议POST上传
		if(!is_uploaded_file($tmp)){
			$message['isup'][$k+1]='上传非法';
			continue;
		}
		
		//6.拷贝文件到指定目录及指定文件名
		$newName=md5(date("Y-m-d H:i:s")).rand(100,999).'.'.$ext;
		if(move_uploaded_file($tmp,'./upload/'.$newName)){		//判断文件是否上传成功
			$message['stat'][$k+1]='上传成功';
		}
		
	}
	
	foreach($message as $v){
		foreach($v as $kk=>$vv){
			echo '文件 '.$kk.' -- '.$vv."<br>";
		}
	}
?>