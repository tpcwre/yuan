$(function(){

/*
						//=====$.trim() 去除字串左右的空格 
	var str='    abc   ';
	alert(str)
	alert($.trim(str));



							//=====$.each()遍历数组

	var arr=['aaa','bbb','ccc','ddd'];
	//alert(arr);
	$.each(arr,function(index,value){
		//alert(index+1+"==>"+value);
		$("#one").html($('#one').html()+value+"<br>");
	});







							//=====$.each()遍历对象
	$.each(window,function(name,fn){
		$('#one').html($('#one').html()+fn+"<br>");		//遍历对像的方法
	

	});
	$.each(window.CSS,function(name,fn){
		//$("#one").html($('#one').html()+name+"<br>");		//遍历对象的属性
	});
	//alert(window.CSS.supports);











							//-----$.grep 数组的筛选
	var arr=[1,3,5,7,9,2,4,6,8,10];
	var arr2 = $.grep(arr,function(element,index){
		return element >2 && index < 5;  
		//element:值大于2   index:下标小于5
	});
	alert(arr2);







							//-----$.map()修改数据 
//$.map()能修改element值，但$.grep()不能修改element值。

	var arr=[1,2,3,4,5,6,7,8,9];
	var arr2=$.map(arr,function(element,index){
		if(element<5 && index>1){
			return element+2;
		}
	});

	alert(arr2);






							//-----$.inArray()获取指定元素的下标
	var arr=[1,2,3,4,5,6,7,8,9];
	var index=$.inArray(6,arr);
	alert(index);








							//-----$.merge()合并两个数组
	var arr=[1,2,3,4,5];
	var arr2=['a','b','c'];
	var arr3 = $.merge(arr2,arr);
	alert(arr3);








							//-----$.unique()删除数组中重复的元素
	var arr1 = [1,3,5,23,28,289,223];
	var arr2 = [3,5,89,234,72,85,5];
	var arr3 = $.merge(arr1,arr2);
	$("#one").html(arr3+"\t");
	var arr4 = $.unique(arr3);
	$("#two").html(arr4+'\t');
	//这里注意，在删除相同数值时因为浏览器的不同，效果会不同，有的浏览器去除不了。





							//=====.get()  获取指定类型元素并存放在一个对象数组中
	var one=$("p").get();					//将所有p元素存放在对象数组one中
	//alert($(one).eq(0).html());				//获取对象数组中第一个元素的内容
	//alert($(one).eq(0).find('i').html());			//获取对象数组中第一个元素中为i的子元素的内容 
	//alert(one.length);					//获取对象数组中元素的个数
	alert($(one).length);

	one=one.concat($('u').get());			//===== concat() 将获取到的'u'元素，添加到one对象数组里
	alert(one.length);







							
							//-----$.toArray()合并多个DOM组成元素
	var arr=$("p").toArray();
	alert(arr.length);
	alert($(arr[0]).html());



							


							//-----$.isArray() 判断目标是否为一个数组

	var arr=[1,2,3];
	var arr2='123';
	alert($.isArray(arr));
	alert($.isArray(arr2));







							//-----$.isFunction() 判断是否为一个函数
	var fn=function(){}
	var fn2=[1,2];
	alert($.isFunction(fn));
	alert($.isFunction(fn2));



							//-----$.isEmptyObject() 判断对象是否为空
	var obj1={};
	var obj2={name:"lee"};
	alert($.isEmptyObject(obj1));
	alert($.isEmptyObject(obj2));







							//-----$.isPlainObject() 判断是否为一个纯粹的对象
//纯粹对象就是用{}或new object 不能传参的对象 

var obj={}; //纯粹的对象 
obj = new Object();  //纯粹的对象
alert(obj);  //显示为object object 是一个对象
alert($.isPlainObject(obj));

obj=window; //
obj=new Object('name');  //传参后会变成一个字串
alert(obj);
alert($.isPlainObject(obj));








							//-----$.contains() 判断DOM节点是否包含另一个DOM节点

//注意对象后要有get(0)
	alert($.contains($("#one").get(0),$("u").get(0)));


	

							//=====$.type() 判断变量的类型

	var a=123;
	var b='abc';
	var c=[1,2,3];
	var d=true;
	var e={};
	var f=null;

	alert($.type(a));		
	alert($.type(b));
	alert($.type(c));
	alert($.type(d));
	alert($.type(e));
	alert($.type(f));





							//=====判断变量是否为数值

	var a='a';
	var b=1.2;
	alert($.isNumeric(a));
	alert($.isNumeric(b));


							//=====判断变量是否为window对象
	var win='a';
	var win1=window;
	alert($.isWindow(win));
	alert($.isWindow(win1));






					//-----$.param()将对象的键值对转换为URL中GET形式的字符串键值对
	var a = {
		name:'lee',
		sex:'nan',
	};

	alert($.param(a));








							//-----$.support.ajax 判断是否能创建ajax
	alert($.support.ajax);







							//-----$.support.opacity 设置不同浏览器的透明度
							//-----通过$.support.opacity 来检测浏览器是IE类还是W3C类

	if($.support.opacity==true){
		$(".opa").css("opacity",0.5);		//W3C浏览器的透明度用opacity
		alert("true为支持W3C");
	}else{
		//$(".opa").css("opacity",0.5);
		$("#box").css("filter","alpha(opacity=10)"); //非W3C浏览器透明度使用 filter
		alert("false为非W3C");
	}









							//-----$.proxy()解决this指向问题

	//jquery提供了一个预备绑定函数上下文工具函数：$.proxy(),这个方法，可以解决诸如外部事件触发调用对象方法时this的指向问题。

//问题原型
var obj={
	name:"Lee",
	test:function(){
		alert(this.name);
	}
};
//obj.test();  //如此直接调用上面的对象中的函数，this不会混乱
//$("#box").click(obj.test); //但是在对象之前加上一个事件触发对象，那么this指向就混乱了


//解决方法一（不推荐）
	var obj={
		name:'li',
		test:function(){
			//alert(this.name);
			var _this=obj;
			alert(_this.name);
		}
	};

	$(".opa").click(obj.test);
	*/


//解决方法二（推荐）
	var obj={
		name:'lee',
		test:function(){
			alert(this.name);
		}
	};
	$(".opa").click($.proxy(obj,'test'));







});