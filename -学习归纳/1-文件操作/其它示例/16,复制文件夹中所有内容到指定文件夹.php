<?php
	//遍历复制一个文件夹中所有内容到另一个文件夹
	
	$path1=__DIR__.'\demo2';	//设置源文件夹路径
	$path2=__DIR__."\demo";		//设置拷贝指向文件夹
	cpDir($path1,$path2);		//调用函数
	function cpDir($p1,$p2){	//创建一个函数，传入两个路径参数
		if(!is_dir($p2)){		//判断要拷贝到哪的文件夹是否存在
			mkdir($p2);			//如果不存在就创建该文件夹
		}
		$op=opendir($p1);		//打开源文件夹资源
		while($rd=readdir($op)){	//遍历文件夹
			if($rd=='.' || $rd=='..'){	//过滤掉系统层级目录
				continue;
			}
			$path1=$p1."\\".$rd;	//将得到的子资源名转化为绝对路径
			$path2=$p2."\\".$rd;
			if(is_dir($path1)){		//判断遍历当前的文件是否为一个文件夹
				if(!is_dir($path2)){	//判断拷贝指向路径是否以存在要拷贝的文件夹
					mkdir($path2);	
				}
					//如果是文件夹，就在拷贝指向路径中也创建同名文件夹
				cpDir($path1,$path2);	//并递归调用自身函数
			}else{
				copy($path1,$path2);	//如果当前文件不是文件夹就直接拷贝
				//rename($path1,$path2) //或移动文件
			}
		}
		closedir($op);
	}
?>