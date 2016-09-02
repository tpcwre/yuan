<?php
session_start();
//导入smarty的初始化文件
require("./init.php");

//4.向模板中放置信息
$smarty->assign("title","smarty模板实例--变量调节器");

//$str="2015-09-21";
//echo preg_replace("/(\d{4})\-(\d{2})\-(\d{2})/","\\2/\\3/\\1",$str);

//echo "asdf\\aasdf";
$smarty->registerPlugin("modifier","ttr","mysubstr"); //将下面自定义 函数mysubstr以ttr名注册到当前模板中，作为变量调节器使用。

//5.加载模板并输出
$smarty->display("2.html");


//自定义汉字截取函数
function mysubstr($str,$length=8){
	if(mb_strlen($str,"utf-8")>$length){
		return mb_substr($str,0,$length)."...";
	}
	return $str;
}