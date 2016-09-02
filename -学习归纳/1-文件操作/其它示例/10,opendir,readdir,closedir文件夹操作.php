<?php

	$path=__DIR__;				//__DIR__	魔术常量获取文件目录
	$op = opendir($path);		// opendir()  打开一个目录资源
	while($rd=readdir($op)){	// readdir() 遍历读取目录资源中的内容
		if($rd!='.' && $rd!='..'){	// 过滤掉同级'.'和上级'..'目录 
			echo $rd.'<br>';
		}
	}
	closedir($op);				// closedir() 关闭目录资源
	
	echo "<br>";

	$op2=opendir($path);
	while($rd=readdir($op2)){
		if($rd=='.' || $rd=='..'){
			continue;
		}
		echo $rd.'<br>';
	}

	

?>