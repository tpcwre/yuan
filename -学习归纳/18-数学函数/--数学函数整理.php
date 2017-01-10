<?php


round(number,[舍入位置]) 四舍五入取整
ceil(float) 进一取整 
floor(float) 舍去取整
abs(number) 求绝对值 
rand([start],[end])  32767内的随机数
getrandmax() 获取rand随机数最大值
mt_rand([start],[end]) 21亿范围内的随机数
mt_getrandmax() 获取mt_rand随机数最大值
pow(number,number) 计算数值的n次方
sqrt(number) 求一个数的平方根
number_format($number,[number],[char],[char])	千位分组格式化数字
max(number1,[number2]...) 求最大值 
min(number1,[number2]...)  求最小值 
pi() //获取圆周率


base_convert(number,type,type)	自定义进制转换
dechex(number) 十六进制转八进制
hexdex(number|string) 十六进制转十进制
bindec — 二进制转换为十进制
decbin — 十进制转换为二进制
decoct — 十进制转换为八进制
octdec — 八进制转换为十进制


exp — 计算 e 的指数
expm1 — 返回 exp(number) - 1，甚至当 number 的值接近零也能计算出准确结果
fmod — 返回除法的浮点数余数
is_finite — 判断是否为有限值
is_infinite — 判断是否为无限值
is_nan — 判断是否为合法数值
lcg_value — 组合线性同余发生器
log10 — 以 10 为底的对数
log1p — 返回 log(1 + number)，甚至当 number 的值接近零也能计算出准确结果
log — 自然对数
mt_srand — 播下一个更好的随机数发生器种子
srand — 播下随机数发生器种子


acos — 反余弦
acosh — 反双曲余弦
asin — 反正弦
asinh — 反双曲正弦
atan2 — 两个参数的反正切
atan — 反正切
atanh — 反双曲正切
cos — 余弦
cosh — 双曲余弦
sin — 正弦
sinh — 双曲正弦
tanh — 双曲正切
tan — 正切
hypot — 计算一直角三角形的斜边长度
deg2rad — 将角度转换为弧度
rad2deg — 将弧度数转换为相应的角度数












//-- pi() 获取圆周率

	echo pi();
	
	
	
//-- sqrt(number) 求一个数的平方根

	echo sqrt(9);
	
	
	
//-- number_format($number,[number],[char],[char])	千位分组格式化数字

	number_format(数值,[小数保留几位],[小数分隔符],[整数位分隔符])

	//默认舍去小数部分，大数分隔符默认使用","
	$english_format_number = number_format($number);
	echo $english_format_number."<br>";
	// 1,235

	//取小数点后两位,小数分隔符用","，大数位分隔符为一个空格
	$nombre_format_francais = number_format($number, 2, ",", " ");
	echo $nombre_format_francais."<br>";
	// 1 234,56

	//--取小数点后两位,小数分隔符用"."，大数位分隔符为空
	$number = 1234.5678;	
	$english_format_number = number_format($number, 2, ".", "");
	echo $english_format_number;
	// 1234.57



//-- base_convert(number,type,type)	自定义进制转换
	
	base_convert(数值,转换前进制,转换后进制);
	
	echo base_convert(11,16,2);		//十六转二	10001
	echo base_convert(11,10,2);		//十转二	1011
	echo base_convert(11,8,2);		//八转二	1001
	echo base_convert(11,10,16);	//十转十六	b
	echo base_convert(11,8,16);		//八转十六	9
	echo base_convert(11,2,16);		//二转十六	3
	echo base_convert(11,16,8);		//十六转八	21
	echo base_convert(11,10,8);		//十转八	13
	echo base_convert(11,2,8);		//二转八	3
	echo base_convert(11,16,10);	//十六转十	17
	echo base_convert(11,2,10);		//二转十	3
	echo base_convert(11,8,10);		//八转十	9
	
	
//-- dechex(number) 十六进制转八进制

	echo dechex(13);		//d



//-- hexdex(number|string) 十六进制转十进制
	
	echo hexdec('F');		//15
	





	
//-- mt_getrandmax() 获取mt_rand随机数最大值

	echo mt_getrandmax();


	
//-- getrandmax() 显示rand() 随机数最大的可能值

	echo getrandmax();


	
//-- mt_rand([start],[end]) 21亿范围内的随机数
	echo mt_rand();		//随机产生一个10亿内的整数
	echo mt_rand(1,5);	//1-5随机产生一个整数
	

	
	
	
//-- rand([start],[end])  32767内的随机数
	echo rand();		//32767中随机产生一个数
	echo rand(1,5);		//1-5随机产生一个数

	
	
	
	
//-- pow(number,number) 计算数值的n次方

	pow(值，次方);
	echo pow(2,5);		//32 	求2的5次方



	
	

//-- max(number1,[number2]...) 求最大值 
	echo max(2,4,5,8,10);	//10


	
	
	
//-- min(number1,[number2]...)  求最小值 

	echo min(1,3,5,7,9);		//1
	
	
	
	


//-- round(number,[舍入位置]) 四舍五入取整
	round(值，舍入的位置);
	echo round(12345,-1);	//12350		在个位四舍五入
	echo round(15.1254,2);	//15.13		在小数后第二位四舍五入
	echo round(15,49);		//15
	echo round(12.51);		//13		直接把小数四舍五入



//-- ceil(float) 进一取整 

	echo ceil(12.1);		//13

	
//-- floor(float) 舍去取整

	echo floor(23.99);		//23
	
	
	
//-- abs(number) 求绝对值 

	echo abs(-234.34);		//234.34
	
	
	

//-- fmod(float,float) 返回除法的余数
	echo fmod(9.26,8.3);
	echo fmod(5,2);
	echo fmod(PI(),1.2);
	//结果 ：
	0.96
	1
	0.74159265358979
	
	
	
	
	
	
	
	
	
	
PHP_math => 常用函数(14个函数)---

fmod(被除数,除数) 
	//返回除法的余数
round(number,[舍入位置])
	//四舍五入取整
ceil(float) 
	//进一取整 
floor(float) 
	//舍去取整
abs(number) 
	//求绝对值 
rand([start],[end])  
	//32767内的随机数
getrandmax() 
	//获取rand随机数最大值
mt_rand([start],[end]) 
	//21亿范围内的随机数
mt_getrandmax() 
	//获取mt_rand随机数最大值
pow(number,number) 
	//计算数值的n次方
sqrt(number) 
	//求一个数的平方根
number_format(值,[留小数位],[小数分隔符],[千分符])	
	//千位分组格式化数字
max(number1,[number2]...) 
	//求最大值 
min(number1,[number2]...)  
	//求最小值 
pi() 
	//获取圆周率


	
PHP_math => 进制转换函数(7个函数)---
base_convert(number,type,type)	//自定义进制转换
	
bindec 	//二进制转换为十进制

octdec 	//八进制转换为十进制

decbin 	//十进制转换为二进制

decoct 	//十进制转换为八进制

dechex(number) //十六进制转八进制

hexdex(number|string) //十六进制转十进制

示例：base_convert()
echo base_convert('F',16,10); //16转10
echo base_convert('F',16,2); //16转2
echo base_convert('F',16,8); //16转8



PHP_math => 几何计算相关函数(16个函数)---
sin — 正弦

cos — 余弦

tan — 正切

atan — 反正切

acos — 反余弦

asin — 反正弦

acosh — 反双曲余弦

asinh — 反双曲正弦

cosh — 双曲余弦

sinh — 双曲正弦

tanh — 双曲正切

atanh — 反双曲正切

deg2rad — 将角度转换为弧度

rad2deg — 将弧度数转换为相应的角度数

atan2 — 两个参数的反正切

hypot — 计算一直角三角形的斜边长度



PHP_math => 其它函数(12个函数)---
exp — 计算 e 的指数

expm1 — 返回 exp(number) - 1，甚至当 number 的值接近零也能计算出准确结果

is_finite — 判断是否为有限值

is_infinite — 判断是否为无限值

is_nan — 判断是否为合法数值

lcg_value — 组合线性同余发生器

log10 — 以 10 为底的对数

log1p — 返回 log(1 + number)，甚至当 number 的值接近零也能计算出准确结果

log — 自然对数

mt_srand — 播下一个更好的随机数发生器种子

srand — 播下随机数发生器种子






	