<?php


	
	
	
	
	
	echo '<h1>/=====赋值运算会自动转换数据类型 </h1>';
	
		$a=1;
		$b='123abc';
		echo $a+$b;
	echo "<hr>";
	





	echo '<h1>/=====+ 加法  </h1>';
		$a=3+2;
		echo '3-2='.$a;
	
	echo "<hr>";
	
	
	
	
	
	echo '<h1>/=====- 减法  </h1>';
		$a =5-3;
		echo '5-3='.$a;
	echo "<hr>";
	
	
	
	
	echo '<h1>/=====* 乘法  </h1>';
		$a =3*5;
		echo '5*3='.$a;
	echo "<hr>";
	

	
	
	
	
	
	echo '<h1>/=====/ 除法  </h1>';
		$a =6/3;
		echo '6/3='.$a;
	echo "<hr>";
	

	
	
	
	echo '<h1>/=====% 取余 </h1>';
		$a =10%3;
		echo '10%3='.$a."<br>";
		
		echo -10%3 .' -- 当被除数为负数时，取模结果为负数<br>';
		echo 10%-3 .' -- 当被除数为正数时，取模结果为正数<br>';
		
	echo "<hr>";
	

	
	
	
	
	
	echo '<h1>/===== ++  -- 累加 </h1>';

	
		$a=true;
		var_dump($a);
		$a++;
		++$a;
		var_dump($a);
		
		echo '布尔值在运算中不能自加或自减<br>';
	
		$a=2;
		$b=$a++;
		echo $b."<br>++在后，先赋值后运算<br>";
		$b=++$a;
		echo $b."<br>++在前，会先运算，后赋值<br>";
		
		
		
		
		
		$a=5;
		$b=$a--;
		echo $b."<br>--在后，先赋值后运算<br>";
		$b=--$a;
		echo $b."<br>--在前，会先运算，后赋值<br>";
	echo "<hr>";
	

	
	
	
	
	
	
	
	

	
	
	
	
	
	echo '<h1>/=====赋值运算符 += </h1>';
	
		$a =5;
		echo $a."<br>";
		$a += 1;
		echo $a;
	echo "<hr>";
	

	
	
	
	
	echo '<h1>/=====赋值运算符 -= </h1>';
	
		$a =5;
		echo $a."<br>";
		$a -= 1;
		echo $a;
	echo "<hr>";
	
	
	
	
	echo '<h1>/=====赋值运算符 *= </h1>';
	
		$a =5;
		echo $a."<br>";
		$a *= 2;
		echo $a;
	echo "<hr>";
	

		
	
	
	
	echo '<h1>/=====赋值运算符 /= </h1>';
	
		$a =10;
		echo $a."<br>";
		$a /= 3;
		echo $a;
	echo "<hr>";
	

	
	
	
	
	echo '<h1>/=====赋值运算符 %= </h1>';
	
		$a =10;
		echo $a."<br>";
		$a %= 3;
		echo $a;
	echo "<hr>";
	
	
	
	
	
	
	
	

	echo '<h1>/=====. 字符串连接符 </h1>';
	
		$a ='a';
		echo $a.'<br>';
		$a .= 'b';
		echo $a.'<br>';
		
		$a=123;
		$b='456';
		echo $a.$b;
	echo "<hr>";
	
	
	
	

	echo '<h1>/===== 比较运算符 > </h1>';
	
		$a =5;
		$b=3;
		echo '5>3?<br>';
		var_dump($a > $b);
	echo "<hr>";
	
	

	
	
	
	echo '<h1>/===== 比较运算符 < </h1>';
	
		$a =5;
		$b=3;
		echo '5<3?<br>';
		var_dump($a < $b);
	echo "<hr>";

	
	
	
	
	
	echo '<h1>/===== 比较运算符 <= </h1>';
	
		$a =5;
		$b=3;
		echo '5<=3?<br>';
		var_dump($a <= $b);
	echo "<hr>";
	
	
	
	
	echo '<h1>/===== 比较运算符 >= </h1>';
	
		$a =5;
		$b=3;
		echo '5>=3?<br>';
		var_dump($a >= $b);
	echo "<hr>";
	
	
	
	
	
	echo '<h1>/===== 比较运算符 == </h1>';
	
		$a =5;
		$c='5';
		echo '$a==$c?<br>';
		var_dump($a== $c);
		
	echo "<hr>";
	
	
	echo '<h1>/===== 比较运算符 === </h1>';
	
		$a =5;
		$c='5';
		$b=5;
		echo '$a===$c?<br>';
		var_dump($a===$c);
		echo "<br>";
		
		echo '$a===$b?<br>';
		var_dump($a===$b);
		
		echo '<br>';
		$a=true;
		$b=1;
		var_dump($a===$b);
	echo "<hr>";
	
	
	echo '<h1>/===== 比较运算符 != </h1>';
	
		$a =5;
		$c='5';
		$b=6;
		echo '$a!=$c?<br>';
		var_dump($a!=$c);
		echo "<br>";
		
		echo '$a!=$b?<br>';
		var_dump($a!==$b);
	echo "<hr>";
	

	
	echo '<h1>/===== 比较运算符 !== </h1>';
	
		$a =5;
		$c='5';
		$b=5;
		echo '$a!==$c?<br>';
		var_dump($a!==$c);
		echo "<br>";
		
		echo '$a!==$b?<br>';
		var_dump($a!==$b);
	echo "<hr>";
	

	
	
	echo '<h1>/===== 逻辑运算 && </h1>';
	
		$a=6;
		var_dump($a>4 && $a<6);
		var_dump($a!=4 && $a>3);
		echo "<br>如果第一个表达式返回false,将不再检查第二个表达式";
	echo "<hr>";
	
	
	
	
	echo '<h1>/===== 逻辑运算 || </h1>';
	
		$a=6;
		var_dump($a>4 || $a<6);
		var_dump($a<4 || $a>3);
		
		
		echo "<br>如果第一个表达式返回true 将不再检查第二个表达式！";
	echo "<hr>";
	
	
	
	
	echo '<h1>/===== 逻辑运算 ! </h1>';
	
		$a=false;
		var_dump(!$a);
	echo "<hr>";
	
	
	
	
	
	
	echo '<h1>/===== 计算是否为润年 </h1>';
	
		echo "<form action='' method='get'>";
			echo "<input name='year' />";
			echo "<input type='submit' value='提交' />";
		echo '</form>';
		$year=@ $_GET['year'];
		
		echo $year%4==0 && $year%100!=0 || $year%400==0 ? $year.'是润年':$year.'不是润年';
	echo "<hr>";
	
	
	
	
	
	
	
	
	
	echo '<h1>/===== 位运算符 & </h1>';
	
		$a=0011;
		$b=0101;
		var_dump($a & $b);
	echo "<hr>";
	

	
	
	
	echo '<h1>/===== 位运算符 | </h1>';
	
		$a=0011;
		$b=0101;
		var_dump($a | $b);
	echo "<hr>";
	

	
	
	
	echo '<h1>/===== 三元运算</h1>';
		$a=true;
		var_dump($a?'真':'假');
	
		echo "<br>";
		$a=100;
		var_dump($a<50?'结果小于一百':'结果大于一百');
	echo "<hr>";
	

	
	
	
	echo '<h1>/===== 错误抑制符 @</h1>';
	
		$a1;
		echo @$a1;
		echo "<hr>";
	
	
	
	echo '<h1>/=====  用 () 提高运算符优先级 </h1>';
	
		$a=10;
		$b=5;
		$c=3;
		$d=$a+$b*$c;
		echo '$a+$b*$c='.$d.'<br>';
		$d=($a+$b)*$c;
		echo '($a+$b)*$c='.$d.'<br>';
		
	echo "<hr>";
	
	
	
	echo '<h1>/===== if else 流程控制语句 </h1>';
	
		$a=1;
		echo '$a=10<br>';
		if($a>10){
			echo "这个数大于10";
		}else{
			echo "这个数不大于10 ";
		}
		
	echo "<hr>";
	

	
	
	
	
	
	
	
	
	
	
	
	