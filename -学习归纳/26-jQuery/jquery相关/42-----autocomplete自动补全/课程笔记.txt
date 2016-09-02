$(function(){
	var host=['a','aa','aaa','aaaaa','bb'];		//===创建一个数据源

	$("#email").autocomplete({			//===启用自动补全UI

		source:host,				//===引入数据源

		//disabled:true,			//===禁用自动补全
		
		minLength:1,				//===触发补全的最小字长

		delay:50,				//===补全显示延迟 
								//默认300毫秒

		autoFocus:true,				//===自动选择补全首项信息

		position:{
			//my:'left center',
			//at:'right center',
		},




		




			//=====补全事件====




								//===补全创建事件
		create:function(){
			//alert('创建事件');
		},


								//===补全打开事件

		open:function(){
			//alert('打开事件');
		},





								//===补全关闭事件
		close:function(){
			//alert('关闭事件');
		},


				


								//===补全获取焦点事件
								//===获取焦点停留时的补全内容
		focus:function(e,ui){
			//alert('补全获取焦点时事件');
			//alert(ui.item.label);			
			//alert(ui.item.value);
		//当自动补全获取焦点时，会调用focus方法，该方法有两个参数(event,ui)，此事件中的ui有一个子属性对象item,分别有两个属性：label,补全列表显示的文本：value,将要输入框的值，一般label和value值相同，如果是键值对的话，label相当于key,value就是val。
		},




								//===补全信息选择事件
		select:function(e,ui){
			//alert('补全被选择时事件');
			//alert(ui.item.label);			
			//alert(ui.item.value);
		//当自动补全获取焦点时，会调用focus方法，该方法有两个参数(event,ui)，此事件中的ui有一个子属性对象item,分别有两个属性：label,补全列表显示的文本：value,将要输入框的值，一般label和value值相同，如果是键值对的话，label相当于key,value就是val。
		},


								//===补全改变事件
		change:function(e,ui){
			//alert('补全内容改变时事件');
		},

								//===补全内容搜索完事件
		search:function(e,ui){
			//alert('补全内容搜索完毕事件');
		},
								//===补全搜索完显示前事件
		response:function(e,ui){
			//alert('补全搜索完显示前事件');
		},

	});











			//=====自动补全外部方法=====


	$("#user").autocomplete({
		source:['e','ee','eee','aa','aaa','bb','bbb','cc','ccc','dd','ddd','ff','fff'],
		minLength:0,
	});

	//$("#user").autocomplete('disable');		//===关闭自动补全

	//$("#user").autocomplete('enable');		//===启用自动补全

	//$("#user").autocomplete('destroy');		//===删除自动补全

	//$('#user').autocomplete('widget');		//===补全整体jquery对象

	//$('#user').autocomplete('search','f');		//===自动显示补全信息
								//需要将minLength设置为0


	$("#user").autocomplete('option','autoFocus',true);	//===设置自动补全的属性值

	//alert($('#user').autocomplete('option','autoFocus'));	//===获取自动补全的属性值












				//=====自动补全的on事件=====
	





	$('#user').on('autocompleteopen',function(){
		alert('补全打开时触发事件');
	});

/*
							autocompleteopen	显示时触发
							autocompleteclose	关闭时触发
							autocompletesearch	查找时触发
							autocompletefocus	获得焦点时触发
							autocompletechange	改变时触 发
							autocompleteselect	选定时触发
							autocompleteresponse	搜索完毕后，显示之前
*/









});