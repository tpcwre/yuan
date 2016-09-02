﻿$(function(){
	
					//========验证插件=======
	//messages_zh.js							//验证插件中文包
	$("#reg1").validate({						//启用验证插件功能 
		//onsubmit:false,						//取消验证
		//debug:true,							//调试模式，会阻止默认提交
		//ignore:"#user3",						//忽略指定验证项
		errorClass:'abc',						//给错误提示添加一个类名
		errorElement:'i',						//给错误提示添加一个HTML标签
					
									//将错误信息存放在指定的ol列表中
		errorLabelContainer:'ol.errorol',		//指定元素
		wrapper:'li',							//包裹li元素
		
		
												//输入验证正确后在文本框内加入图标
		//在CSS中直接设置valid样式即可 （valid是内置的元素）
		//.valid{
			//background:url(../img/a.ico) no-repeat right;
		//},
		
												//设置验证错误时边框变色，正确时恢复
		highlight:function(element,errorClass){
			$(element).css("border","2px solid red");
		},
		unhighlight:function(element,errorClass){
			$(element).css("border","2px solid black");
		},
	
		
		
		submitHandler:function(form){		//验证成功后操作，阻止默认提交，需自行提交
			alert('验证成功，准备提交');
		},

		rules:{									//验证规则
			user:{
				required:true,					//不得为空
				rangelength:[3,6],				//长度限制
				//remote:'user.php',				//远程ajax验证
			},
			pass:{
				required:true,
				remote:{						//远程同时验证用户和密码
					url:'user.php',
					data:{
						user:function(){
							return $("#user").val();
						}
					},
				},
			}
		},
		messages:{								//验证错误提示信息
			user:{
				required:'用户名不得为空！',
				rangelength:'长度不得小于{0}且不得大于{1}',   //验证插件中的数值变量
				//remote:'用户以被占用',			//远程验证提示信息
			},
			pass:{
				required:'密码不得为空！',
				remote:'用户名或密码错误！',		
			}
		},
												//常用的验证规则
					/*
					required:true	必须输入字段
					email:true		必须输入正确格式的电子邮件
					url:true		必须输入正确格式的网址。
					data:true		必须输入正确格式的日期（IE6验证出错）
					dateSO:true		必须输入正确格式的日期（ISO）(只验证格式，不验证有效)
					number:true		必须输入合法的数字（负数，小数）。
					digits:true		必须输入正整数 。
					creditcard:true	必须输入合法的信用卡号，
					equalTo:"#id"	输入值必须和#id的值 相同，用来“验证两次相同密码”
					minlength:5		输入长度最小是5个字符 （汉字算一个字符）
					maxlength:10	输入长度最大是10 个字符（汉字算一个字符）
					rangelength:[5,10]	输入长度介于5到10 个字符之间（汉字算一个字符）
					range:[5,10]	输入的数值必须介于5和10之间。
					min:5			输入值不能小于5.
					max:10			输入值不能大于10.
					remot:"check.php"	使用ajax方法调用check.php验证输入值。
					*/
	});
	
	//$("#user3").rules("remove");		//删除指定项中所有验证规则
	
	$("#user3").rules("remove","required");	//删除指定项中指定验证规则
	
	/*
										//单独验证指定表单项。
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
	
	
	
	
	
	
	
	
	
	
	
	
	
				
				//=========日历UI=========
	//jquery.ui.datepicker-zh-CN.js				//日历中文包
	
	$("#date1").datepicker({					//启用日历UI
	
		

		//disabled:true,  						//禁用日历	
		
		altField:'#date2',
		
		altFormat:"d-m-yy",						//设置显示在其它input域中的日期格式
		
		
		appendText:"日历",						//日期文本域后面附加文本
		
		

		firstDay:1,  							//设置日历面板以星期几开头
		
												//星期几的显示格式(短格式正常显示使用)
		dayNamesMin:["日a","一a","二","三","四","五","六"],
		
		
		
												//月份的显示(长格式日历正常显示使用）
		monthNames:["一月1","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
		
		
												//设置日历面板上年和月份的顺序
		showMonthAfterYear:true,	//true 年前月后		false 年后月前

												//设置日期显示的顺序
		dateFormat:'yy-m-d',				
						/*		
						d	月份中的天，从1到31
						dd	月份中的天，从01到31
						o	年份中的天，从1到366
						oo	年份中的天，从01到366
						D	星期中的天的缩写名称（Mon,Tue等）
						DD	星期中的天的全写名称（Monday,Tuesday等）
						m	月份，人1到12
						mm	月份，从01到12
						M	月份的缩写名称(Jan,Feb等)
						MM	月份的值全写名称(January,February等)
						y	两位数字的年份（14表示2014）
						yy	四位数字的年份(2014)
						@	从01/01/1997至今的毫秒数
						*/
		
			
										//日历同时显示多个月分的面板 

		//numberOfMonths:3,					//同时显示三个月份的内容。
		//numberOfMonths:[2,3], 			//同时显示两行三列共六个月的内容
		
		

										//显示当前月以外的日期，但无法选择

		showOtherMonths:true,


										//设置是否可选择当前月以外的日期

		selectOtherMonths:true,


										//显示月份下拉列表  

			//下拉列表需使用月份短格式 monthNamesShort	
		monthNamesShort:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
		changeMonth:true,


										//显示年份下拉列表 

		//默认false,  如果设置为true,显示快速选择年份下拉列表
		changeYear:true,
		
		
										//在日历面板上的年后面加上文本  yearSuffix

		yearSuffix:"",  //也可以为空
		
		
										//设置日期可选择的范围（天，周，月）

		//日历中可以选择的最大日期
		//在设置日期时maxDate,minDate,yearRange会相互牵制，要配合使用。
		//maxDate:2,   		//可选择后2天的日期
		//minDate:-2,  		//可选择前2天的日期，
		//maxDate:"1w",		//可选择后1周的日期，
		//minDate:"-1w",	//可选择前1周的日期。
		//maxDate:"1m",		//可选择后一个月的日期。
		//minDate:"-1m",	//可选择前一个月的日期。
			
		
		
										//设置日历显示年份的范围
		changeMonth:true,
		changeYear:true,
		//在设置日期时maxDate,minDate,yearRange会相互牵制，要配合使用。
		yearRange:"1950:2020",

		
										//设置日历弹出时的效果 showAnim
		showAnim:'fadeIn',
			/*
			false	无任何效果快显快失
			fadeIn	默认效果 淡入淡出
			bind	日历从顶部显示或消失
			bounce	日历断断续续地显示或消失，垂直运动。
			clip	日历从中心垂直地向上下伸展显示或消失。
			slide	日历从左边显示或消失。
			drop	日历从左边显示或消失，有透明度的变化。
			fold	日历从左上角显示或消失。
			highlight	日历显示或消失，伴随透明度和背景色的变化。
			puff	日历从中心开始绽放，显示时“收缩”，消失时“生长”。
			scale	日历从中心开始缩放，显示时“生长”，消失时“收缩”。
			pulsate	日历以闪烁形式显示或消失。
			fadeIn	日历以淡入淡出形式显示消失。
			*/
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
					//========自动补全========
	var user=['aaa','aaaaa','aaaaaa','bb','bbbbb'];			//创建一个数据源
	$("#user1").autocomplete({								//启用自动补全UI
		source:user,										//引入数据源
		//disabled:true,									//禁用自动补全
		minLength:1,										//触发补全的最小字长
		delay:50,											//补全显示延迟 
		autoFocus:true,										//自动选择补全首项信息
		position:{
			//my:'left center',
			//at:'right center',
		},
	});
	$("#user1").autocomplete('disable');		//关闭自动补全

	$("#user1").autocomplete('enable');			//启用自动补全

	//$("#user1").autocomplete('destroy');		//删除自动补全
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
					//========tooltip信息提示UI========
					
	$("#tooltip").tooltip({
		//disabled:true,					//禁用提示UI
		content:'设置的提示内容',			//设置提示内容
		items:'input[name=user]',			//限制某类元素启用提示UI
		//tooltipClass:'big',				//为当前提示UI的元素引入一个类样式
		position:{							//设置提示信息的显示位置
			my:'left center',
			at:'right center',
		},
		track:true,							//提示信息是否跟随鼠标
		
							//===提示信息的弹出方式
		show:'bounce',
		hide:'slide',
/*
					默认为true 淡入淡出 
					false		无效果快显快失
					blind		工具提示从顶部显示或消失 
					bounce		工具提示断断续续地显示或消失，垂直运动。
					clip		工具提示从中心同时向上下垂直显示或消失 
					slide		工具提示从左边显示或消失 
					drop		工具提示从左边显示或消失，有透明度变化 
					fold		工具提示从左上角开始显示或消失
					highlight	工具提示显示或消失，伴随透明度和背景色的变化。
					puff		工具提示从中心缩放，显示时收缩，消失时扩散
					scale		工具提示从中心缩放，显示时扩散，消失时收缩。
					pulsate		工具提示以闪烁形式显示或消失。
*/
		create:function(){					//创建事件
			//alert('提示信息创建时触发');
		},

		open:function(e,ui){				//打开事件
			//alert('提示信息显示时触发'+ui.tooltip.length);
		},
		
		close:function(e,ui){				//关闭事件
			//alert('提示信息关闭时触发'+ui.tooltip.length);
		},
		
		//$("#user").tooltip('open');		//自动打开提示UI

		//$("#user").tooltip('close');		//关闭自动打开提示UI

		//$("#user").tooltip('disable');	//禁用提示UI

		//$("#user").tooltip('enable');		//启用提示UI

		//$("#user").tooltip('destroy');	//删除提示UI
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
				//========按钮UI========
				
				
				
	$("#butui").button({						//启用按钮UI
		//disabled:true,						//处于非激活状态
		//label:'改变',							//设置按钮上的文字
		//text:false,							//隐藏按键上的文字
		icons:{				//===设置按钮上的小图标
			primary:"ui-icon-search",
			secondary:'ui-icon-triangle-1-s',
			//注意：CSS的图库ui-lightness不要放错位置
			//图库地址：http://api.jqueryui.com/theming/icons/
			//或	jquery.com官网，选择
			//APIDocumentation -> widgets -> button Widget -> icons -> an icon class name
			//注意! 按钮上加图标时不能使用HTML原生的input元素，要在HTML中使用<button>元素
		},
	});
	$('#butui').button('disable');		//===禁用按钮
	$("#butui").button('enable');		//===启用按钮
	$("#butui").button('destroy');		//===删除按钮UI效果
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
					//========dialog对话框========
		
	
	$("#login_but").click(function(){
		$("#login_dia").dialog('open');
	});
	$("#login_dia").dialog({
		autoOpen:false,
		position:'center top',
		title:'会员登陆',
		closeOnEscape:false,	//取消ESC键功能
		draggable:false,		//对话框是否可拖动
		resizable:false,		//对话框是否可改变大小
		modal:true,				//对话框以外是否被罩住
		closeText:'关闭',		//右上角 'X' 的提示信息
		
								//设置对话框的大小
		width:300,				//显示长宽
		height:300,
		minWidth:290,			//最小长宽
		minHeight:290,
		maxWidth:500,			//最大长宽
		maxHeight:500,
		
								//对话框的显示方式
		show:'bounce',			
		hide:'bounce',				
						/*	
						false 	: 默认为正常显示与消失
						true	: 对话框淡入淡出
						blind	: 对话框从顶部显示或消失。
						bounce	: 对话框断断续续地显示或消失，垂直运动。
						clip	: 对话框从中心垂直地显示或消失。
						slide	: 对话框从左边显示或消失。
						drop	: 对话框从左边显示或消失，有透明度变化。
						fold	: 对话框从左上角显示或消失。
						highlight : 对话框显示或消失，伴随着透明度和背景色的变化。
						puff	: 对话框从中心开始缩放，显示时“收缩”，消失时“生长”。
						scale	: 对话框从中心开始缩放，显示时“生长”，消失时“收缩”。	
						pulsate : 对话框以闪烁形式显示或消失。
						*/
						
						
		buttons:{				//设置对话框中的按钮
			"提交":function(){
				alert('正在提交...');
			},
			"取消":function(){
				return $(this).dialog('close');
			}
		},
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
					//========插件制做与调用========
	/*	
	//注：切记将制做好的插件引入到HTML页面中！！！
	jquery.nav.js页面：								//全局插件的制做
	;(function($){
		$.extend({
			'nav':function(){
				$(".nav").parent().hover(function(){
					$(this).find('.nav').show();
				},function(){
					$(this).find('.nav').hide();
				});
			}
		});
	})(jQuery);
	
	$(".nav").parent().hover(function(){
		$(this).find(".nav").show();
	},function(){
		$(this).find('.nav').hide();
	});
		*/
		
	//$.nav();					//全局插件的调用
		
	$('.list').nav();				//局部插件的调用
				
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
				//========jquery工具函数========
				
			
/*			
	var str="   abc    ";					//$.trim(str)去除左右空格
	alert(str);
	alert($.trim(str));
	
	var arr=['张三','李四','王五'];				//$.each(arr)遍历数组
	alert(arr);
	$.each(arr,function(index,value){
		alert('遍历数组下标是：'+index+' ; 值是：'+value);
	});


	$.each(window,function(name,fn){			//$.each(object)遍历对象
		$("#tool1").html($('#tool1').html()+name+"<br>");		//属性名
		$("#tool1").html($('#tool1').html()+fn+"<br>");			//方法名
	});
	
												//遍历ajax()对象
	$.each($.ajax(),function(name,fn){
		$("#box").html($("#box").html()+name+"<br>");
	});

												//遍历ajax()对象的fn
	$.each($.ajax(),function(name,fn){
		$("#box").html($("#box").html()+fn+"<br><br>");
	});
	

	var arr1=[1,3,5,7,9,2,4,6,8,0];				//筛选数组中的数据
	alert(arr1);
	$val1=$.grep(arr1,function(value,index){
		return value>2 && index <5;
	})
	alert($val1);

		
	var arr1=[1,3,5,7,9,2,4,6,8,0];				//修改数组中的数据
	alert(arr1);
	$val1=$.map(arr1,function(value,index){
		if(value>2 && index <5){
			return index+'abc';
		}
	})
	alert($val1);
			
		

	var arr1=[1,3,5,7,9,2,4,6,8,0];				//获取指定数据在数组中的下标
	alert(arr1);
	$val1=$.inArray(9,arr1);
	alert($val1);		
				
				
			
	var arr1=[2,4,6,7,32,83];					//$.merge()合并两个数组
	var arr2=[299,388];
	alert($.merge(arr1,arr2));		
			
			
	divs1=$("div").toArray();					//合并多个DOM元素
	alert(divs1.length);
			
			
	var divs=$('div').get();					//.concat()将元素加入到数组中
	var buts=$('button').get();
	alert(divs.length+'--'+buts.length);
	alert(divs.concat(buts).length);

	
	
	var arr2=[1,3,5,7,9];						//$.unique()删除数组中重复的数据
	var arr3=[1,3,5,7,9,2,4,6,8];
	var arr3=$.merge(arr2,arr3);
	alert(arr3);
	alert($.unique(arr3));
	//这里注意，在删除相同数值时因为浏览器的不同，效果会不同，有的浏览器去除不了。
		

	var divs=$("div").get();					//.get() 将指定元素存放在一个数组中
	alert(typeof(divs));						//typeof()获取数据类型	
	for(var i in divs){
		//alert($(divs[i]).html());				//遍历divs对象中的元素内容
	}
	var buts=$("button").get();
	alert(divs.length+'--'+buts.length);		//获取数组中元素的个数
	var box=buts.concat(divs);					//.concat()将元素加入到数组中
	alert(box.length);		
	$.unique(box);						
	alert(box.length);
			
				
												//判断数据的类型
	var fn=function(){};						
	alert($.type(fn));
	
	//$.isArray(obj)				判断是否为数组对象，是返回true
	//$.isFunction(obj)			判断是否为函数，是返回true
	//$.isEmptyObject(obj)		判断是否为空对象，是返回true
	//$.isPlainObject(obj)		判断是否为纯粹对象，是返回true
	//$.contains(obj)			判断DOM节点是否含有另一个DOM节点，是返回true
	//$.type(data)				判断数据类型
	//$.isNumeric(data)			判断数据是否为数值
	//$.isWindow(data)			判断数据是否为window对象
		

		
	var obj={							//将对象转换成GET形式的键值对
		user:'lee',
		pass:'abc',
	}
	alert($.param(obj));			
	*/			
/*	
												//浏览器测试
//由于在早期的浏览器中，分IE和W3C浏览器，而IE678使用的覆盖率还很高，所以，早期的jquery提供了$.browser工具对象。而现在的jquery以经废弃删除了这个工具对象 ，如果还想使用这个对象来获取浏览器版本型号的信息，可以使用兼容插件。
	$.browser对象属性
	webkit		判断webkit浏览器，如果是则为true
	mozilla		判断mozilla浏览器，是为true
	safari		判断safari浏览器 , 是为true
	opera		判断opera浏览器，是为true
	msie		判断IE浏览器，是为true
	version		获取浏览器版本号

	alert($.browser.webkit+"--"+$.browser.version);			//判断浏览器类型与版本


	alert($.support.ajax);							//判断是否支持ajax
				
				
				
									//$.support.opacity 设置不同浏览器的透明度
									//通过$.support.opacity 来检测浏览器是IE类还是W3C类
	if($.support.opacity==true){  //true为支持W3C
		$("#box").css("opacity",0.5);
	}else{
		$("#box").css("filter","alpha(opacity=10)");
	}		

	
									//$.proxy() 调整this指向
	var obj={
		name:"Zhang",
		test:function(){
			alert(this.name);
		}
	};
	//obj.test();
	$("#tool2").click($.proxy(obj,"test"));
	
	*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
					//=====选择器，过滤器，DOM=====
					
					
					
	/*
	//$("p").next().css('font-size','30px');			//next() 下一个兄弟节点
	//$(".f").siblings().css('color','yellow');			//siblings() 上下所有兄弟节点
	//$('div').children().css('color','yellow');		//children() 一级子节点
	//$('div').find('u').css('color','blue');			//find() 后代节点
	//$('.b, u, .f, i').css('color','red');				// 群组选择器
	//$("div.d").css('color','blue');					// 限制选择器 （类名为d的div元素）
	//$(".a").nextUntil('.h').css('color','blue');		//nextUntil 指定下面非X节点，遇到X节点结束
	//$("div[title]").css('color','blue');				// 通过title属性设置元素样式

	//$("li:first").css('color','blue');				// li:first选择首个li元素
	//$("li").not('.two').css('color','blue');			//选择除指定类名以外的所有li元素
	//$("h1:header").css('color','blue');				// h1:header选择指定标题元素
	//$('input').get(0).focus();						// get(0) 获取第一个DOM对象
	//$("input").eq(0).focus();							// eq(0) 获取第一个jquery对象			
														// focus() 表单元素自动获取焦点
	//$("li:contains('ccc')").css('color','blue');		//:contains() 选取含有某文本内容的元素
	//$("div:empty").css({								//选取内容为空的元素
		//height:'100px',
		//background:'#ccc',
	//});
	//$(".two").parent().css("color",'blue');			//parent() 选择父元素
	//$('ul').has('.two').css('color','yellow');		//has 选择子元素中包含有类名为two的ol元素
	//alert($('div:hidden').size());					//:hidden 获取隐藏元素
	//alert($("div:visible").size());					//:visible 获取可见元素
	//$('li:nth-child(even)').css('color','blue')		//li:nth-child() 获取每个父元素的偶数子元素
	//alert($('.two').is('li'));						//is() 判定.two类所在元素是否为‘li’
	//$('li').filter('.two, :first, :last').css('background','#ccc');	//filter 多选择器共同实现 
	//alert($('.a').html());							//html() 获取元素中的内容（包括标签）
	//alert($('.a').text());							//text() 获取指定元素中文本内容 （不包括标签）
	//$('input').eq(0).val('ddddddddd');				//val() 设置或替换表单value值
	//alert($('input').eq(0).val()); 					//val() 获取表单value值
	//$('div').eq(3).attr('title','我是域名'); 			//设置指定元素的属性名和属性值。
	//$('div').eq(3).removeAttr('title');				//清除元素的属性
	//$('div').addClass('red');							//给元素添加一个CSS类样式
	//alert($('div').width());							//获取元素宽度
	//alert($('div').eq(3).offset().top);				//获取元素相对于视口的偏移位置
	//alert($(window).scrollTop());						//获取垂直滚动条的值
	//var aa = $('<i>这是一个在JS中创建的节点</i>');	//创建节点
	//$('body').append(aa);								//插入节点
	//$('div').wrap('<strong></strong>');				//给指定的节点包裹添加一层html父节点
	//$('.d').clone(true).prependTo('body');			//复制节点，参数true可选,表示连同事件一并复制
	//$('u').empty();									//清空指定节点内容，并保留节点
	*/											
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
						//=====jquery事件=====
												
												
	$("div").click(function(e){
		//alert('aaa');
		//e.preventDefault();						//阻止默认行为
		//e.stopPropagation();						//阻止冒泡行为
	});
	
	//$('div').off('click');						//删除事件	
												
	//$("div").click(function(e){					//模拟事件		
		//alert('aaa');
	//}).click();
											/*
											click:		单击
											dblclcik:	双击
											mousedown:	鼠标按下
											mouseup:	鼠标弹起
											mousemove:	鼠标移动
											mouseover:  鼠标移入(子元素会再次触发)
											mouseout:	鼠标移出(子元素会再次触发)
											mouseenter	鼠标移入(子元素不会再次触发)
											mouseleave	鼠标移出(子元素不会再次触发)
											hover:		光标悬念事件
											change:		表单值的改变
											select:		文本内容被选定事件
											submit:		提交事件
											keydown:	键盘按下(带功能键)
											keypress:   键盘按下(不带功能键)
											keyup:		键盘抬起(不带功能键)
											blur:		丢失焦点
											focusout:	失去焦点事件(可子节点激活)
											focus:		激活焦点
											focusin;	获取焦点事件(可子节点激活)
											load:		加载
											unload		页面卸载
											resize:		窗口大小的改变
											scroll:		滚动
											error:		错误
											*/
												
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	


	
	
	
	
	
	

					//=====普通动画效果=====
					
													//=====普通动画效果
	
	$("#but1").click(function(){						//元素的显示与隐藏
		$(".but1").hide('slow');
	});
	$("#but2").click(function(){
		$(".but1").show('normal');
	});
	
	$("#but6").click(function(){						//元素上隐下显
		$(".but1").slideUp('slow');
	});
	$("#but7").click(function(){
		$(".but1").slideDown('normal');
	});
	
	$("#but8").click(function(){						//元素淡入淡出
		$(".but1").fadeOut();
	});
	$("#but9").click(function(){
		$(".but1").fadeIn();
	});
	
	$("#but10").click(function(){
		$(".but2").fadeTo(500,0.2);
	});
	//show,hide的速度参数：fast,normal,slow 或数值 1000=1秒
														//显示隐藏的方式
	
	
	$("#but11").click(function(){						//正常切换
		$(".but1").toggle(1000);
	});
	
	$("#but12").click(function(){						//淡入淡出切换
		$(".but1").fadeToggle(1000);
	});
	
	$("#but13").click(function(){						//上隐下显切换
		$(".but1").slideToggle(1000);
	});
	
	$("#but14").click(function(){						//上隐下显切换
		//$(".but3").slideToggle(1000,function tg(){
			//$(this).slideToggle(1000,tg);
		//});
//或
		$(".but3").fadeOut(500,function(){
			$(this).fadeToggle(500,arguments.callee);
		});
	});
	
	$("#but3").click(function(){						//多元素同步动画效果
		$(".but1, .but2").hide(2000);
		setTimeout(function(){
			$(".but1, .but2").show('fast');
		},1000);
		
	});
	
	
	$("#but4").click(function(){						//多元素列队动画效果
		$(".but1").hide(500,function(){
			$(".but2").hide(500,function(){
				$(".but3").hide(500);							//函数内部调用方式
			});
		});
		setTimeout(function(){
			$(".but3").show(500,function s(){
				$(this).prev().show(500,s);						//递归自调用方式
			});
		},2000);
	});
	
	

	
	
	
	
	
	
	
	
	
											//=====anmiate自定义动画效果
											
											
	$("#abut1").click(function(){				//多重同步动画
		$(".but1").animate({
			width:'500px',
			height:'500px',
			opacity:0.2,
			fontSize:'2cm',
		});
	});
	
	$("#abut2").click(function(){				//列队动画
		$(".but1").animate({
			width:'1000px',
		},1000,function(){
			$(".but1").animate({	
				height:'150px',
			},1000);									//函数连缀方式
		});
//或
		$(".but2").animate({width:'1000'},1000)
				  .animate({height:'150px'},1000);		//顺序方式
	});
	
	
	$("#abut3").click(function(){				//移动动画效果
		$(".but0").animate({
			left:'+=50px',
		},1000,function(){
			$(this).animate({
				top:"+=50px",
			},1000,function(){
				alert('我移动了');
			});
			
		});
	});
	
	$('#abut4').click(function(){				//停止动画效果
		$(".but0").stop();
	});
	//不带参数： 结束单一动画效果或结束全部移动动画效果
	//带1个true: 停止在当前动画位置上并结束所有动画效果，
	//带2个true: 结束当前的动画效果，继续执行后续动画效果。
	
	
	$("#abut5").click(function(){				//列队动画时间延迟操作
		$('.but1').animate({"width":"1000px"})
					.delay(2000)
					.animate({"height":"150px"})
					.animate({"opacity":0.1})
					.animate({"fontSize":"3cm"});
	});
	
												//查找当前运动的动画
	$('#abut6').click(function(){
		$(':animated').css('background','yellow');
	});
	
	
												//浏览器动画帧数，默认为13毫秒每帧
	//$.fx.interval=300;
	
												//关闭动画效果 
	//$.fx.off=true;
	
	
	$('#abut7').click(function(){
		$(".but0").animate({left:'800px'},1000,'swing');		//动画缓速移动
		$(".but01").animate({left:'800px'},1000,'linear');		//动画均速移动 
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			//========ajax异步提交========
			
			
			
												//jqxhr形式的ajax异步提交
	$("#sub1").click(function(){
		jqxhr=$.ajax({
			url:'ajaxpage.php',							//提交的页面
			type:'post',								//提交的类型
			data:$('form').serialize(),					//数据--表单序列化
		});
		jqxhr.done(function(response){					//提交成功后返回的数据
			$(".form").html(response);
		});
		jqxhr.done(function(response){					//连缀成功后的方法
			$(".form").html(response+'<br>done扩展性好');
		});
	});
	/*
	$(document).ajaxSend(function(){
		alert('请求发送前执行');
	}).ajaxSuccess(function(){
		alert('请求成功后执行');
	}).ajaxError(function(){
		alert('请求失败后执行');
	}).ajaxComplete(function(){
		alert('请求结束后执行');
	});
	*/
	
	
	/*
															//初始化重复的属性
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
	*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
			
				
				
				
				
	
	
					//=====折叠菜单UI=====
					
					
					
	/*
		<div id="accordion">
			<h1>折叠菜单1</h1>
			<div>内容1</div>
			<h1>折叠菜单2</h1>
			<div>内容1</div>
			<h1>折叠菜单3</h1>
			<div>内容1</div>
		</div>
	*/
	$("#accordion").accordion({
		collapsible:true,			//设置选项卡是否可以折叠（显示，隐藏）
		event:'mouseover',   		//选项卡切换的触发方式 默认‘click’
		active:2,					//设置默认显示指定选项卡
		heightStyle:"content",		//设置选项卡内容框高度 auto,fill
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
						//=====选项卡UI=====
						
						
						
	/*
	<div id="tabs">
		<ul>
			<li><a href="#tab1">tab1</a></li>
			<li><a href="#tab2">tab1</a></li>
			<li><a href="#tab3">tab1</a></li>
		</ul>
		<div id="tab1">tab111111111</div>
		<div id="tab2">tab222222222</div>
		<div id="tab3">tab333333333</div>
	</div>
	*/
	$("#tabs").tabs({
		collapsible:true,			//设置选项卡是否可以折叠（显示，隐藏）
		event:'mouseover',   		//选项卡切换的触发方式 默认‘click’
		active:2,					//设置默认显示指定选项卡
		heightStyle:"content",		//设置选项卡内容框高度 auto,fill
		
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
					//=====jquery-COOKIE插件=====
					
					
					
	
	$.cookie("user","bnbbs",{	//创建一个cookie 
		expires:7,				//设置cookie存储的有效期
		//path:"/",				//设置cookie存放的路径
		//domain:"www.ycku.com",	//限制在指定的域名中才生成cookie
		//secure:true,			//限制在https加密连接时才生成cookie
	});
	$("#cookie").html('以保存了cookie --> user:' +$.cookie('user'));
	
});