
//�Զ���Ajax������
function myAjax(url,async,fun){
	//1. �����������
	var xmlhttp = null;
	if(window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	//2. ���ûص�����
	xmlhttp.onreadystatechange=function(){
		//�ж�����״̬Ϊ4����Ӧ״̬Ϊ200
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			//��ȡ��Ӧ��Ϣ
			var info = xmlhttp.responseText;
			fun(info); //���ûص�������������Ӧ�����Ϊ��������
			
		}
	}
	
	//3. ��ʼ��������Ϣ
	xmlhttp.open("get",url,async);
	
	//4. ��������
	xmlhttp.send();
	
}