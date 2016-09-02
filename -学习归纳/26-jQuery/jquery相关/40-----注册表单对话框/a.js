$(function(){
	$("#reg").dialog({				//启用对话框UI
		//autoOpen:false,
		title:'会员注册',
		width:350,
		buttons:{
			"提交":function(){
				alert('正在提交');
			}
		},
		position:'left top',
		
	
	});
	
	$("#reg input[type=radio]").button();		//启用对话框按钮UI
	$("#reg input[name=date]").datepicker();	//启用日历UI
	$("#reg").tooltip();				//启用提示信息UI

});