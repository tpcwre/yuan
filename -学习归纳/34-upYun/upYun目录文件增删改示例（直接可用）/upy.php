<?php
	$config = require 'config.php';			//获取用户名等配置信息
	require "upyun.class.php";
	$u = new upYun($config['database'],$config['user'],$config['pwd']);		//连接upYun
	$dname = $_GET['dname']?$_GET['dname']:'/';
	$arr = explode('/',$dname);


	if($dname != '/'){
		//echo $dname;
		for($i=1;$i<=count($arr);$i++){
			for($j=1;$j<$i;$j++){
				$str[$i] .= '/'.$arr[$j];
			}
		}
	
		echo "<a href='upy.php'>首页</a>";
		echo count($str)>0?'=>':'';
		foreach($str as $k=>$v){
			echo "<a href='upy.php?dname={$v}'>".substr($v,1)."</a>";
			if($k<=count($str)){
				echo "=>";
			}
		}
	}
	
									//遍历目录 
	$dirs = $u->readDir($dname);

	echo "<ul>";
	foreach($dirs as $k=>$v){
		echo '<li>';
		
		$ddname = $dname=='/'? $dname.$v['name']:$dname.'/'.$v['name'];
		if($v['type']=='folder'){
			echo "目录：<a style='text-decoration:none' href='{$_SERVER['PHP_SELF']}?dname={$ddname}'>".$v['name'].'</a>';
		}
		if($v['type']=='file'){
			echo "文件：<a target='_blank' href='http://{$config['database']}.b0.upaiyun.com{$dname}/{$v['name']}'>".$v['name'].'</a>';
			//echo "http://{$config['database']}.b0.upaiyun.com{$dname}/{$v['name']}";
			echo " <input size=1 value='http://{$config['database']}.b0.upaiyun.com{$dname}/{$v['name']}' id='addr{$k}'/>";

			echo "　　<a href='' onclick=fuzi('addr{$k}')>复制</a>";
		}
		//href='del.php?dname={$dname}&delname={$ddname}'
		echo "　　<a onclick=del('{$dname}','{$ddname}')>删除</a>";
		echo '</li>';
	}
	echo "</ul>";


	//print_r($u->getList('/'));
	//http://qianxing.b0.upaiyun.com/wgwz_img/2016050410555581487.jpg
	//http://qianxing.b0.upaiyun.com/vvv/vvvv/ASCLL码对照表.bmp
?>
<script>
	function del(dname,ddname){
		if(confirm('确认删除？')){
			location.href="del.php?dname="+dname+"&delname="+ddname;
		}
	}
	function fuzi(str){
		var obj = document.getElementById(str);
		obj.select();
		document.execCommand('Copy');
	}
</script>	
	
	


<form action='adddir.php' method='post'>
	<input type='hidden' name='dname' value='<?php echo $dname;?>' />
	<input name='adddir' />
	<input type='submit' value='添加目录' />
</form>
	
	
<form action='import.php' method='post' enctype="multipart/form-data" >
	<input type='hidden' name='dname' value='<?php echo $dname;?>' />
	<input type='file' name='f1' />
	<input type='submit' value='上传文件' />
</form>
	