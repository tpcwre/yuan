//=====DTDҪ����ȡ
//DTD�ļ���

<!ELEMENT �༶ (ѧ��+)>
<!ELEMENT ѧ�� (����,����,����)>
<!ELEMENT ���� (#PCDATA)>
<!ELEMENT ���� (#PCDATA)>
<!ELEMENT ���� (#PCDATA)>



//xml�ļ���

<?xml version="1.0" encoding="utf-8"?>
<!- -�ⲿ����DTD- ->
<!DOCTYPE �༶ SYSTEM "class.dtd">
<�༶>
	<ѧ��>
		<����>���ǳ�</����>
		<����>23</����>
		<����>ѧϰ�̿�</����>
		<���>20</���>
	</ѧ��>
	<ѧ��>
		<����>����</����>
		<����>33</����>
		<����>ѧϰ�̿�</����>
	</ѧ��>
</�༶>



//У���ļ���

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script langage="javascript">	
	//ʵ����һ��XML������
	var xmldoc = new ActiveXObject("Microsoft.XMLDOM");
	//����У�鹦��
	xmldoc.validateOnParse =true;
	//ָ�����ĸ�XML�ļ�У��
	xmldoc.load("xml.xml");
	//����д�������� 
	document.write("������Ϣ��"+xmldoc.parseError.reason+"<br>");
	document.write("�����кţ�"+xmldoc.parseError.line+"<br>");
</script>
</head>