<?php
//===== ��json������ת���ɶ���
	
	//��������
	
	$stu = array('name'=>'aaa','age'=>22,'sex'=>'nan');
	echo (json_encode($stu));
		//�����{"name":"aaa","age":22,"sex":"nan"}		

	echo "<hr>";
	
	//�������� 
	
	$arr= [9=>10,20,30,40,50];
	echo json_encode($arr);
		//�����{"9":10,"10":20,"11":30,"12":40,"13":50}
	
	echo '<hr>';
	
	$arr= [10,20,30,40,50];		//���ִ����鲻��ת�ɶ���
	echo json_encode($arr);
		//�����[10,20,30,40,50]	
	
	echo "<hr>";

	
	//��ά�������
	$list =array(
		array("name"=>"lisi","age"=>20,"sex"=>"man"),
		array("name"=>"qqq","age"=>22,"sex"=>"man"),
		array("name"=>"liaa","age"=>21,"sex"=>"man"),
		array("name"=>"ddd","age"=>25,"sex"=>"man"),
		array(10,20,30),
	);

	echo json_encode($list);	//����ά����������json��ʽ��ʾ
	 	//�����[{"name":"lisi","age":20,"sex":"man"},{"name":"qqq","age":22,"sex":"man"},{"name":"liaa","age":21,"sex":"man"},{"name":"ddd","age":25,"sex":"man"},[10,20,30]]







