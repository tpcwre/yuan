$(function(){
/*
					//=====����Ч��ʱ��Ԥ��ֵ ����1000 ��'fast','slow','normal'

						//=====Ԫ�ص���ʾ�����ؼ��л�
 	$(":button").eq(0).click(function(){
		$("#box").hide('fast');			
	});
	$(":button").eq(1).click(function(){
		$("#box").show(1000);
	});
	$(":button").eq(0).click(function(){
		$("#box").toggle(1000);		//toggle �л���ʾ����
	});







						//=====Ԫ�صĵ��뵭�����л�

 	$(":button").eq(0).click(function(){
		$("#box").fadeOut('fast');			
	});
	$(":button").eq(1).click(function(){
		$("#box").fadeIn(1000);
	});
	$(":button").eq(0).click(function(){
		$("#box").fadeToggle(1000);	//fadeToggle �л����뵭��
	});
	





						//=====Ԫ��������ʾ��ʧ���л�
	$(':button').eq(0).click(function(){
		$("#box").slideUp(1000);
	});
	$(':button').eq(1).click(function(){
		$("#box").slideDown(1000);
	});
	$(':button').click(function(){
		$("#box").slideToggle(1000);	//slideToggle() ������ʾ��ʧ�л�
	});






			
	





						//=====animate����ͬ������Ч��
	$(':button').eq(0).click(function(){
		$("#box").animate({		
			width:'500px',		//����Ԫ�ض�̬���
			height:'500px',		//����Ԫ�ض�̬�߶�
			opacity:0.3,		//����Ԫ�ض�̬ '͸����'
			fontSize:'3cm',		//����Ԫ���������С
		});
	});




						//=====Ԫ����ʾ���ص��жӶ���
$(".but3").click(function(){
 	$(".d1").hide(500,function(){			//�Ժ����������ķ�ʽ
		$('.d2').hide(500,function(){	
		$('.d3').hide(500);
	});
	});
});

$(".but3").click(function(){				//�����ݹ鷽ʽ
	$(".d1").hide(500,function h(){
		$(this).next().hide(500,h);
	});
});






						//=====Ԫ��animate�жӶ���

$(":button").eq(0).click(function(){
	$("#box").animate({width:'800px'})		//��׺��ʽ	
		.animate({height:'300px'})
		.animate({opacity:0.3})
		.animate({fontSize:'3cm'})
});




$(":button").click(function(){				//�ص�������ʽ
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





	
						//=====����position�����ƶ�����Ч��(���Ư��)
//����jquery���ļ�
//��Ԫ�ص�position���óɾ��Զ�λ
$(":button").eq(0).click(function(){
	$("#box").animate({			//animate���ö���Ч��
		left:'400px',			//���ö�̬Y����
		top:'400px',			//���ö�̬X����
	},1000,'linear',function xh(){		//�����ٶ�1000�����٣���������
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


	

						//=====stop() ��ͣ���������ַ�ʽ 

$(":button").eq(0).click(function(){				//����������ʽ�Ķ���Ч��		
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
		.animate({left:'500px'},1000)		//��׺�Ķ���Ч��
		.animate({top:'300px'},1000)
		.animate({width:'300px'},1000)
		.animate({height:'300px'},1000);
});


$(":button").eq(1).click(function(){
	$("#box").stop(true,true);			//��������true��stop 
});
//������Ч������׺��ʽʱ��stop()ֻ�ܿ��Ƶ�ǰЧ�������ܿ�������Ч��
//������Ч���Ǻ�����������ʱ��stop()��stop(true)Ч��һ�������Կ���ȫ��Ч��ֹͣ��
//stop(true,true) �Ὣ��ǰ����Ч����ǰ�����������̷�Ч��










						//=====delay() �жӶ���ʱ���ӳ�
	$(':button').click(function(){
		$('#box').delay(1000)
			.animate({left:'500px'})
			.animate({top:'300px'})
			.delay(1000)
			.animate({width:'300px'})
			.animate({height:'300px'});
	});

					

						//=====:animated ��ȡ��ǰ�˶��Ķ��� 
	$(':button').eq(1).click(function(){
		$(':animated').stop().css('background','blue');
	});

						//===== $.fx.interval ���������֡��

	//$.fx.interval='13';			//Ĭ����13���� ��ֵԽ���Խ��

					

						//===== $.fx.off �رն���Ч��

	//$.fx.off='true';

*/
						//=====animate�����˶����� swing(����),linear(����)

	$('.but4').click(function(){
		$('.dd1').animate({left:'800px'},3000,'swing');
		$('.dd2').animate({left:'800px'},3000,'linear');
	});






});