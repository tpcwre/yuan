$(function(){
	//$("p").next().css('font-size','30px');		//next() ��һ���ֵܽڵ�
	
	//$(".f").siblings().css('color','yellow');		//siblings() ���������ֵܽڵ�

	//$('div').children().css('color','yellow');		//children() һ���ӽڵ�

	//$('div').find('u').css('color','blue');		//find() ����ڵ�

	//$('.b, u, .f, i').css('color','red');			// Ⱥ��ѡ����

	//$("div.d").css('color','blue');			// ����ѡ���� ������Ϊd��divԪ�أ�
	
	//$(".a").nextUntil('.h').css('color','blue');		//nextUntil ָ�������X�ڵ㣬����X�ڵ����
	
	//$("div[title]").css('color','blue');			// ͨ��title��������Ԫ����ʽ





	//$("li:first").css('color','blue');			// li:firstѡ���׸�liԪ��
	
	//$("li").not('.two').css('color','blue');		//ѡ���ָ���������������liԪ��

	//$("h1:header").css('color','blue');			// h1:headerѡ��ָ������Ԫ��


	//$('input').get(0).focus();				// get(0) ��ȡ��һ��DOM����
	//$("input").eq(0).focus();				// eq(0) ��ȡ��һ��jquery����			
								// focus() ��Ԫ���Զ���ȡ����



	//$("li:contains('ccc')").css('color','blue');		//:contains() ѡȡ����ĳ�ı����ݵ�Ԫ��


	//$("div:empty").css({					//ѡȡ����Ϊ�յ�Ԫ��
		//height:'100px',
		//background:'#ccc',
	//});
	
	//$(".two").parent().css("color",'blue');		//parent() ѡ��Ԫ��

	//$('ul').has('.two').css('color','yellow');		//has ѡ����Ԫ���а���������Ϊtwo��olԪ��

	//alert($('div:hidden').size());			//:hidden ��ȡ����Ԫ��

	//alert($("div:visible").size());			//:visible ��ȡ�ɼ�Ԫ��

	//$('li:nth-child(even)').css('color','blue')		//li:nth-child() ��ȡÿ����Ԫ�ص�ż����Ԫ��

	//alert($('.two').is('li'));				//is() �ж�.two������Ԫ���Ƿ�Ϊ��li��

	//$('li').filter('.two, :first, :last').css('background','#ccc');	//filter ��ѡ������ͬʵ�� 


	//alert($('.a').html());				//html() ��ȡԪ���е����ݣ�������ǩ��

	//alert($('.a').text());				//text() ��ȡָ��Ԫ�����ı����� ����������ǩ��


	//$('input').eq(0).val('ddddddddd');			//val() ���û��滻��valueֵ

	//alert($('input').eq(0).val()); 			//val() ��ȡ��valueֵ

	//$('div').eq(3).attr('title','��������'); 		//����ָ��Ԫ�ص�������������ֵ��

	//$('div').eq(3).removeAttr('title');			//���Ԫ�ص�����

	//$('div').addClass('red');				//��Ԫ�����һ��CSS����ʽ

	//alert($('div').width());				//��ȡԪ�ؿ��

	//alert($('div').eq(3).offset().top);			//��ȡԪ��������ӿڵ�ƫ��λ��

	//alert($(window).scrollTop());				//��ȡ��ֱ��������ֵ



	//var aa = $('<i>����һ����JS�д����Ľڵ�</i>');	//�����ڵ�

	//$('body').append(aa);					//����ڵ�

	//$('div').wrap('<strong></strong>');			//��ָ���Ľڵ�������һ��html���ڵ�

	//$('.d').clone(true).prependTo('body');		//���ƽڵ㣬����true��ѡ,��ʾ��ͬ�¼�һ������

	//$('u').empty();					//���ָ���ڵ����ݣ��������ڵ�


	$(':input').val('cccccccc'); 				//ѡȡ���б�Ԫ��(����select,textarea,botton)

	$(":text").val('dddddddddddd') 				//ѡȡ���еĵ��б���;

	$("option:select").val();				//ѡ�������˵�option�ĵ�ǰֵ


});








































