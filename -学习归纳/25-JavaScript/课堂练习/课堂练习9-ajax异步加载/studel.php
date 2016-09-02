<?php
//执行删除
 //2. 连接MySQL，并判断
$link = @mysql_connect("localhost","root","1234567")or die("数据库连接失败！");
//3. 选择数据库，设置字符编码
mysql_select_db("lamp113",$link);
mysql_set_charset("utf8");

//4. 定义sql语句，并发送执行
$sql = "delete from stu where id=".($_GET['id']+0);
//执行
mysql_query($sql,$link);

//输出影响行数
echo mysql_affected_rows($link);