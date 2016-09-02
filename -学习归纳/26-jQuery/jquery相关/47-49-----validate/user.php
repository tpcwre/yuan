<?php

//=====远程验证用户名
/*
	if($_GET['user']=='aaa'){
		echo 'false';
	}else{
		echo 'true';
	}
*/




//=====远程同时验证用户名和密码
	if($_POST['user']=='aaa' && $_POST['pass']==111){
		echo 'true';
	}else{
		echo 'false';
	}




?>