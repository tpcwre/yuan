$(function(){
	$("#reg_a").click(function(){
		$("#reg").dialog('open');
	});
	$("#reg").dialog({
		autoOpen:false,
		position:'left top',
		buttons:{
			'登陆':function(){
				$(this).submit();
			},
		}
	}).validate({
		submitHandler:function(form){
			$(form).ajaxSubmit({
				url:'add.php',
				type:'post',
				beforeSubmit:function(){
					$("#loading").dialog('open').html('用户正在登陆中...');
				},
				success:function(responseText,statusText){
					if(responseText){
						$("#loading").dialog('open').html('用户登陆成功！');
						$.cookie('user',$("#user").val());
					}else{
						$("#loading").dialog('open').html('用户名或密码错误！');
					}

					setTimeout(function(){	
						$("#reg").dialog('close');
						$("#loading").dialog('close');
						$("#reg").resetForm();
						if($.cookie('user')){
							$("#user_a, #exit_a").show();
							$("#reg_a, #login_a").hide();
						}
					},1000);
					
			
					
				}
			});
		},
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
				required:'用户名不得为空',
			},
			pass:{
				required:'密码不得为空',
			},
		},
		errorLabelContainer:'ol.error',
		wrapper:'li',
	});
	
	$("#loading").dialog({
		autoOpen:false,
		width:320,
		height:50,
	});
	$("#ui-id-2").parent().hide();
	$("#loading").dialog('widget').css({
		background:'url(../img/quan.jpg)no-repeat 20px center',
		'text-indent':'50px',
	});
	
	$("#user_a, #exit_a").hide();
	if($.cookie('user')){
		$("#user_a, #exit_a").show();
		$("#reg_a, #login_a").hide();
	}else{
		$("#user_a, #exit_a").hide();
		$("#reg_a, #login_a").show();
	}
	$("#exit_a").click(function(){
		$.removeCookie("user");
		window.location.href="/jquery/53-----cookie/";
	});
	
	
});