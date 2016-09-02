<?php
//===== 用json将数组转换成对象
	
	//关联数组
	
	$stu = array('name'=>'aaa','age'=>22,'sex'=>'nan');
	echo (json_encode($stu));
		//结果：{"name":"aaa","age":22,"sex":"nan"}		

	echo "<hr>";
	
	//索引数组 
	
	$arr= [9=>10,20,30,40,50];
	echo json_encode($arr);
		//结果：{"9":10,"10":20,"11":30,"12":40,"13":50}
	
	echo '<hr>';
	
	$arr= [10,20,30,40,50];		//这种纯数组不会转成对象
	echo json_encode($arr);
		//结果：[10,20,30,40,50]	
	
	echo "<hr>";

	
	//多维数组关联
	$list =array(
		array("name"=>"lisi","age"=>20,"sex"=>"man"),
		array("name"=>"qqq","age"=>22,"sex"=>"man"),
		array("name"=>"liaa","age"=>21,"sex"=>"man"),
		array("name"=>"ddd","age"=>25,"sex"=>"man"),
		array(10,20,30),
	);

	echo json_encode($list);	//将多维关联数组以json格式显示
	 	//结果：[{"name":"lisi","age":20,"sex":"man"},{"name":"qqq","age":22,"sex":"man"},{"name":"liaa","age":21,"sex":"man"},{"name":"ddd","age":25,"sex":"man"},[10,20,30]]







