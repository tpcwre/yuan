<?php
	$xmldom=new DOMDocument();
	$xmldom->load("xml.xml");
	$user=$xmldom->getElementsByTagName("user");
	for($i=0;$i<$user->length;$i++){
		$name=$user->item($i)->getElementsByTagName("name")->item(0)->nodeValue;
		$email=$user->item($i)->getElementsByTagName("email")->item(0)->nodeValue;
		$phone=$user->item($i)->getElementsByTagName('phone')->item(0)->nodeValue;
		$vince=$user->item($i)->getElementsByTagName("province")->item(0)->nodeValue;
		echo $name."--".$email."--".$phone."--".$vince."<br>";
	}

?>