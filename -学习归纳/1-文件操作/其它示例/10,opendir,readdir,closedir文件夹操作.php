<?php

	$path=__DIR__;				//__DIR__	ħ��������ȡ�ļ�Ŀ¼
	$op = opendir($path);		// opendir()  ��һ��Ŀ¼��Դ
	while($rd=readdir($op)){	// readdir() ������ȡĿ¼��Դ�е�����
		if($rd!='.' && $rd!='..'){	// ���˵�ͬ��'.'���ϼ�'..'Ŀ¼ 
			echo $rd.'<br>';
		}
	}
	closedir($op);				// closedir() �ر�Ŀ¼��Դ
	
	echo "<br>";

	$op2=opendir($path);
	while($rd=readdir($op2)){
		if($rd=='.' || $rd=='..'){
			continue;
		}
		echo $rd.'<br>';
	}

	

?>