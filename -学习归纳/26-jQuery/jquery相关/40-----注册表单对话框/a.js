$(function(){
	$("#reg").dialog({				//���öԻ���UI
		//autoOpen:false,
		title:'��Աע��',
		width:350,
		buttons:{
			"�ύ":function(){
				alert('�����ύ');
			}
		},
		position:'left top',
		
	
	});
	
	$("#reg input[type=radio]").button();		//���öԻ���ťUI
	$("#reg input[name=date]").datepicker();	//��������UI
	$("#reg").tooltip();				//������ʾ��ϢUI

});