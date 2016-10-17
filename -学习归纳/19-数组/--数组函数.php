﻿<?php

/*	

//== 创建数组
	array_combine($arr1,$arr2) 生成一个数组，用一个数组当键，另一个数组当值-
	compact(variable1,variable2,,,) 	将变量转换成数组-
	array_fill(index,count,val)  创建数组，并指定起始下标，指定值，指定长度-
	array_fill_keys($arr,val) 用指定的健名和值，生成一个数组-
	range(start,end) 创建包含指定范围单元的数组-

	
//== 合并拆分
	array_chunk($arr,len) 	以指定长度，把一维数组分割为二维数组-
	array_merge($arr1,$arr2) 	合并多个数组-
	array_slice($arr,start|start,end) 截取数组中部分元素-
	array_merge_recursive() 递归地合并一个或多个数组-
	explode('keyword',$str) 将字串分割成数组-
	implode($arr) 将一个一维数组的值转化为字符串-
	http_build_query($arr,[keywords]) 将数组转换成GET键值的URL字串-

	
//== 比较,过滤
	array_diff($arr1,$arr2) 比较数组的值，返回数组1中有，2中没有的元素-
	array_intersect($arr1,$arr2)   返回两个数组中相同的元素-
	array_diff_assoc($arr1,$arr2) 比较数组的键和值，返回数组1中有，2中没有的元素-
	filter_has_var(type,variable) 过滤传值的类型，如get,post,cookie-
	filter(val,type) 过滤一个值是否匹配某格式，如邮箱，url,int,float-
	
	
//== 查找,替换,统计
	array_search(val,$arr) 按值查找元素，并返回其下标或false-
	array_splice($arr1,start,count,$arr2) 将数组中指定元素用另一数组元素替换-
	array_sum($arr) 获取数组中所有值的总和-
	array_product($arr) 计算数组中所有值的乘积-
	in_array(val,$arr) 判断数组中是否存在指定的值，返回 true或false-
	array_key_exists(index,$arr) 数组中是否存在指定下标-
	count($arr) 计算数组元素的个数-
	array_count_values($arr) 统计数组中所有值出现的次数-
	array_keys($arr) 	获取数组中的所有的键-
	array_values($arr) 获取数组中的所有的值-
	array_replace($arr1,$arr2) 使用后面数组的值替换第一个数组的值-
	array_replace_recursive($arr1,$arr2) 	递归地使用后面数组的值替换第一个数组的值-

	
//== 指针类
	key($arr) 从数组中取得当前指针元素的键-
	current($arr) 从数组中取得当前指针元素的值-
	next($arr) 将指针下移并返回该值，末尾返回false-
	prev($arr) 	指针上移返回该值，到头返回false-
	reset($arr)	指针移动到最前面-
	end($arr)		指针移动到最后面-
	list($k,$v) 获取数组中的元素列表，并把每个元素赋值给指定的变量-
	each($arr) 返回数组中当前指针的键值对。并将指针向下移动-
	for,foreach($arr) 数组的遍历-
	

//== 删除添加
	unset($arr[n]) 删除数组或删除数组中指定元素-
	array_shift($arr) 从数组头部移除一个元素-
	array_unshift($arr) 向数组开头插入一个或多个元素-
	array_push($arr) 在数组最后插入一个或多个元素（入栈）-
	array_pop($arr) 弹出数组最后一个元素(出栈)-
	array_unique($arr) 删除数组中的重复值-	
	

//== 键值操作
	shuffle($arr) 将数组打乱-
	array_flip($arr) 调换数组中的键和值-
	array_change_key_case($arr,0|1) 	把数组中所有键更改为小写或大写-
	array_pad($arr,count,val) 用指定值将数组填充到指定长度-
	array_reverse($arr) 将数组元素顺序反置-
	array_rand($arr,[n]) 返回数组中一个或多个随机的键-
	array_map(fun,arr) 将回调函数作用到给定数组的单元上-
	extract($arr) 	把数组key转换成变量名，value转换成变量值-

	
//== 排序
	sort($arr) 按值排序，不保留原下标-
	rsort($arr) 按值反向排序，不保留原下标-
	asort($arr) 按值排序，保留原下标-
	arsort($arr) 按值反向排序，保留原下标-
	ksort($arr);	按键排序-
	krsort($arr)	按键反向排序-
	natsort($arr) 	按自然顺序排序，区分大小写-
	natcasesort($arr) 按自然顺序排序，不区分大小写-
	array_multisort($arr,type,$arr) 多维数组按值排序-
		
	
	
	
	
	
	
//-- sort($arr) 按值排序，不保留原下标-
//-- rsort($arr) 按值反向排序，不保留原下标-
//-- asort($arr) 按值排序，保留原下标-
//-- arsort($arr) 按值反向排序，保留原下标-
//-- ksort($arr);	按键排序-
//-- krsort($arr)	按键反向排序-
//-- natsort($arr) 	按自然顺序排序，区分大小写-
//-- natcasesort($arr) 按自然顺序排序，不区分大小写-
	$arr = array("a" => "Dog", "c" => "Cat", "b" => "Horse");
//	sort($arr);
//	rsort($arr);
//	asort($arr);
//	arsort($arr);
//	ksort($arr);
//	krsort($arr);
	natsort($arr);
	natcasesort($arr);
	print_r($arr);
	
	
	
	
	
	
	


//-- array_sum($arr) 获取数组中所有值的总和-

	var_dump(array_sum(array('a'=>1,'b'=>2,'c'=>3,'d'=>d)));

	
	

//-- array_change_key_case($arr,0|1) 	把数组中所有键更改为小写或大写-

	$a= array('a'=>'aa','b'=>'bb');
	$b = array_change_key_case($a,0);		//0 设置所有key为小写
	print_r($b);		//Array ( [a] => aa [b] => bb ) 
	
	$b = array_change_key_case($a,1);		//0 设置所有key为大写
	print_r($b);		// Array ( [A] => aa [B] => bb ) 





//-- array_pad($arr,count,val) 用指定值将数组填充到指定长度
	$a = array(1);
	$b = array_pad($a,3,'b');
	print_r($b);		//Array ( [0] => 1 [1] => b [2] => b ) 


	
	

//-- array_merge_recursive() 递归地合并一个或多个数组-
	$a=array(1,'a'=>'red');
	$b=array(2,'a'=>'yellow');
	$c=array(3,'b'=>'blue');
	$c = array_merge_recursive($a,$b,$c);
	print_r($c);
	//Array ( [0] => 1 [1] => 2 [2] => 3 [a] => Array ( [0] => red [1] => yellow ) [3] => 2 [4] => 3 [5] => 4 ) 

	
	
	
	
	
	
	
//-- array_product($arr) 计算数组中所有值的乘积-
	$a = array(1,2,3);				//6
	$a = array(1,3,'a'=>5);			//15
	$b = array_product($a);
	echo $b;

	
	
	


//-- array_replace($arr1,$arr2) 使用后面数组的值替换第一个数组的值-

	$a = array('a'=>'aa','c','e'=>'ee');
	$b = array('a'=>'bb','d','f'=>'ff');
	$c = array_replace($a,$b);
	print_r($c);	//Array ( [a] => bb [0] => d [e] => ee [f] => ff ) 

	
	

	
//-- array_replace_recursive($arr1,$arr2) 	递归地使用后面数组的值替换第一个数组的值-

	$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
	$a2=array("a"=>array("yellow"),"b"=>array("black"));
	print_r(array_replace_recursive($a1,$a2));
		//Array ( [a] => Array ( [0] => yellow ) [b] => Array ( [0] => black [1] => blue ) ) 



		
		

//-- array_unique($arr) 删除数组中的重复值-
	//值不区分索引或关联数组
	$a=array('a','b','a'=>'a');
	$b = array_unique($a);
	print_r($b);






//-- each($arr) 返回数组中当前指针的键值对。并将指针向下移动-

	$people = array("Bill", "Steve", "Mark", "David");
	print_r (each($people));	//Array ( [1] => Bill [value] => Bill [0] => 0 [key] => 0 ) 
	echo '<br>';
	print_r (each($people));	//Array ( [1] => Steve [value] => Steve [0] => 1 [key] => 1 ) 
	
	//list 结合 each遍历二维数组
	$arr = array(
		array('a','b','c'),
		array('d','e','f'),
	);
	for($i=0;$i<count($arr);$i++){
		while(list($k,$v)=each($arr[$i])){
			echo $k.'--'.$v.'<br>';
		}
	}
		0--a
		1--b
		2--c
		0--d
		1--e
		2--f
	

	
	
	
//-- array_rand($arr,[n]) 返回数组中一个或多个随机的键-
	$a = array('a','b','c','d'=>'dd');
	echo $r = array_rand($a);		//随机取一个键		0或1或2或d 	
	$r = array_rand($a,2);			//随机取多个键
	var_dump($r);				//array(2) { [0]=> int(2) [1]=> string(1) "d" } 
	





//-- array_count_values($arr) 统计数组中所有值出现的次数-
	$a = array('a','v','c','a','v','a'=>'a');
	$c = array_count_values($a);
	print_r($c);		//Array ( [a] => 3 [v] => 2 [c] => 1 ) 







//-- array_reverse($arr) 将数组元素顺序反置-
	$a = array('a','b','c'=>'cc');
	$b = array_reverse($a);
	print_r($b);		//Array ( [c] => cc [0] => b [1] => a ) 







//-- array_flip($arr) 调换数组中的键和值-
	$arr = array('a'=>'aa');
	$b = array_flip($arr);
	print_r($b);		//Array ( [aa] => a ) 





//-- shuffle($arr) 将数组打乱-
	$arr=array('a','aa','b','bb','c','cc');
	shuffle($arr);
	print_r($arr);




	
	 
	
//-- array_splice($arr1,start,count,$arr2) 将数组中指定元素用另一数组元素替换-

	//例一
	$arr = array('a','b','c','d','e');
	$brr = array('x','y','z');
	$crr = array_splice($arr,2,2,$brr);	//将arr从下标2开始的2个元素替换成 数组brr中的元素
	print_r($arr);     // $arr被替换
	echo '<br/>';
	print_r($crr);     //  返回的是被替换掉的数组元素
	echo '<hr/>'; 
	//思考   往数组插入元素 、 删除一部分元素
	
	//例二
	$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	$a2=array("a"=>"purple");
	//array_splice($a1,0,2,$a2);		//Array ( [0] => purple [c] => blue [d] => yellow ) 
	//array_splice($a1,-2,1,$a2);	//Array ( [a] => red [b] => green [0] => purple [d] => yellow ) 
	array_splice($a1,1,0,$a2);		//Array ( [a] => red [0] => purple [b] => green [c] => blue [d] => yellow ) 
	print_r($a1);

	


	
	
	
	
	
//-- array_intersect($arr1,$arr2)   返回两个数组中相同的元素-

	$a=[1,2,3,4];
	$b=[1,2,3,4,5];
	var_dump(array_intersect($a,$b));	 //求出相同的元素
		//结果： array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) } 
		

	


//-- array_diff_assoc($arr1,$arr2) 比较数组的键和值，返回数组1中有，2中没有的元素-
	$a = array('a'=>'aa','b'=>'bb','c'=>'cc');
	$b = array('a'=>'aaa','b'=>'bb','cc'=>'cc');
	$c = array_diff_assoc($a,$b);
	print_r($c);			//Array ( [a] => aa [c] => cc ) 

	
	
	
	
	
//-- array_diff($arr1,$arr2) 比较数组的值，返回数组1中有，2中没有的元素-
	$a = array('aaa'=>'aaa','b'=>'bb','c'=>'cc');
	$b = array('a'=>'aaa','b'=>'bb','cc'=>'cc');
	print_r(array_diff($a,$b));		//Array ( [0] => 1 ) 


	
	
	
	
	
	
//-- array_slice($arr,start|start,end) 截取数组中部分元素-

	$a = array(1,2,3,4,5);
	$b = array_slice($a,3);		//截取下标3至以后的所有元素
	//print_r($b);

	$b = array_slice($a,0,3);	//截取下标0-3的元素
	//print_r($b);

	$b= array_slice($a,-4,2);	//从倒数第四个元素开始，截取2个元素
	print_r($b);
		





//-- array_merge($arr1,$arr2) 	合并多个数组-
	$a=array(1,2,3);
	$b= array('a'=>'aa','b'=>'bb');
	$c = array_merge($a,$b);
	print_r($c);
		Array
		(
			[0] => 1
			[1] => 2
			[2] => 3
			[a] => aa
			[b] => bb
		)


//-- array_chunk($arr,len) 	以指定长度，把一维数组分割为二维数组-
	$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
	print_r(array_chunk($cars,4));
			Array
			(
				[0] => Array
					(
						[0] => Volvo
						[1] => BMW
						[2] => Toyota
						[3] => Honda
					)
				[1] => Array
					(
						[0] => Mercedes
						[1] => Opel
					)
			)





//-- array_fill_keys($arr,val) 用指定的健名和值，生成一个数组-
	$a1=array_fill_keys(array('k','f'),"blue");	//
	print_r($a1);		//Array ( [k] => blue [f] => blue ) 

	
	
	
	
	
	
	
	
//-- array_fill(index,count,val)  创建数组，并指定起始下标，指定值，指定长度-
	$b = array_fill(5,2,'blue');	// 起始下标为1，长度为2，使用值为blue 生成一个数组
	print_r($b);		//Array ( [5] => blue [6] => blue ) 		







//-- compact(variable1,variable2,,,) 	将变量转换成数组-
	$name = 'aa';
	$age = 18;
	$sex = 'nan';
	$arr = compact('name','sex','age');
	print_r($arr);		//Array ( [name] => aa [sex] => nan [age] => 18 ) 



*/
//-- range(start,end) 创建包含指定范围单元的数组-
	$a = range(5,8);
	print_r($a);		//Array ( [0] => 1 [1] => 2 [2] => 3 ) 
	
	/*
	
//-- array_combine($arr1,$arr2) 生成一个数组，用一个数组当键，另一个数组当值-
	
	$a = array('a','b','c');
	$b = array('aaa','bbb','ccc');
	$c = array_combine($a,$b);
	print_r($c);		//Array ( [a] => aaa [b] => bbb [c] => ccc ) 


	
//-- list($k,$v) 获取数组中的元素列表，并把每个元素赋值给指定的变量-

	$arr=array('aa','bb','cc');
	list($a,$b,$c,$d)=$arr;
	echo $a.$b.$c,$d;		//aabbcc
	
	//list 结合 each遍历二维数组
	$arr = array(
		array('a','b','c'),
		array('d','e','f'),
	);
	for($i=0;$i<count($arr);$i++){
		while(list($k,$v)=each($arr[$i])){
			echo $k.'--'.$v.'<br>';
		}
	}
		0--a
		1--b
		2--c
		0--d
		1--e
		2--f
	
	
	
	
	
//-- key($arr) 从数组中取得当前指针元素的键-
//-- current($arr) 从数组中取得当前指针元素的值-
//-- next($arr) 将指针下移并返回该值，末尾返回false-
	$arr=array(1,2,3);
	while($arr){
		echo key($arr).'-->'.current($arr).'<br>';
		if(!next($arr)){
			break;
		}
	}


//-- prev($arr) 	指针上移返回该值，到头返回false-
//-- reset($arr)	指针移动到最前面-
//-- end($arr)		指针移动到最后面-

	$list = array('波多野结衣','饭岛爱','苍井空','麻生早苗','光月夜也','麻生舞','小室友里','小泽圆');
	echo prev($list).'<br>';
	echo end($list).'<br>';
	echo reset($list);
	
	
	
	

//-- unset($arr[n]) 删除数组或删除数组中指定元素-

	$arr=array(1,2,3);
	unset($arr[1]);
	print_r($arr);		//Array ( [0] => 1 [2] => 3 ) 
	unset($arr);
	print_r($arr);		//空
	
	
	
//-- array_shift($arr) 从数组头部移除一个元素-

	$arr=array(1,2);
	array_shift($arr);
	print_r($arr);		//Array ( [0] => 3 [1] => 4 [2] => 5 [3] => 1 [4] => 2 ) 



//-- array_unshift($arr) 向数组开头插入一个或多个元素-

	$arr = array(1,2);
	array_unshift($arr,3,4,5);
	print_r($arr);			//Array ( [0] => 3 [1] => 4 [2] => 5 [3] => 1 [4] => 2 ) 


	
	
	
	
//-- array_pop($arr) 弹出数组最后一个元素(出栈)-
		$arr = array('a','b','c');
		array_pop($arr);  // 返回 弹出元素值
		print_r($arr); // $arr = array('a','b');
		echo '<hr/>';
		
	

	
	
//-- array_push($arr) 在数组最后插入一个或多个元素（入栈）-
		$arr = array('a','b','c');
		array_push($arr,'x','y','z');
		print_r($arr);  //  $arr = array('a','b','c','x','y','z');
		echo '<hr/>';
		// 如果用 array_push() 来给数组增加一个单元，还不如用 $array[] = ，因为这样没有调用函数的额外负担。 
		
		
		
	
	
	
//-- array_key_exists(index,$arr) 数组中是否存在指定下标-

	$arr=array('a'=>'aa');
	var_dump(array_key_exists('a',$arr));		// true
	
	$arr=array(1,2,4);
	var_dump(array_key_exists(2,$arr));			// true








//-- in_array(val,$arr) 判断数组中是否存在指定的值，返回 true或false-
//	$arr = array(1,2,3,4,5,6);
//	var_dump(in_array('5',$arr));	//true
	$arr=array('a'=>'aa');
	var_dump(in_array('aa',$arr));
	
	
	
	
	
	
	

//-- array_search(val,$arr) 按值查找元素，并返回其下标或false-

	$arr= array(2,3,4,5,6);
	var_dump(array_search(5,$arr));		//3		返回该值的下标,不存在则返回 false


	
	
	

//-- for,foreach($arr) 数组的遍历-

	$array = array(1,2,3,4,5,6,7);
	for($i=0;$i<count($array);$i++){
		echo $array[$i].'<br>';
	}
	
	echo '<hr>';
	foreach($array as $k=>$v){
		echo $k.'--'.$v.'<br>';
	}

	
	
	
	

		
		
		
		

//-- explode('keyword',$str) 将字串分割成数组-
	$str = 'aa##bb##cc';
	$arr = explode('##',$str);  // array('aa','bb','cc')
	$arr = explode('#',$str);    // array('aa','','bb','','cc')
	$arr = explode(' ',$str);             // array('')
	var_dump($arr);


	
//-- implode($arr) 将一个一维数组的值转化为字符串-
	$arr = array('a','b','c','d');
	$str = implode('',$arr);  // abcd
	$str = implode(',',$arr);  // a,b,c,d
	echo $str;




	

//-- array_map(fun,arr) 将回调函数作用到给定数组的单元上-

	function cube($n)				//声明一个函数
	{
		return($n + $n + $n);
	}
	$a = array(1, 2, 3);
	$b = array_map("cube", $a);		//调用函数，并指定函数的参数为$a
	print_r($b);		//Array ( [0] => 3 [1] => 6 [2] => 9 ) 

	
			
			
			
			

//-- array_multisort($arr,type,$arr) 多维数组按值排序-

	$Tarray = array(
		array('id'=> 0,'name'=>'123833'),
		array('id'=> 0,'name'=>'aaa'),
		array('id'=> 0,'name'=>'albabaababa'),
		array('id'=> 0,'name'=>'12356'),
		array('id'=> 0,'name'=>'123abc')
	);
	foreach($Tarray as $key=>$value){
		$long[$key]=strlen($value['name']);		//保存每个子元素name内容的长度
	}
	array_multisort($long,SORT_DESC,$Tarray);   	// _ASC 升序， _DESC 降序
	echo "<pre>";
	$i=1;
	foreach($Tarray as &$v){
		$v['id']=$i;
		$i++;
	}
	var_dump($Tarray);





//-- array_keys($arr) 	获取数组中的所有的键-
	
	$arr=array('a'=>'aaa','b'=>'bbb','c'=>'ccc','d'=>'ddd','e'=>'eee');

	print_r(array_keys($arr));
	
	
	


//-- array_values($arr) 获取数组中的所有的值-
	
	$arr=array('a'=>'aaa','b'=>'bbb','c'=>'ccc','d'=>'ddd','e'=>'eee');
	print_r(array_values($arr));


	
	
	
//-- count($arr) 计算数组元素的个数-

	$list = array('波多野结衣','饭岛爱','苍井空','麻生早苗','光月夜也','麻生舞','小室友里','小泽圆');
	echo count($list);






//-- http_build_query($arr,[keywords]) 将数组转换成GET键值的URL字串-    	

	$data = array('foo', 'bar','a'=>'aa');
	echo http_build_query($data)."<br>";	//以索引或关联下标方式
	echo http_build_query($data, 'myvar_');	//指定下标前缀的方式

	//0=foo&1=bar&a=aa
	//myvar_0=foo&myvar_1=bar&a=aa 




//-- extract($arr) 	把数组key转换成变量名，value转换成变量值-

	$arr=array('a'=>'aa','b'=>'bb','c'=>'cc');	
	extract($arr);
	echo $a.'<br>';
	echo $b.'<br>';
	echo $c.'<br>';

	
	
	

//-- filter_has_var(type,variable) 过滤传值的类型，如get,post,cookie-
	var_dump(filter_has_var(INPUT_POST,'a'));

			//INPUT_GET 		是否为GET传值
			//INPUT_POST 		是否为POST传值
			//INPUT_COOKIE 		是否为cookie传值 
			//INPUT_SERVER 
			//INPUT_ENV 



	
//-- filter(val,type) 过滤一个值是否匹配某格式，如邮箱，url,int,float-
		
	//var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));		
		//判断是否为一个邮箱,返回邮箱地址或false
	//var_dump(filter_var('http://example.com', FILTER_VALIDATE_URL));	
		//判断是否为一个URL,返回地址或false
	//var_dump(filter_var(755, FILTER_VALIDATE_INT));						
		//判断是否为个整型数值,返回数值或false
	//var_dump(filter_var(2.5, FILTER_VALIDATE_FLOAT));		
		//判断是否为浮点数，也包含整数,返回数值或false
	//var_dump(filter_var('192.168.1.111', FILTER_VALIDATE_IP));	
		//判断是否为一个IP地址，返回该IP或false
	//var_dump(filter_var('http://example.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
		//判断是否为url且为request类型
	//var_dump(filter_var('yes', FILTER_VALIDATE_BOOLEAN));	
		//判断真与假，这里的真包含true,1,yes,on,其它都为假
	//var_dump(filter_var('the gril is builtifull',FILTER_VALIDATE_REGEXP,array('options'=>array('regexp'=>'/^a.*/'))));
		//判断是否与正则相匹配，返回该字串或false
	//var_dump(filter_var("5-2f+3.3pp", FILTER_SANITIZE_NUMBER_FLOAT,		// "5-2+3.3" 
		//过滤掉所有字符，除了数字、+- 以及 .,eE。
	//var_dump(filter_var("5-2+3-3.2-pp", FILTER_SANITIZE_NUMBER_INT));		//"5-2+3-32-" 
		//过滤掉所有字符，除了数字和 +-

			//其它过滤参见w3c手册

*/





