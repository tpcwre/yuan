<?php
	date_default_timezone_set("Asia/Chongqing");
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$save=$_POST['save'];
	if(isset($save)){
		setCookie('save','save',time()+17200);
		setCookie('user',$user,time()+17200);
	}else{
		setCookie('save','',time()-10);
		setCookie('user','',time()-10);
	}	


//=====XML数据库
	$xmldom=new DOMDocument();
	$xmldom->load("xml.xml");
	$users=$xmldom->getElementsByTagName("user");
	$names="";
	$emails="";
	$phones="";
	$vince="";
	for($i=0;$i<$users->length;$i++){
		$name=$users->item($i)->getElementsByTagName("name")->item(0)->nodeValue;
		$email=$users->item($i)->getElementsByTagName("email")->item(0)->nodeValue;
		$phone=$users->item($i)->getElementsByTagName('phone')->item(0)->nodeValue;
		$vince=$users->item($i)->getElementsByTagName("province")->item(0)->nodeValue;
		$names[].=$name;
		
	}

	echo "--".$names;
	print_r($names);

	if($user=='aaa' && $pass=='123'){
		session_start();
		$sid=session_id();
		$_SESSION['user']=$user;
		

		if(empty($_COOKIE['time'])){
			$time="欢迎您首次登陆！";
			setCookie("time",date("Y-m-d H:i:s"),time()+7200);
		}else{
			$time="您上次登陆时间是：".$_COOKIE['time'];
			setCookie("time",date("Y-m-d H:i:s"),time()+7200);
		}

		//header("Location:show.php?time=$time&sid=".$sid);
	}else{
		header("Location:login.php?ver=a");
	}
?>