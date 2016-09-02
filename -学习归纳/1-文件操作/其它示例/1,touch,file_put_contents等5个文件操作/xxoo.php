<?php
//===== touch,file,parse_ini_file,file_get_contents,file_put_contents 文件操作流



//===== touch() 创建一个文件或修改时间
	touch('./aaa.txt');		
	if(touch('./xxoo.txt',time())){
		echo '修改成功';
	}
	
	

//===== file() 将文件内容的每一行读取到数组中
	$arr=file("./xxoo.txt");
	echo "<pre>";
		var_dump($arr);
	//echo "</pre>";

	
	
//===== parse_ini_file() 读取配置文件到数组中
	//将配置文件读取到一个数组中，数组的每一个元素的下标是配置文件对应的配置的名称
	
	
	$arr2=parse_ini_file('./xxoo.ini');
	var_dump($arr2);
	

	
	
	
//===== file_get_contents() 将文件内容读到一个字串中
	
	$arr3=file_get_contents("./content.txt");
	var_dump($arr3);

	
//===== file_put_contents() 将字串写入文件（会清空以前内容）

	file_put_contents('./content.txt','天苍茫，雁何往，心中是北方家乡！');




?>