$(function(){


	
	$("#dia").dialog({		//===调用对话框UI

		autoOpen:false,	//===对话框是否自动打开

		//draggable:false,	//===对话框是否可拖动
	
		//resizable:false,	//===对话框是否可改变大小

		modal:true,		//===对话框以外是否被罩住
	
		closeText:'关闭',	//===右上角 'X' 的提示信息
			
		title:'更改标题',	//===设置标题内容
	
		buttons:{		//===设置对话框中的按钮
			"提交":function(){
				alert('正在提交...');
			},
			"取消":function(){
				return $(this).dialog('close');
			}
		},
	
		position:'left top',	//===设置对话框的位置 
						//left center right
						//top center bottom
					


					//===设置对话框的大小
		width:300,			//显示长宽
		height:300,
		minWidth:290,			//最小长宽
		minHeight:290,
		maxWidth:500,			//最大长宽
		maxHeight:500,


					//===对话框的显示方式
		show:true,			
		hide:true,				
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

	


/*
			//=====对话框事件=====
						

							//===对话框获取焦点事件
		focus:function(event,ui){		
			//alert('dia获取焦点'+event);
		},

							//===对话框创建事件
	
		create:function(event,ui){
			//alert('创建事件');
		},



							//===对话框打开事件

		open:function(event,ui){
			//alert('打开事件');
		},


							//===对话框关闭事件
		
		close:function(event,ui){
			alert('关闭事件');
		},



							//===对话框将要关闭事件
		
		beforeClose:function(event,ui){
			alert('将要关闭');
			return false;		
			返回true关闭，返回false不关闭
		},



							//===对话框移动事件

		drag:function(event,ui){

		//ui下有position属性，position下有top-横坐标和left-纵坐标属性  
		}
	

	
							//===对话框移动前事件
		dragStart:function(event,ui){
			alert(
				'top:'+ui.position.top+		
				'left:'+ui.position.left
			);
  		}

		

							//===对话框移动后事件
		dragStop:function(event,ui){
			alert(
				"top"+ui.position.top+
				"left"+ui.position.left
			);
		}



							//===对话框大小改变事件
		resize:function(event,ui){
		  alert(
			'width:'+ui.size.width+"\n"+
			'height:'+ui.size.height+'\n'+
			'top:'+ui.position.top+"\n"+
			'left:'+ui.position.left+'\m'
		  );
		//ui有两个属性 size(大小) 和 position(位置)
			//size有两个子属性 width , height
			//position有两个子属性 top , left
		}




							//===对话框开始改变时事件
		resizeStart:function(event,ui){
		  alert(
			'width:'+ui.size.width+"\n"+
			'height:'+ui.size.height+'\n'+
			'top:'+ui.position.top+"\n"+
			'left:'+ui.position.left+'\m'
		  );
		//ui有两个属性 size(大小) 和 position(位置)
			//size有两个子属性 width , height
			//position有两个子属性 top , left
		}





							//===对话框改变结束时事件
		resizeStop:function(event,ui){
		  alert(
			'width:'+ui.size.width+"\n"+
			'height:'+ui.size.height+'\n'+
			'top:'+ui.position.top+"\n"+
			'left:'+ui.position.left+'\m'
		  );
		//ui有两个属性 size(大小) 和 position(位置)
			//size有两个子属性 width , height
			//position有两个子属性 top , left
		}

*/


	});




			//=====dialog外部方法=====





						//===打开圣对话框
	$("#dia").dialog('open');		

						//===关闭对话框
	//$("#dia").dialog('close');

						//===删除对话框
	//$('#dia').dialog('destroy');

						//===判断对话框是否以打开
	//alert($("#dia").dialog('isOpen'));

						//===获取对话框整体jquery对象
	//$("#dia").dialog('widget').css('fontSize','30px');

						//===获取对话框的属性值
	//alert($('#dia').dialog('option','width'));

						//===设置对话框的属性值
	//$("#dia").dialog('option','width','500px');






		








			//=====对话框的on事件=====



					
	$("#dia2").dialog();
	$("#dia2").on('dialogclose',function(){
		alert('对话框关闭事件');
	});
/*
				dialogfocus		得到焦点时触发
				dialogopen		显示时触发
				dialogbeforeclose	将要关闭时触发
				dialogclose		关闭时触发
				dialogdrag		每一次移动时触发
				dialogdragstart		开始移动时触发
				dialogdragstop		移动结束时触发
				dialogresize		每次调整大小时触发
				dialogresizestart	开始调整大小时触发
				dialogresizestop	结束调整大小时触发
*/	




//-----将指定对话框置前
/*
$(".login").dialog();
$("#reg_a").click(function(){
	$(".reg").dialog("moveToTop");
});
$("#login_a").click(function(){
	$(".login").dialog("moveToTop");
});
*/








/*

						//===更改对话框标题区字体样式
	.ui-dialog-title{
		color:red;	
	}


						//===更改对话框标题区背景样式

	.ui-widget-header{
		background:url(bj.png);
	}
*/
});