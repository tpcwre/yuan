$(function(){
			
   $("#date").datepicker({


		//=====日期的设置相关=====



//=====将日期显示到指定的input域

	altField:'#email',





//=====设置显示在其它input域中的日期格式

	altFormat:"d-m-yy",





//=====在日期文本域后面附加文本。

	appendText:"日历",




//=====在日历中显示一年中当前所处的周数

	//showWeek:true,	
	weekHeader:"王",	//设置周的标题




//=====设置日历面板以星期几开头

	firstDay:1,  	//以周一开头





//=====星期中天的显示格式 

	//===星期中天的极短格式(正常显示使用)
	dayNamesMin:["日","一","二","三","四","五","六"],

		//===星期中天的长格式
		//dayNames:["星期一","星期二","星期三","星期四","星期五","星期六","星期日"],

		//===星期中天的短格式
		//dayNamesShort:["星期一","星期二","星期三","星期四","星期五","星期六","星期日"],  








//=====设置月分的显示格式
	
	//===月份的长格式（日历正常显示使用）
	monthNames:["一月1","二月","三月2","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],

		//===月份的短格式
		monthNamesShort:["一1","二","三2","四","五","六","七","八","九","十","十一","十二"],





//=====设置日历面板上年和月份的顺序

	showMonthAfterYear:true,	//true 年前月后		false 年后月前





//=====设置日期显示的顺序

	dateFormat:'yy-mm-dd',				
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













			//=====日历的属性相关=====


//=====变换日历的显示顺序是从左还是从右开始  isRTL
	//isRTL:true,





//=====禁用日历 disabled 

	//disabled:true,  //默认false 





//=====日历同时显示多个月分的面板 

	//numberOfMonths:3,		//同时显示三个月份的内容。
	//numberOfMonths:[2,3], 	//同时显示两行三列共六个月的内容





//=====显示当前月以外的日期，但无法选择

	showOtherMonths:true,




//=====设置是否可选择当前月以外的日期

	selectOtherMonths:true,





//=====显示月份下拉列表  

	//下拉列表需使用月份短格式 monthNamesShort	
	monthNamesShort:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
	changeMonth:true,





//=====显示年份下拉列表 

	//默认false,  如果设置为true,显示快速选择年份下拉列表
	changeYear:true,





//=====在日历面板上的年后面加上文本  yearSuffix

	yearSuffix:"",  //也可以为空





//=====是否自动调整日历输入的文本框以适应日期格式的大小，

	//默认值为false,是否自动调整控件大小以适应当前的日期格式的输入。此方法在没有对文本框进行CSS设置时有效。
	//autoSize:true,





//=====触发日历显示的三种方式

	//默认值为focus , 获取焦点触发。还有button 点击按钮触发和both任一事件触发。
	//showOn:"button",  	//注：当以按钮形式时，默认的获取焦点形式就失效了。
	//showOn:"both",   //获取焦点和点击按钮都可触发显示日历。





//=====设置触发日历按钮上的文本	buttonText

	//showOn:"button",
	//buttonText:"按钮",





//=====设置触发日历按钮上的图片（能看到按钮） buttonImage

	//showOn:"button",
	//buttonImage:"../img/1.jpg",





//======设置用图片代替按钮（看不到按钮） buttonImageOnly

	//设置为true则会使图片代替按钮。
	//showOn:"button",
	//buttonImageOnly:true,





//======日历面板上显示“今天和关闭”按钮  showButtonPanel

	//默认值 false,开户显示按键面板。
	showButtonPanel:true,





//======设置“今天”按钮上的的文本

	//showButtonPanel:true,
	//currentText:"当天",
	//closeText:"取消",





//======设置鼠标悬停在上月下月的时的提示信息

	nextText:"下月",
	prevText:"上月",





//-----让上月，下月和今天的按钮上显示当前的日期。  navigationAsDateFormat

	//默认false,设置prev,next 和current的文字可以是format的日期格式。
	showButtonPanel:true,
	currentText:"当天dd",
	close:"取消",
	nextText:"下月mm",
	prevText:"上月mm",
	navigationAsDateFormat:true,	





//=====设置日期可选择的范围（天，周，月）

	//日历中可以选择的最大日期
	//在设置日期时maxDate,minDate,yearRange会相互牵制，要配合使用。
	//maxDate:2,   		//可选择后2天的日期
	//minDate:-2,  		//可选择前2天的日期，
	//maxDate:"1w",		//可选择后1周的日期，
	//minDate:"-1w",		//可选择前1周的日期。
	//maxDate:"1m",		//可选择后一个月的日期。
	//minDate:"-1m",		//可选择前一个月的日期。





//=====隐藏不存在的上月或下月	hideIfNoPrevNext

	//在设置日期时maxDate,minDate,yearRange会相互牵制，要配合使用。
	//设置为true,如果上月或下月不存在。则隐藏prev或next按钮。
	//maxDate:0,
	//minDate:-8000,	//显示之前的8000天
	hideIfNoPrevNext:true,




//-----设置日历显示年份的范围

	changeMonth:true,
	changeYear:true,
	//在设置日期时maxDate,minDate,yearRange会相互牵制，要配合使用。
	yearRange:"1950:2020",





//-----预设默认选定日期，没有指定，则是当天。

	//当触发日历后直接点回车，就会返回预设的日期。
	defaultDate:"2", 		//这里预设日期为前第二天。




//-----设置“今天”按钮指向的是实际的今天还是选定的当天 gotoCurrent
	//设置为true时，“今天”按键会指向选定的当天，而不是指向实际的今天。
	showButtonPanel:true,
	currentText:"今天dd",
	close:"关闭",
	gotoCurrent:true,





//======设置日历弹出及隐藏时延迟时间  duration

	//duration:2000,		//默认为300毫秒





//=====设置日历弹出时的效果 showAnim


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




























			//=====日历事件与方法=====


/*

//=====日历显示时触发前事件	beforeShow
	beforeShow:function(){
	//	alert("日历显示之前被调用");
	},






//=====限制日历每月的1号为不可选状态 (beforeShowDay)

	beforeShowDay:function(date){		//date对象
		if(date.getDate()==1){		//getDate():月份中的天(1-31)
			return [false];
		}else{
			return [true];
		}
	},





//=====限制日历每个周一为不可选状态  (beforeShowDay)

	beforeShowDay:function(date){
		if(date.getDay()==1){		//getDay():周中的天(1-7)
			return [false];
		}else{
			return [true];
		}
	},





//=====同时限制日历的多种情况的日期为不可状态。(beforeShowDay)

	beforeShowDay:function(date){
		if(date.getDay()==1 || date.getDay()==2 || date.getDate()==12 ||date.getDate()==21){
			return [false];
		}else{
			return [true];
		}
	},





//=====设置被选择的日期的CSS样式与提示信息及

	//设置日历中每月1号的字体都是大号字体
	//日历筛选限制beforeShowDay的第二个参数“指定类名”
	//日历筛选限制beforeShowDay的第三个参数，为筛选的对象设置悬停的提示文本
	//这里为日历对象生成了一个名为“a”的样式。在CSS中可以对其进行设置
	beforeShowDay:function(date){
		if(date.getDate()==1){
			//beforeShowDayr的三个参数如下
			return [false,"aa","不能选择1号"];   

		}else{
			return [true];
		}
	},






//=====日历中年份或月份改变时触发 onChangeMonthYear

	//onChangeMonthYear(year,month,inst)方法在日历中显示的月份或年份改变时会被调用，或者changMonth或changeYear为true时，下拉改变时也会触发。Year-当前的年，month-当年的月，inst是一个对象，可以调用一些属性获取值。

	onChangeMonthYear:function(year,month,inst){
		alert("当前的年份是："+year);
		alert("当前的月份是："+month);
		for(var i in inst){
			document.write(i+"<br>");
		} 
		alert(inst.currentDay);
	},
			inst对象中包含的属性：
					id 		//日历的ID名
					input		//对象
					selectedDay	//当前被选择的是几号
					selectedMonth	//当前被选择的月份
					selectedYear	//当前被选择的年份
					drawMonth	//当前被选择月份的下标值。注：1月是0 ，2月是1，，，
					drawYear	//当前被选择年份的下标值。（与年份相同）
					inline
					dpDiv		//对象
					settings
					append
					trigger
					lastVal
					currentDay
					currentMonth
					currentYear
					yearshtml
					_keyEvent






//=====得到日历当前选择的日期   onSelect

	//onSelect(dateText,inst)方法在日历被关闭的时候调用，dateText是当时选中的日期字符串，inst是一个对象，可以调用一些属性获取值。
	onSelect:function(dateText,inst){
		alert("当前选择的日期是："+dateText);
	},




//=====得到日历关闭后所选择日期  onClose

	//onClose(dateText,inst)方法日历被关闭的时候调用，dateText是当时选中的日期字符串，inst是一个对象，可以调用一些属性获取值。
	onClose:function(dateText,inst){
		alert(dateText);
	},
*/

   });

















				//=====日历的外部方法=====


/*
//=====获得当前的年份
	$("#date").click(function(){
		//alert($("#date").datepicker("getDate").getFullYear());
	});






//=====设置日历的日期的外部方法

	//$("#date").datepicker("setDate","2011-1-1");




//=====是否自动弹出日历面板

	//show:自动弹出  hide:自动隐藏  
	//$("#date").datepicker("show");




//=====删除日历的外法方法

	//$("#date").datepicker("destroy");





//=====获取日历的jQuery对象的外部方法

	//$("#date").datepicker("widget").css('fontSize','30px');





//=====刷新日历

	//$("#date").datepicker("refresh");





//=====查看日历是否被禁用

	alert($("#date").datepicker("isDisabled"));





//=====设置日历的option属性值

	$("#date").datepicker("option","disabled",true);




//=====获取日历option属性值
	alert($("#date").datepicker("option","disabled"));



*/


});



									//===把日历改成中文版

	//方法一：直接引入中文语言包 jquery.ui.datepicker-zh-CN.js 即可。
	//方法二：把中文语言包内代码全部粘贴到jquery.ui.js中	
	//UI各功能的语言包存放在：jquery-ui-1.10.4.custom\development-bundle\ui\i18n 中。