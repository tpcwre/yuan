<?php
	$dirname=__DIR__;
	echo $dirname.'<br>';
viewDir($dirname);
function viewDir($dirname){			//��������Ŀ¼�㼶�е��ļ�
	$op=opendir($dirname);			//��Ŀ¼��Դ
	while($rd=readdir($op)){		//��ȡĿ¼��Դ
		if($rd=='.' || $rd=='..'){	//����ͬ�����ϼ�Ŀ¼
			continue;
		}
		$path=$dirname.'/'.$rd;		//�������ļ�·��

		if(is_dir($path)){			//�жϱ�����ÿ���ļ��Ƿ�ΪĿ¼
			echo "<h2>{$rd}</h2>";	//�����Ŀ¼�ͼ���ʽ��ʾ����
			viewDir($path);			//�����Ŀ¼�͵ݹ�������
		}else{
			echo '--'.$rd.'<br>';	//�������Ŀ¼����ʾ����
		}
	}
	closedir($op);					//�ر�Ŀ¼��Դ
}




?>