<?php
session_start();
//导入smarty的初始化文件
require("./init.php");

//4.向模板中放置信息
$smarty->assign("title","smarty模板实例--Smarty的保留变量");
$_GET['id']=100;
$_POST['name']="zhangsan";
$_SESSION['username']="zhangsanfeng";
setCookie("loginname","mayao",time()+3600,"/");
define("PI",3.14);
//5.加载模板并输出
$smarty->display("1.html");