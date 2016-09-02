<?php
class Mysql{
	public $link;
	function __construct($host,$root,$pass,$db){
		$this->link=mysql_connect($host,$root,$pass)or die("数据库连接失败！");
		mysql_select_db($db)or die("数据库选择失败！");
		mysql_set_charset("utf8");
	}

	function dql($sql){			//===dql 返回数组或假
		$res=mysql_query($sql);
		$arr=array();
		if($res && mysql_num_rows($res)){	//获取结果集中行的总数
			while($row=mysql_fetch_row($res)){
				$arr[]=$row;
			}	
		}
		$this->free($res);
		$this->close();
		return $arr;
	}

	function dml($sql){			//===dml 返回真假结果
		$res=mysql_query($sql);
		if($res && mysql_affected_rows($this->link)>0){
			return true;
		}else{
			return false;
		}
	}





	function free($res){			//===释放内存资源
		mysql_free_result($res);
	}






	function close(){			//===关闭数据库连接
		mysql_close($this->link);
	}





	function count($listname){		//==获取表中数据的总条数
		$sql="select count(*) from $listname";
		$res=mysql_query($sql);
		if($res){
			$row=mysql_fetch_row($res);
			return $row[0];
		}
	}





	function fieldcount($sql){			//===获取数据表头字段个数
		$res = mysql_query($sql);
		if($res){
			return mysql_num_fields($res);
		}
	}






	function fieldname($sql){			//===获取表头字段
		$arr=array();
		$res= mysql_query($sql);
		while($info=mysql_fetch_field($res)){
			$arr[]= $info->name;
		}
		return $arr;
		//调取 $arr[0|1|2];
	}







	function affected($sql){		//===上次操作受影响的行数(判断操作是否成功)
		$res=mysql_query($sql);
		if($res && mysql_affected_rows($this->link)>0){
			echo "有行数受到影响，操作成功！";
		}else{
			echo "没有受到影响的行数，操作失败";
		}
	}






	function rows($sql){			//===获取结果集中行的总数(配合dql使用)
		$res=mysql_query($sql);
		if($res){
			return mysql_num_rows($res);
		}
	}
}




?>

