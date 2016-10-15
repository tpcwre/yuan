

	

array_column() 			返回输入数组中某个单一列的值。
array_filter() 			用回调函数过滤数组中的元素。
array_map() 			把数组中的每个值发送到用户自定义函数，返回新的值。
array_multisort() 		对多个数组或多维数组进行排序。
array_reduce() 			通过使用用户自定义函数，以字符串返回数组
array_udiff() 			比较数组，返回差集（只比较值，使用一个用户自定义的键名比较函数）。
array_udiff_assoc() 		比较数组，返回差集（比较键和值，使用内建函数比较键名，使用用户自定义函数比较键值）。
array_udiff_uassoc() 		比较数组，返回差集（比较键和值，使用两个用户自定义的键名比较函数）。
array_uintersect() 		比较数组，返回交集（只比较值，使用一个用户自定义的键名比较函数）。
array_uintersect_assoc() 	比较数组，返回交集（比较键和值，使用内建函数比较键名，使用用户自定义函数比较键值）。
array_uintersect_uassoc() 	比较数组，返回交集（比较键和值，使用两个用户自定义的键名比较函数）。
array_walk() 			对数组中的每个成员应用用户函数。
array_walk_recursive() 		对数组中的每个成员递归地应用用户函数。
extract() 			从数组中将变量导入到当前的符号表。
uasort() 			使用用户自定义的比较函数对数组中的键值进行排序。
uksort() 			使用用户自定义的比较函数对数组中的键名进行排序。
usort() 			使用用户自定义的比较函数对数组进行排序。
array_intersect_uassoc() 	比较数组，返回交集（比较键名和键值，使用用户自定义的键名比较函数）。
array_intersect_ukey() 		比较数组，返回交集（只比较键名，使用用户自定义的键名比较函数）。
array_diff_uassoc() 		比较数组，返回差集（比较键名和键值，使用用户自定义的键名比较函数）。
array_diff_ukey() 		比较数组，返回差集（只比较键名，使用用户自定义的键名比较函数）。





//===== 数组排序

sort($arr) 				对数组排序。
rsort($arr) 				对数组逆向排序。
asort($arr) 				对关联数组按照键值进行升序排序。
arsort($arr) 				对关联数组按照键值进行降序排序。
ksort($arr) 				对数组按照键名排序。
krsort($arr) 				对数组按照键名逆向排序。
natsort($arr) 				用“自然排序”算法对数组排序。
natcasesort($arr) 			用“自然排序”算法对数组进行不区分大小写字母的排序。

//===== 数组键值操作

unset($arr/$arr[1]) 			销毁数组或删除数组中指定元素
array_pad($arr,3,'b') 			用指定值将数组填充到指定长度。
shuffle($arr) 				将数组打乱。
count($arr) 				返回数组中元素的个数。
sizeof($arr) 				count() 的别名。
array_flip($arr) 			交换数组中的键和值。
array_keys($arr) 			返回数组中所有的键名。
array_values($arr) 			返回数组中所有的值。
array_reverse($arr) 			返回一个元素顺序相反的数组。
array_count_values($arr) 		统计数组中所有值出现的次数。
array_rand($arr) 			返回数组中一个或多个随机的键。
array_unique($arr) 			删除数组中的重复值。(值不区分索引或关联数组)
array_product($arr) 			计算数组中所有值的乘积。
array_change_key_case($arr,0/1) 	把数组中所有键更改为小写或大写。

//===== 数组查找替换

array_search('xx',$arr) 		搜索数组中给定的值并返回键名。
array_splice($arr1,1,2,$arr2) 		将数组中指定范围的元素用另一个数组元素替换。
array_replace($arr1,$arr2) 		使用后面数组的值替换第一个数组的值。
array_replace_recursive($arr1,$arr2) 	递归地使用后面数组的值替换第一个数组的值。

//===== 数组判断

is_array(variable)			判断一个变量是否为数组
in_array('xx',$arr) 			检查数组中是否存在指定的值。
array_key_exists('xx',$arr) 		检查指定的键名是否存在于数组中。
		
//===== 数组判断比较

array_diff($arr1,$arr2) 		比较数组，返回差集（只比较值）。
array_diff_key() 			比较数组，返回差集（只比较键）。
array_diff_assoc() 			比较数组，返回差集（比较键名和键值）。
array_intersect() 			比较数组，返回交集（只比较键值）。
array_intersect_key() 			比较数组，返回交集（只比较键名）。
array_intersect_assoc() 		比较数组，返回交集（比较键名和键值）。

//===== 数组合并,拆分,替换

array_chunk($arr,3) 			以指定的元素个数，把一维数组数组分割为二维数组
array_merge($arr1,$arr2) 		把多个数组合并为一个数组
array_slice($arr,3/3,5) 		按指定下标范围截取数组中的元素
array_merge_recursive($arr1,$arr2) 	递归地合并一个或多个数组。

//===== 创建数组

array(1,2,3) 				创建数组。	
array_combine($arr1,$arr2) 		用一个数组值作为键名，另一个数组值做为值，合成一个新数组
range(1,3) 				创建包含指定范围单元的数组
compact('name','age') 			将变量合成数组，变量名为键，变量值为元素值.
array_fill(1,3,'blue')  		用指定的值，起始下标，数组长度来生成一个数组
array_fill_keys(array('k1','k2'),'val') 	用指定的健名，指定的值生成一个数组

//===== 数组指针操作,元素的添加和删除

key($arr) 				从数组中取得当前指针元素的键。
current($arr) 				返回数组中的当前元素的值。
pos($arr) 				current() 的别名。
next($arr) 				返回数组当前指针的下一个元素值。
prev($arr) 				返回数组当前指针的上一个元素值。
end($arr) 				返回数组中最后一个元素值。
reset($arr) 				将数组的内部指针重置到首个元素
list($a,$b) 				获取数组中的元素列表，并把每个元素赋值给指定的变量
each($arr) 				返回数组中当前的键／值对。并将内部指针向前移动：
array_shift($arr) 			删除数组中首个元素，并返回被删除元素的值。
array_unshift($arr) 			在数组开头插入一个或多个元素。
array_push($arr) 			将一个或多个元素插入数组的末尾（入栈）。
array_pop($arr) 			删除数组的最后一个元素（出栈）。



















<?php
//	echo '<pre>';


/*	
//-- array_change_key_case($arr,0/1) 	把数组中所有键更改为小写或大写。

	$a= array('a'=>'aa','b'=>'bb');
	$b = array_change_key_case($a,0);		//0 设置所有key为小写
	print_r($b);		//Array ( [a] => aa [b] => bb ) 
	
	$b = array_change_key_case($a,1);		//0 设置所有key为大写
	print_r($b);		// Array ( [A] => aa [B] => bb ) 





//-- array_pad() 			用指定值将数组填充到指定长度。
	$a = array(1);
	$b = array_pad($a,3,'b');
	print_r($b);		//Array ( [0] => 1 [1] => b [2] => b ) 




//-- array_merge_recursive() 	递归地合并一个或多个数组。
	$a=array(1,'a'=>'red');
	$b=array(2,'a'=>'yellow');
	$c=array(3,'b'=>'blue');
	$c = array_merge_recursive($a,$b,$c);
	print_r($c);
	//Array ( [0] => 1 [1] => 2 [2] => 3 [a] => Array ( [0] => red [1] => yellow ) [3] => 2 [4] => 3 [5] => 4 ) 


//-- array_product() 		计算数组中所有值的乘积。
	$a = array(1,2,3);				//6
	$a = array(1,3,'a'=>5);			//15
	$b = array_product($a);
	echo $b;

	
	
	


//-- array_replace() 		使用后面数组的值替换第一个数组的值。

	$a = array('a'=>'aa','c','e'=>'ee');
	$b = array('a'=>'bb','d','f'=>'ff');
	$c = array_replace($a,$b);
	print_r($c);	//Array ( [a] => bb [0] => d [e] => ee [f] => ff ) 


//-- array_replace_recursive() 	递归地使用后面数组的值替换第一个数组的值。

	$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
	$a2=array("a"=>array("yellow"),"b"=>array("black"));
	print_r(array_replace_recursive($a1,$a2));
		//Array ( [a] => Array ( [0] => yellow ) [b] => Array ( [0] => black [1] => blue ) ) 





//-- array_unique() 			删除数组中的重复值。(值不区分索引或关联数组)
	$a=array('a','b','a'=>'a');
	$b = array_unique($a);
	print_r($b);






//-- each() 返回数组中当前的键／值对。并将内部指针向前移动：

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
	

	
	
	
//-- array_rand() 			返回数组中一个或多个随机的键。
	$a = array('a','b','c','d'=>'dd');
	echo $r = array_rand($a);		//随机取一个键		0或1或2或d 	
	$r = array_rand($a,2);			//随机取多个键
	var_dump($r);				//array(2) { [0]=> int(2) [1]=> string(1) "d" } 
	





//--array_count_values() 		用于统计数组中所有值出现的次数。
	$a = array('a','v','c','a','v','a'=>'a');
	$c = array_count_values($a);
	print_r($c);		//Array ( [a] => 3 [v] => 2 [c] => 1 ) 







//-- array_reverse() 		返回一个元素顺序相反的数组。
	$a = array('a','b','c'=>'cc');
	$b = array_reverse($a);
	print_r($b);		//Array ( [c] => cc [0] => b [1] => a ) 







//-- array_flip() 			交换数组中的键和值。
	$arr = array('a'=>'aa');
	$b = array_flip($arr);
	print_r($b);		//Array ( [aa] => a ) 





//-- shuffle() 将数组打乱
	$arr=array('a','aa','b','bb','c','cc');
	shuffle($arr);
	print_r($arr);






//-- in_array() 			检查数组中是否存在指定的值。
	//$a = array('a'=>'aa');			//true
	$a= array('aa','bb');				//true
	$b = in_array('aa',$a);
	var_dump($b);
	
	 
	
	
//-- array_splice() 			将数组中指定范围的元素用另一个数组元素替换。
	$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	$a2=array("a"=>"purple");
	//array_splice($a1,0,2,$a2);		//Array ( [0] => purple [c] => blue [d] => yellow ) 
	//array_splice($a1,-2,1,$a2);	//Array ( [a] => red [b] => green [0] => purple [d] => yellow ) 
	array_splice($a1,1,0,$a2);		//Array ( [a] => red [0] => purple [b] => green [c] => blue [d] => yellow ) 
	print_r($a1);


//-- array_search() 搜索数组中给定的值并返回键名。
	$arr=array('a'=>'aa','b'=>'bb');
	echo $b = array_search('bb',$arr);		//b




	$a = array('a'=>'aa','b'=>'bb');
	$b = array('b'=>'bb','c'=>'cc');
	$c = array_intersect($a,$b);
	print_r($c);		//Array ( [b] => bb ) 
	



//-- array_diff_assoc() 		比较数组，返回差集（比较键名和键值）。
	$a = array('a'=>'aa','b'=>'bb','c'=>'cc');
	$b = array('a'=>'aaa','b'=>'bb','cc'=>'cc');
	$c = array_diff_assoc($a,$b);
	print_r($c);			//Array ( [a] => aa [c] => cc ) 

	
	

//-- array_diff() 			比较数组，返回差集（只比较键值）。
	$a = array(1,2,3);
	$b = array(2,3,4);
	print_r(array_diff($a,$b));		//Array ( [0] => 1 ) 





//-- array_slice() 按指定下标范围截取数组中的元素

	$a = array(1,2,3,4,5);
	$b = array_slice($a,3);		//截取下标3至以后的所有元素
	print_r($b);

	$b = array_slice($a,0,3);	//截取下标0-3的元素
	print_r($b);

	$b= array_slice($a,-4,2);	//从倒数第四个元素开始，截取2个元素
	print_r($b);
		
		





//-- array_merge() 			把多个数组合并为一个数组
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


//-- array_chunk() 			以指定的元素个数，把一维数组数组分割为二维数组
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





//-- array_fill_keys() 用指定的健名，指定的值生成一个数组
	$a1=array_fill_keys(array('k','f'),"blue");	//
	print_r($a1);		//Array ( [k] => blue [f] => blue ) 



//-- array_fill()  用指定的值，起始下标，数组长度来生成一个数组
	$b = array_fill(1,2,'blue');	// 起始下标为1，长度为2，使用值为blue 生成一个数组
	print_r($b);		//Array ( [1] => blue [2] => blue ) 		





//-- compact() 			将变量合成数组，变量名为键，变量值为元素值.
	$name = 'aa';
	$age = 18;
	$sex = 'nan';
	$arr = compact('name','sex','age');
	print_r($arr);		//Array ( [name] => aa [sex] => nan [age] => 18 ) 




//-- range() 			创建包含指定范围单元的数组
	$a = range(1,3);
	print_r($a);		//Array ( [0] => 1 [1] => 2 [2] => 3 ) 
	
	
	
//-- array_combine() 		用一个数组值作为键名，另一个数组值做为值，合成一个新数组
	
	$a = array('a','b','c');
	$b = array('aaa','bbb','ccc');
	$c = array_combine($a,$b);
	print_r($c);		//Array ( [a] => aaa [b] => bbb [c] => ccc ) 


	
//-- list() 获取数组中的元素列表，并把每个元素赋值给指定的变量

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
	
	
	
	
	
//-- key() 从数组中取得当前指针元素的键。
//-- current() 从数组中取得当前指针元素的值。
	$arr=array(1,2,3);
	while($arr){
		echo key($arr).'-->'.current($arr).'<br>';
		if(!next($arr)){
			break;
		}
	}


//-- unset() 销毁数组或删除数组中指定元素

	$arr=array(1,2,3);
	unset($arr[1]);
	print_r($arr);		//Array ( [0] => 1 [2] => 3 ) 
	unset($arr);
	print_r($arr);		//空
	
	
	
//-- array_shift() 从数组头部移除一个元素

	$arr=array(1,2);
	array_shift($arr);
	print_r($arr);		//Array ( [0] => 3 [1] => 4 [2] => 5 [3] => 1 [4] => 2 ) 



//-- array_unshift() 向数组开头插入一个或多个元素

	$arr = array(1,2);
	array_unshift($arr,3,4,5);
	print_r($arr);			//Array ( [0] => 3 [1] => 4 [2] => 5 [3] => 1 [4] => 2 ) 



	
	
	
//-- array_key_exists() 数组中是否存在指定下标

	$arr=array('a'=>'aa');
	var_dump(array_key_exists('a',$arr));		// true
	
	$arr=array(1,2,4);
	var_dump(array_key_exists(2,$arr));			// true





//-- array_unique()	将数组元素去重 

	$arr= array(1,2,3,4,1,2,4,5,6);
	print_r(array_unique($arr));	
		//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [7] => 5 [8] => 6 ) 
	





//-- in_array() 查看数组中是否存在指定元素，返回 true或false
	$arr = array(1,2,3,4,5,6);
	var_dump(in_array('5',$arr));	//true

	
	
	


//-- array_search() 查找元素，返回下标或false

	$arr= array(2,3,4,5,6);
	var_dump(array_search(5,$arr));		//3		返回该值的下标,不存在则返回 false

*/














