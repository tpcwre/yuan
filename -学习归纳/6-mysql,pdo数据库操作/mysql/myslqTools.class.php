<?php
header("content-type:text/html;charset=utf-8");
define('HOST','localhost');
define('ROOT','root');
define('PASS','1234567');
define('DB','test1');

echo "<pre>";
//var_dump($mysql->select());
//var_dump($mysql->find(3));
//$data=array('name'=>'a1','age'=>'18','sex'=>'0');

//$mysql->insert($data);
class Mysql{
	private $link;
	private $tabname;
	private $fields=array();
	private $pk;
	
	public function __construct($tabname){
		$this->tabname=$tabname;
		$this->link = mysql_connect(HOST,ROOT,PASS)or die('数据库连接失败');
		mysql_select_db(DB);
		mysql_set_charset('utf8');
		$this->getFields();
	}
				
							//获取字段信息
	private function getFields(){
		$res=mysql_query("desc {$this->tabname}");
		
		while($row=mysql_fetch_assoc($res)){
			$this->fields[]=$row['Field'];
			if($row['Key']=='PRI'){
				$this->pk=$row['Field'];
			}
		}
	}
	
	
	
						//查找所有数据
	
	public function select(){
		$res=mysql_query("select * from {$this->tabname}");
		$arr=array();
		while($row=mysql_fetch_assoc($res)){
			$arr[]=$row;
		}
		mysql_free_result($res);
		mysql_close($this->link);
		return $arr;
	}
	
	
	
							//查找单条数据
	
	public function find($id){
		$res=mysql_query("select * from {$this->tabname} where {$this->pk}={$id}");
		$arr=array();
		while($row=mysql_fetch_row($res)){
			$arr[]=$row;
		}
		mysql_free_result($res);
		mysql_close($this->link);
		return $arr;
	}
	
	
							//插入数据
	
	public function insert($data=array()){
		if(empty($data)){
			$data=$_POST;
		}
		$klist=array();
		$vlist=array();
		foreach($data as $k=>$v){

			if(in_array($k,$this->fields)){
				$klist[]=$k;
				$vlist[]=$v;
			}
		}
		$klist=implode(',',$klist);
		$vlist=implode("','",$vlist);
		$sql="insert into {$this->tabname}({$klist}) values('{$vlist}')";
		mysql_query($sql);
		return mysql_insert_id();
	}
	
	
						//删除数据
	public function del($id){
		mysql_query("delete from {$this->tabname} where {$this->pk}={$id}");
		return mysql_affected_rows();
	} 
	
	
	
	
									//更改数据 
	public function update($data=array()){
		if(empty($data)){
			$data=$_POST;
		}
		$list=array();
		foreach($data as $k=>$v){
			if(in_array($k,$this->fields) && $k!=$this->pk){
				$list[]="{$k}='{$v}'";
			}
		}
		$list=implode(',',$list);
		$sql="update {$this->tabname} set {$list} where {$this->pk}={$data[$this->pk]}";
		mysql_query($sql);
		return mysql_affected_rows();
	}
	
	
	
	public function findAll(){			//获取所有信息
		$res=mysql_query("desc {$this->tabname}");
		$arr=array();
		while($row=mysql_fetch_assoc($res)){
			$arr[]=$row;
		}
		$this->fc($res);
		return $arr;
	}
	
	public function viewFields(){		//获取所有信息
		$res=mysql_query("desc {$this->tabname}");
		$arr = array();
		while($row=mysql_fetch_assoc($res)){
			$arr[]=$row;
		}
		//$this->fc($res);
		echo "<table border=1 width=500>";
			echo "<tr>";
			foreach($arr[0] as $k=>$v){
				echo "<td>{$k}</td>";
			}
			echo "</tr>";
			foreach($arr as $k=>$v){
				echo "<tr>";
				foreach($v as $vv){
					echo "<td>{$vv}</td>";
				}
				echo "</tr>";
			}
		echo "</table>";

	}
	
	
									//添加字段
	public function addField($field,$type,$nu='not null',$key='',$def='',$extra=''){
		$sql="alter table {$this->tabname} add {$field} {$type} {$nu} {$key} {$def} {$extra}";
		$res=mysql_query($sql);
		 //echo $sql;
		 //exit;
		if($res){
			return "{$field} 添加成功";
		}else{
			return "{$field} 字段以存在";
		}
	}				


	public function changefield($yname,$nname,$type){
		$sql="alter table {$this->tabname} change {$yname} {$nname} {$type}";
		$res=mysql_query($sql);
		if($res){
			return "修改成功";
		}else{
			return "修改的字段不存在";
		}
	}

	
	
	
	
	protected function fc($res){		//关闭资源和连接
		mysql_free_result($res);
		mysql_close($this->link);
	} 
	
}
$mysql=new Mysql('user');
echo $mysql->del(1).'<hr>';
$data=array('id'=>'5','name'=>'a5','age'=>'15');
echo $mysql->update($data).'<hr>';

	$mysql->viewFields();//获取所有信息

echo $mysql->addField('classid12','int').'<hr>';	//添加
echo $mysql->changeField('classid12','cd12','tinyint');














