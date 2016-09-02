<?php 
header('Content-type:text/html;charset=utf-8');




	


	


	
	// 5. 查找元素，返回下标
		$arr = array('a','b','c','d','e');
		echo array_search('c',$arr);  //返回2
		echo '<hr/>';

	
	// 6. 查找元素，是否存在数组中
		$arr = array('a','b','c','d','e');
		in_array('c',$arr); //返回true;
		echo '<hr/>';

	
	// 7. 移除数组中重复元素
		$arr = array('a','b','c','b','a');
		$brr = array_unique($arr);  //原数组不变，新数组唯一不重复
		print_r($brr);	//  $brr = array('a','b','c') 
		echo '<hr/>';

	
	// 8. 下标是否存在指定的数组中
		$arr = array('a'=>'苹果','b'=>'西瓜','c'=>'菠萝');
		array_key_exists('b',$arr);  //返回 true;
		echo '<hr/>';

	
	// 9. 在数组开头插入一个或多个单元  
		$arr = array('a','b','c');
		array_unshift($arr,'x','y','z');  //返回之后数组元素个数
		print_r($arr);  //插入内容被理解为一个一个元素，数组也不例外。
		echo '<hr/>';

	
	// 10. 将数组开头的单元移出数组
		$arr = array('a','b','c');
		array_shift($arr);   // 返回被移出的元素值
		print_r($arr);    // 数字下标从零开始，文字下标不变
		echo '<hr/>';

	
	// 11. 在数组最后插入一个或多个单元（术语叫：入栈）
		$arr = array('a','b','c');
		array_push($arr,'x','y','z');
		print_r($arr);  //  $arr = array('a','b','c','x','y','z');
		echo '<hr/>';
		// 如果用 array_push() 来给数组增加一个单元，还不如用 $array[] = ，因为这样没有调用函数的额外负担。 

	
	// 12. 将数组最后一个单元弹出（术语叫：出栈）
		$arr = array('a','b','c');
		array_pop($arr);  // 返回 弹出元素值
		print_r($arr); // $arr = array('a','b');
		echo '<hr/>';

	
	// 13. 从数组中随机取出一个或多个单元
		$arr = array('a','b','c');
		$aa = array_rand($arr,2);  //随机返回2个下标
		print_r($aa);
		echo '<hr/>';


	// 14. 对数组值排序，保持索引关系
		
		$a = array('x'=>10,'y'=>30,'z'=>20);
		asort($a); // $a=array('x'=>10,'z'=20,'y'=>30);
		print_r($a);
		echo '<hr/>';

		
		
	// 21. 使用一个字符串分割另一个字符串
	$str = 'aa##bb##cc';
	$arr = explode('##',$str);  // array('aa','bb','cc')
	$arr = explode('#',$str);    // array('aa','','bb','','cc')
	$arr = explode('#','abcd');     // array('abcd')
	$arr = explode('#','');             // array('')
	
	
	
	
	
	// 22. 将一个一维数组的值转化为字符串
	$arr = array('a','b','c','d');
	$str = implode($arr);  // 'abcd'
	
	
	
	
	
	
		
			

	
		
 ?>