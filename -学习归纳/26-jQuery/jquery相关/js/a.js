$(function(){
	$("#but1").click(function(){
		//alert('单击事件');
	});
	
	$("#but1").dblclick(function(){
		//alert('双击事件');
	});
	
	$(':button').mousedown(function(){
		//alert('鼠标左键按下事件');	
	});
	
	$(":button").mouseup(function(){
		//alert("鼠标抬起事件");
	});
	
	$(":button").mousemove(function(){
		//alert("鼠标移动事件");
	});
	
	$(":button").mouseover(function(){
		//alert("鼠标移入事件");
	});
	
	$(":button").mouseout(function(){
		//alert("鼠标移出事件");
	});
	
	$(":text").change(function(){
		//alert("表单值改变事件");
	});
	
	$(":text").select(function(){
		//alert("文本内容被选定事件");
	});
	
	$('form').submit(function(){
		//alert('提交事件');
	});
	
	$('body').keydown(function(e){
		//alert("带功能键的键盘按下事件"+e.keyCode);
	});
	
	$('body').keyup(function(e){
		//alert("带功能键的键盘抬起事件"+e.keyCode);
	});
	
	$('body').keypress(function(e){
		//alert("普通键盘按下事件"+e.keyCode);
	});
	
	$(":text").blur(function(){
		//alert("失去焦点事件");
	});
	
	$(":text").focus(function(){
		//alert("获得焦点事件");
	});
	
	$(document).load(function(){
		alert('页面加载事件');
	});

	
	
	
	
	
	
	
	
	
});



















