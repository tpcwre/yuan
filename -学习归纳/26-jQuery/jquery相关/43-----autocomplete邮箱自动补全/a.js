$(function(){
	var hosts=["qq.com","163.com","263.com","sina.com.cn","gmail.com"];
	$("#email").autocomplete({
		delay:0,			//补全信息显示延迟时间
		autoFocus:true,			//自动选择第一条补全内容
		source:function(value,response){
		    var term=value.term,	//获取文本框输入内容
			name=term,		//将获取的内容当作邮箱前缀
			host="",		//邮箱后缀
			ix=term.indexOf("@");	//获取@的下标

			var resultall=[];	//预设一个总结果的变量。
			resultall.push(term); 	//将输入的内容放入总结果
			
			if(ix >=0){		//如果下标大于-1表示输入内容中包括@
						//当有@时前在获取的内容中截取前缀和后缀
				name=term.slice(0,ix);
				host=term.slice(ix+1);
			}	
			if(name){		//如果前缀和后缀都存在时
				if(host){
						//在hosts数组中筛选出host后缀名相同的内容
					var findhosts=$.grep(hosts,function(value,index){
						return value.indexOf(host)>-1;
					});
				}else{
						//如果没筛选出来则显示全部。
					findhosts=hosts;
				}
						//将动态前缀和每个后缀结合
				var result = $.map(findhosts,function(value,index){
					return name+"@"+value;
				});
						//将结合后的结果放入到总结果中， 另一种效果是当结合上面的push时，将会把未收录的的后缀直接显示在补全菜单中。
				resultall=resultall.concat(result);
			}
			response(resultall);

		}
	});
});
