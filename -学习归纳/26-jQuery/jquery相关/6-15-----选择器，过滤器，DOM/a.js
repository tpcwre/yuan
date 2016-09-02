$(function(){
	//$("p").next().css('font-size','30px');		//next() 下一个兄弟节点
	
	//$(".f").siblings().css('color','yellow');		//siblings() 上下所有兄弟节点

	//$('div').children().css('color','yellow');		//children() 一级子节点

	//$('div').find('u').css('color','blue');		//find() 后代节点

	//$('.b, u, .f, i').css('color','red');			// 群组选择器

	//$("div.d").css('color','blue');			// 限制选择器 （类名为d的div元素）
	
	//$(".a").nextUntil('.h').css('color','blue');		//nextUntil 指定下面非X节点，遇到X节点结束
	
	//$("div[title]").css('color','blue');			// 通过title属性设置元素样式





	//$("li:first").css('color','blue');			// li:first选择首个li元素
	
	//$("li").not('.two').css('color','blue');		//选择除指定类名以外的所有li元素

	//$("h1:header").css('color','blue');			// h1:header选择指定标题元素


	//$('input').get(0).focus();				// get(0) 获取第一个DOM对象
	//$("input").eq(0).focus();				// eq(0) 获取第一个jquery对象			
								// focus() 表单元素自动获取焦点



	//$("li:contains('ccc')").css('color','blue');		//:contains() 选取含有某文本内容的元素


	//$("div:empty").css({					//选取内容为空的元素
		//height:'100px',
		//background:'#ccc',
	//});
	
	//$(".two").parent().css("color",'blue');		//parent() 选择父元素

	//$('ul').has('.two').css('color','yellow');		//has 选择子元素中包含有类名为two的ol元素

	//alert($('div:hidden').size());			//:hidden 获取隐藏元素

	//alert($("div:visible").size());			//:visible 获取可见元素

	//$('li:nth-child(even)').css('color','blue')		//li:nth-child() 获取每个父元素的偶数子元素

	//alert($('.two').is('li'));				//is() 判定.two类所在元素是否为‘li’

	//$('li').filter('.two, :first, :last').css('background','#ccc');	//filter 多选择器共同实现 


	//alert($('.a').html());				//html() 获取元素中的内容（包括标签）

	//alert($('.a').text());				//text() 获取指定元素中文本内容 （不包括标签）


	//$('input').eq(0).val('ddddddddd');			//val() 设置或替换表单value值

	//alert($('input').eq(0).val()); 			//val() 获取表单value值

	//$('div').eq(3).attr('title','我是域名'); 		//设置指定元素的属性名和属性值。

	//$('div').eq(3).removeAttr('title');			//清除元素的属性

	//$('div').addClass('red');				//给元素添加一个CSS类样式

	//alert($('div').width());				//获取元素宽度

	//alert($('div').eq(3).offset().top);			//获取元素相对于视口的偏移位置

	//alert($(window).scrollTop());				//获取垂直滚动条的值



	//var aa = $('<i>这是一个在JS中创建的节点</i>');	//创建节点

	//$('body').append(aa);					//插入节点

	//$('div').wrap('<strong></strong>');			//给指定的节点包裹添加一层html父节点

	//$('.d').clone(true).prependTo('body');		//复制节点，参数true可选,表示连同事件一并复制

	//$('u').empty();					//清空指定节点内容，并保留节点


	$(':input').val('cccccccc'); 				//选取所有表单元素(包括select,textarea,botton)

	$(":text").val('dddddddddddd') 				//选取所有的单行本框;

	$("option:select").val();				//选择下拉菜单option的当前值


});








































