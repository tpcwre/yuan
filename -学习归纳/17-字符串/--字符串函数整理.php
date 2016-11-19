<?php
echo '<pre>';





	/*

//-- strtr() 用指定字符替换字串中的指定内容
	$a = 'abc def';
	//echo strtr($a,array('b'=>'g'));		//agc def	将b换成了g
	//echo strtr($a,array(' '=>''));		//abcdef	将空格转成空（去除了中间的空格）
	echo strtr($a,array('c d'=>'kk'));		//abkkef




//-- vsprintf — 返回格式化字符串

		$string =<<<THESTRING
		I like the state of %1\$s <br /> 
		I picked: %2\$d as a number, <br /> 
		I also picked %2\$d as a number again <br /> 
		%3\$s<br />
THESTRING;

		$returnText = vprintf($string,array('Oregon','7','I Love Oregon'));
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





//-- similar_text()  计算两个字串的相似度
	$a = 'abcdefghijk';
	$b = 'sdfjoein;ae';
	similar_text($a,$b,$res);
	echo $res;		//18.181818181818
	similar_text($b,$a,$res);
	echo $res;		//27.272727272727









//-- wordwrap() 以指定长度将字串折行处理

	$text = "The quick brown fox jumped over the lazy dog.";
	echo wordwrap($text,10,'<br><br>');
			The quick

			brown fox

			jumped

			over the

			lazy dog.
			
			



//-- sha1() 将字串加密
	$a='a';
	echo sha1($a);



//-- md5() 将字串加密
	$a='a';
	echo md5($a);






//-- http_build_query() 将数组转换成URL键值字串
	$a = array('aa','bb','cc'=>'ccc');
	//echo http_build_query($a);		//0=aa&1=bb&cc=ccc
	echo http_build_query($a,'index_');	//index_0=aa&index_1=bb&cc=ccc





//-- ip2long(),long2ip() 将ip字串转为int，或将int转为ip 

	$a = '192.168.1.111';
	echo $b = ip2long($a);		// -1062731409
	echo $c = long2ip($b);		// 192.168.1.111
	



//-- urlencode(),urldecode() 对字串进行url编码和解码

	$a = '我是一个字符串';
	echo $b = urlencode($a);
	echo $c = urldecode($b);
	



//-- parse_str() 将字串解析成变量

	$a= "id=23&name=abc&age=28";
	parse_str($a,$arr);
	print_r($arr);
			Array
			(
				[id] => 23
				[name] => abc
				[age] => 28
			)







//-- pathinfo() 返回文件路径信息
	$u='http://www.baidu.com/obj/index.php';
	echo pathinfo($u,PATHINFO_DIRNAME);			//http://www.baidu.com/obj
	echo pathinfo($u,PATHINFO_BASENAME);		// index.php
	echo pathinfo($u,PATHINFO_FILENAME);		// index
	echo pathinfo($u,PATHINFO_EXTENSION);		// php




//-- count_chars() 返回字串中所有字母出现的次数
	$a = 'abclskajefheskjf';
	$arr = count_chars($a);	//返回的是一个从0到255的ASCLL码统计的数组
	print_r($arr);		//如 a 出现了两次，统计中就是97 对应的值为 2
		    [97] => 2
			[98] => 1
			[99] => 1
			[100] => 0
			[101] => 2
			[102] => 2


//-- 解析 url  的组成部分
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




//-- strlen() 获取字串的长度
	$a='abcdefg';
	echo strlen($a);		//7



//-- str_word_count() 统计字串中含有的单词数
	$a='this is a very builltfull gril';
	echo str_word_count($a);		//6



//-- strripos() 返回字串中指定字符最后一次出现的位置，不区分大小写
	$a='abfcdefg';
	echo strripos($a,'F');		//6

//-- strrpos()  返回字串中指定字符最后一次出现的位置，区分大小写
	$a='abecdefg';
	echo strrpos($a,'e');		//5
	





//-- stripos() 返回字串中指定字符首次出现的位置，不区分大小写
	$a = 'abcdefg';
	echo stripos($a,'C');	//2


//-- strpos() 返回字串中指定字符首次出现的位置,区分大小写
	$a='abcdefg';
	echo strpos($a,'e');	//4



//-- stristr() 返回字串中指定字符首次出现位置到结束的内容,不区分大小写
	$a='abcdefg';
	echo stristr($a,D);		//defg

	
	
	

//-- strstr(),strchr() 返回字串中指定字符首次出现位置到结束的内容,区分大小写
	$a = 'abcdefg';
	//echo strstr($a,'b');		//bcdefg	从字串首个b 截取到结尾
	//echo strchr($a,'c');		//cdefg		从字串首个c 截取到结尾 
	echo strstr($a,'b',true);	//a			从字串开头截取至首个字符b(前)



//-- strrchr() 返回字串中指定内容最后出现的位置到结束的内容
	$a='abcdefg';
	echo strrchr($a,'e');		//efg





//-- similar_text() 获取两个字串相同字符的数量
	$a='abcdefg';
	$b="abk";
	echo similar_text($a,$b);		//2




//-- substr_replace()   替换字串中被截取的字串
	$a='abcdefg'; 
	$b='ppp';
	//echo substr_replace($a,'ppp',-2);		//abcdeppp		将倒数第二个字符到结尾的内容替换成ppp
	//echo substr_replace($a,'ppp',2);	//abppp  	将第二个字符到结尾的内容替换成ppp
	echo substr_replace($a,'ppp',1,5);	//apppg		将下标为1-5的字符内容替换成ppp

	
	
	
	
	
	
//-- mb_substr() 截取字符串并指定其编码
	$a='abcdefg';
	echo mb_substr($a,3,3,'utf-8');		// def	从下标3 开始，截取3个字符，并指定编码为utf-8
	
	
	
	
	
	
//-- mb_strlen()  以指定编码获取字符串长度
	$a = "在下天下无乱敌";
	echo strlen($a);			//21
	echo mb_strlen($a,'gbk');	//11
	echo mb_strlen($a,'utf-8');	//7
	echo mb_strlen($a,'unicode');	//10
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

//-- substr_count() 统计指定字符在字串中出现了多少次
	$a='aluukasfasaluusajfluu';
	echo substr_count($a,'uu');		//3




//-- str_ireplace() 用字串替换字串或字串中的内容,不区分大小写
	$a='Abcdefg';
	//echo str_ireplace('a','jjj',$a);		//jjjbcdefg
	$y1=array('b','c');
	$y2=array('m','n');
	echo str_ireplace($y1,$y2,$a,$num);		//Amndefg
	echo $num;			//2 替换的个数




//-- str_replace() 用字串替换字串或字串中的内容,区分大小写
	$a = 'abcdefg';
	echo str_replace('de','ggg',$a);		//abcgggfg



//-- substr() 	截取字串
	$a="abcdefg";
	//echo substr($a,'3');	//defg	从下标3 截取至结尾
	//echo substr($a,'-3');	//efg	从倒数第三个截取至结尾 
	//echo substr($a,2,3);	//cde 	从下标2开始，截取后面的三个字符
	echo substr($a,-3,2);	//ef	从倒数第3个字符，截取2个字符




//-- implode() 将数组各元素用指定字符连接成一个字串
	$a = array('aa','bb','cc');
	var_dump(implode(',',$a));			//aa,bb,cc







//-- explode() 	将字串以指定字符分割成数组
	$a="abc,efg,hij";
	$b = explode(',',$a);
	var_dump($b);
			array(3) {
			  [0]=>
			  string(3) "abc"
			  [1]=>
			  string(3) "efg"
			  [2]=>
			  string(3) "hij"
			}




//--  strtok() 切除字串中指定字符以后的内容
	$a='abceefg';
	var_dump(strtok($a,'e'));		// abc






//-- chunk_split() 将字串按指定长度分隔成小块（空格或指定符号分隔） 
	$a='abcdefg';
	//echo chunk_split($a,3);		// abc def g 	默认用空格分隔
	echo chunk_split($a,3,'-');		// abc-def-g-	使用指定符号分隔




//-- strnatcasecmp() 自然顺序比较两字串差异，不区分大小写
	$a='Gbc';
	$b="abc";
	echo strnatcasecmp($a,$b);		//1
	echo strnatcasecmp($b,$a);		//-1

	//两组字串以下标位置逐个字符做比较，不区分大小写
		按下标位置只比较首对出现差异的字母，后面全部忽略 
		 两字串完全相同时，返回0
		 有差异时，变量1字母顺序减去变量字母顺序2,结果为正时返回1，结果为负时返回-1
		 有差异时只对首对差异比较，以后不计，
		 大写的顺序值小于小写的顺序值
	




//-- strnatcmp() 自然顺序比较两字串差异,区分大小写
	$a='abdsdkjfsldf';
	$b='abAsdf';
	echo strnatcmp($a,$b);		//1
	echo strnatcmp($b,$a);		//-1

	//两组字串以下标位置逐个字符做比较，
		按下标位置只比较首对出现差异的字母，后面全部忽略 
		两字串完全相同时，返回0
		有差异时，变量1字母顺序减去变量字母顺序2,结果为正时返回1，结果为负时返回-1
		有差异时只对首对差异比较，以后不计，




//-- strncmp() 比较两字串前N个字符的差异,区分大小写
	$a='abcdefg';
	$b="abcflje";
	echo strncmp($a,$b,5);	//-1
	echo strncmp($b,$a,5);	// 1
	//按下标位置只比较首对出现差异的字母，后面全部忽略 
	//只比较两字串指定前N个字符
	//两字串完全相同时，返回0 。
	//有差异时，只做首对有差异的字符比较，其后不计。差异比较时只返回1或-1 当变量1的字母顺序大于变量2的字母顺序时返回1，反之则返回-1. 如A 和 B 比较，返回-1，反之则返回1、另 a 的顺序比A大
	





//-- 比较两字串前 n个字符，并返回字母位置差
	$a="abcdefg";
	$b="abcaskef";
	echo strncasecmp($a,$b,4);	// 3
	echo strncasecmp($b,$a,4);	// -3
	//两组字串以下标位置逐个字符做比较，只比较指定的下标范围的字符
		按下标位置只比较首对出现差异的字母，后面全部忽略 
		 两字串完全相同时，返回0
		 有差异时只对首对差异比较，以后不计，返回变量1的字母顺序减去变量2的字母顺序，如 a 和 f 的比对结果为-5 ，f 和 a 的比对结果为5









//-- strcmp() 以下标位置逐对比较两个字串，区分大小写
	$a='AgFc';
	$b='agGoe';
	echo strcmp($a,$b);		// -1
	echo strcmp($b,$a);		//  1
	//按下标位置只比较首对出现差异的字母，后面全部忽略 
	//两字串完全相同时，返回0 。
	//有差异时，只做首对有差异的字符比较，其后不计。差异比较时只返回1或-1 当变量1的字母顺序大于变量2的字母顺序时返回1，反之则返回-1. 如A 和 B 比较，返回-1，反之则返回1、另 a 的顺序比A大



//-- strcasecmp() 以下标位置逐对比较两个字串,不区分大小写
	$a = 'fbedefghijklaaa';
	$b = 'abcdefghijklaakfdsfdfds';
	echo strcasecmp($a,$b);		//  5
	echo strcasecmp($b,$a);		// -5
	//两组字串以下标位置逐个字符做比较，
		按下标位置只比较首对出现差异的字母，后面全部忽略 
		 两字串完全相同时，返回0
		 有差异时只对首对差异比较，以后不计，返回变量1的字母顺序减去变量2的字母顺序，如 a 和 f 的比对结果为-5 ，f 和 a 的比对结果为5


		 
		 
//-- ord() 将字符转成ASCLL码
	$a='a';
	echo ord($a);		// 97

	
	
	
//-- 将ASCLL 码转成字符
	$a=89;
	echo chr($a);		// Y
	
	




//-- stripslashes() 去除字串中所有反斜线
	$a = '\\\\\\\\\\\\\\\0\\\\\\\\a\\\\b\\\c\\d\e';		
	echo stripslashes($a);			// \\\\0\\a\b\cde
		注：去除字串中的反斜线，但每4个连续的反斜线会保留1个反斜线 

		
	
	
//-- addslashes() 给 ',", \ 前加反斜线
	$a="\a\\b\\\c\\\\d\\\\\e------'b\bb'";
	echo $b = addslashes($a);		//\\a\\b\\\\c\\\\d\\\\\\e
		//注： 原有反斜线个数为奇数时才会加反斜线，原反斜线个数为偶数时不会加。

	
	

//-- 将字串中的$,^,*,(,),+,[,],\,.,? 前面添加反斜线
	$a='!@#$%^&*()_+1234567890qwertyuiop[]\{}|asdfghjkl;:zxcvbnm,./<>?';
	echo quotemeta($a);
		//!@#\$%\^&\*\(\)_\+1234567890qwertyuiop\[\]\\{}|asdfghjkl;:zxcvbnm,\./<>\?


		
		
//-- 去除字串中的反斜线，及\r,\n,\v等,虽不显示，但效果还在
	$a='\\\\k\\\\\\\\k\\\\\\\\\\\\kva\rbc\kd\wkf\naa\kkke  vv\vab\r\n';
	echo stripcslashes($a);
		\k\\k\\\va
		bckdwkf
		aakkke  vvab
		 注：每4个连续的反斜线会保留1个




//-- 给字串中指定字符前添加反斜线 
	$a = "anbcdefnghijklmn";
	echo addcslashes($a,'nbh');		//a\n\bcdef\ng\hijklm\n

	
	


//-- 删除字串中的html,xml,php标签
	$a="<script>alert(1);</script>";
	echo strip_tags($a);			//alert(1);



//-- nl2br() 将 \n 转换成<br>
	echo $a = "aaaa\nbbbb";
	echo nl2br($a);





//-- htmlspecialchars() 预定义字符转html实体,标签不变但失去功能(同htmlentities)
	$a="<script>alert('a');</script>";
	echo htmlspecialchars($a);		//<script>alert('a');</script>
	
	将标签转为实体，标签正常显示，但失去标签的意义了
	测试效果和htmlentities一样，没搞明白它俩有什么区别
	
	可用html_entity_decode() 进行实体反转
	echo $a = "<b>vvv</b>";
	echo $b = htmlentities($a);
	echo $c = html_entity_decode($b);

	
	
	
	

//-- html-entity_decode(); 将实体字符转成html标签
	//$a = "&lt;b&gt;bbb&lt;/b&gt;";
	//echo html_entity_decode($a);
	
	
	
	


	
//-- 将标签转为实体,标签不变但失去功能（同htmlspecialchars）
	$a="<script>alert('a');</script>";
	echo htmlentities($a);		//<script>alert('a');</script>




//-- 字串中每个单词首字母大写
	$a='this is a new days ';
	echo ucwords($a);		//This Is A New Days 

	
	
	

//-- 字串首字母大写
	$a='abc';
	echo ucfirst($a);		//Abc




//-- strtoupper() 将字串转为大写
	$a = 'abcdefg';
	echo strtoupper($a);		//ABCDEFG




//-- strtolower() 将字串转为小写
	$a = "ABCD";
	echo strtolower($a);		//abcd






//-- 千位分组格式化数字
	$a=12345667;
	echo $b = number_format($a);		//12,345,667






//-- str_shuffle() 随机打乱字串
	$a='abcdefg';
	echo str_shuffle($a);		//bcaedgf
	
	
	
	
	
//-- strrev() 反转字串
	$a = "abcdefg";
	echo $b = strrev($a);		//gfedcba
	
	

	
	
//-- str_split() 将字串按指定长度分割成数组
	$a = "abcdefhijklm";
	$b = str_split($a,'7');		//将字串以每3个字符为一组分割成数组 
	var_dump($b);
			array(2) {
			  [0]=>
			  string(7) "abcdefh"
			  [1]=>
			  string(5) "ijklm"
			}
	
	
	
	

//-- dirname() 获取路径（除文件名外的路径）
	$u = "http:www.baidu.com/aaa/bbb/ccc/a.jpg";
	echo dirname($u);		//http:www.baidu.com/aaa/bbb/ccc
	
	
	
	
	
//-- str_repeat() 将字串重复指定次数
	$a = 'abc';
	echo str_repeat($a,3);		//abcabcabc
	
	
	
	
	
	
//-- str_pad() 用指定字符填充字串
	$a='aaa';
	//echo str_pad($a,10,'c');		//aaaccccccc		
	//echo str_pad($a,8,'#',STR_PAD_LEFT);		//#####aaa
	//echo str_pad($a,8,'#',STR_PAD_RIGHT);		//aaa#####
	echo str_pad($a,8,'#^',STR_PAD_BOTH);		//#^aaa#^#
	
	

	
//-- trim() 去除字串两侧的空格或指定字符
	$a= '  ccaacc   ';
	echo 'b'.trim($a).'b';		//bccaaccb
	
	$c='ccaacc';
	echo trim($c,'cc');			//aa
	
	



//-- ltrim() 去除字串中左侧的空格或指定字符

	$a='  a  ';
	echo "b".ltrim($a)."b";		//ba  b
	
	$c="aaccaa";
	echo ltrim($c,'aa');		//ccaa
	


//-- rtrim() 去除字串中右侧的空格或指定字符 ,别名： chop

	$a='  a  ';
	echo "b".rtrim($a)."b";		//b  ab

	$c = 'aaccaa';
	echo rtrim($c,'a');			//aacc
	





*/












