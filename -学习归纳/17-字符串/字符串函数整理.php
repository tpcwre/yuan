<?php

//获取，查找
strspn(str,str,[start,length]) 查找字串2中字符在字串1中连续出现的个数
strcspn(str,str) 查找串1中连续且非串2中字符的个数
strrpos($str,char),strripos($str,char) 获取字符末位置
strpos($str,char),stripos($str,char) 获取字符首位置
strstr($str,char,[true]),stristr($str,char,[true]) 获取字符首位置到结束的内容或或从开始到字符首位置的内容
strrchr($str,char,[true]) 获取字符末位置到结束的内容，或字串开始到字符末位置的内容



//统计，比较
count_chars($str) 返回字串中所有字母出现的次数
str_word_count($str) 统计字串中含有的单词数
substr_count($str,char) 统计指定字符在字串中出现了多少次
mb_strlen($str,'type')  以指定编码获取字符串长度
strlen($str) 获取字串的长度
similar_text($str1,$str2,[variable]) 获取两个字串相似度(相同字符的数量及百分比)
strnatcmp($str1,$str2),strnatcasecmp($str1,$str2) 自然顺序比较两字串首对差异的字符
strncmp($str1,$str2,number) 前N个位置获取首对有差异的字符，返回差值
strcmp($str1,$str2),strcasecmp($str1,$str2) 前N个位置获取首对有差异的字符，返回差值





//截取,替换
strtr($str,$arr) 数组方式替换字串中的指定内容
substr_replace($str,'char',start,[count])   替换字串中被截取的字串
str_ireplace(char,char,$str,[varibale]) 或 str_replace() 替换字串中指定内容
substr($str,start,count) 	截取字串
mb_substr($str,start,count,'type') 截取字符串并指定其编码
nl2br($str) 将字串中 \n 替换成<br>


//分隔，合并
implode([char],$str) 将数组各元素用指定字符连接成一个字串
explode(char,$str,[number]) 	将字串以指定字符分割成数组
strtok($str,char) 切除字串中指定字符以后的内容
chunk_split($str,length,[char]) 将字串按指定长度分隔成小块（空格或指定符号分隔） 
str_split($str,[number]) 将字串按指定长度分割成数组




//空格(字符)处理，大小写，格式化
vsprintf($str,$arr) 返回格式化字符串
trim($str,[str]) 去除字串两侧的空格或指定字符
ltrim($str,[str]) 去除字串中左侧的空格或指定字符
rtrim($str,[str]) 去除字串中右侧的空格或指定字符 ,别名： chop
ucwords($str)	字串中每个单词首字母大写
ucfirst($str)	字串首字母大写
lcfirst($str) 字符串首字母小写
strtoupper($str) 将字串转为大写
strtolower($str) 将字串转为小写
wordwrap($str,number,tags) 以指定长度将字串折行处理
number_format($number,[number],[char],[char])	千位分组格式化数字
str_shuffle($str) 随机打乱字串
strrev($str) 反转字串
str_repeat($str,number) 将字串重复指定次数
str_pad($str,number,str,[type]) 用指定字符填充字串到指定长度
<<<XX 大字串的声明




//特殊字符处理，标签处理
addslashes($str) 	给 ",", \ 前加反斜线
addcslashes($str,cahr)	给字串中指定字符前添加反斜线
stripslashes($str) 去除字串中所有反斜线
stripcslashes($str) 	去除字串中的反斜线，及\r,\n,\v等,虽不显示，但效果还在
quotemeta($str) 	将字串中的$,^,*,(,),+,[,],\,.,? 前面添加反斜线
strip_tags($str,[tag]) 	删除字串中的html,xml,php标签
htmlentities($str)	将标签转为实体,标签不变但失去功能（同htmlspecialchars）
htmlspecialchars($str) 预定义字符转html实体,标签不变但失去功能(同htmlentities)
html-entity_decode($str)	将实体字符转成html标签




//URL与路径处理
pathinfo($url,type) 返回文件路径信息
dirname($url)  获取路径中的目录部分（除文件名外的路径）
http_build_query($arr,[prefix]) 将数组转换成URL键值字串
parse_str($str,arr) 将URL传值参数转换成数组
urlencode($str),urldecode($str) 对字串进行url编码和解码
parse_url($url)	将URL地址解析成数组



//转换,加密
ip2long($str),long2ip($str) 将ip字串转为int，或将int转为ip
ord($str) 将字符转成ASCLL码
chr(number)	将ASCLL 码转成字符
sha1($str) 将字串加密
md5($str) 将字串加密









//-- <<<XX 大字串的声明方式 
	$a =<<<XXX
		<?php 
			phpinfo();
XXX;
	echo htmlentities($a);





//-- strspn(str,str,[start,length]) 查找字串2中字符在字串1中连续出现的个数
	//注意：这里只会统计连续出现字串2中字符的个数，如出现了非串2中的字符，统计将会结束。
	$a="abcaa";
	$b="abc";
	echo strspn($a,$b);		//5 连续找到5个

	$a="abcada";
	$b="abc";
	echo strspn($a,$b);		//连续找到4个

	$a="abcdaa";
	$b="abc";
	echo strspn($a,$b);		//连续找到3个

	
	
	
	
//-- strcspn(str,str) 查找串1中连续且非串2中字符的个数
	$a="abcdefg";
	$b="dg";
	echo strcspn($a,$b);		//字串1中连续3个字符未匹配字串2

	$a="abcdefg";
	$b="efg";
	echo strcspn($a,$b);		//字串1中连续4个字符未匹配字串2




//-- strtr($str,$arr) 数组方式替换字串中的指定内容
	$a = "abc def";
	//echo strtr($a,array("b"=>"g"));		//agc def	将b换成了g
	//echo strtr($a,array(" "=>""));		//abcdef	将空格转成空（去除了中间的空格）
	echo strtr($a,array("c d"=>"kk"));		//abkkef




//-- vsprintf($str,$arr) 返回格式化字符串

		$string =<<<THESTRING
		I like the state of %1\$s <br /> 
		I picked: %2\$d as a number, <br /> 
		I also picked %2\$d as a number again <br /> 
		%3\$s<br />
THESTRING;

		$returnText = vprintf($string,array("Oregon","7","I Love Oregon"));
				//注解： 
					// %1 = Oregon
					// %2 = 7
					// %3 = I Love Oregon
					
		echo $returnText; 
				//结果：
					//I like the state of Oregon
					//I picked: 7 as a number,
					//I also picked 7 as a number again
					//I Love Oregon
					//132















//-- wordwrap($str,number,tags) 以指定长度将字串折行处理

	$text = "The quick brown fox jumped over the lazy dog.";
	echo wordwrap($text,10,"<br><br>");
		结果：
			The quick

			brown fox

			jumped

			over the

			lazy dog.
			
			



//-- sha1($str) 将字串加密
	$a="a";
	echo sha1($a);



//-- md5($str) 将字串加密
	$a="a";
	echo md5($a);






//-- http_build_query($arr,[prefix]) 将数组转换成URL键值字串
	$a = array("aa","bb","cc"=>"ccc");
	//echo http_build_query($a);		//0=aa&1=bb&cc=ccc
	echo http_build_query($a,"index_");	//index_0=aa&index_1=bb&cc=ccc





//-- ip2long($str),long2ip($str) 将ip字串转为int，或将int转为ip 

	$a = "192.168.1.111";
	echo $b = ip2long($a);		// -1062731409
	echo $c = long2ip($b);		// 192.168.1.111
	



//-- urlencode($str),urldecode($str) 对字串进行url编码和解码

	$a = "我是一个字符串";
	echo $b = urlencode($a);
	echo $c = urldecode($b);
	



//-- parse_str($str,arr) 将URL传值参数转换成数组

	$a= "id=23&name=abc&age=28";
	parse_str($a,$arr);
	print_r($arr);
			Array
			(
				[id] => 23
				[name] => abc
				[age] => 28
			)







//-- pathinfo($url,type) 返回文件路径信息
	$u="http://www.baidu.com/obj/index.php";
	echo pathinfo($u,PATHINFO_DIRNAME);			//http://www.baidu.com/obj
	echo pathinfo($u,PATHINFO_BASENAME);		// index.php
	echo pathinfo($u,PATHINFO_FILENAME);		// index
	echo pathinfo($u,PATHINFO_EXTENSION);		// php


	


//-- count_chars($str) 返回字串中所有字母出现的次数
	$a = "abclskajefheskjf";
	$arr = count_chars($a);	//返回的是一个从0到255的ASCLL码统计的数组
	print_r($arr);		//如 a 出现了两次，统计中就是97 对应的值为 2
		    [97] => 2
			[98] => 1
			[99] => 1
			[100] => 0
			[101] => 2
			[102] => 2


			
			
//-- parse_url($url)	将URL地址解析成数组
	$url="http://www.baidu.com/obj/img/3024.html?id=32&name=abc";
	$arr=parse_url($url);
	var_dump($arr);
		array(4) {
		  ["scheme"]=>
		  string(4) "http"
		  ["host"]=>
		  string(13) "www.baidu.com"
		  ["path"]=>
		  string(18) "/obj/img/3024.html"
		  ["query"]=>
		  string(14) "id=32&name=abc"
		}







//-- str_word_count($str) 统计字串中含有的单词数
	$a="this is a very builltfull gril";
	echo str_word_count($a);		//6




//-- strrpos($str,char),strripos($str,char) 获取字符末位置

	$a="abecdefg";
	echo strrpos($a,"e");		//5
	
	$a="abfcdefg";
	echo strripos($a,"F");		//6





//-- strpos($str,char),stripos($str,char) 获取字符首位置
	$a="abcdefg";
	echo strpos($a,"e");	//4
	
	$a = "abcdefg";
	echo stripos($a,"C");	//2




	

//-- strstr($str,char,[true]),stristr($str,char,[true]) 获取字符首位置到结束的内容或或从开始到字符首位置的内容
	strstr()	别名：strchr()
	
	stristr($str,char,[true])	不区分大小写
	strstr($str,char,[true])	区分大小写
	
	$a = "abcdefg";
	echo strstr($a,"b");		//bcdefg	从字串首个b 截取到结尾
	echo strstr($a,"b",true);	//a			从字串开头截取至首个字符b(前)


	

//-- strrchr($str,char,[true]) 获取字符末位置到结束的内容，或字串开始到字符末位置的内容
	$a="abcdefg";
	echo strrchr($a,"e");		// 字符末位置到结束的内容
	echo strchr($a,"e",true);	// 字串开始到字符末位置的内容





//-- similar_text($str1,$str2,[variable]) 获取两个字串相似度(相同字符的数量及百分比)
	$a="abcdefg";
	$b="abk";
	echo similar_text($a,$b);		//获取匹配到的个数
	
	similar_text($a,$b,$c);
	echo $c;					//获取匹配到的百分比

	$a = "abcdefghijk";
	$b = "sdfjoein;ae";
	similar_text($a,$b,$res);
	echo $res;		//18.181818181818
	similar_text($b,$a,$res);
	echo $res;		//27.272727272727
	
	
	

//-- substr_replace($str,'char',start,[count])   替换字串中被截取的字串
	$a="abcdefg"; 
	$b="ppp";
	echo substr_replace($a,"ppp",-2);		//abcdeppp		将倒数第二个字符到结尾的内容替换成ppp
	echo substr_replace($a,"ppp",2);	//abppp  	将第二个字符到结尾的内容替换成ppp
	echo substr_replace($a,"ppp",1,5);	//apppg		将下标为1-5的字符内容替换成ppp

	//--字符串的增

	$str="abcdefg";
	echo substr_replace($str,"KKK",3,0); 
	//abcKKKdefg 


	//--字符串的删
	$str="abcdefg";
	echo substr_replace($str,"",2);	//ab   
	//echo substr_replace($str,"",2,-1); 
	//abg 


	//--字符串的改
	$str="abcdefg";
	echo substr_replace($str,"aa",1,2);	
	//aaadefg 
	
	
	
	
	
	
//-- mb_substr($str,start,count,'type') 截取字符串并指定其编码
	$a="abcdefg";
	echo mb_substr($a,3,3,"utf-8");		// def	从下标3 开始，截取3个字符，并指定编码为utf-8
	
	substr 和 mb_substr 区别 ：
		//UTF-8编码下
		$abc="关雄波";
		echo strlen($abc);//输出9
		echo mb_strlen($abc,'utf8');//输出3

	
	
//-- substr($str,start,count) 	截取字串
	$a="abcdefg";
	//echo substr($a,"3");	//defg	从下标3 截取至结尾
	//echo substr($a,"-3");	//efg	从倒数第三个截取至结尾 
	//echo substr($a,2,3);	//cde 	从下标2开始，截取后面的三个字符
	echo substr($a,-3,2);	//ef	从倒数第3个字符，截取2个字符
	
	
	
//-- mb_strlen($str,'type')  以指定编码获取字符串长度
	$a = "在下天下无乱敌";
	echo strlen($a);			//21
	echo mb_strlen($a,"gbk");	//11
	echo mb_strlen($a,"utf-8");	//7
	echo mb_strlen($a,"unicode");	//10
	
	
	
	
	
	
//-- strlen($str) 获取字串的长度
	$a="abcdefg";
	echo strlen($a);		//7

	
	
	
	
	
	
	
	
	
	
	
	
	
	

//-- substr_count($str,char) 统计指定字符在字串中出现了多少次
	$a="aluukasfasaluusajfluu";
	echo substr_count($a,"uu");		//3



	
//-- str_ireplace(char,char,$str,[varibale]) 或 str_replace() 替换字串中指定内容
	
	str_ireplace(char,char,$str,[varibale]) 替换字串中指定内容,不区分大小写
	$a="Abcdefg";
	echo str_ireplace("a","jjj",$a);		//jjjbcdefg
	$y1=array("b","c");
	$y2=array("m","n");
	echo str_ireplace($y1,$y2,$a,$num);		//Amndefg
	echo $num;			//2 替换的个数




	str_replace(char,char,$str,[varibale]) 替换字串中指定内容,区分大小写
	$a = "abcdefg";
	echo str_replace("de","ggg",$a);		//abcgggfg
		
	echo str_replace($y1,$y2,$a,$num);		//Amndefg
	echo $num;			//2 替换的个数








//-- implode([char],$str) 将数组各元素用指定字符连接成一个字串
	$a = array("aa","bb","cc");
	echo implode($arr);		//不指定字符直接连接每个元素
	echo implode(",",$a);	//指定字符来连接每个元素







//-- explode(char,$str,[number]) 	将字串以指定字符分割成数组
	$a = "ab cd ef gh ij";
	$b = explode(' ',$a);	//以指定字符分割
	print_r($b);
		Array
		(
		    [0] => ab
		    [1] => cd
		    [2] => ef
		    [3] => gh
		    [4] => ij
		)

	$c = explode(' ',$a,2);	//指定将字串分割为2个元素的数组
	print_r($c);
		Array
		(
		    [0] => ab
		    [1] => cd ef gh ij
		)


	$d = explode(' ',$a,-3); //分割数组后并去除后三个元素
	print_r($d);
		Array
		(
		    [0] => ab
		    [1] => cd
		)





//--  strtok($str,char) 切除字串中指定字符以后的内容
	$a="abceefg";
	var_dump(strtok($a,"e"));		// abc






//-- chunk_split($str,length,[char]) 将字串按指定长度分隔成小块（空格或指定符号分隔） 
	$a="abcdefg";
	//echo chunk_split($a,3);		// abc def g 	默认用空格分隔
	echo chunk_split($a,3,"-");		// abc-def-g-	使用指定符号分隔


	
	
	


//-- strnatcmp($str1,$str2),strnatcasecmp($str1,$str2) 自然顺序比较两字串首对差异的字符

	//strnatcasecmp($str1,$str2) 自然顺序获取首对有差异的字符，返回差值，不区分大小写
	$a="Gbc";
	$b="abc";
	echo strnatcasecmp($a,$b);		//1
	echo strnatcasecmp($b,$a);		//-1

		//两组字串以下标位置逐个字符做比较，不区分大小写
		按下标位置只比较首对出现差异的字母，后面全部忽略 
		 两字串完全相同时，返回0
		 有差异时，变量1字母顺序减去变量字母顺序2,结果为正时返回1，结果为负时返回-1
		 有差异时只对首对差异比较，以后不计，
		 大写的顺序值小于小写的顺序值
	


	//strnatcmp($str1,$str2) 自然顺序获取首对有差异的字符，返回差值，区分大小写
	$a="abdsdkjfsldf";
	$b="abAsdf";
	echo strnatcmp($a,$b);		//1
	echo strnatcmp($b,$a);		//-1

	//两组字串以下标位置逐个字符做比较，
		按下标位置只比较首对出现差异的字母，后面全部忽略 
		两字串完全相同时，返回0
		有差异时，变量1字母顺序减去变量字母顺序2,结果为正时返回1，结果为负时返回-1
		有差异时只对首对差异比较，以后不计，




//-- strncmp($str1,$str2,number) 前N个位置获取首对有差异的字符，返回差值
	//strncmp($str1,$str2,number) 前N个位置获取首对有差异的字符，返回差值,区分大小写
	$a="abcdefg";
	$b="abcflje";
	echo strncmp($a,$b,5);	//-1
	echo strncmp($b,$a,5);	// 1
	//按下标位置只比较首对出现差异的字母，后面全部忽略 
	//只比较两字串指定前N个字符
	//两字串完全相同时，返回0 。
	//有差异时，只做首对有差异的字符比较，其后不计。差异比较时只返回1或-1 当变量1的字母顺序大于变量2的字母顺序时返回1，反之则返回-1. 如A 和 B 比较，返回-1，反之则返回1、另 a 的顺序比A大
	





	//strncasecmp($str1,$str2,number) 	前N个位置获取首对有差异的字符，返回差值，不区分大小写
	$a="abcdefg";
	$b="abcaskef";
	echo strncasecmp($a,$b,4);	// 3
	echo strncasecmp($b,$a,4);	// -3
	//两组字串以下标位置逐个字符做比较，只比较指定的下标范围的字符
		按下标位置只比较首对出现差异的字母，后面全部忽略 
		 两字串完全相同时，返回0
		 有差异时只对首对差异比较，以后不计，返回变量1的字母顺序减去变量2的字母顺序，如 a 和 f 的比对结果为-5 ，f 和 a 的比对结果为5







//-- strcmp($str1,$str2),strcasecmp($str1,$str2) 前N个位置获取首对有差异的字符，返回差值

	//strcmp($str1,$str2) 获取首对有差异的字符，返回差值，区分大小写
	$a="AgFc";
	$b="agGoe";
	echo strcmp($a,$b);		// -1
	echo strcmp($b,$a);		//  1
	//按下标位置只比较首对出现差异的字母，后面全部忽略 
	//两字串完全相同时，返回0 。
	//有差异时，只做首对有差异的字符比较，其后不计。差异比较时只返回1或-1 当变量1的字母顺序大于变量2的字母顺序时返回1，反之则返回-1. 如A 和 B 比较，返回-1，反之则返回1、另 a 的顺序比A大



	//strcasecmp($str1,$str2) 获取首对有差异的字符，返回差值,不区分大小写
	$a = "fbedefghijklaaa";
	$b = "abcdefghijklaakfdsfdfds";
	echo strcasecmp($a,$b);		//  5
	echo strcasecmp($b,$a);		// -5
	//两组字串以下标位置逐个字符做比较，
		按下标位置只比较首对出现差异的字母，后面全部忽略 
		 两字串完全相同时，返回0
		 有差异时只对首对差异比较，以后不计，返回变量1的字母顺序减去变量2的字母顺序，如 a 和 f 的比对结果为-5 ，f 和 a 的比对结果为5

		 
		 
		 

		 
		 
//-- ord($str) 将字符转成ASCLL码
	$a="a";
	echo ord($a);		// 97

	
	
	
//-- chr(number)	将ASCLL 码转成字符
	$a=89;
	echo chr($a);		// Y
	
	




//-- stripslashes($str) 去除字串中所有反斜线
	$a = "\\\\\\\\\\\\\\\0\\\\\\\\a\\\\b\\\c\\d\e";		
	echo stripslashes($a);			// \\\\0\\a\b\cde
		注：去除字串中的反斜线，但每4个连续的反斜线会保留1个反斜线 

		
	
	
//-- addslashes($str) 	给 ",", \ 前加反斜线
	$a="\a\\b\\\c\\\\d\\\\\e------"b\bb"";
	echo $b = addslashes($a);		//\\a\\b\\\\c\\\\d\\\\\\e
		//注： 原有反斜线个数为奇数时才会加反斜线，原反斜线个数为偶数时不会加。

	
	

		
		
//-- stripcslashes($str) 	去除字串中的反斜线，及\r,\n,\v等,虽不显示，但效果还在
	$a="\\\\k\\\\\\\\k\\\\\\\\\\\\kva\rbc\kd\wkf\naa\kkke  vv\vab\r\n";
	echo stripcslashes($a);
		\k\\k\\\va
		bckdwkf
		aakkke  vvab
		 注：每4个连续的反斜线会保留1个




//-- addcslashes($str,cahr)	给字串中指定字符前添加反斜线 
	$a = "anbcdefnghijklmn";
	echo addcslashes($a,"nbh");		//a\n\bcdef\ng\hijklm\n

	
	

//-- quotemeta($str) 	将字串中的$,^,*,(,),+,[,],\,.,? 前面添加反斜线
	$a="!@#$%^&*()_+1234567890qwertyuiop[]\{}|asdfghjkl;:zxcvbnm,./<>?";
	echo quotemeta($a);
		//!@#\$%\^&\*\(\)_\+1234567890qwertyuiop\[\]\\{}|asdfghjkl;:zxcvbnm,\./<>\?


		
		

//-- strip_tags($str,[tag]) 	删除字串中的html,xml,php标签
	$a="<script>alert(1);</script>";
	echo strip_tags($a);			//去除所有标签
	echo strip_tags($text, '<a>');	//保留指定标签



//-- nl2br($str) 将字串中 \n 替换成<br>
	echo $a = "aaaa\nbbbb";
	echo nl2br($a);


	
	
	
//-- htmlentities($str)	将标签转为实体,标签不变但失去功能（同htmlspecialchars）
	$a="<script>alert("a");</script>";
	echo htmlentities($a);		//<script>alert("a");</script>


	



//-- htmlspecialchars($str) 预定义字符转html实体,标签不变但失去功能(同htmlentities)
	$a="<script>alert("a");</script>";
	echo htmlspecialchars($a);		//<script>alert("a");</script>
	
	将标签转为实体，标签正常显示，但失去标签的意义了
	测试效果和htmlentities一样，没搞明白它俩有什么区别
	
	可用html_entity_decode() 进行实体反转
	echo $a = "<b>vvv</b>";
	echo $b = htmlentities($a);
	echo $c = html_entity_decode($b);

	
	
	
	

//-- html-entity_decode($str)	将实体字符转成html标签
	可以将 htmlspecialchars() 和 htmlentities() 实体化的字串 反反实体化
	$a = "&lt;b&gt;bbb&lt;/b&gt;";
	echo html_entity_decode($a);
	
	$a = "<i>aaaaaaaaaa</i>";
	echo $a.'<br>';
	echo $b = htmlentities($a).'<br>';
	echo $c = htmlspecialchars($a).'<br>';
	echo $d = html_entity_decode($b).'<br>';
	echo $e = html_entity_decode($c);
	
	
	
	


	



//-- ucwords($str)	字串中每个单词首字母大写
	$a="this is a new days ";
	echo ucwords($a);		//This Is A New Days 

	
	
	

//-- ucfirst($str)	字串首字母大写
	$a="abc";
	echo ucfirst($a);		//Abc


	
	
//-- lcfirst($str) 字符串首字母小写

	$str="ABC DEFG";

	echo $str.'<br>';

	echo lcfirst($str).'<br>';
	


//-- strtoupper($str) 将字串转为大写
	$a = "abcdefg";
	echo strtoupper($a);		//ABCDEFG




//-- strtolower($str) 将字串转为小写
	$a = "ABCD";
	echo strtolower($a);		//abcd






//-- number_format($number,[number],[char],[char])	千位分组格式化数字

	number_format(数值,[小数保留几位],[小数分隔符],[整数位分隔符])

	//默认舍去小数部分，大数分隔符默认使用','
	$english_format_number = number_format($number);
	echo $english_format_number.'<br>';
	// 1,235

	//取小数点后两位,小数分隔符用','，大数位分隔符为一个空格
	$nombre_format_francais = number_format($number, 2, ',', ' ');
	echo $nombre_format_francais.'<br>';
	// 1 234,56

	//--取小数点后两位,小数分隔符用'.'，大数位分隔符为空
	$number = 1234.5678;	
	$english_format_number = number_format($number, 2, '.', '');
	echo $english_format_number;
	// 1234.57






//-- str_shuffle($str) 随机打乱字串
	$a="abcdefg";
	echo str_shuffle($a);		//bcaedgf
	
	
	
	
	
//-- strrev($str) 反转字串
	$a = "abcdefg";
	echo $b = strrev($a);		//gfedcba
	
	

	
	
//-- str_split($str,[number]) 将字串按指定长度分割成数组
	$a = "abcdefhijklm";
	$b = str_split($a);			//将每个字符当做一个元素转换成数组
	$b = str_split($a,"7");		//将字串以每3个字符为一组分割成数组 
	var_dump($b);
			array(2) {
			  [0]=>
			  string(7) "abcdefh"
			  [1]=>
			  string(5) "ijklm"
			}
	
	
	
	

//-- dirname($url)  获取路径中的目录部分（除文件名外的路径）
	$u = "http:www.baidu.com/aaa/bbb/ccc/a.jpg";
	echo dirname($u);		//http:www.baidu.com/aaa/bbb/ccc
	
	
	
	
	
//-- str_repeat($str,number) 将字串重复指定次数
	$a = "abc";
	echo str_repeat($a,3);		//abcabcabc
	
	
	
	
	
	
//-- str_pad($str,number,str,[type]) 用指定字符填充字串到指定长度
	$a="aaa";
	echo str_pad($a,10,"c");		//aaaccccccc		
	echo str_pad($a,8,"#",STR_PAD_LEFT);		//#####aaa
	echo str_pad($a,8,"#",STR_PAD_RIGHT);		//aaa#####
	echo str_pad($a,8,"#^",STR_PAD_BOTH);		//#^aaa#^#
	
	

	
//-- trim($str,[str]) 去除字串两侧的空格或指定字符
	$a= "  ccaacc   ";
	echo "b".trim($a)."b";		//bccaaccb
	
	$c="ccaacc";
	echo trim($c,"cc");			//aa
	
	



//-- ltrim($str,[str]) 去除字串中左侧的空格或指定字符

	$a="  a  ";
	echo "b".ltrim($a)."b";		//ba  b
	
	$c="aaccaa";
	echo ltrim($c,"aa");		//ccaa
	


//-- rtrim($str,[str]) 去除字串中右侧的空格或指定字符 ,别名： chop

	$a="  a  ";
	echo "b".rtrim($a)."b";		//b  ab

	$c = "aaccaa";
	echo rtrim($c,"a");			//aacc
	

















