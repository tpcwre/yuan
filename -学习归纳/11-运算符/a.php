<?php


	
	
	
	
	
	echo '<h1>/=====��ֵ������Զ�ת���������� </h1>';
	
		$a=1;
		$b='123abc';
		echo $a+$b;
	echo "<hr>";
	





	echo '<h1>/=====+ �ӷ�  </h1>';
		$a=3+2;
		echo '3-2='.$a;
	
	echo "<hr>";
	
	
	
	
	
	echo '<h1>/=====- ����  </h1>';
		$a =5-3;
		echo '5-3='.$a;
	echo "<hr>";
	
	
	
	
	echo '<h1>/=====* �˷�  </h1>';
		$a =3*5;
		echo '5*3='.$a;
	echo "<hr>";
	

	
	
	
	
	
	echo '<h1>/=====/ ����  </h1>';
		$a =6/3;
		echo '6/3='.$a;
	echo "<hr>";
	

	
	
	
	echo '<h1>/=====% ȡ�� </h1>';
		$a =10%3;
		echo '10%3='.$a."<br>";
		
		echo -10%3 .' -- ��������Ϊ����ʱ��ȡģ���Ϊ����<br>';
		echo 10%-3 .' -- ��������Ϊ����ʱ��ȡģ���Ϊ����<br>';
		
	echo "<hr>";
	

	
	
	
	
	
	echo '<h1>/===== ++  -- �ۼ� </h1>';

	
		$a=true;
		var_dump($a);
		$a++;
		++$a;
		var_dump($a);
		
		echo '����ֵ�������в����Լӻ��Լ�<br>';
	
		$a=2;
		$b=$a++;
		echo $b."<br>++�ں��ȸ�ֵ������<br>";
		$b=++$a;
		echo $b."<br>++��ǰ���������㣬��ֵ<br>";
		
		
		
		
		
		$a=5;
		$b=$a--;
		echo $b."<br>--�ں��ȸ�ֵ������<br>";
		$b=--$a;
		echo $b."<br>--��ǰ���������㣬��ֵ<br>";
	echo "<hr>";
	

	
	
	
	
	
	
	
	

	
	
	
	
	
	echo '<h1>/=====��ֵ����� += </h1>';
	
		$a =5;
		echo $a."<br>";
		$a += 1;
		echo $a;
	echo "<hr>";
	

	
	
	
	
	echo '<h1>/=====��ֵ����� -= </h1>';
	
		$a =5;
		echo $a."<br>";
		$a -= 1;
		echo $a;
	echo "<hr>";
	
	
	
	
	echo '<h1>/=====��ֵ����� *= </h1>';
	
		$a =5;
		echo $a."<br>";
		$a *= 2;
		echo $a;
	echo "<hr>";
	

		
	
	
	
	echo '<h1>/=====��ֵ����� /= </h1>';
	
		$a =10;
		echo $a."<br>";
		$a /= 3;
		echo $a;
	echo "<hr>";
	

	
	
	
	
	echo '<h1>/=====��ֵ����� %= </h1>';
	
		$a =10;
		echo $a."<br>";
		$a %= 3;
		echo $a;
	echo "<hr>";
	
	
	
	
	
	
	
	

	echo '<h1>/=====. �ַ������ӷ� </h1>';
	
		$a ='a';
		echo $a.'<br>';
		$a .= 'b';
		echo $a.'<br>';
		
		$a=123;
		$b='456';
		echo $a.$b;
	echo "<hr>";
	
	
	
	

	echo '<h1>/===== �Ƚ������ > </h1>';
	
		$a =5;
		$b=3;
		echo '5>3?<br>';
		var_dump($a > $b);
	echo "<hr>";
	
	

	
	
	
	echo '<h1>/===== �Ƚ������ < </h1>';
	
		$a =5;
		$b=3;
		echo '5<3?<br>';
		var_dump($a < $b);
	echo "<hr>";

	
	
	
	
	
	echo '<h1>/===== �Ƚ������ <= </h1>';
	
		$a =5;
		$b=3;
		echo '5<=3?<br>';
		var_dump($a <= $b);
	echo "<hr>";
	
	
	
	
	echo '<h1>/===== �Ƚ������ >= </h1>';
	
		$a =5;
		$b=3;
		echo '5>=3?<br>';
		var_dump($a >= $b);
	echo "<hr>";
	
	
	
	
	
	echo '<h1>/===== �Ƚ������ == </h1>';
	
		$a =5;
		$c='5';
		echo '$a==$c?<br>';
		var_dump($a== $c);
		
	echo "<hr>";
	
	
	echo '<h1>/===== �Ƚ������ === </h1>';
	
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
	
	
	echo '<h1>/===== �Ƚ������ != </h1>';
	
		$a =5;
		$c='5';
		$b=6;
		echo '$a!=$c?<br>';
		var_dump($a!=$c);
		echo "<br>";
		
		echo '$a!=$b?<br>';
		var_dump($a!==$b);
	echo "<hr>";
	

	
	echo '<h1>/===== �Ƚ������ !== </h1>';
	
		$a =5;
		$c='5';
		$b=5;
		echo '$a!==$c?<br>';
		var_dump($a!==$c);
		echo "<br>";
		
		echo '$a!==$b?<br>';
		var_dump($a!==$b);
	echo "<hr>";
	

	
	
	echo '<h1>/===== �߼����� && </h1>';
	
		$a=6;
		var_dump($a>4 && $a<6);
		var_dump($a!=4 && $a>3);
		echo "<br>�����һ�����ʽ����false,�����ټ��ڶ������ʽ";
	echo "<hr>";
	
	
	
	
	echo '<h1>/===== �߼����� || </h1>';
	
		$a=6;
		var_dump($a>4 || $a<6);
		var_dump($a<4 || $a>3);
		
		
		echo "<br>�����һ�����ʽ����true �����ټ��ڶ������ʽ��";
	echo "<hr>";
	
	
	
	
	echo '<h1>/===== �߼����� ! </h1>';
	
		$a=false;
		var_dump(!$a);
	echo "<hr>";
	
	
	
	
	
	
	echo '<h1>/===== �����Ƿ�Ϊ���� </h1>';
	
		echo "<form action='' method='get'>";
			echo "<input name='year' />";
			echo "<input type='submit' value='�ύ' />";
		echo '</form>';
		$year=@ $_GET['year'];
		
		echo $year%4==0 && $year%100!=0 || $year%400==0 ? $year.'������':$year.'��������';
	echo "<hr>";
	
	
	
	
	
	
	
	
	
	echo '<h1>/===== λ����� & </h1>';
	
		$a=0011;
		$b=0101;
		var_dump($a & $b);
	echo "<hr>";
	

	
	
	
	echo '<h1>/===== λ����� | </h1>';
	
		$a=0011;
		$b=0101;
		var_dump($a | $b);
	echo "<hr>";
	

	
	
	
	echo '<h1>/===== ��Ԫ����</h1>';
		$a=true;
		var_dump($a?'��':'��');
	
		echo "<br>";
		$a=100;
		var_dump($a<50?'���С��һ��':'�������һ��');
	echo "<hr>";
	

	
	
	
	echo '<h1>/===== �������Ʒ� @</h1>';
	
		$a1;
		echo @$a1;
		echo "<hr>";
	
	
	
	echo '<h1>/=====  �� () �����������ȼ� </h1>';
	
		$a=10;
		$b=5;
		$c=3;
		$d=$a+$b*$c;
		echo '$a+$b*$c='.$d.'<br>';
		$d=($a+$b)*$c;
		echo '($a+$b)*$c='.$d.'<br>';
		
	echo "<hr>";
	
	
	
	echo '<h1>/===== if else ���̿������ </h1>';
	
		$a=1;
		echo '$a=10<br>';
		if($a>10){
			echo "���������10";
		}else{
			echo "�����������10 ";
		}
		
	echo "<hr>";
	

	
	
	
	
	
	
	
	
	
	
	
	