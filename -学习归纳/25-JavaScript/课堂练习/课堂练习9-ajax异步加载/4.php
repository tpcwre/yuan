<?php
//Ajax响应实例

$list = array(
			array("name"=>"张三","age"=>18,"sex"=>"男"),
			array("name"=>"李四","age"=>22,"sex"=>"男"),
			array("name"=>"马瑶","age"=>20,"sex"=>"女"),
			array("name"=>"张三","age"=>18,"sex"=>"男"),
			array("name"=>"李四","age"=>22,"sex"=>"男"),
			array("name"=>"马瑶","age"=>20,"sex"=>"女"),
		);
echo json_encode($list); //输出json格式的