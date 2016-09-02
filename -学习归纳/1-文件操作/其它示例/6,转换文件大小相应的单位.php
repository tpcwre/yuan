<?php
//===== 自定义函数，并写明注释
/**
*根据内容转大小转换为相应的单位
*
*@autor：LAMP113
*@date:2015/07/16
*
*@param1 string 文件名称及路径
*@return string	返回文件的大小
*
*/
	var_dump(covSize('./five.rar'));

	function covSize($fn){
		if(!file_exists($fn)){
			return false;
		}
		$size=filesize($fn);
		echo $size;
		if($size<1024){						//字节
			return $fn.'Bytes';
		}else if($size>=1024 && $size< pow(1024,2)){	//KB
			return round(($size / 1024),2).'KB';
		}else if($size>=pow(1024,2) && $size<pow(1024,3)){
			return round(($size / pow(1024,2)),2).'MB';
		}else if($size>=pow(1024,3) && $size<pow(1024,4)){
			return round(($size / pow(1024,3)),2).'GB';
		}else{
			return 'toobig';
		}
	}






?>