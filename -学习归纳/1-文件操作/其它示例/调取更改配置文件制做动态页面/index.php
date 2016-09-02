<!DOCTYPE html>
<html>
<head>
	<?php
		//将配置文件每行内容读取到数组每个元素中
		$head=parse_ini_file('./config.ini');
		
	?>
		<!--调用数组中的元素-->
	<title><?php echo $head['title']; ?></title>
		
	<meta charset='utf-8'/>	
	<meta name='keywords' content='<?php echo $head['keywords']; ?>'/>
	<meta name='description' content='<?php echo $head['description']; ?>' />
</head>
<body>
	<h1><?php echo $head['title']; ?></h1>
	<p>这是网站的首页</p>
	
	<a href='update.php'>修改页面</a>
</body>
</html>





