<?php
//导入smarty的初始化文件
require("./init.php");

//4.向模板中放置信息
$smarty->assign("title","smarty模板实例--内置函数");

$smarty->assign("a",array(10,20,30,40));

//5.加载模板并输出
$smarty->display("3.html");
