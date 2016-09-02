$(function(){

							//===表单ajax插件下载地址
	//官网下载：http://malsup.com/jquery/form/


							//===ajaxForm提交
	/*
	$("#reg").ajaxForm(function(){
		alert('a');
	});

	或

	$("#reg").ajaxForm({
		success:function(){
			alert('a');
		}
	});
	*/






//=====ajaxSubmit()提交

   $("#reg").submit(function(){
		
	$(this).ajaxSubmit({			//===启用ajaxSubmit提交

		url:'aa.php',			//===指定提交页面

		target:'#box',			//===将返回内容存入指定元素内

		type:'GET',			//===传输方式

		dataType:null,			//===传输数据类型(xml,json,script,默认null)

		//clearForm:true,			//===成功提交后清空表单

		//resetForm:true,			//===成功提交后重置表单(会保留默认值)

		data:{				//===额外数据
			aaa:'aaaaaa',
		},
		
		beforeSubmit:function(formData,jqForm,options){

			//alert(formData[0].name);	//===获取提交前表单项的name名
			//alert(formData[0].value);	//===获取提交前表单项的value值
		

			//alert(jqForm);			//===获取表单对象及其内容
			//alert(jqForm.html());

			//alert(options.url);		//===获取ajaxSubmit中的属性	
		},
		
		success:function(responseText,statusText){
			//alert(responseText);		//===提交成功后返回的内容

			//alert(statusText);		//===提交成功后返回的状态
		},

		error:function(event,errorText,errorType){
			//alert(errorText);		//===提示出现错误
			//alert(errorType);		//===提示错误的类型
		},



	});		
	return false;
   });



	//$("#pox").html($('#reg').formSerialize()+"<br>");	//===表单序列化

	//$("#pox").html($('#user').fieldSerialize());		//===表单序列化-指定字段

	//$("#pox").html('a'+$("#reg #user").fieldValue());	//===获取表单指定字段value值

	
	$("#but").click(function(){
		//$("#reg").resetForm();			//===重置表单
	
		$('#pass').clearFields();			//===清除指定字段value值

	});
		
	










});