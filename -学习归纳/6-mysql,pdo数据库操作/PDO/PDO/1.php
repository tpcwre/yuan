<?php
//PDO类的使用

//实例化PDO对象，实现数据库链接
try{
	//$option = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	//$pdo = new PDO("mysql:host=localhost;dbname=lamp113","root","",$option);
	
	$pdo = new PDO("mysql:host=localhost;dbname=lamp113","root","");
	//改为错误处理为异常模式。
	//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $pe){
	die('数据库链接失败！');
}

//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$pdo->setAttribute(3,2); 
$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);//$pdo->setAttribute(0,0); 
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//$pdo->setAttribute(19,2); 

echo "\nPDO是否关闭自动提交功能：". $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT)."<br/>";
echo "\n当前PDO的错误处理的模式：". $pdo->getAttribute(PDO::ATTR_ERRMODE)."<br/>"; 
echo "\n表字段字符的大小写转换： ". $pdo->getAttribute(PDO::ATTR_CASE)."<br/>"; 
echo "\n与连接状态相关特有信息： ". $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS)."<br/>"; 
echo "\n空字符串转换为SQL的null：". $pdo->getAttribute(PDO::ATTR_ORACLE_NULLS)."<br/>"; 
echo "\n应用程序提前获取数据大小：".$pdo->getAttribute(PDO::ATTR_PERSISTENT)."<br/>"; 
echo "\n与数据库特有的服务器信息：".$pdo->getAttribute(PDO::ATTR_SERVER_INFO)."<br/>"; 
echo "\n数据库服务器版本号信息：". $pdo->getAttribute(PDO::ATTR_SERVER_VERSION)."<br/>";
echo "\n数据库客户端版本号信息：". $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION)."<br/>"; 



//echo PDO::ERRMODE_EXCEPTION;
//执行数据查询
$sql = "select * from stu2";
$stmt = $pdo->query($sql);
//var_dump($pdo);
//判断刚刚执行的sql是否有错误
if($pdo->errorCode()>0){
	echo ("sql出现错误！原因：");
	var_dump($pdo->errorInfo());
	die();
}

$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($list as $v){
	print_r($v);
	echo "<br/>";
}
