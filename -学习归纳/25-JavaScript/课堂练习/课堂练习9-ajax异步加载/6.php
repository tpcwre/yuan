<?php
//ģ��ע���˺��Ƿ����Ajax��֤
//�����Ѿ����ڵ��˺�
$data = array("zhangsan","lisi",'wangwu','qq','mayao');

//��ȡҪ��֤���˺���Ϣ
$name = $_GET['name'];
if(in_array($name,$data)){
	echo "y";
}else{
	echo "n";
}