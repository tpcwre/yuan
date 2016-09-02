<?php
//call_user_func_array-- 用于执行函数的函数

//可变参数的求和函数
function add(){
	$res=0;
	$data = func_get_args(); //获取所有参数
	//遍历参数，并求累加值
	foreach($data as $v){
		$res += $v;
	}
	return $res;
}

$list =array(10,20,40,50,60);

//echo add($list[0],$list[1],$list[2]);

//执行add函数
echo call_user_func_array("add",$list);