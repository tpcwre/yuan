$(function(){
/*
					//=====动画效果时间预设值 数字1000 ，'fast','slow','normal'

						//=====元素的显示与隐藏及切换
 	$(":button").eq(0).click(function(){
		$("#box").hide('fast');			
	});
	$(":button").eq(1).click(function(){
		$("#box").show(1000);
	});
	$(":button").eq(0).click(function(){
		$("#box").toggle(1000);		//toggle 切换显示隐藏
	});







						//=====元素的淡入淡出及切换

 	$(":button").eq(0).click(function(){
		$("#box").fadeOut('fast');			
	});
	$(":button").eq(1).click(function(){
		$("#box").fadeIn(1000);
	});
	$(":button").eq(0).click(function(){
		$("#box").fadeToggle(1000);	//fadeToggle 切换淡入淡出
	});
	





						//=====元素上下显示消失及切换
	$(':button').eq(0).click(function(){
		$("#box").slideUp(1000);
	});
	$(':button').eq(1).click(function(){
		$("#box").slideDown(1000);
	});
	$(':button').click(function(){
		$("#box").slideToggle(1000);	//slideToggle() 上下显示消失切换
	});






			
	





						//=====animate多重同步动画效果
	$(':button').eq(0).click(function(){
		$("#box").animate({		
			width:'500px',		//设置元素动态宽度
			height:'500px',		//设置元素动态高度
			opacity:0.3,		//设置元素动态 '透明度'
			fontSize:'3cm',		//设置元素中字体大小
		});
	});




						//=====元素显示隐藏的列队动画
$(".but3").click(function(){
 	$(".d1").hide(500,function(){			//以函数做参数的方式
		$('.d2').hide(500,function(){	
		$('.d3').hide(500);
	});
	});
});

$(".but3").click(function(){				//函数递归方式
	$(".d1").hide(500,function h(){
		$(this).next().hide(500,h);
	});
});






						//=====元素animate列队动画

$(":button").eq(0).click(function(){
	$("#box").animate({width:'800px'})		//连缀方式	
		.animate({height:'300px'})
		.animate({opacity:0.3})
		.animate({fontSize:'3cm'})
});




$(":button").click(function(){				//回调函数方式
	$("#box").animate({
		width:'800px',
	},500,function(){
	$("#box").animate({
		height:'300px',
	},500,function(){
	$("#box").animate({
		opacity:0.3,
	},500,function(){
	$("#box").animate({
		fontSize:'3cm'
	});
});
});
});
});





	
						//=====设置position产生移动动画效果(广告漂浮)
//引入jquery主文件
//将元素的position设置成绝对定位
$(":button").eq(0).click(function(){
	$("#box").animate({			//animate启用动画效果
		left:'400px',			//设置动态Y坐标
		top:'400px',			//设置动态X坐标
	},1000,'linear',function xh(){		//设置速度1000，均速，函数参数
	$("#box").animate({
		left:'800px',
		top:'200px',
	},1000,'linear',function(){
	$("#box").animate({
		left:'400px',
		top:0.
	},1000,'linear',function(){
	$("#box").animate({
		left:0,
		top:'200px',
	},1000,'linear',function(){
	$("#box").animate({
		left:'400px',
		top:'400px',
	},1000,'linear',xh);
});
});
});
});
});


	

						//=====stop() 暂停动画的三种方式 

$(":button").eq(0).click(function(){				//参数函数方式的动画效果		
	$("#box").animate({left:'700px'},2000,function(){
	$("#box").animate({top:'300px'},2000,function(){
	$("#box").animate({width:'300px'},1000,function(){
	$("#box").animate({fontSize:'3cm'},1000);
})
});
});  
});
		

$(':button').eq(0).click(function(){
	$('#box')
		.animate({left:'500px'},1000)		//连缀的动画效果
		.animate({top:'300px'},1000)
		.animate({width:'300px'},1000)
		.animate({height:'300px'},1000);
});


$(":button").eq(1).click(function(){
	$("#box").stop(true,true);			//不带参数true的stop 
});
//当动画效果是连缀方式时，stop()只能控制当前效果。不能控制续发效果
//当动画效果是函数参数内连时，stop()和stop(true)效力一样都可以控制全部效果停止。
//stop(true,true) 会将当前动画效果提前结束。继续继发效果










						//=====delay() 列队动画时间延迟
	$(':button').click(function(){
		$('#box').delay(1000)
			.animate({left:'500px'})
			.animate({top:'300px'})
			.delay(1000)
			.animate({width:'300px'})
			.animate({height:'300px'});
	});

					

						//=====:animated 获取当前运动的动画 
	$(':button').eq(1).click(function(){
		$(':animated').stop().css('background','blue');
	});

						//===== $.fx.interval 设置浏览器帧数

	//$.fx.interval='13';			//默认是13毫秒 数值越大会越卡

					

						//===== $.fx.off 关闭动画效果

	//$.fx.off='true';

*/
						//=====animate动画运动参数 swing(缓动),linear(匀速)

	$('.but4').click(function(){
		$('.dd1').animate({left:'800px'},3000,'swing');
		$('.dd2').animate({left:'800px'},3000,'linear');
	});






});