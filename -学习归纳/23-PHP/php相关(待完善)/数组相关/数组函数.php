<?php
/*
				=====================   array_xxx类  ==========================




	//===== 数组函数手册位置
	
		php manaul -》 函数参考 -》变量与类型相关扩展 -》数组函数


		
		
		
		
		

	//===== 数组函数 xxx() 与 array_xxx()的区别

		//一般 xxx() 类型的数组函数，不会产生新变量，它会直接影响原有数组

		//而 array_xxx() 函数 会在处理原数组后把结果赋值给一个新的数组变量


		
		
		
		
		
		

	//===== array_combine() 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值

		$a1=array("a","b","c","d");
		$a2=array("Cat","Dog","Horse","Cow");
		print_r(array_combine($a1,$a2));


		// 结果：
		// Array ( [a] => Cat [b] => Dog [c] => Horse [d] => Cow ) 





	//===== array_merge() 合并一个或多个数组

		$a1=array("a"=>"Horse","b"=>"Dog");
		$a2=array("c"=>"Cow","b"=>"Cat");
		print_r(array_merge($a1,$a2));

		// 结果：
		// Array ( [a] => Horse [b] => Cat [c] => Cow ) 




	//===== compact() 建立一个数组，包括变量名和它们的值
	
		$firstname = "Peter";
		$lastname = "Griffin";
		$age = "38";
		$result = compact("firstname", "lastname", "age");
		print_r($result);

		// 结果：compact()
		// Array ( [firstname] => aaa [lastname] => Griffin [age] => 38 ) 





	//===== extract() 从数组中将变量导入到当前的符号表(将关联数组转换为变量)

		$arr = array("color"=>"blue", "size"=>"medium","shape"=>"sphere",'a'=>'aaa','b',array(1,2));
		$result = extract($arr);
		print_r($result);

		//结果： 4

		echo '<hr>';


		$size = "large";
		$var_array = array("color" => "blue",
						   "size"  => "medium",
						   "shape" => "sphere");
		extract($var_array);
		echo "$color, $size, $shape";

		//结果：blue, medium, sphere








	//===== array_slice() 从数组中取出一段

		$a=array(0=>"Dog",1=>"Cat",2=>"Horse",3=>"Bird");
		print_r(array_slice($a,1,2));

		//结果：	Array ( [0] => Cat [1] => Horse )


		
	//=====*** array_splice() 把数组中的一部分去掉或用其它值取代(对数组元素有添加和删除功能)  
		
		
		$input = array(1,2,3,4,5,6,7,8,9);
		print_r($input);echo "<br>";
		array_splice($input, 2);		//移除从下标为2开始以后的所有元素
		print_r($input);echo "<br>";
		// 结果：
		// Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 )
		// Array ( [0] => 1 [1] => 2 ) 
			
			
			
		$input = array(1,2,3,4,5,6,7,8,9);
		print_r($input);
		echo "<br>";
		array_splice($input, 2, -3);	//移除下标从第二个开始到倒数第3个之间的元素
		print_r($input);echo "<br>";
		// 结果：
		// Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 )
		// Array ( [0] => 1 [1] => 2 [2] => 7 [3] => 8 [4] => 9 ) 
			
		

		$input = array("red", "green", "blue", "yellow");
		print_r($input);echo "<br>";
		array_splice($input, 1, count($input), "orange");	//移除第一个元素以后的元素并用orange取代
		print_r($input);echo "<br>";
		// 结果：
		// Array ( [0] => red [1] => green [2] => blue [3] => yellow )
		// Array ( [0] => red [1] => orange ) 

		
														//
		$input = array("red", "green", "blue", "yellow");
		print_r($input);echo "<br>";
		array_splice($input, -3, 2, array("black", "maroon")); 
			//从倒数第三个开始移除两个元素，并用数组中的元素black和maroon取代
		print_r($input);echo "<br>";
		// 结果；
		// Array ( [0] => red [1] => green [2] => blue [3] => yellow )
		// Array ( [0] => red [1] => black [2] => maroon [3] => yellow ) 

		$input = array("red", "green", "blue", "yellow");
		print_r($input);echo "<br>";
		array_splice($input, 3, 0, "purple");
			//从第三个元素开始删除0个元素，并用purple取代，相当于向数组中直接添加了一个元素
		print_r($input);echo "<br>";
		// $input is now array("red", "green",
		//          "blue", "purple", "yellow");

			
		
		
	//===== array_sum() 计算数组中所有值的和
		
		$a = array(2, 4, 6, 8);
		echo "sum(a) = " . array_sum($a) .'<br>';
		//结果：sum(a) = 20

		$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4,'d'=>'2d');
		echo "sum(b) = " . array_sum($b) . "\n";
		//结果：sum(b) = 8.9 

		
		
	//===== array_diff() 计算数组的差集
			//返回两个数组不相同的元素
	
			$array1 = array("a" => "green", "red", "blue", "red");
			$array2 = array("b" => "green", "yellow", "red");
			$result = array_diff($array1, $array2);
			print_r($result);
			
			//结果：	Array ( [1] => blue ) 



	
	
	
	//===== array_intersect() 计算数组的交集(返回相同的元素)

		$array1 = array("a" => "green", "red", "blue");
		$array2 = array("b" => "green", "yellow", "red");
		$result = array_intersect($array1, $array2);
		print_r($result);
		//结果：	Array ( [a] => green [0] => red ) 



	//===== array_search() 查找数组中的值并返回对应的下标
	
	//系统函数 array_search()
	$arr=array(1,2,3,4,5);
	var_dump(array_search('3',$arr));echo "<br>";
	//结果：	int(2) 
	
	//实现功能的自定义函数
	function myarray_search($val,$arr){	//0: 传入查找值与目标数组
		$arr2=array();					//1: 创建一个空数组做容器
		foreach($arr as $k=>$v){		//2: 遍历数组得到每个元素的下标和值
			if($val==$v){				//3: 如果查找值匹配到遍历值
				return $k;				//4: 终止函数并返回当前遍历的下标
			}
		}
		return false;					//5: 当查找值匹配不到遍历值时，终止函数并返回false.
	}
	var_dump(myarray_search('3',$arr));
	//结果：int(2) 

	
	
	
	
	
	//===== array_shift() 删除数组首个元素

		$a=array('aaa','bbb','ccc');	
		print_r($a);	echo '<br>';
		array_shift($a);
		print_r($a);	
		
		// 结果：
		// Array ( [0] => aaa [1] => bbb [2] => ccc )
		// Array ( [0] => bbb [1] => ccc ) 
		
	
		
		
		
		
		
	//===== array_unshift() 向数组开头插入一个或多个元素

		//array_unshift(插入到哪个数组,要插入的内容)   
		//该函数会返回当前操作的数组中的元素个数

	
		$a=array('aaa');	
		print_r($a);	echo '<br>';
		array_unshift($a,'bbb');	//插入一个元素
		print_r($a);	echo '<br>';
		array_unshift($a,'ccc','ddd','eee');	//插入多人元素
		print_r($a);
		
		// 结果：
		// Array ( [0] => aaa )
		// Array ( [0] => bbb [1] => aaa )
		// Array ( [0] => ccc [1] => ddd [2] => eee [3] => bbb [4] => aaa ) 





	//===== array_push() 向数组尾部插入一个或多个元素

		
		$a=array('aaa');	
		print_r($a);	echo '<br>';
		array_push($a,'bbb');	//尾部插入一个元素
		print_r($a);	echo '<br>';
		array_push($a,'ccc','ddd','eee');	//尾部插入多个元素
		print_r($a);
		// 结果：
		// Array ( [0] => aaa )
		// Array ( [0] => aaa [1] => bbb )
		// Array ( [0] => aaa [1] => bbb [2] => ccc [3] => ddd [4] => eee ) 





	//===== array_pop() 删除数组尾个元素

		
		$a=array('aaa','bbb','ccc');	
		print_r($a);	echo '<br>';
		array_pop($a);
		print_r($a);
		// 结果：
		// Array ( [0] => aaa [1] => bbb [2] => ccc )
		// Array ( [0] => aaa [1] => bbb ) 

	



	//===== array_keys() 返回数组中的所有的键 及自制此功能函数</h1>";
		
		$arr=array('a'=>'aaa','b'=>'bbb','c'=>'ccc');
		
		var_dump($arr);		echo '<br>';
		var_dump(array_keys($arr));		echo '<br>';

		//自定义函数
		function test2($arr){
			foreach($arr as $k=>$v){
				$arr2[]=$k;
			}
			return $arr2;
		}
		var_dump(test2($arr));
		// 结果：
		// array(3) { ["a"]=> string(3) "aaa" ["b"]=> string(3) "bbb" ["c"]=> string(3) "ccc" }
		// array(3) { [0]=> string(1) "a" [1]=> string(1) "b" [2]=> string(1) "c" }
		// array(3) { [0]=> string(1) "a" [1]=> string(1) "b" [2]=> string(1) "c" } 


		
		
		
		
		
		
	//===== array_values() 返回这个数组中的所有的值 及自制此功能函数</h1>";
		
		$arr=array('a'=>'aaa','b'=>'bbb','c'=>'ccc');
		var_dump($arr);		echo '<br>';
		var_dump(array_values($arr));		echo '<br>';
		
		function test1($arr){
			foreach($arr as $k=>$v){		//第一步，遍历数组 ，得到每个元素的值，
				$arr2[]=$v;			//第二步，将每个值，放到另一个数组中
			}
			return $arr2;				//第三步，将装满值的数组返回给函数
		}
		var_dump(test1($arr));				//第四步，调用函数，显示出来
		// 结果：
		// array(3) { ["a"]=> string(3) "aaa" ["b"]=> string(3) "bbb" ["c"]=> string(3) "ccc" }
		// array(3) { [0]=> string(3) "aaa" [1]=> string(3) "bbb" [2]=> string(3) "ccc" }
		// array(3) { [0]=> string(3) "aaa" [1]=> string(3) "bbb" [2]=> string(3) "ccc" } 



			
	
		
		
		
		
		
	//===== array_rand() 从数组中随机抽取一个或多个元素和其下标

		
		$a=array('aaa','bbb','ccc');	
		print_r($a);	echo '<br>';
		$rand=array_rand($a);	//默认取出1个元素的下标
		echo $rand."<br>"; //随机取出数组下标和元素

		$rand=array_rand($a,2);	//指定取出2个元素的下标	
		echo $rand[0].'--'.$rand[1].'<br>';	//随机取出两个元素的下标和元素
		echo $rand[0].'-'.$a[$rand[0]].'<br>';//随机取出 两个元素的下标与值
		echo $rand[1].'-'.$a[$rand[1]].'<br>';
	
		// 结果：
		// Array ( [0] => aaa [1] => bbb [2] => ccc )
		// 2
		// 1--2
		// 1-bbb
		// 2-ccc
					
		
	
		
		
		
		
		
		
		

		
	//===== sort(),rsort()数组元素以字母或数字排序(升/降),不保持索引关系
	
		//是以字母或数字升序来排列，索引顺序也会随之改变。
		//汉字也会按拼音的升序来排列

		$arr = array("f", "e", "h", "a",3,7,2);
		print_r($arr);	echo '<br>';
		sort($arr);
		print_r($arr);	echo '<br>';
		
		// 结果：
		// Array ( [0] => f [1] => e [2] => h [3] => a [4] => 3 [5] => 7 [6] => 2 )
		// Array ( [0] => a [1] => e [2] => f [3] => h [4] => 2 [5] => 3 [6] => 7 ) 
	
		//sort()有两个可选参数，可以指定按字母或数字形式来排序

		$a=array(9,7,3);
		print_r($a);	echo '<br>';
		sort($a,SORT_NUMERIC);	//指定按数字排序
		print_r($a);	echo '<br>';
		// 结果：
		// Array ( [0] => 9 [1] => 7 [2] => 3 )
		// Array ( [0] => 3 [1] => 7 [2] => 9 ) 
		
		$arr = array("f", "e", "h", "a");
		print_r($arr);	echo '<br>';
		sort($arr,SORT_STRING);	//指定按字母排序
		print_r($arr);
		// 结果：
		// Array ( [0] => f [1] => e [2] => h [3] => a )
		// Array ( [0] => a [1] => e [2] => f [3] => h ) 

		

	
			
		
		
		
		
	
	//====== asort()/arsort() 数组元素以字母或数字排序(升/降)保留原有索引顺序
	
		$arr = array("f", "e", "h", "a",3,7,2);
		print_r($arr);	echo '<br>';
		asort($arr);
		print_r($arr);	echo '<br>';
	
		// 结果：
		// Array ( [0] => f [1] => e [2] => h [3] => a [4] => 3 [5] => 7 [6] => 2 )
		// Array ( [3] => a [1] => e [0] => f [2] => h [6] => 2 [4] => 3 [5] => 7 ) 
			
		//sort()有两个可选参数，可以指定按字母或数字形式来排序

		$a=array(9,7,3);
		print_r($a);	echo '<br>';
		asort($a,SORT_NUMERIC);	//指定按数字排序
		print_r($a);	echo '<br>';
		// 结果：
		// Array ( [0] => 9 [1] => 7 [2] => 3 )
		// Array ( [2] => 3 [1] => 7 [0] => 9 ) 
				
		$arr = array("f", "e", "h", "a");
		print_r($arr);	echo '<br>';
		asort($arr,SORT_STRING);	//指定按字母排序
		print_r($arr);
		// 结果：
		// Array ( [0] => f [1] => e [2] => h [3] => a )
		// Array ( [3] => a [1] => e [0] => f [2] => h ) 
				
				
		
		
		
		
		
		
		
		
		
	//===== ksort()/krsort() 对数组键排序(升/降)
		
		$arr=array('c'=>1,'a'=>2,'b'=>3);
		print_r($arr);	echo "<br>";
		ksort($arr);
		print_r($arr);	echo "<br>";
		// 结果：
		// Array ( [c] => 1 [a] => 2 [b] => 3 )
		// Array ( [a] => 2 [b] => 3 [c] => 1 ) 		//正向排序
		
		$arr=array('c'=>1,'a'=>2,'b'=>3);
		print_r($arr);	echo "<br>";
		krsort($arr);
		print_r($arr);	echo "<br>";
		// 结果：
		// Array ( [c] => 1 [a] => 2 [b] => 3 )
		// Array ( [c] => 1 [b] => 3 [a] => 2 ) 		//逆向排序
		
		
		
		
		
	//===== array_reverse() 倒序排列数组中元素

		
		$a=array('mm1.jpg','mm2.jpg','mm3.jpg','mm4.jpg','mm5.jpg');
		print_r($a);
		echo '<br>';
		$b=array_reverse($a);
		print_r($b);

		// 结果：
		// Array ( [0] => mm1.jpg [1] => mm2.jpg [2] => mm3.jpg [3] => mm4.jpg [4] => mm5.jpg ) 
		// Array ( [0] => mm5.jpg [1] => mm4.jpg [2] => mm3.jpg [3] => mm2.jpg [4] => mm1.jpg )
	
	
		
	//===== array_flip() 调换数组中元素的键和值 及自制此功能函数</h1>";
		
		//系统函数 
		$arr=array('a'=>'aaa','b'=>'bbb','c'=>'ccc');
		print_r($arr);	echo "<br>";
		print_r(array_flip($arr));	echo "<br>";

		//自定义函数实现
		print_r(test3($arr));
		function test3($arr){
			foreach($arr as $k=>$v){
				$arr2[$v]=$k;
			}
			return $arr2;
		}
		// 结果
		// Array ( [a] => aaa [b] => bbb [c] => ccc )
		// Array ( [aaa] => a [bbb] => b [ccc] => c )
		// Array ( [aaa] => a [bbb] => b [ccc] => c ) 
				
		
		
		
		
		
		
		
		
	//===== unique() 移除数组中value值相同的元素
		
		//系统函数
		$arr=array('a','d','c','b','a');
		print_r($arr);	echo "<br>";
		print_r(array_unique($arr));	echo "<br>";
		
		//自定义函数
		function my_unique($arr){			//1：传入参数目标数组
			$arr2=array();					//2：创建一个容器数组
			foreach($arr as $key=>$v){		//3：遍历数组得到下标和值
				if(!in_array($v,$arr2)){	//4：判断容器数组中是否有遍历到的值
					$arr2[$key]=$v;			//5：如果没有刚将遍历的下标和值转存到容器数组中
				}
			}
			return $arr2;					//6：终止函数并将容器数组返回给函数
		}
		print_r(my_unique($arr));
		// 结果：
		// Array ( [0] => a [1] => d [2] => c [3] => b [4] => a )
		// Array ( [0] => a [1] => d [2] => c [3] => b )
		// Array ( [0] => a [1] => d [2] => c [3] => b ) 
		
		
		
		
		
		
	//===== array_count_values() 计算数组中相同元素的个数
	
		$arr=array('c','c','a','b','c');
		print_r($arr);	echo "<br>";
		
		// 系统函数
		print_r(array_count_values($arr));	echo "<br>";
		
		// 自定义函数 
		function my_count_values($arr){		//1：传入目标数组
			$arr2=array();					//2：创建一个空数组做容器存储数据
			foreach($arr as $key=>$value){	//3：遍历数组得到下标和值
				if(!array_key_exists($value,$arr2)){	//4：如果容器中没有以遍历的值为下标的元素
					$arr2[$value]=1;		//5：则创建以遍历值为下标的元素，值为1
				}else{
					$arr2[$value] += 1;	//6：如果容器中存在以遍历值为下标的元素 则让其值累加1
				}
			}
			return $arr2;					//7：终止函数并将容器数组返回给函数
		}
		print_r(my_count_values($arr));
		
		// 结果：
		// Array ( [0] => c [1] => c [2] => a [3] => b [4] => c )
		// Array ( [c] => 3 [a] => 1 [b] => 1 )
		// Array ( [c] => 3 [a] => 1 [b] => 1 ) 
		
		
		
		
		
		
		
		
		
	//===== array_key_exists() 查看数组中是否有指定的下标
	
		$arr=array('c','c','a','b','c');
	
		//系统函数 array_key_exists();
		var_dump(array_key_exists(3,$arr));	 echo '<br>';
		
		
		//实现功能自定义函数
		function myarray_key_exists($val,$arr){	//1: 传入参数，'查找值'与目标数组
			foreach($arr as $k=>$v){	//2: 遍历数组得到每个元素的下标与值
				if($val==$k){			//3: 查找值与遍历的下标相比较
					return true;		//4: 如果有匹配的值则终止函数并返回true
				}
			}
			return false;				//5: 如果遍历后没有匹配的值，则终止函数并返回false
		}
		var_dump(myarray_key_exists(3,$arr));
		
		// 结果：
		// bool(true)
		// bool(true) 
		

		
		
		
		
		
		
		


	//===== str_split() 将字符串转换为数组

		$str = "Hi Friends";
		$arr1 = str_split($str);	
		//将每个字符当做一个元素转换成数组
		$arr2 = str_split($str, 3);	
		//将每三个字符当做一个元素来转换成数组
		print_r($str);	echo "<br>";
		print_r($arr1);	echo "<br>";
		print_r($arr2);	echo "<br>";

			// 结果：
			// Hi Friends
			// Array ( [0] => H [1] => i [2] => [3] => F [4] => r [5] => i [6] => e [7] => n [8] => d [9] => s )
			// Array ( [0] => Hi [1] => Fri [2] => end [3] => s ) 





	
	//===== array_fill() 用给定的值填充数组

		$a = array_fill(5, 6, 'aa');	
		//创建一个下标由5开始，元素个数为6，值为‘aa’
		$b = array_fill(-2, 4, 'bb');
		//创建一个下标由-2开始且元素个数为4的数组
		print_r($a);	echo '<br>';
		print_r($b);
		//结果：
		// Array ( [5] => aa [6] => aa [7] => aa [8] => aa [9] => aa [10] => aa )
		// Array ( [-2] => bb [0] => bb [1] => bb [2] => bb ) 


		
		
		
	//===== array_chunk() 把一个数组分割成多个数组
			
		$input_array = array('a', 'b', 'c', 'd', 'e');
		print_r($input_array); 	echo "<br>";
		$arr=array_chunk($input_array, 2);	echo '<br>';
		print_r($arr[0]); echo "<br>";
		print_r($arr[1]);

		// 结果：
		// Array ( [0] => a [1] => b [2] => c [3] => d [4] => e )
		// Array ( [0] => a [1] => b )
		// Array ( [0] => c [1] => d ) 
			
		
		
		
		
		
				=====================   array_xxx类  ==========================
		
		
		
	//===== unset() 删除数组中的元素

		$arr=array(1,2,3);
		print_r($arr);
		unset($arr[1]);	//删除数组中元素
		echo '<br>';
		print_r($arr);
		// 结果：
		// Array ( [0] => 1 [1] => 2 [2] => 3 )
		// Array ( [0] => 1 [2] => 3 ) 
		
	
		
		
		
		
		
	//=====*** extract() 把数组元素key转换成变量名，value转换成变量值。

		
		$arr=array('a'=>'aa','b'=>'bb','c'=>'cc');	
		print_r($arr);
		echo '<br>';
		extract($arr);
		echo $a.'<br>';
		echo $b.'<br>';
		echo $c.'<br>';
		// 结果：
		// Array ( [a] => aa [b] => bb [c] => cc )
		// aa
		// bb
		// cc

		
		
		
		
		
	//===== count(), sizeof() 获取数组中元素的个数
	
		$a=array('aaa','bbb','ccc');	
		print_r($a);
		echo '<br>'.sizeof($a);
		echo '<br>'.count($a);
		// 结果：
		// Array ( [0] => aaa [1] => bbb [2] => ccc )
		// 3
		// 3
		
		
		
		
		
		
	//===== key(),current(),next(),prev(),reset(),end() 数组指针操作函数
		// key()		获取当前指针元素的下标
		// current() 	获取当前指针元素的值
		// next()		将指针下移，并返回该元素
		// prev()		将指针上移，并返回该元素
		// reset()		将指针重置，指向数组首元素，并返回该元素
		// end()		将指针后移至尾元素，并返回该元素
		
		$arr=array('a','b','c','d','e');	
		print_r($arr);	echo "<br>";
		
		echo key($arr).'--'.current($arr).'<br>';	// 获取当前指针的下标和值
		next($arr);									// 将指针下移
		echo key($arr).'--'.current($arr).'<br>';
		end($arr);									//将指针后移至尾元素
		echo key($arr).'--'.current($arr).'<br>';
		prev($arr);									//将指针上移
		echo key($arr).'--'.current($arr).'<br>';
		reset($arr);								//将指针重置
		echo key($arr).'--'.current($arr).'<br>';
		// 结果：
		// Array ( [0] => a [1] => b [2] => c [3] => d [4] => e )
		// 0--a
		// 1--b
		// 4--e
		// 3--d
		// 0--a
		
	
		
		//-- while+指针遍历数组 
		
			$arr=array('a'=>'aaa','b'=>'bbb','c'=>'ccc');
			while(true){
				echo key($arr).'===>'.current($arr).'<br>';
				if(!next($arr)){
					break;
				}
			}
		
		
		
		//-- do while+指针遍历数组
		
			$arr=array('a'=>'aaa','b'=>'bbb','c'=>'ccc','d'=>'ddd','e'=>'eee');
			do{
				echo key($arr).'--'.current($arr).'<br>';
			}while(next($arr));
			
		
		
		//-- for+指针遍历数组 
		
			$arr=array('a'=>'aaa','b'=>'bbb','c'=>'ccc','d'=>'ddd','e'=>'eee');
			$count=count($arr);
			for($i=0;$i<$count;$i++){
				echo key($arr).'--'.current($arr).'<br>';
				next($arr);
			}

		
		
		
		
		
		
	//===== shuffle() 打乱数组中元素的排列顺序


		$a=array('a','b','c','d','e');
		print_r($a);	echo "<br>";
		shuffle($a);
		print_r($a);

		//结果：
		// Array ( [0] => a [1] => b [2] => c [3] => d [4] => e )
		// Array ( [0] => e [1] => a [2] => d [3] => b [4] => c ) 

			
		
		
		
		
		
		
		
		
		
		
	//===== list() 把数组中的值赋给一些变量

		//注意：list() 遍历数组只能针对索引数组，不能对关联数组使用！

		//--list()的使用
		$a=array('aaa','bbb','ccc');
		print_r($a);	echo '<br>';
		list($a1,$a2,$a3)=$a;	//将数组$a中的每个元素按下标分别对应赋值给 a1,a2,a3 
		echo $a1.'<br>'.$a2.'<br>'.$a3.'<br>';
			// 结果：
			// Array ( [0] => aaa [1] => bbb [2] => ccc )
			// aaa
			// bbb
			// ccc
			
	
	
	
	//===== list() 和 each() 结合使用遍历关联数组
		$b=array('a'=>'aa','b'=>'bb','c'=>'cc');
		print_r($b);	echo '<br>';	//数组中有三个关联的元素
			//原：	Array ( [a] => aa [b] => bb [c] => cc ) 
			
		$bb=each($b);		//取出首个元素同时以关联和索引方式赋值给新数组$bb
		print_r($bb);	echo "<br>";
			//结果：Array ( [1] => aa [value] => aa [0] => a [key] => a ) 
			
		list($k,$v)=$bb; //list会用$bb的索引方式取出元素并赋值给两个新数组。
		echo $k.'--'.$v.'<br>';
		list($k,$v)=each($b);
		echo $k.'--'.$v.'<br>';
		list($k,$v)=each($b);
		echo $k.'--'.$v.'<br>';
			// 结果：
			// Array ( [a] => aa [b] => bb [c] => cc )
			// Array ( [1] => aa [value] => aa [0] => a [key] => a )
			// a--aa
			// b--bb
			// c--cc
		
	
		
		
		
		
		
	//===== each() 取出数组中首个元素，并将指针后移到下一个元素 

		
		$a=array('a'=>'aaa','b'=>'bbb');
		print_r($a);	echo '<br>';
		print_r(each($a));	echo "<br>";
		print_r(each($a));	echo "<br>";
			// 结果：
			// Array ( [a] => aaa [b] => bbb )
			// Array ( [1] => aaa [value] => aaa [0] => a [key] => a )
			// Array ( [1] => bbb [value] => bbb [0] => b [key] => b ) 
		//注解：each是将数组内首个元素取出，并将指针指向下一个元素，each会把一数组中的一个元素同时以索引[0][1]和关联[key][value]的两种方式存储，调用时亦可用该两种方法。

	
		$b=array('a'=>'aa','b'=>'bb','c'=>'cc');
		print_r($b);	 echo '<br>';
		$bb=each($b);			//每each一次就会取出首个元素，每二个元素变首个
		echo $bb['key'].'--'.$bb['value'].'<br>';	//用关联方式调取
		$bbb=each($b);
		echo $bbb['key'].'--'.$bbb['value'].'<br>';
		$bbbbb=each($b);
		echo $bbbbb['key'].'--'.$bbbbb['value'].'<br>';
		echo $bb[0].'--'.$bb[1];	//用索引方式调取

			// 结果：
			// Array ( [a] => aa [b] => bb [c] => cc )
			// a--aa
			// b--bb
			// c--cc
			// a--aa

	
		$a=array('a5'=>'aaa5','a6'=>'aaa6','a7'=>'aaa7');
		print_r($a);	echo '<br>';
		while(!!$b=each($a)){	//!!是将返回值转换成布尔值
			echo $b[0].'---'.$b[1].'<br>';
			echo $b['key'].'==='.$b['value'].'<br>';
		}

			// 结果：
			// Array ( [a5] => aaa5 [a6] => aaa6 [a7] => aaa7 )
			// a5---aaa5
			// a5===aaa5
			// a6---aaa6
			// a6===aaa6
			// a7---aaa7
			// a7===aaa7
	





	//===== getType() 判断变量是否是数组
	
		$a=array(1,2,3);
		if(getType($a)=="array"){
			echo '$a是一个数组！';
		}else{
			echo '$a不是一个数组！';
		}
		
		//结果：	$a是一个数组！
	



	
	



	//===== count() 获取数组中元素的个数 
	
		$arr=array(1,2,array(2,3,array(3,5,8)));
		//系统函数 
		var_dump(count($arr));	echo "<br>";		//不包含多维数组中元素
		var_dump(count($arr,true));	echo '<br>';	//可获取多维数组的子元素

			//结果：int(3) int(9) 
		
	
		//自定义函数实现功能1
		
		function mycount($arr){		//1：传入参数'目标数组'
			$num=0;					//2：设置一个变量来存储计数
			foreach($arr as $v){	//3：遍历数组
				$num++;				//4：每遍历一个将计算器累加1次
			}
			return $num;			//5：终止函数并返回计数变量
		}
		echo mycount($arr).'<br>';
			//结果：	3
		
		//自定义函数实现功能2 (可计算多维数组中子元素的个数)

		function mycount2($arr){			//1：传入参数目标数组
			$num=0;							//2：创建一个计算变量
			foreach($arr as $v){			//3：遍历数组
				$num++;						//4：计数变量每遍历一次累加一
				if(is_array($v)){			//5：如果遍历的值是一个数组
					$num += mycount2($v);	//6：计数变更num 累加 值是 递归函数的返回值
				}
			}
			return $num;					//7：终止函数并将计数变量返回给函数
		}
		var_dump(mycount2($arr));
			//结果：	int(9) 







	//===== is_array() 判断变量是否为一个数组
	
		$a=array(1,2);
		var_dump(is_array($a));
		
			//结果：	bool(true) 









//--- in_array() 查看数组中是否有指定的元素 及自制此功能函数</h1>";
	
	$arr = array(1,2,3,4,5,2); 
	print_r($arr);	echo "<br>";
	//系统函数in_array();

	echo in_array('3',$arr).'<br>';
	var_dump(in_array('3',$arr,true));
		// 结果：
		// 1
		// bool(false)
	



	//用in_array()判断后缀名
   	 $ext = pathinfo($_FILES['upload']['name'],PATHINFO_EXTENSION);
    	$allExt = array('jpeg','jpg','gif','png');
   	 if(!in_array($ext,$allExt)){
    	    exit('对不起，文件格式不对');
  	  }


		
	//实现in_array功能，带第三个参数
	
	$arr = array(1,2,3,4,5,2); 
	function test2($val,$arr,$b=false){		//1: 创建函数，传入'查找值','目标数组','默认不全等'
		foreach($arr as $k=>$v){			//2: 遍历数组得到数组中每个值
			if(!$b){						//3: 判断是否启用全等匹配，如果不启用全匹配
				if($v==$val){				//4: 如果遍历的值中有匹配查找值的
					return true;			//5: 则终止函数并返回一个true
				}
			}else{							//6: 判断是否启用全匹配，如果启用全匹配
				if($v===$val){				//7: 如果遍历的值中有全匹配查找值的
					return true;			//8: 则终止函数并返回一个true
				}
			}
		}
		return false;						//9: 遍历的值没有匹配查找值，就终止函数并返回一个false
	}
	
	var_dump(test2('2',$arr,true));	echo "<br>";
	var_dump(test2('2',$arr));

		// 结果：
		// bool(false)
		// bool(true) 






	//===== explode() 将字串以指定字符为界，分隔为多个元素存放在指定数组中。


		$mayao='1993-7-17';			//声明一个字符串
		$arr=explode('-',$mayao);		//将字串以‘-’为界分割成多个字串，并存入指定的数组内
		echo $arr[0].'<br>';
		echo $arr[1].'<br>';
		echo $arr[2];		//显示数组中分成三个字串的内容

			// 结果：
			// 1993
			// 7
			// 17 
*/



	//===== implode() 将数组中元素全并成字串

		$a = array('aa', 'bb', 'cc');
		print_r($a);	echo "<br>";
		
		$b = implode("", $a);		//直接连接
		$c = implode(",", $a);		//用 ',' 号连接
		
		print_r($a);	echo "<br>";
		echo $b.'<br>';
		echo $c.'<br>';
			// 结果：
			// Array ( [0] => aa [1] => bb [2] => cc )
			// Array ( [0] => aa [1] => bb [2] => cc )
			// aabbcc
			// aa,bb,cc


		
?>























<pre>


	//--- array_xxx 数组函数集合
	
		
		Table of Contents
		1.array_change_key_case — 返回字符串键名全为小写或大写的数组
		2.array_chunk — 将一个数组分割成多个
		3.array_column — 返回数组中指定的一列
		4.array_combine — 创建一个数组，用一个数组的值作为其键名，另一个数组的值作为其值
		5.array_count_values — 统计数组中所有的值出现的次数
		6.array_diff_assoc — 带索引检查计算数组的差集
		7.array_diff_key — 使用键名比较计算数组的差集
		8.array_diff_uassoc — 用用户提供的回调函数做索引检查来计算数组的差集
		9.array_diff_ukey — 用回调函数对键名比较计算数组的差集
		10.array_diff — 计算数组的差集
		11.array_fill_keys — 使用指定的键和值填充数组
		12.array_fill — 用给定的值填充数组
		13.array_filter — 用回调函数过滤数组中的单元
		14.array_flip — 交换数组中的键和值
		15.array_intersect_assoc — 带索引检查计算数组的交集
		16.array_intersect_key — 使用键名比较计算数组的交集
		17.array_intersect_uassoc — 带索引检查计算数组的交集，用回调函数比较索引
		18.array_intersect_ukey — 用回调函数比较键名来计算数组的交集
		19.array_intersect — 计算数组的交集
		20.array_key_exists — 检查给定的键名或索引是否存在于数组中
		21.array_keys — 返回数组中所有的键名
		22.array_map — 将回调函数作用到给定数组的单元上
		23.array_merge_recursive — 递归地合并一个或多个数组
		24.array_merge — 合并一个或多个数组
		25.array_multisort — 对多个数组或多维数组进行排序
		26.array_pad — 用值将数组填补到指定长度
		27.array_pop — 将数组最后一个单元弹出（出栈）
		28.array_product — 计算数组中所有值的乘积
		29.array_push — 将一个或多个单元压入数组的末尾（入栈）
		30.array_rand — 从数组中随机取出一个或多个单元
		31.array_reduce — 用回调函数迭代地将数组简化为单一的值
		32.array_replace_recursive — 使用传递的数组递归替换第一个数组的元素
		33.array_replace — 使用传递的数组替换第一个数组的元素
		34.array_reverse — 返回一个单元顺序相反的数组
		35.array_search — 在数组中搜索给定的值，如果成功则返回相应的键名
		36.array_shift — 将数组开头的单元移出数组
		37.array_slice — 从数组中取出一段
		38.array_splice — 把数组中的一部分去掉并用其它值取代
		39.array_sum — 计算数组中所有值的和
		40.array_udiff_assoc — 带索引检查计算数组的差集，用回调函数比较数据
		41.array_udiff_uassoc — 带索引检查计算数组的差集，用回调函数比较数据和索引
		42.array_udiff — 用回调函数比较数据来计算数组的差集
		43.array_uintersect_assoc — 带索引检查计算数组的交集，用回调函数比较数据
		44.array_uintersect_uassoc — 带索引检查计算数组的交集，用回调函数比较数据和索引
		45.array_uintersect — 计算数组的交集，用回调函数比较数据
		46.array_unique — 移除数组中重复的值
		47.array_unshift — 在数组开头插入一个或多个单元
		48.array_values — 返回数组中所有的值
		49.array_walk_recursive — 对数组中的每个成员递归地应用用户函数
		50.array_walk — 使用用户自定义函数对数组中的每个元素做回调处理
		51.array — 新建一个数组
		52.arsort — 对数组进行逆向排序并保持索引关系
		53.asort — 对数组进行排序并保持索引关系
		54.compact — 建立一个数组，包括变量名和它们的值
		55.count — 计算数组中的单元数目或对象中的属性个数
		56.current — 返回数组中的当前单元
		57.each — 返回数组中当前的键／值对并将数组指针向前移动一步
		58.end — 将数组的内部指针指向最后一个单元
		59.extract — 从数组中将变量导入到当前的符号表
		60.in_array — 检查数组中是否存在某个值
		61.key_exists — 别名 array_key_exists
		62.key — 从关联数组中取得键名
		63.krsort — 对数组按照键名逆向排序
		64.ksort — 对数组按照键名排序
		65.list — 把数组中的值赋给一些变量
		66.natcasesort — 用“自然排序”算法对数组进行不区分大小写字母的排序
		67.natsort — 用“自然排序”算法对数组排序
		68.next — 将数组中的内部指针向前移动一位
		69.pos — current 的别名
		70.prev — 将数组的内部指针倒回一位
		71.range — 建立一个包含指定范围单元的数组
		72.reset — 将数组的内部指针指向第一个单元
		73.rsort — 对数组逆向排序
		74.shuffle — 将数组打乱
		75.sizeof — count 的别名
		76.sort — 对数组排序
		77.uasort — 使用用户自定义的比较函数对数组中的值进行排序并保持索引关联
		78.uksort — 使用用户自定义的比较函数对数组中的键名进行排序
		79.usort — 使用用户自定义的比较函数对数组中的值进行排序
			
		
	
	
	
	
	
	

//===== 数组常量

	PHP：指示支持该常量的最早的 PHP 版本。常量	描述	PHP
	CASE_LOWER	用在 array_change_key_case() 中将数组键名转换成小写字母。	 
	CASE_UPPER	用在 array_change_key_case() 中将数组键名转换成大写字母。	 
	SORT_ASC	用在 array_multisort() 函数中，使其升序排列。	 
	SORT_DESC	用在 array_multisort() 函数中，使其降序排列。	 
	SORT_REGULAR	用于对对象进行通常比较。	 
	SORT_NUMERIC	用于对对象进行数值比较。	 
	SORT_STRING	用于对对象进行字符串比较。	 
	SORT_LOCALE_STRING	基于当前区域来对对象进行字符串比较。	4
	COUNT_NORMAL	 	 
	COUNT_RECURSIVE	 	 
	EXTR_OVERWRITE	 	 
	EXTR_SKIP	 	 
	EXTR_PREFIX_SAME	 	 
	EXTR_PREFIX_ALL	 	 
	EXTR_PREFIX_INVALID	 	 
	EXTR_PREFIX_IF_EXISTS	 	 
	EXTR_IF_EXISTS	 	 
	EXTR_REFS	 

</pre>






