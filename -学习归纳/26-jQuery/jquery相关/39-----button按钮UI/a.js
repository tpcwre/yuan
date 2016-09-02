$(function(){

	$("#dia").dialog({
		buttons:{
			"提交":function(){

			}
		},
		position:'left top',
	});
	


	$("#but1").button({			//===启用按钮UI

		//disabled:true,		//===让按钮处于非激活状态

		label:'文字',			//===设置按钮上的文字

		//text:false,			//===隐藏按钮上的文字

		icons:{				//===设置按钮上的小图标
			primary:"ui-icon-search",
			secondary:'ui-icon-triangle-1-s',
			//注意：CSS的图库ui-lightness不要放错位置
			//图库地址：http://api.jqueryui.com/theming/icons/
			//或	jquery.com官网，选择
			//APIDocumentation -> widgets -> button Widget -> icons -> an icon class name
			//注意! 按钮上加图标时不能使用HTML原生的input元素，要在HTML中使用<button>元素
		},

		


		create:function(){		//===按钮创建事件
			//alert('创建事件');
		}
		
	});












			//=====按钮UI外部操作方法=====



	$('#but1').button('disable');		//===禁用按钮
	
	$("#but1").button('enable');		//===启用按钮

	//$("#but1").button('destroy');		//===删除按钮UI效果

	$("#but1").button('refresh');		//===更新按钮布局



						//===获取按钮整体jquery对象

	$("#but1").button('widget').css('color','red');



						//===获取按钮属性值

	//alert($("#but1").button('option','label'));




						//===设置按钮属性值

	$("#but1").button('option','label','设置');





						//===获取对话框中的按钮个数

	//alert($("#dia").dialog('widget').find('button').size());




						//===获取对话框中第一个按钮的内容

	//alert($("#dia").dialog('widget').find("button").eq(0).text()); //或html




						//===禁用对话框中的按钮
				
	//$("#dia").dialog('widget').find('button').eq(0).button('disable');
//或
	//$("#dia").dialog().parent().find('button').eq(1).button('disable');



			

						//===设置对话框中的radio单选按钮

	//$("#dia").buttonset();
	$('#dia input[type=radio]').button();








						//===设置对话框中的多选按钮

	//$("#dia").buttonset();
	$("#dia input[type=checkbox]").button();
















				//=====按钮UI样式=====



/*


					//=====修改全局按钮UI的样式

	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
		background:blue;
	}





					//=====修改UI局部按钮UI的样式
	.ui-widget-header{
		background:blue;
	}





					//=====修改全局按钮hover样式（将上面CSS的default全改成hover）

	.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-default{
		background:url(../img/bj.png);
	}






					//=====修改局部按钮hover样式（将上面CSS的首default改成hover）

	.ui-state-hover, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
		background:url(../img/bj.png);
	}





					//=====修改全局按钮的点击后的样式（将全部default改为active）

	.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active{
		background:url(../img/bj2.png);
	}




					//=====修改局部按钮的点击后的样式（将首个default改为active）

	.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-default{
		background:url(../img/bj2.png);
	}





*/



});

