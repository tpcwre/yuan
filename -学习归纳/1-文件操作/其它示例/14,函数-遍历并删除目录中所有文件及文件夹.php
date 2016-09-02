<?php
	 $path=__DIR__.'\BlueBox';
	 echo $path.'<br>';
	
	rmDirs($path);
	function rmDirs($path){	
		$op=opendir($path);			//打开目录资源
		while($rd=readdir($op)){		//遍历目录中的文件
			if($rd=='.' || $rd=='..'){	//过滤掉系统上级同级目录
				continue;
			}
			$paths=$path.'\\'.$rd;		//设置子文件的绝对路径
			
			if(is_dir($paths)){	//如果子文件是目录用递归再执行自身函数
				rmDirs($paths);
				rmdir($paths);
			}else{
				unlink($paths);		//如果子文件不是文件夹就删除文件
			}
		}
		closedir($op);	//关闭目录资源
	}
	


?>