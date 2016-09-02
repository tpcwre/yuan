$(function(){



/*


	click:		单击
	dblclcik:	双击
	mousedown:	鼠标按下
	mouseup:	鼠标弹起
	mousemove:	鼠标移动
	hover:		鼠标悬停
	mouseover() , mouseout()	表示鼠标移入和移出
	mouseenter() , mouseleave()	表示鼠标穿过和穿出 
	change:		表单值的改变
	select:		文本内容被选定事件
	submit:		提交触发
	keydown:	键盘按下
	keypress:       键盘按下
	keyup:		键盘抬起
	blur:		丢失焦点
	focusout 光标激活事件(可子节点激活)
	focus:		激活焦点
	focusin 光标激活事件(可子节点激活)
	load:		加载
	unload：	卸载
	resize
	scroll





	$(":button").on('click',function(){	//===on 绑定事件	
		//alert('单击事件');
	});

	$(":button").click(function(){		//===on 的简化事件
		//alert('单击事件');
	});





						

	$(":button").on({			//===on 同时绑定多事件
					
		mouseover:function(){			
			alert('光标移入事件');	
		},
		mouseout:function(){		
			alert('光标移出事件');
		}
	});








						//===on 方法添加额外数据
	$(":button").on('click',123,function(e){
		alert('额外数据'+e.data);		//数值
	});


	$(":button").on('click',['a','b'],function(e){
		alert('额外数据'+e.data[1]);		//数组
	});


	$(":button").on('click',{'name':'lee'},function(e){
		alert('额外数据'+e.data.name);		//对象键值对
	});







						//===on()方法中阻止默认行为
	$('form').on('submit',function(e){
		e.preventDefault();
	});

	$(".a").on('click',function(){
		alert('aaa');
	});
	$("i").on('click',function(e){
		//e.stopPropagation();		//===on() 方法中阻止冒泡行业	
		alert('bbb');
	});





						//===on() 方法中同时阻止冒泡和默认行为
	$("form").on("submit",function(){
		return false;
	});






	$(".one").on('click',function(){
		alert('one');
	});
	$(".one").off('click');			//===off() 移除绑定事件








						//===移除绑定事件的函数
	function fn1(){
		alert('aaaaaa');
	}
	function fn2(){
		alert('bbbbbbb');
	}
	$(':button').on('click',fn1);	

	$(':button').off('click'.fn);





						 
//有时我们想对事件进行移除，但对于同名元素绑定的事件移出往往比较麻烦，这个时候，可以使用事件的命名空间解决 

	$(":button").on('click.a',function(){			//===命名空间
		alert('aaaa');
	});
	$(":button").on('click.b',function(){
		alert('bbb');
	});

	$(":button").off('click.a');				//===移除指定命名空间事件



	



								//===on() 委托事件
	$("#box").on('click',":button",function(){
		$(this).clone().appendTo("#box");		
	});	


	

	$("#box").off("click",":button");			//===on() 移除委托事件
	

	


	$(":button").one('click',function(){			//===仅一次触发事件
		alert('仅一次触发事件');
	});




	$("#box").one('click',":button",function(){		//===仅一次委托事件
		$(this).clone().appendTo("#box");
	});








								//===模拟事件及其简写方式
	$(":button").on('click',function(){
		alert('模拟事件');
	}).trigger('click');

	$(":button").on('click',function(){
		alert('模拟事件简写方式');
	}).click();



								//===自定义事件
									//必须由模拟事件触发
	$(":button").on('myevent',function(){
		alert('这是一个自定义事件');
	}).trigger('myevent');






			//-----altKey/shiftKey/ctrlKey/metaKey  获取事件发生时是否按下了alt,shift,ctrl或meta键。

	$('div').on('click',function(e){
		alert(e.ctrlKey);	
	});
	$('div').on('click',function(e){
		alert(e.altKey);	//alt好像不好用，，
	});	
	$('div').on('click',function(e){
		alert(e.shiftKey);
	});




						//===timeStamp  获取事件触发的时间戳并转化为时间

	$(document).bind('click',function(e){
		var time= e.timeStamp;
		alert(time);
		time = new Date(time);
		var year=time.getFullYear()+'年';
		alert(year);
	});




						//===which  获取鼠标的左中右键（1，2，3），或获取键盘按键
	$(document).on('mousedown',function(e){
		//alert(e.which);	  //获取哪个鼠标键触发的事件
	});	
	$(document).bind('keydown',function(e){
		alert(e.which);	  //获取哪个键盘键触发的事件
	});



						//-----pageX/pageY 获取相对于页面原点的水平/垂直坐标

	//页面原点就是文档的左上点（x=0,y=0）的位置
	//-----screenX/screenY	获取显示器屏幕位置的水平/垂直坐标（非jquery封装）
	//-----clientX/clientY  获取相对于页面视口的水平/垂直坐标（非jquery封装）
	$(document).bind('click',function(e){
		alert(e.pageX+','+e.screenX+','+e.clientX);	//三种X坐标
		alert(e.pageY+','+e.screenY+','+e.clientY);	//三种Y坐标	
	});








						//-----点击循环变换(切换)背景色(颜色)

	var aa=0;
	$('#one').click(function(){
		if(aa==0){
			$(this).css('background','blue');
			aa=1;
		}else if(aa==1){
			$(this).css('background','red');
			aa=2;
		}else if(aa==2){
			$(this).css('background','green');
			aa=0;
		}
	});






						//-----点击元素消失再恢复
	$('div').click(function(){
	//	$(this).toggle('slow');
	//	$(this).toggle(4000);
	});












						//----- e 系统自动传给函数的事件 也可是其它变量

	//其结果是一个对象，即是对象就会有属性和方法
	$('input').click(function(es){
	//	alert(es+'es');	
	});






						//-----type 获取这个事件的事件类型，例如click

	$('input').bind('click',function(e){
	//	alert(e.type);	//获取事件类型
	//	alert(typeof e.type); //结果string类型
	});








						//-----target 获取触发事件的DOM元素

	//target是获取触发元素的DOM,就是点哪个元素就是哪个元素
	$('input').bind('click',function(e){
	//	alert(e.target);	
	});







						//-----currentTarget 获取指定触发的DOM元素，等同与this

	//currentTarget得到的是监听元素的DOM,就是绑定的哪个元素就是哪个元素
	$('div').bind('click',function(e){
		//alert(e.currentTarget);
		//alert(e.target);
	});




						//-----target与currentTarget的区别

	$('div').bind('click',function(e){
	//	alert(this==e.currentTarget);	//currentTarget 相当于this
	});
	$('div').bind('click',function(e){
	//	alert(this==e.target);		//target则不然
	});





					//-----relatedTarget 获取目标（鼠标）离开之后或进入之前的那个DOM元素

	//也就是移入移出最相邻的那个DOM
	$('span').bind('mouseover',function(e){
	//	alert(e.relatedTarget);	//移入前的DOM元素
	});
	$('span').bind('mouseout',function(e){
	//	alert(e.relatedTarget);	//移出后的DOM元素
	});


*/




});








































