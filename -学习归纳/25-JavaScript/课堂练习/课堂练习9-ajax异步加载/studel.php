<?php
//ִ��ɾ��
 //2. ����MySQL�����ж�
$link = @mysql_connect("localhost","root","1234567")or die("���ݿ�����ʧ�ܣ�");
//3. ѡ�����ݿ⣬�����ַ�����
mysql_select_db("lamp113",$link);
mysql_set_charset("utf8");

//4. ����sql��䣬������ִ��
$sql = "delete from stu where id=".($_GET['id']+0);
//ִ��
mysql_query($sql,$link);

//���Ӱ������
echo mysql_affected_rows($link);