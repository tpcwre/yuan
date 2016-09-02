$(function(){

	//当启用提示UI后，可以直接在HTML页面为元素加上title内容即可，如
	//用户名：<input type='text' name='user' title="输入用户名"/>
/*
	$("#reg").tooltip({				//===启用提示信息UI

		//disabled:true,			//===禁用提示UI

		content:'设置的提示内容',		//===设置提示内容

		//items:'input[name=user]',		//===限制某类元素启用提示UI

		tooltipClass:'big',			//===为当前提示UI的元素引入一个类样式

		position:{				//===设置提示信息的显示位置
			my:'left center',
			at:'right center',
		},


		//track:true,				//===提示信息是否跟随鼠标


							//===提示信息的弹出方式
		show:'bounce',
		hide:'slide',

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














			//=====tooltip提示事件=====






		create:function(){				//===创建事件
			//alert('提示信息创建时触发');
		},



		open:function(e,ui){				//===打开事件
			//alert('提示信息显示时触发'+ui.tooltip.length);
		},




		close:function(e,ui){				//===关闭事件
			//alert('提示信息关闭时触发'+ui.tooltip.length);
		},


	});
*/

















			//=====tooltip提示外部方法=====




		$("#user").tooltip();
		//$("#user").tooltip('open');		//===自动打开提示UI

		//$("#user").tooltip('close');		//===关闭自动打开提示UI

		//$("#user").tooltip('disable');		//===禁用提示UI

		//$("#user").tooltip('enable');		//===启用提示UI

		//$("#user").tooltip('destroy');	//===删除提示UI

		//$("#user").tooltip('widget').css('color','blue');  	//===获取当前整体jquery对象




		//$("#user").tooltip('option','disabled','true');		//===设置提示工具属性值

		//alert($('#user').tooltip('option','disabled'));		//===获取提示工具属性值




									//===提示UI打开的on事件

		$("#user").on('tooltipopen',function(){
			alert('打开时触发');
		});

									//===提示UI关闭的on事件
			
		$("#user").on('tooltipclose',function(){
			alert('关闭时触发');
		});





});