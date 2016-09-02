<?php
	$user=$_GET['user'];
	$pass=$_GET['pass'];
/*
//=====remote远程验证user

	if($user='aaa'){
		echo 'false';
	}else{
		echo 'true';
	}
*/

//=====remote远程同时验证用记名和密码
	if($user=='aaa' && $pass==111){
		echo "true";
	}else{
		echo "false";
	}

?>