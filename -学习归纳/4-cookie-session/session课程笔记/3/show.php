<?php
	$time=$_GET['time'];
	$sid=$_GET['sid'];

	session_id($sid);
	session_start();
	if(empty($_SESSION['user'])){
		header("Location:login.php");
	}



?>
<head>
<style>
	.all{
		width:900px;
		margin:0 auto;
	}
	.til{
		font:normal bold 50px/80px normal;
		color:red;
		text-align:center;
	}
	.exit{
		text-align:right;
	}
	.addUser{
		text-align:right;
	}
</style>
</head>
<body>
<div class="all">
<div class='exit'><a href='exit.php?sid=<?php echo $sid ?>'>�˳�����</a></div>
<div class='til'>�û�����ϵͳ</div>
<div class='addUser'><a href=''>����û�</a></div>
<hr>
<div class='caption'>
<table border=1>
<tr>
<th width=110>�û���</th><th width=180>����</th><th width=180>�绰</th><th width=180>ʡ��</th><th width=110>�޸���Ϣ</th><th width=110>ɾ����Ϣ</th>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>�޸�</a></td><td><a href=''>ɾ��</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>�޸�</a></td><td><a href=''>ɾ��</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>�޸�</a></td><td><a href=''>ɾ��</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>�޸�</a></td><td><a href=''>ɾ��</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>�޸�</a></td><td><a href=''>ɾ��</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>�޸�</a></td><td><a href=''>ɾ��</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>�޸�</a></td><td><a href=''>ɾ��</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>�޸�</a></td><td><a href=''>ɾ��</a></td>
</tr>
</table>
</div>

<hr>
<div>
	<?php echo $time ?>
</div>
</div>
</body>