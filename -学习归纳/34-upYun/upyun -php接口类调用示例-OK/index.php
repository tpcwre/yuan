<?php

//===== ����ʾ���� �� http://docs.upyun.com/download/ ���ز鿴 PHP-SDKʾ��

	require "upyun.class.php";
	$u = new UpYun('youle2','youle1','youle123');
	echo '<pre>';
	

		
//-- ��ͼƬ������С��ͬ���ˮӡ�İ汾
	/*
		����ռ����-��������-���Զ���汾->��������ͼ�汾
				�綨����һ��a1 �汾Ϊ �̶�����Ϊ 100px X 100px 
				�ͻ���ʾ������һ����ͼƬ������ 
				http://youle2.b0.upaiyun.com/1.png!a1
	
	*/
	
//-- ��ȡͼƬ�ļ�����Ϣ
	/*
		����ռ����-��������-���Զ���汾-������ͼƬ��Ϣ�汾
			���� һ��aa 
			http://youle2.b0.upaiyun.com/1.png!aaa	��ȡ
			
				���ؽ��ΪJSON���ݸ�ʽ����Ϣ��{"width":590,"height":276,"frames":1,"type":"PNG","B_EXIF":""}
	
	
	*/
	

//-- ����Ŀ¼	(��ֱ�Ӵ����༶Ŀ¼)
	// echo $u->makeDir('/youle5/new/one');
	
	
	
	
//-- ɾ��Ŀ¼ ����Ҫһ��һ���ɾ��
	//echo $u->delete('/youle5/new/one');
	//echo $u->delete('/youle5/new');
	//echo $u->delete('/youle5');
	
	
	
	
//-- �ϴ��ļ�	(��ֱ�Ӵ����༶Ŀ¼)
	//$re1 = fopen('2.png','r');
	//$s1 = $u->writeFile('/newdir/5.png',$re1);  //1���ϴ�������֡�2���ϴ����ļ���	
	//$s1 = $u->writeFile('/youle2/aa.png',$re1);  //1���ϴ�������֡�2���ϴ����ļ���	
	//var_dump($s1);
	
	
		//�鿴�ϴ�����ļ� 	http://youle2.b0.upaiyun.com/1.png
		
		

//-- ��ȡ�����ļ�

	print_r($upyun->readDir('/'));			//��ȡ�����ļ�
	
	foreach($upyun->readDir('/') as $v){
		if($v->type=='folder')continue;
			echo $v->name;					//��ȡ�ļ���
	}
	
		
		
		
		
		
//-- �����ļ�
	//$str = $u->readFile('/newdir/2.png');	//���������ļ���·�� 
	//file_put_contents('2.png',$str);
	
	
	//$arr = $u->getFolderUsage('/');
	//var_dump($arr);
	
	
	//$arr = $u->getFileInfo('/youle1');
	//var_dump($arr);
	
	
//-- ɾ��Ŀ¼ ��Ҫ��ɾ����ֻ��ɾ��Ŀ¼��
	//echo $u->rmDir('/youle4/new/one');
	//echo $u->rmDir('/youle4/new');
	//echo $u->rmDir('/youle4');
	
	
	
//-- ɾ���ļ�
	//echo $u->deleteFile('/youle3/new/one/aa.png');
	
	
	
//-- ��ȡ�ռ�ʹ����� 
	//echo $u->getBucketUsage('/');


//-- ��ȡ�ļ���Ϣ
	$arr = $u->getFileInfo('/youle2/aa.png');
	var_dump($arr);
	
	
//-- ��ȡĿ¼(��ȡ�ļ��б�)
	print_r($u->getList('/youle2'));
	//print_r($u->readDir('/'));		
		//���Կ���ָ��Ŀ¼�е�Ŀ¼���ļ�   �����ļ���Ŀ¼���������ͣ�����ʱ�估��С 
	
		
	

	







