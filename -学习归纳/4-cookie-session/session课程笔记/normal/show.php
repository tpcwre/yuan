<?php
	session_start();
	$a=false;
	if(empty($_SESSION)){
		echo "购物车是空的！<br>";
		$a=true;
		
	}else{
		echo "购物车中的商品：<br>";
		foreach($_SESSION as $k=>$v){
			echo $v."---<a href='unset.php?id=".$k."'>删除此书</a><br>";
		}
	}
	if(!$a){
  		echo "<br><a href='clear.php'>清空购物车</a><br><br>";
	}
	echo "<a href='book.php'>返回继续购买</a>";

?>