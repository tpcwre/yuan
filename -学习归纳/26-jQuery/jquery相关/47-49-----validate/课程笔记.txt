$(function(){


//=====常用的验证规则
			/*
			required:true		必须输入字段
			email:true		必须输入正确格式的电子邮件
			url:true		必须输入正确格式的网址。
			data:true		必须输入正确格式的日期（IE6验证出错）
			dateSO:true		必须输入正确格式的日期（ISO）(只验证格式，不验证有效)
			number:true		必须输入合法的数字（负数，小数）。
			digits:true		必须输入正整数 。
			creditcard:true		必须输入合法的信用卡号，
			equalTo:"#id"		输入值必须和#id的值 相同，用来“验证两次相同密码”
			minlength:5		输入长度最小是5个字符 （汉字算一个字符）
			maxlength:10		输入长度最大是10 个字符（汉字算一个字符）
			rangelength:[5,10]	输入长度介于5到10 个字符之间（汉字算一个字符）
			range:[5,10]		输入的数值必须介于5和10之间。
			min:5			输入值不能小于5.
			max:10			输入值不能大于10.
			remot:"check.php"	使用ajax方法调用check.php验证输入值。
			*/

   $("#reg").validate({
	rules:{
		user:{
			required:true,
			minlength:2,
		}
	},




//=====设置鼠标离开不触发验证,点击提交时才验证
	onfocusout:true,	//默认为true
   });


/*
//-----全局设置debug模式。

	$.validator.setDefaults({
		//debug:true
	});

//=====启用验证插件

   $("#reg").validate({		






//=====取消验证
	//onsubmit:false,




//=====debug 调试模式

	//debug:true,		//会阻止默认提交




//=====设置验证规则与验证提示信息
		
	rules:{			//验证规则
		user:{
			required:true,
		},
	},
	messages:{		//验证提示信息
		user:{
			required:'用户名不得为空',
		}
	} 





//=====验证提示中变量同步验证规则长度

	rules:{			
		user:{
			required:true,
			rangelength:[3,6],
		},
		pass:{
			required:true,
		},
	},
	messages:{		
		user:{
			required:'用户名不得为空',
			rangelength:'长度不得少于{0}位，大于{1}位',
		},
		pass:{
			required:'密码不得为空',
		}
	},





//=====代替默认提交的方法

	submitHandler:function(form){
		//alert(form);
		//alert('验证成功，准备提交');
	},





//-----忽略某个字段验证 ignore

	//ignore:"#user",





//=====将错误提示存放到另一个元素中

	//errorPlacement:function(error,element){
		//error.appendTo(".myerror");
	//},





//=====为错误提示信息添加一个类样式

	errorClass:'abc',	//可以设置错误提示信息的样式
	




//=====为错误提示信息添加一个标签

	//errorElement:'p',




//=====将错误提示信息以列表形式存放到另一OL元素中(好用)

	errorLabelContainer:'ol.error',
	wrapper:'li',




//=====验证成功后为错误提示信息加载class
	
	//success:'suc',




//=====输入验证正确后在文本框内加入图标
	//在CSS中直接设置valid样式即可 （valid是内置的元素）
	//.valid{
		//background:url(../img/a.ico) no-repeat right;
	//},




//=====设置验证错误时边框变色，正确时恢复
	highlight:function(element,errorClass){
		$(element).css("border","2px solid red");
	},
	unhighlight:function(element,errorClass){
		$(element).css("border","2px solid black");
	},
	





//=====获取验证到的错误个数。并随个数改变而改变提示信息。

	showErrors:function(errorMap,errorList){
		$.each(errorMap,function(index,value){
			//alert(index+" "+value);
			//index : 验证错误的项 如 user , pass
			//value : 验证错误的值 如 ‘不得为空’
			
		});
		//alert(errorMap.user); 	//user项的验证提示内容
		alert(errorList[1].element);   	//错误列表中第二条是什么元素类型
		alert(errorList[1].message);	//错误列表中第二条的错误提示内容
	
		var error = this.numberOfInvalids();
		if(error){
			$(".myerror").html("您有"+error+"条错误信息");
		}else{
			$(".myerror").hide();
		}
		this.defaultShowErrors();	//显示验证错误提示信息
	},

   });









//=====远程验证用户是否被占用

	$("#reg").validate({
		//submitHandler:function(form){
			//alert('验证成功提交中。');
		//},
		rules:{
			user:{
				required:true,
				remote:'user.php',
				//注：远程验证时如果不用type:post 那么默认用GET传输。
			},
			pass:{
				required:true,
			},
		},
		messages:{
			user:{
				required:'用户名不得为空',
				remote:'用户被占用',
			},
			pass:{
				required:'密码不得为空',
			},
		}
	});






//=====远程同时验证用户名和密码

	$("#reg").validate({
		submitHandler:function(form){
			alert('成功后提交 ');
		},
		rules:{
			user:{
				required:true,
			},
			pass:{
				required:true,
				remote:{
					url:'user.php',
					type:'post',
					dataType:'json',
					data:{
						user:function(){
							return $('#user').val();
						}
					},
				},
			},
		},
		messages:{
			user:{
				required:'用户名不得为空',
			},
			pass:{
				required:'密码不得为空',
				remote:'用户名或密码不正确!',
			},
		},
		errorLabelContainer:"ol.error",
		//wrapper:'li',
	});






//=====判断表单所验证的元素是否全部有效
	//alert($("#reg").valid());	//全部有效返回true





//=====删除所有验证规则
	//$("#user").rules("remove");





//=====删除指定验证规则
	//$("#user").rules("remove","required min max");







//=====设置键盘按下弹起不触发验证

	//onkeyup:false,		//默认为true
	//注意：只要设置了，在测试的浏览器不管是false还是true都不触发





//=====设置点击 checkbox和radio点击不触发验证

	//onclick:false,		//默认为true






//=====不让错误提示元素获得焦点
	//当点击提交时，如果获取到错误，默认会把焦点放置在第一条错误元素上，当设置了focusInvalid，那么提交后焦点就不会放在错误元素上。
	//focusInvalid:false,	//默认为true





//=====屏蔽验证时提示title信息

	//如果表单元素设置了title值，且messages为默认，就会读取title值的错误信息，我们可以通过ignoreTitle:true,设置为true,屏蔽这一个功能 。

	//ignoreTitle:true,	//默认为false





//=====隐藏验证错误提示
	//提示错误时，隐藏错误提示，不能和focusInvalid一起用，冲突。

	//focusCleanup:true,	//默认为false





//=====自定义验证规则
	$("#code").rules("add",{
		required:true,
		code:true,
		messages:{
			required:"邮编不能为空",
		}
	});

	//--定义规则
	$.validator.addMethod("code",function(value,element){
		//首尾限制在0到9的6位数字。
		var tel=/^[0-9]{6}$/; 
		return this.optional(element) || (tel.test(value));
	},"请输入正确的邮编");






//=====单独验证表单项。

	$("#reg").validate();
	$("#user").rules("add",{
		required:true,
		minlength:2,
		messages:{
			required:"不可以空",
			minlength:"2个以上",
		}
	});


*/










});

























//=====验证的HTML方式

	//直接在HTML页面插入类名
	//<input type='text' name='user' id='user' class='required' minlength="2"/>
			// class='required' : 不得为空
			// minlength="2" : 不得少于2位
			// class='email' : 正确的邮箱地址
			// class='url' : 正确的网址


//=====validate 验证插件下载地址：

	// http://bassistance.de/jquery-plugins/jquery-plugin-validation


//=====插件汉化

	//一：直接引入汉化文件：message_zh.js
	//二：将 message_zh.js 文件中代码全部粘贴到 validate 文件中












