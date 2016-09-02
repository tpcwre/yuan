<?php
//模拟注册账号是否存在Ajax验证
//定义已经存在的账号
$data = array("zhangsan","lisi",'wangwu','qq','mayao');

//获取要验证的账号信息
$name = $_GET['name'];
if(in_array($name,$data)){
	echo "y";
}else{
	echo "n";
}