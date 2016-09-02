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
<div class='exit'><a href='exit.php?sid=<?php echo $sid ?>'>退出管理</a></div>
<div class='til'>用户管理系统</div>
<div class='addUser'><a href=''>添加用户</a></div>
<hr>
<div class='caption'>
<table border=1>
<tr>
<th width=110>用户名</th><th width=180>邮箱</th><th width=180>电话</th><th width=180>省份</th><th width=110>修改信息</th><th width=110>删除信息</th>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>修改</a></td><td><a href=''>删除</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>修改</a></td><td><a href=''>删除</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>修改</a></td><td><a href=''>删除</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>修改</a></td><td><a href=''>删除</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>修改</a></td><td><a href=''>删除</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>修改</a></td><td><a href=''>删除</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>修改</a></td><td><a href=''>删除</a></td>
</tr>
<tr>
<td>user01</td><td>user01@163.com</td><td>13844552277</td><td></td><td><a href=''>修改</a></td><td><a href=''>删除</a></td>
</tr>
</table>
</div>

<hr>
<div>
	<?php echo $time ?>
</div>
</div>
</body>