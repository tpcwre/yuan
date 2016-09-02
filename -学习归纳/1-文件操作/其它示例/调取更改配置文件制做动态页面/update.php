<!DOCTYPE html>
<html>
<head>
	<title>修改的界面</title>
	<meta charset='utf-8'/>
</head>
<body>
	<?php
		$arr=parse_ini_file('./config.ini');
	?>
	<form action='doupdate.php' method='post'>
		网站的名字：
		<input type='text' name='title' value='<?php echo $arr['title'] ?>'/><br>
		网站关键字：
		<input type='text' name='keywords' value='<?php echo $arr['keywords'] ?>'/><br>
		网站的描述：
		<input type='text' name='description' value='<?php echo $arr['description']; ?>'/><br>
		<input type="submit" value='确认修改'/>
	</form>
</body>

</html>










