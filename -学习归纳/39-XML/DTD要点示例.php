//=====DTD要点提取
//DTD文件：

<!ELEMENT 班级 (学生+)>
<!ELEMENT 学生 (名字,年龄,介绍)>
<!ELEMENT 名字 (#PCDATA)>
<!ELEMENT 年龄 (#PCDATA)>
<!ELEMENT 介绍 (#PCDATA)>



//xml文件：

<?xml version="1.0" encoding="utf-8"?>
<!- -外部引入DTD- ->
<!DOCTYPE 班级 SYSTEM "class.dtd">
<班级>
	<学生>
		<名字>周星驰</名字>
		<年龄>23</年龄>
		<介绍>学习刻苦</介绍>
		<面积>20</面积>
	</学生>
	<学生>
		<名字>周润发</名字>
		<年龄>33</年龄>
		<介绍>学习刻苦</介绍>
	</学生>
</班级>



//校验文件：

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script langage="javascript">	
	//实例化一个XML解析器
	var xmldoc = new ActiveXObject("Microsoft.XMLDOM");
	//开启校验功能
	xmldoc.validateOnParse =true;
	//指定对哪个XML文件校验
	xmldoc.load("xml.xml");
	//如果有错误，则输出 
	document.write("错误信息："+xmldoc.parseError.reason+"<br>");
	document.write("错误行号："+xmldoc.parseError.line+"<br>");
</script>
</head>