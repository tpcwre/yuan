<a href ='index.php'>返回</a>
<?php
	error_reporting(0);
	header('content-type:text/html;charset=utf-8');
	$kj = $_GET['kj'];
	$path = $_GET['path'];
	$file = $_POST['file'];
?>
<form action="folderc.php?path=<?php echo $path;?>&kj=<?php echo $kj;?>" method='post' enctype="multipart/form-data">
	<p>上传文件：<input type='file' name='mfile' /></p>
	<p><input type='submit' value='上传' /></p>
</form>


	
<?php

	echo "当前空间：{$kj}<br>当前目录：/{$path}<br>";
	if(!$_GET['kj']){
		header('location:index.php');
	}
	header('content-type:text/html;charset=utf-8');
	require "upyun.class.php";

	$u = new UpYun($kj,'youle1','youle123');
	//$u = new UpYun('homes','youle1','youle123');
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
	// echo $u->makeDir('/audio');
	
	
	
	
//-- 删除目录 （需要一层一层的删）
	//echo $u->delete("/{$kj}/new/one");
	//echo $u->delete("/{$kj}/new");
	//echo $u->delete("/{$kj}");
	
	
	
	
//-- 上传文件	(可直接创建多级目录)
	//$re1 = fopen('2.png','r');
	//$s1 = $u->writeFile('/newdir/5.png',$re1);  //1，上传后的名字。2，上传的文件名	
	//$s1 = $u->writeFile('/youle2/aa.png',$re1);  //1，上传后的名字。2，上传的文件名	
	//var_dump($s1);
	
	//$re1 = fopen('xuni2.html','r');
	//$s1 = $u->writeFile('/xuni/xuni2.html',$re1);  //1，上传后的名字。2，上传的文件名
	
		//查看上传后的文件 	http://youle2.b0.upaiyun.com/1.png
		

	if($path && $file){
		echo $file;exit;
		$re1 = fopen($file,'r');
		$paths = "/{$path}/{$file}";

		$s1 = $u->writeFile($paths,$re1);  //1，上传后的名字。2，上传的文件名
		if($s1){
			echo "<script>document.getEleemntById('f1').reset();</script>";
		}
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
	//echo $u->rmDir('/new');
	
	
	
//-- 删除文件
	//echo $u->deleteFile('index.hmtl');
	//echo $u->deleteFile('/zhan2.png');
	if($_GET['del']){
		echo $dels  = '/'.$path.'/'.$_GET['del'];
		$u->deleteFile($dels);
	}
	
	
//-- 获取空间使用情况 
	//echo $u->getBucketUsage('/');


//-- 获取文件信息
	//$arr = $u->getFileInfo('/youle1/aaa');
	//var_dump($arr);
	

//-- 读取目录(获取文件列表)
	//print_r($u->getList('/youle1'));
	$all = $u->readDir('/'.$path);			//这个获取的全部内容	
	//print_r($all);
	
	
	getinfo($all,$kj,$path);
	

function getinfo($all,$kj,$path){
	foreach($all as $k=>$v){
		if($v['type']=='folder'){
			$folder = "http://{$kj}.b0.upaiyun.com/{$v['name']}";
			$folders = pathinfo($folder,PATHINFO_BASENAME);
			$url = $_SERVER['PHP_SELF'];
			$path2 = $path.'/'.$v['name'];
			echo "<a href='folder.php?kj={$kj}&path={$path2}'>目录{$folders}</a><br>";
		}else{
		
			$resname = "http://{$kj}.b0.upaiyun.com/{$path}/{$v['name']}";
			$filename=pathinfo($resname,PATHINFO_BASENAME);
			$ext = pathinfo($resname,PATHINFO_EXTENSION);
			$exts = array('jpg','JPG','png','PNG','gif','GIF','jpeg','JPEG');
			if(in_array($ext,$exts)){
				echo $resname."	<img src='{$resname}' width=50px />";
			}else{
				echo $resname.'	文件';
			}
			echo "　　<a href ='{$_SERVER['PHP_SELF']}?kj={$kj}&path={$path}&del={$filename}'>删除</a><br><br>";

		}
	}
}
		//可以看到指定目录中的目录或文件   包括文件（目录）名，类型，创建时间及大小 
	

		
/*
		访问地址为：	http://youle1.b0.upaiyun.com/111.png
						http://homes.b0.upaiyun.com/zhan.png
						http://xiangshui.b0.upaiyun.com/111.png
						
						
http://youle1.b0.upaiyun.com/img/xun/x3.jpg			寻人女孩
http://youle1.b0.upaiyun.com/audio/1.m4a			背景音乐-我的快乐就是想你


	
header('location:http://www.wmwzx.com/content/xrqs/index2.php');exit;		寻人主页跳转


*/

	








	
	
	
	
	
	
	
	
	
	
	
	
	


