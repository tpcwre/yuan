
<?php
	$path = $_GET['path'];
	$kj = $_GET['kj'];
	$stat = false;
	
	if($_FILES['mfile']['size'] < 1 ){
		exit;
	}
	$name = $_FILES['mfile']['name'];
	echo $name; 
	
	
	if(!is_uploaded_file($_FILES['mfile']['tmp_name'])){
		echo "文件上传非法<br>";
	}
	if(move_uploaded_file($_FILES['mfile']['tmp_name'],$_FILES['mfile']['name'])){
				require "upyun.class.php";
				$u = new UpYun($kj,'youle1','youle123');
				$re1 = fopen($_FILES['mfile']['name'],'r');
				$paths = "/{$path}/{$_FILES['mfile']['name']}";

				$s1 = $u->writeFile($paths,$re1);  //1，上传后的名字。2，上传的文件名
				if($s1){
					header("location:after_del.php?file={$name}&kj={$kj}&path={$path}");
				}
					
		}else{
			echo "文件上传失败";
	}



