$(function(){
	var host=['a','aa','aaa','aaaaa','bb'];		//===����һ������Դ

	$("#email").autocomplete({			//===�����Զ���ȫUI

		source:host,				//===��������Դ

		//disabled:true,			//===�����Զ���ȫ
		
		minLength:1,				//===������ȫ����С�ֳ�

		delay:50,				//===��ȫ��ʾ�ӳ� 
								//Ĭ��300����

		autoFocus:true,				//===�Զ�ѡ��ȫ������Ϣ

		position:{
			//my:'left center',
			//at:'right center',
		},




		




			//=====��ȫ�¼�====




								//===��ȫ�����¼�
		create:function(){
			//alert('�����¼�');
		},


								//===��ȫ���¼�

		open:function(){
			//alert('���¼�');
		},





								//===��ȫ�ر��¼�
		close:function(){
			//alert('�ر��¼�');
		},


				


								//===��ȫ��ȡ�����¼�
								//===��ȡ����ͣ��ʱ�Ĳ�ȫ����
		focus:function(e,ui){
			//alert('��ȫ��ȡ����ʱ�¼�');
			//alert(ui.item.label);			
			//alert(ui.item.value);
		//���Զ���ȫ��ȡ����ʱ�������focus�������÷�������������(event,ui)�����¼��е�ui��һ�������Զ���item,�ֱ����������ԣ�label,��ȫ�б���ʾ���ı���value,��Ҫ������ֵ��һ��label��valueֵ��ͬ������Ǽ�ֵ�ԵĻ���label�൱��key,value����val��
		},




								//===��ȫ��Ϣѡ���¼�
		select:function(e,ui){
			//alert('��ȫ��ѡ��ʱ�¼�');
			//alert(ui.item.label);			
			//alert(ui.item.value);
		//���Զ���ȫ��ȡ����ʱ�������focus�������÷�������������(event,ui)�����¼��е�ui��һ�������Զ���item,�ֱ����������ԣ�label,��ȫ�б���ʾ���ı���value,��Ҫ������ֵ��һ��label��valueֵ��ͬ������Ǽ�ֵ�ԵĻ���label�൱��key,value����val��
		},


								//===��ȫ�ı��¼�
		change:function(e,ui){
			//alert('��ȫ���ݸı�ʱ�¼�');
		},

								//===��ȫ�����������¼�
		search:function(e,ui){
			//alert('��ȫ������������¼�');
		},
								//===��ȫ��������ʾǰ�¼�
		response:function(e,ui){
			//alert('��ȫ��������ʾǰ�¼�');
		},

	});











			//=====�Զ���ȫ�ⲿ����=====


	$("#user").autocomplete({
		source:['e','ee','eee','aa','aaa','bb','bbb','cc','ccc','dd','ddd','ff','fff'],
		minLength:0,
	});

	//$("#user").autocomplete('disable');		//===�ر��Զ���ȫ

	//$("#user").autocomplete('enable');		//===�����Զ���ȫ

	//$("#user").autocomplete('destroy');		//===ɾ���Զ���ȫ

	//$('#user').autocomplete('widget');		//===��ȫ����jquery����

	//$('#user').autocomplete('search','f');		//===�Զ���ʾ��ȫ��Ϣ
								//��Ҫ��minLength����Ϊ0


	$("#user").autocomplete('option','autoFocus',true);	//===�����Զ���ȫ������ֵ

	//alert($('#user').autocomplete('option','autoFocus'));	//===��ȡ�Զ���ȫ������ֵ












				//=====�Զ���ȫ��on�¼�=====
	





	$('#user').on('autocompleteopen',function(){
		alert('��ȫ��ʱ�����¼�');
	});

/*
							autocompleteopen	��ʾʱ����
							autocompleteclose	�ر�ʱ����
							autocompletesearch	����ʱ����
							autocompletefocus	��ý���ʱ����
							autocompletechange	�ı�ʱ�� ��
							autocompleteselect	ѡ��ʱ����
							autocompleteresponse	������Ϻ���ʾ֮ǰ
*/









});