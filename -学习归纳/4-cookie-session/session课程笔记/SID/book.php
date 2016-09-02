<?php
	$sid=$_GET['PHPSESSID'];
	if($sid){
		session_id($sid);
	}
	session_start();	
?>
<body>
<h1>三味书屋</h1>
<p><a href="control.php?id=b01&name=三国志&<?php echo SID ?>">三国志</a></p>
<p><a href="control.php?id=b02&name=水浒传&<?php echo SID ?>">水浒传</a></p>
<p><a href="control.php?id=b03&name=红楼梦&<?php echo SID ?>">红楼梦</a></p>
<p><a href="control.php?id=b04&name=西游记&<?php echo SID ?>">西游记</a></p>
<p><a href="show.php?<?php echo SID ?>">我的购物车</a></p>
</body>