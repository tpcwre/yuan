<?php

//===== 计算文件夹中内容总大小
	$dir=__DIR__.'/中文文件夹';		//指定一个目录路径
	echo dirSize($dir);				//调用自定义函数
	
	function dirSize($dir){			//自定义函数获取目标文件夹内容的总大小
		$op=opendir($dir);			//打开目录资料
		$count=0;					//设置一个计数的变量
		while($rd=readdir($op)){		//遍历目录中的每个文件
			if($rd=='.' || $rd=='..'){	//过滤掉上级和同级系统层级目录
				continue;
			}
			$path=$dir.'/'.$rd;			//将子文件转换成绝对路径
			if(is_dir($path)){			//判断如果子文件是一个文件夹
				$count += dirsize($path);	//用递归，并将结果累加到计数变量中
			}else{
				$count += filesize($path);	//如果是文件就直接将文件大小累加到计数变量
			}
		}
		closedir($op);					//关闭目录资源
		return $count;					//向函数返回计数变量
	}





?>