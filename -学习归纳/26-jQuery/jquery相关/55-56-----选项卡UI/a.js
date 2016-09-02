$(function(){

	$("#tabs").tabs({				//==启用选项卡UI功能
		//collapsible:true,			//==设置选项卡是否可以折叠（显示，隐藏）
		
		//disabled:[1],				//==禁用指定的选项卡
		//disabled:[0,2],
		
		//event:'mouseover',   		//==选项卡切换的触发方式 默认‘click’
		
		//active:2,					//==设置默认显示指定选项卡
		
									
									
		//collapsible:true,
		//active:false,				//==设置选项卡默认是显示或是隐藏
											//此功能要配合collapsible:true 使用
		
		heightStyle:"content",		//==设置选项卡内容框高度
										// content:根据内容伸展高度，
										// auto: 设置选项卡最高的那个高度为全部选项卡的高度，	
										// fill: 为选项卡的高度添加额外的高度（以最高的高度为基准）	

		//show:true,					//==设置选项卡切换的形式
		//hide:true,
										//true 		为淡入淡出
										//false 	为即时显示，消失	
										//blind		从顶部显示或消失
										//bounce	断断续续地显示或消失，垂直运动
										//clip		上下向中心垂直显示或消失 
										//slide		从左边显示或消失
										//drop		从左边显示或消失，有透明度变化
										//fole		从左上角显示或消失
										//highlight	伴随透明度和背景色的变化显示或消失 
										//puff		从中心开始缩放，显示时“收缩”，消失时“生长”
										//scale		从中心开始扩大，显示时“生长”，消失时“收缩”
										//pulsate	以闪烁形式显示或消失	
		
		
		
		create:function(event,ui){				//===选项卡创建事件
			//alert('选项卡创建时触发事件');		
			//alert($(ui.tab.get()).text());	//===获取当前活动的选项卡的对象及内容
			
			//alert($(ui.panel.get()).html());	//===获取当前活动选项卡内容栏的对象内容
		},
		
		
		
		activate:function(event,ui){				//===选项卡切换事件
			//alert('选项卡切换事件');
			
			//alert($(ui.oldTab.get()).text());		//===获取切换前选项卡标题栏内容
			
			//alert($(ui.oldPanel.get()).text());	//===获取切换前选项卡内容栏内容
			
			//alert($(ui.newTab.get()).text());		//===获取切换后选项卡标题栏内容
			
			//alert($(ui.newPanel.get()).text());	//===获取切换后选项卡内容栏内容
		},
		
		
		beforeActivate:function(event,ui){			//===选项卡切换前触发事件
			//alert('选项卡切换前事件');
			
			//alert($(ui.oldTab.get()).text());		//===获取切换前的选项卡标题栏内容
			
			//alert($(ui.oldPanel.get()).text());		//===获取切换前的选项卡内容栏内容
			
			//alert($(ui.newTab.get()).text());		//===获取将要切换的选项卡标题栏内容
			
			//alert($(ui.newPanel.get()).text());		//===获取将要切换前的选项卡内容栏内容
		},
		
	});
	

	
	
	
	
	
	
	
	$("#tabsb").tabs({
		
														//=== ajax远程加载文档后触发事件
		//远程页面内容不需要加其它标签什么的
		load:function(event,ui){
			//alert("ajax远程加载文档后触发");
			//alert($(ui.tab.get()).text());				//得到当前选项卡标题栏对象及代码
			//alert($(ui.panel.get()).html());				//得到当前选项卡内容栏对象及内容
		},
		
		
		
		
														//===远程加载前事件
		beforeLoad:function(event,ui){
			//alert("远程加载文档前触发事件");
			//alert($(ui.tab.get()).text());				//获取选项卡标题栏对象及内容
			//alert($(ui.panel.get()).text());				//因是加载前事件，所以此处无法获取内容
			
			ui.jqXHR.success(function(responseText){	//===加载前获取远程内容栏的内容	
				//alert(responseText);
			});
			
			//ui.ajaxSettings.url='tab3.html';			//===指定默认的ajax远程加载页面
		},
	});
	
	
	
	
	
	
	
	
				//=====选项卡外部方法=====
				
				
				
		//$("#tabsb").tabs('disable')						//===禁用全部选项卡（变灰）
				
		$("#tabsb").tabs('disable',1);						//===禁用指定下标的选项卡
		
		$("#tabsb").tabs('enable',1);						//===启用指定选项卡
		
		
															//===获取选项卡整体jquery对象
		//alert($("#tabsb").tabs('widget'));
		//$("#tabsb").tabs('widget').find('.ui-tabs-nav').css('background','blue');
		
				
		$("#tabls").tabs('refresh');						//===更新选项卡
		
		//$("#tabsb").tabs('destroy');						//===删除选项卡
				
				
		//$("#tabsb").tabs('option','active','2');			//===option形式设置选项卡的属性值 
				
		//alert($("#tabsb").tabs('option','active'));		//===option形式获取选项卡的属性值 
		
		
													
		$("#but").click(function(){							//===点击按钮触发局部更新
			$("#tabsb").tabs('load',1);
		});
		/*
			tab1.html内容
			table1.htmlbbbbbbbbbbb
			或
			table1.htmlccccccccccc
		*/
			
				
				
		
		
		
		
		
				
				
				
				
					//=====选项卡的on事件=====
					
					
		/*		
		$("#tabsb").on('tabsload',function(event,ui){				//===选项卡远程加载后的ON事件
			alert('远程加载后on事件');
			alert($(ui.tab.get()).text());	
			alert($(ui.panel.get()).text());
		});
				
	
			
			
		$("#tabsb").on('tabsbeforeload',function(event,ui){			//===选项卡远程加载前的ON事件
			alert("远程加载前ON事件");
			alert($(ui.tab.get()).text());
			alert($(ui.panel.get()).text());	//（空）
			ui.jqXHR.success(function(response){
				alert(response);				//ajax远程获取选项卡内容栏内容
			});
		});
		
		
				
				
		$("#tabsb").on('tabsactivate',function(event,ui){			//===选项卡切换的ON事件
			alert('选项卡切换的ON事件');
			alert($(ui.oldTab.get()).text());
			alert($(ui.newTab.get()).text());
			alert($(ui.oldPanel.get()).text());
			alert($(ui.newPanel.get()).text());
		});
		
		
		$("#tabsb").on('tabsbeforeactivate',function(event,ui){		//===选项卡切换前的ON事件
			//alert('选项卡切换前的ON事件');
			alert($(ui.oldTab.get()).text());
			alert($(ui.newTab.get()).text());
			alert($(ui.oldPanel.get()).text());
			alert($(ui.newPanel.get()).text());
				//注：首次加载的newPanel内容会是空，
		});
				*/	
});



















