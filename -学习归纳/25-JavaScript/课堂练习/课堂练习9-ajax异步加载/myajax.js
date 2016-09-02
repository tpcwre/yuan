
//自定义Ajax处理函数
function myAjax(url,async,fun){
	//1. 创建请求对象
	var xmlhttp = null;
	if(window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	//2. 设置回调函数
	xmlhttp.onreadystatechange=function(){
		//判断请求状态为4，响应状态为200
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			//获取响应信息
			var info = xmlhttp.responseText;
			fun(info); //调用回调函数，并将响应结果作为参数传入
			
		}
	}
	
	//3. 初始化请求信息
	xmlhttp.open("get",url,async);
	
	//4. 发送请求
	xmlhttp.send();
	
}