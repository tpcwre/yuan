<?php
	$sid=$_GET['sid'];
	if($sid){
		session_id($sid);
	}
	session_start();
	$sid=session_id();

	$ver=b;
	$ver=$_GET['ver'];
	echo $ver;
	if($ver=='a'){
		$aa="�û������������!!!";
	}else{

	}
	
function checked(){
	if(!empty($_COOKIE['save'])){
		echo "checked=save";
	}
}
function user(){
	if(!empty($_COOKIE['user'])){
		echo $_COOKIE['user'];
	}
}

?>
<head>
<title>�����û���½</title>
<style>
	body{
		background:#eee;
	}
	.all{
		width:265px;
		height:300px;
		margin:170 auto;
	}
	.not{
		color:red;
		font:italic bold 25px normal;
	}
</style>
</head>
<body>
<div class="all">
<h1>�����û���½ϵͳ</h1>
<hr>
<form action='control.php?sid=<?php echo $sid ?>' method='post'>
<table>
<tr>
<td>�û�����</td>
<td><input type='text' name='user' value=<?php user() ?> ></td>
</tr>
<tr>
<td>�ܡ��룺</td>
<td><input type='password' name='pass' /></td>
</tr>
<tr>
<td colspan=2>��ס�û�����<input type="checkbox" name='save' value='save' 
<?php checked() ?>/></td>
</tr>
<tr>
<td>
<input type="submit" value="��½"/>
</td>
<td>
<input type="reset" value="����"/>
</td>
</tr>
</table>
</form>
<hr>
<div class='not'>
<?php echo $aa ?>
</div>
</div>

</body>