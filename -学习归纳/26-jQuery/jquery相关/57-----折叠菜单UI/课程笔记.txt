$(function(){
	$("#accordion").accordion({						//===启用折叠菜单UI功能
	
		collapsible:true,							//===设置菜单是否可以折叠
		
		//disabled:true,							//===禁用折叠菜单
		
		event:'mouseover',							//===折叠菜单触发方式（默认为click）
		
		//active:1,									//===设置默认展开的菜单
		
		//active:false,								//===设置折叠菜单是否全部展开
		
													//===设置折叠菜单内容栏的高度
		//heightStyle:'auto',	//全部与最高相同
		//heightStyle:'content',//根据内容调整高度
		//heightStyle:'fill',   //全部与最高相同且添加额外高度
		
		header:'h2',								//===设置折叠菜单的标题栏标签
		//这里要与想要设置的html页面中的标签名一致。
	
													//===icons设置折叠菜单上的小图标（如+ ,- 号）
		//一般折叠菜单图标默认为右三角和下三角
		icons:{
			//"header":"ui-icon-plus",
			//"activeHeader":"ui-icon-minus",
		},
	
	
	
	
/*	
		create:function(e,ui){						//===折叠菜单创建事件
			//alert($(ui.header.get()).text());					//获取折叠菜单标题栏内容
			//alert($(ui.panel.get()).text());					//获取折叠菜单内容栏内容
		},
				
		activate:function(e,ui){
			alert($(ui.oldHeader.get()).text());
			alert($(ui.newHeader.get()).text());
			alert($(ui.oldPanel.get()).text());
			alert($(ui.newPanel.get()).text());
		},


		beforeActivate:function(event,ui){						//===折叠菜单切换前事件
			alert($(ui.newHeader.get()).html());
			alert($(ui.newPanel.get()).html());
			alert($(ui.oldHeader.get()).html());
			alert($(ui.oldPanel.get()).html());
		}
	*/
	
	});	
	
	
	
	
	
	
					
					
					
					//=====折叠菜单外部方法=====
	$("#accordion").accordion("disable");							//===禁用折叠菜单(灰色)
	
	$("#accordion").accordion("enable");							//===启用折叠菜单UI功能
	
	//alert($("#accordion").accordion('widget'));					//===获取折叠菜单整体的jquery对象
	
	$("#accordion").accordion("refresh");							//===更新折叠菜单
	
	//$("#accordion").accordion('destroy');							//===删除折叠菜单
	
	$("#accordion").accordion('option','active',2);					//===以option方式设置折叠菜单属性
	
	//alert($("#accordion").accordion('option','active'));			//===以option方式获取折叠菜单属性
	
	
	
	
	
	
	$("#accordion").on('accordionactivate',function(e,ui){			//===折叠菜单切换后ON事件
		//alert($(ui.newHeader.get()).text());
		//alert($(ui.oldHeader.get()).text());
		//alert($(ui.newPanel.get()).text());
		//alert($(ui.oldPanel.get()).text());
	});
	
	
		
	$("#accordion").on("accordionbeforeactivate",function(event,ui){	//===折叠菜单切换前ON事件
		//alert($(ui.newHeader.get()).html());
		//alert($(ui.newPanel.get()).html());
		//alert($(ui.oldHeader.get()).html());
		//alert($(ui.oldPanel.get()).html());
	});
	
});