<?php
//call_user_func_array-- ����ִ�к����ĺ���

//�ɱ��������ͺ���
function add(){
	$res=0;
	$data = func_get_args(); //��ȡ���в���
	//���������������ۼ�ֵ
	foreach($data as $v){
		$res += $v;
	}
	return $res;
}

$list =array(10,20,40,50,60);

//echo add($list[0],$list[1],$list[2]);

//ִ��add����
echo call_user_func_array("add",$list);