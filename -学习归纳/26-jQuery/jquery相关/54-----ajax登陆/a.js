$(function(){
	$("#reg_a").click(function(){
		$("#login").dialog('open');
	});

	$("#loading").dialog({
		autoOpen:false,
		height:50,
		width:220,
	});
	$("#loading").dialog('widget').find('.ui-dialog-titlebar').hide();
	$(".ui-dialog-content").parent().css({
		background:'url(../img/quan.jpg)no-repeat 20px center',
		'text-indent':'40px',
	});



	$("#login").dialog({
		autoOpen:false,
		position:'left top',
		buttons:{
			"登陆":function(){
				$(this).submit();
			}
		},
	}).validate({
		submitHandler:function(form){
			$(form).ajaxSubmit({
				url:'add.php',
				type:'post',
				beforeSubmit:function(formData,jqForm,options){
					$("#loading").dialog('open');
				},
				success:function(responseText,statusText){
					$("#loading").dialog().html(responseText);
					setTimeout(function(){
						$("#loading").dialog('close');
						$("#login").dialog('close');
					},1000);
				},
			});
		},

		highlight:function(element,errorClass){		//验证出错时文本域的样式
			$(element).css('border','2px solid red');
		},
		unhighlight:function(element,errorClass){
			$(element).css('border','0px solid red');
		},


		errorLabelContainer:'ol.error',
		wrapper:'li',
		rules:{
			user:{
				required:true,
			},
			pass:{
				required:true,
			},
		},
		messages:{
			user:{
				required:'用户名不能为空',
			},
			pass:{
				required:'密码不得为空',
			},
		},

	});
});