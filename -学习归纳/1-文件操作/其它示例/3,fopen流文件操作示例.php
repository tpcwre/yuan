<?php
	header("content-type:text/html;charset=utf-8");

//===== fopen() 打开文件获得文件资源
//===== r 以只读方式打开文件，将指针指向文件头，文件不在报错。
//===== r+ 以读写方式打开文件，将指针指向文件头，以覆盖方式从指针处定稿，文件不在报错。
//===== w 写入方式打开文件，将指针指向文件头部，大小截取为0，文件不在会创建
//===== w+ 读写方式打开文件，将指针指向文件头部，大小截取为0 ，文件不在会创建
//===== a 写入方式打开文件，将指针指向文件末尾，追加写入方式，文件不在会创建
//===== a+ 读写方式打开文件，将指针指向文件末尾，追加写入方式，文件不在会创建

//===== fgets 一次获取一行数据，指针下移
//===== fgetc() 每次读取一个字符，指针下移
//===== fread() 每次读取指定个数的字符

//===== feof() 判断文件是否读取到尾部或文件是否出错
//===== rewind() 将文件指针移到开头
//===== fwrite() 把内容写入到文件指针处
//===== fclose() 关闭资源


	$fp = fopen('./one','r+');  	// fopen() 打开一个文件的资源
	$arr1 = fgets($fp);			
	echo $arr1.'<br>';		
	$arr1 = fgets($fp);	
	echo $arr1.'<Br>';	
	$arr1 = fgets($fp);	
	echo $arr1.'<Br>';	
	$arr1 = fgets($fp);	
	echo $arr1.'<Br>';	
	$arr1 = fgets($fp);			// fgets() 每次读取一行
	echo $arr1.'<Br>';	
	if(feof($fp)){				// 判断数据指针是否到达末尾
		echo '文件中的数据以读取完毕';
	}
	rewind($fp);				// rewind() 将指针重置
	echo "<br>";
	echo fgetc($fp).'<br>';		// fgetc() 每次读一个字符
	echo fgetc($fp).'<br>';		
	echo fgetc($fp).'<br>';		

	echo fread($fp,3).'<br>';	// fread() 每次读指定个数的字符
	echo fread($fp,3).'<br>';
	echo fread($fp,3).'<br>';


	fwrite($fp,'aabbcc');		// fwrite() 把内容写入到文件指针处
	
	fclose($fp);				// fclose() 关闭资源
	

	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

?>