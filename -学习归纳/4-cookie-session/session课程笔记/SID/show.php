<?php
	$sid=$_GET['PHPSESSID'];
	if($sid){
		session_id($sid);
	}
	session_start();
	$a=false;
	if(empty($_SESSION)){
		echo "���ﳵ�ǿյģ�<br>";
		$a=true;
		
	}else{
		echo "���ﳵ�е���Ʒ��<br>";
		foreach($_SESSION as $k=>$v){
			echo $v."---<a href='unset.php?id=".$k."&".SID."'>ɾ������</a><br>";
		}
	}
	if(!$a){
  		echo "<br><a href='clear.php?".SID."'>��չ��ﳵ</a><br><br>";
	}
	echo "<a href='book.php?".SID."'>���ؼ�������</a>";

?>