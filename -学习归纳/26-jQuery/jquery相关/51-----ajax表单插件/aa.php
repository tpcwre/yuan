<?php
	if($_GET['user']){
		echo "GET传输".$_GET['user'];
	}else IF($_POST['user']){
		echo "POST传输".$_POST['user'];
	}
	echo "<br>";
	if($_GET['aaa']){
		echo "额外数据".$_GET['aaa'];
	}else if($_POST['aaa']){
		echo "额外数据".$_POST['aaa'];
	}
	
?>