$(function(){

	$(".fabu_form").validate({
	
		rules:{
			title:{
				required:true,
				maxlength:13,
			},
			gqgx:{
				required:true,
			},
			hx1:{
				required:true,
				maxlength:1,
				digits:true,
			},
			hx2:{
				required:true,
				maxlength:1,
				digits:true,
			},
			hx3:{
				required:true,
				maxlength:1,
				digits:true,
			},
			hx4:{
				required:true,
				maxlength:1,
				digits:true,
			},
			mj:{
				required:true,
				number:true,
				min:0.1,
				maxlength:8,
			},
			mjqg1:{					//求购，求租面积1
				required:true,
				number:true,
				maxlength:8,
			},
			mjqg2:{					//求购，求租面积1
				required:true,
				number:true,
				maxlength:8,
			},
			priceall:{					//价格-总价
				required:true,
				number:true,
				min:0.1,
				maxlength:8,
			},
			priceqg1:{					//价格-求购 万无
				required:true,
				number:true,
				maxlength:8,
			},
			priceqg2:{
				required:true,
				number:true,
				maxlength:8,
			},
			priceqz1:{					//求租 元
				required:true,
				number:true,
				maxlength:8,
			},
			priceqz2:{					//求租 元
				required:true,
				number:true,
				maxlength:8,
			},
			priceyz:{					//出租-月租 元
				required:true,
				number:true,
				maxlength:8,
			},
			lc1:{
				//required:true,
				digits:true,
				maxlength:3,
			},
			lc2:{
				//required:true,
				digits:true,
				maxlength:3,
			},
			phone:{
				required:true,
				digits:true,
				maxlength:13,
			},
			lxr:{
				required:true,
			},
			aname:{
				maxlength:6,
			},
			position:{
				maxlength:10,
			},
			lxr:{
				maxlength:5,
			}
			
		},
		messages:{
			title:{
				required:'标题不得为空',
				maxlength:'标题最多13个字符',
			},
			gqgx:{
				required:'供求关系至少选一项',
			},
			hx1:{
				required:'户型不得为空',
				digits:'户型请输入正整数',
				maxlength:'户型数值不得大于两位',
			},
			hx2:{
				required:'户型不得为空',
				digits:'户型请输入正整数',
				maxlength:'户型数值不得大于两位',
			},
			hx3:{
				required:'户型不得为空',
				digits:'户型请输入正整数',
				maxlength:'户型数值不得大于两位',
			},
			hx4:{
				required:'户型不得为空',
				digits:'户型请输入正整数',
				maxlength:'户型数值不得大于两位',
			},
			mj:{
				required:'面积不得为空',
				number:'面积请输入有效的数值',
				min:'面积不得小于0',
				maxlength:'面积不得超过8个字符',
			},
			mjqg1:{						//求购，求租面积1
				required:'面积不得为空',
				number:'面积请输入有效的数值',
				maxlength:'面积不得超过8个字符',
			},
			mjqg2:{						//求购，求租面积2
				required:'面积不得为空',
				number:'面积请输入有效的数值',
				maxlength:'面积不得超过8个字符',
			},
			priceall:{
				required:'价格不得为空',
				number:'价格请输入有效的数值',
				min:'价格不得小于0',
				maxlength:'价格不得超过8个字符',
			},
			priceqg1:{					//求购价格-万无
				required:'价格不得为空',
				number:'价格请输入有效的数值',
				maxlength:'价格不得超过8个字符',
			},
			priceqg2:{					//求购价格-万无
				required:'价格不得为空',
				number:'价格请输入有效的数值',
				maxlength:'价格不得超过8个字符',
			},
			priceqz1:{					//求租 元
				required:'月租不得为空',
				number:'月租请输入有效的数值',
				maxlength:'月租不得超过8个字符',
			},
			priceqz2:{					//求租 元
				required:'月租不得为空',
				number:'月租请输入有效的数值',
				maxlength:'月租不得超过8个字符',
			},
			priceyz:{
				required:'月租不得为空',
				number:'月租请输入有效的数值',
				maxlength:'月租不得超过8个字符',
			},
			lc1:{
				//required:'楼层不得为空',
				digits:'楼层请输入正整数',
				maxlength:'楼层不得超过3个字符',
			},
			lc2:{
				//required:'楼层不得为空',
				digits:'楼层请输入正整数',
				maxlength:'楼层不得超过3个字符',
			},
			phone:{
				required:'电话不得为空',
				digits:'电话请输入正整数',
				maxlength:'电话不得超过13个字符',
			},
			lxr:{
				required:'联系人不得为空',
			},
			aname:{
				maxlength:'小区名不得超过6个字符',
			},
			position:{
				maxlength:'位置不得大于10个字符',
			},
			lxr:{
				maxlength:'联系人不得超过5个字符',
			}
		},
		
		
		highlight:function(element,errorClass){
			$(element).css("border","2px solid red");
		},
		unhighlight:function(element,errorClass){
			$(element).css({
				'border-top':'2px solid #000',
				'border-left':'1px solid #000',
				'border-right':'1px solid #aaa',
				'border-bottom':'1px solid #aaa',
				
			});
		},
		
		errorLabelContainer:"p.fabu_error",
		wrapper:'li',
		errorClass:'error_red',
		submitHandler:function(){
			$(".fabu_form").ajaxSubmit({
				url:'fabu_control.php',
				type:'post',
				beforeSubmit:function(){
					$(".login_loading").dialog('open');
				},
				success:function(response){
					//alert(response);
					if(response==1){
						$(".login_loading").dialog('open').html('信息发布成功');
						setTimeout(function(){		//时间间隔1秒钟后执行以下操作
							$('#loading').dialog('close');		//关闭loading对话框
							$("#reg").dialog('close');		//关闭reg对话框
							$("#reg").resetForm();			//重置所有表单项
						},1000);
						//location.href='index.php';			//页面跳转
					}else{
						$(".login_loading").dialog('open').html('信息发布失败');
					}
					setTimeout(function(){
						$(".login_loading").dialog('close').html('数据正在提交中...');
					},1000);
				},
			});
		},
	});

	
	
	
	
	
	
	$(".f_priceyz, .f_priceqg, .f_mjqg, .f_priceyz, .f_priceqz").css('display','none');
	$(".gqgx_cs").click(function(){					//出售
		$(".f_lc, .f_position, .f_aname, .f_priceall, .f_mj").css('display','block');
		$(".f_priceyz, .f_priceqg, .f_priceyz, .f_mjqg, .f_priceqz").css('display','none');
	});
	$(".gqgx_cz").click(function(){					//出租
		$(".f_lc, .f_position, .f_aname, .f_priceyz, .f_mj").css('display','block');
		$(".f_priceall, .f_priceqg, .f_mjqg, .f_priceqz").css('display','none');
	});
	$(".gqgx_qg").click(function(){					//求购
		$(".f_priceyz, .f_priceall, .f_mj, .f_priceyz, .f_priceqz, .f_lc").css('display','none');
		$(".f_priceqg, .f_mjqg").css('display','block');
	});
	$(".gqgx_qz").click(function(){					//求租
		$(".f_priceall, .f_priceqg, .f_mj, .f_priceyz, .f_lc").css('display','none');
		$(".f_mjqg, .f_priceqz").css('display','block');
	});
	
	
	
	
	

	
});