<?php
	$sid=$_GET['PHPSESSID'];
	if($sid){
		session_id($sid);
	}
	session_start();	
?>
<body>
<h1>��ζ����</h1>
<p><a href="control.php?id=b01&name=����־&<?php echo SID ?>">����־</a></p>
<p><a href="control.php?id=b02&name=ˮ䰴�&<?php echo SID ?>">ˮ䰴�</a></p>
<p><a href="control.php?id=b03&name=��¥��&<?php echo SID ?>">��¥��</a></p>
<p><a href="control.php?id=b04&name=���μ�&<?php echo SID ?>">���μ�</a></p>
<p><a href="show.php?<?php echo SID ?>">�ҵĹ��ﳵ</a></p>
</body>