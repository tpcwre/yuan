$(function(){
	$("#reg_a").click(function(){	
		$("#reg").dialog('open');
	});
	

	$("#reg").dialog({
		autoOpen:false,
		buttons:{
			"提交":function(){
				$(this).submit();
			},
		},
	}).validate({				//开启验证功能
		submitHandler:function(form){	//验证成功后执行的操作
			$(form).ajaxSubmit({   	//启用ajax提交功能 
				url:'add.php',
				type:'post',
				beforeSubmit:function(formData,jqForm,options){   //提交前执行的操作
					$('#reg').dialog('widget').find('button').eq(1).button('disable');
					$("#loading").dialog('open');		//提交成功前显示loading对话框
					},
				success:function(responseText,statusText){	//提交成功后的操作
					//alert(responseText);
					$("#reg").dialog('widget').find('button').eq(1).button('enable');
					$("#loading").css({
						background:'url(../img/dui.jpg)no-repeat 20px center',
					}).html("数据交互成功...");
						
					setTimeout(function(){			//延迟指定时间后操作
						$('#loading').dialog('close');	//关闭loading对话框
						$("#reg").dialog('close');	//关闭reg对话框
						$("#reg").resetForm();		//重置所有表单项
						$("#loading").css({
							background:'url(../img/quan.jpg)no-repeat 20px center',
						}).html('数据交互中...');
					},1000);
				},
			});
		},
		rules:{							//验证规则
			user:{
				required:true,
			},
			pass:{
				required:true,
			},
		},
		messages:{
			user:{
				required:'用户名不得为空',
			},
			pass:{
				required:'密码不得为空',
			},
		},
	});
	
	
	
	
	
	
	$("#loading").dialog({		//将loading做成对话框
		autoOpen:false,
		modal:true,
		width:220,
		height:50,
		closeOnEscape:false,	//取消ESC键功能 
	}).parent().parent().find(".ui-widget-header").hide();		//隐藏loading对话框标头区
	$("#loading").css({						//loading对话框样式
		background:'url(../img/quan.jpg)no-repeat 20px center',	
		'line-height':'25px',		
		'font-size':'14px',
		'font-weight':'bold',
		'text-indent':'40px',
	});
});