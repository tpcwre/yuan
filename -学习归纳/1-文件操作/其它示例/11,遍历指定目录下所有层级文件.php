<?php
	$dirname=__DIR__;
	echo $dirname.'<br>';
viewDir($dirname);
function viewDir($dirname){			//遍历所有目录层级中的文件
	$op=opendir($dirname);			//打开目录资源
	while($rd=readdir($op)){		//读取目录资源
		if($rd=='.' || $rd=='..'){	//过滤同级和上级目录
			continue;
		}
		$path=$dirname.'/'.$rd;		//设置子文件路径

		if(is_dir($path)){			//判断遍历的每个文件是否为目录
			echo "<h2>{$rd}</h2>";	//如果是目录就加样式显示出来
			viewDir($path);			//如果是目录就递归自身函数
		}else{
			echo '--'.$rd.'<br>';	//如果不是目录就显示出来
		}
	}
	closedir($op);					//关闭目录资源
}




?>