<?php
	if(empty(trim($_POST['adddir']))){
		echo "<script>alert('目录名不得为空！'); location.href='upy.php?dname={$_POST['dname']}';</script>";
		exit;
	}
	//var_dump($_POST);
	$config = require 'config.php';
	require "upyun.class.php";
	$u = new upYun($config['database'],$config['user'],$config['pwd']);	


	$ddname = $_POST['dname'] == '/' ?'/'.$_POST['adddir']:$_POST['dname'].'/'.$_POST['adddir'];


	$st = $u->makeDir($ddname);
	if($st){
		echo "<script>alert('目录创建成功！'); location.href='upy.php?dname={$_POST['dname']}';</script>";

	}



