<?php
	$sid=$_GET['PHPSESSID'];
	if($sid){
		session_id($sid);
	}
	session_start();
	$a=false;
	if(empty($_SESSION)){
		echo "购物车是空的！<br>";
		$a=true;
		
	}else{
		echo "购物车中的商品：<br>";
		foreach($_SESSION as $k=>$v){
			echo $v."---<a href='unset.php?id=".$k."&".SID."'>删除此书</a><br>";
		}
	}
	if(!$a){
  		echo "<br><a href='clear.php?".SID."'>清空购物车</a><br><br>";
	}
	echo "<a href='book.php?".SID."'>返回继续购买</a>";

?>