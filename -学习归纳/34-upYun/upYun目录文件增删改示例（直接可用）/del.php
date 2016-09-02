<?php
	$config = require 'config.php';
	require "upyun.class.php";
	$u = new upYun($config['database'],$config['user'],$config['pwd']);	
	$dname = $_GET['dname'];
	$delname = $_GET['delname'];
	//echo $delname;exit;
	$res = $u->getList($delname);
	$res2 = $u->getFileInfo($delname);
	$ftype = $res2["x-upyun-file-type"];
	if($ftype == 'folder'){
		if($res){
			echo "<script>alert('只能删除空目录');location.href='upy.php?dname={$dname}';</script>";
			exit;
		}
	}
	
	$st = $u->delete($delname);
	
	if($st){
		echo "<script>alert('删除成功');location.href='upy.php?dname={$dname}';</script>";
	}else{
		echo "<script>alert('删除失败');location.href='upy.php?dname={$dname}';</script>";
	}