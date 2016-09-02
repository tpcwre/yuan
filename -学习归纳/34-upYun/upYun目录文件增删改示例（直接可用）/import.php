<?php	
	error_reporting(1);
	$res = file_get_contents($_FILES['f1']['tmp_name']);
	$dname = $_POST['dname'];
	if($dname == '/'){
		$ddname = '/'.$_FILES['f1']['name'];
	}else{
		$ddname = $dname.'/'.$_FILES['f1']['name'];
	}
	$config = require 'config.php';
	require "upyun.class.php";
	$u = new upYun($config['database'],$config['user'],$config['pwd']);	
	$st = $u->writeFile($ddname,$res);
	echo "<script>location.href='upy.php?dname={$dname}';</script>";

	



