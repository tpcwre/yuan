﻿$(function(){

/*
						//=====load() 方法


	$("#one").load('a.php',{
		url:'www.baidu.com',		//向a.php页面以POST方式传送额外数据
	},function(response,status,xhr){
		if(status=='success'){			//status:返回的状态是否成功
			alert('远端加载成功');
			$(this).html(response+123);	//response:远程返回的内容
		}
							//xhr:表示xml,http,request的对象 它有四个属性
		alert(xhr.responseText);	//返回内容 等同于response方法


		alert(xhr.responseXML);		//返回XML DOM文档内容	
						//如果响应主体内容类型是”text/xml“”application/xml“
 
		alert(xhr.status);		//响应的HTTP状态

		alert(xhr.statusText);		//HTTP状态的说明
	});



	$(":button").click(function(){
		//$.get('a.php',{		//=====$.get() 方法
//或
		$.post('a.php',{		//=====$.post() 方法
			url:'www.sina.com',
		},function(response,status,xhr){
			if(status=='success'){
				$("#one").html(response);
			}
		},'html');	
//返回的内容格式包括：xml,html,script,json,jsonp和text
//type参数对于php文件返回的数据是纯文本，默认是html或text，所以当响应内容为html和text时可以不用在尾部加html参数。
	});







						//=====获取xml中指定元素的内容

//xml响应体会返回一个DOM对象
//响应体为xml时，设置type为html会把xml中连标签所有内容当作纯文本

	$(":button").click(function(){
		$.post("xml.xml",{
			sex:'nv',
		},function(response,status,xhr){
			alert($(response).find('name').text());
			$('#one').html($(response).find('age').text());
		},'html');
	});








						//=====获取json响应体的内容
		
//json响应体返回的是一个对象 

	$(":button").click(function(){
		$.post("json.json",{
			sex:'nv',
		},function(response,status,xhr){
			alert(response[0].url);		
			$('#one').html(response[1].f);
		});
	});







						//=====$.getJSON() 方法

	$(":button").click(function(){
		$.getJSON('json.json',function(response,status,xhr){
			alert(response);	//返回的是一个对象 
			$("#one").html(response[0].b);
		});
	})





			

						//=====$.getScrtip() 方法

	$(":button").click(function(){
		$.getScript('b.js');		
	});





		


		

						//=====$.ajax() 方法


	$(":button").click(function(){
		$.ajax({
			url:'a.php',
			type:'post',
			data:{
				url:'www.youku.com',
				user:'aaaa',
			},
			success:function(response,status,xhr){
				if(status=='success'){
					$("#one").html(response);
				}
			}
		});
	});








						//=====serialize() 表单序列化

	$(":button").click(function(){
		$.ajax({
			url:'a.php',
			type:'post',
			data:$('form').serialize(),
			success:function(response,status,xhr){
				alert(response);
			}
		});
	});



				

						//=====表单序列化得到的是键值对

	$(':button').click(function(){
		alert($('form').serialize());
	});









						//=====初始化重复的属性

$("form input[type=button]").click(function(){
  $.ajaxSetup({
    type:"post",
    url:"e.php",
    data:{
	user:$("form input[name=user]").val(),
	email:$("form input[name=email]").val()
    },
  });

  $.ajax({
    success:function(response,status,xhr){
	$("#box").html(response+2);
    }
  });
});








							//=====ajax 错误机制
	$(":button").click(function(){
		$.ajax({
			url:'fa.php',
			type:'post',
			data:$('form').serialize(),
			success:function(response,status,xhr){
				$("#one").html(response);
			},
			//timeout:1000,
			//global:'false'

			error:function(xhr,errorText,errorType){
				//alert(errorText);	//错误提示
				//alert(errorType);	//错误类型
				//alert(xhr.status);	  //错误提示代码 404
				//alert(xhr.statusText);  //错误类型    找不到
			}
		});

	});





	


							//=====请求前，后，成，败的全局事件

	$(":button").click(function(){
		$.ajax({
			url:'a.php',
			type:'post',
			data:$('form').serialize(),
			success:function(response,status,xhr){
				$('#one').html(response);
			}
		});
	});
	$(document).ajaxSend(function(){		//=====发送请求之前执行	
		$('.load').dialog();
	
	}).ajaxComplete(function(){			//=====成功与否，请求完成后即执行
		alert('请求完成，不论成功');

	}).ajaxSuccess(function(){			//=====请求成功后执行
		$(".load").dialog('close');
		$(".finish").dialog('open');

	}).ajaxError(function(){			//=====请求失败后执行
		alert('请求失败');
	});


*/


	






						//=====$.jqXHR() 方法


	$(":button").click(function(){
		$.jqXHR=$.ajax({		//$.jqXHR代表$.ajax()返回的对象
			url:'a.php',
			type:'post',
			data:$('form').serialize(),
		});

		$.jqXHR.done(function(response){	//.done()等同于success功能
			alert(response+2);
		});

		$.jqXHR.done(function(response){	//.done()扩展好，不会覆盖以前的内容
			alert(response+'aaaaaaaaaaaaaa');
		});
	});





});