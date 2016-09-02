<?php
	sleep(1);
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	if($user=='aaa' && $pass='111'){
		echo "登陆成功";
	}else{
		echo '登陆失败';
	}

?>