<?php

class pdos{
	public $pdo;
	private $tabname;
	public $fields=array();
	public $pk;
	private $limit;
	public $where = array();
	public $order;

//===== 构造方法

	public function __construct($tabname){
		$this->tabname=$tabname;
		try{
			$this->pdo=new PDO("mysql:host=localhost;dbname=test1",'root','1234567');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
			$this->pdo->query("set names utf8");
		}catch(PDOException $e){
			die($e->getMessage());
		}
		$this->fields();
	}
	
	
	
	
	
//===== 获取表字段和主键
	private function fields(){
		$sql="desc {$this->tabname}";
		$stmt=$this->pdo->query($sql);
		$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach($list as $k=>$v){
			$this->fields[]=$v['Field'];
			if($v['Key']=='PRI'){
				$this->pk=$v['Field'];
			}
		}
	}
	
	
	
	
	
	
//===== 获取where值
	public function where($where){
		$this->where[]=$where;
		return $this;
	}
	
	
	

//===== 获取order值
	public function order($order){
		$this->order=$order;
		return $this;
	}
	
	
	
//===== 获取limit值
	public function limit($limit){
		$this->limit=$limit;
		return $this;
	}
	
	
	
	

//=====求总数
	public function count(){
		$sql="select count(*) from {$this->tabname}";
		if(!empty($this->where)){
			$sql.=" where ".implode(" and ",$this->where);
		}
		$stmt=$this->pdo->query($sql);
		$list=$stmt->fetch(PDO::FETCH_NUM);
		return $list[0];
	}
	

	
	
	
		
//===== 查询单条数据 

	public function find($id){
		$sql="select * from user where {$this->pk} =?";
		$stmt=$this->pdo->prepare($sql);	//== 预处理语句
		if($stmt->execute(array($id))){		//== 执行并判断语句是否成功
			while($row=$stmt->fetch(PDO::FETCH_ASSOC)){	//== 获取单条数据 
				return $row;				//== 返回数据
			}
		}
	}
	
	
	
	
	
	
//===== 查所有数据

	public function fetchAll(){
		$sql="select * from {$this->tabname}";
		if(count($this->where)>0){
			$sql.=" where " .implode(" and ",$this->where);
		}
		if(!empty($this->order)){
			$sql.=" order by ".$this->order;
		}
		if(!empty($this->limit)){
			$sql.=" limit ".$this->limit;
		}
		//echo $sql;
		$stmt=$this->pdo->query($sql);
		$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $list;
	}
	
	
	
	
	
	
	
//===== 删除数据
	
	public function delete($id){
		$sql="delete from {$this->tabname} where {$this->pk}=:id";
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam('id',$id);
		$stmt->execute();
		if($stmt->rowCount()>0){
			return true;
		}else{
			return false;
		}
	
	
	}
	
	
	
	
	
//===== 添加数据
	public function insert($data=array()){
		if(empty($data)){
			$data=$_POST;
		}
		$klist = array();
		$vlist = array();
		foreach($data as $k=>$v){
			if(in_array($k,$this->fields)){
				$klist[]=$k;
				$vlist[]=$v;
			}
		}
		$klist=implode(',',$klist);
		$vlist=implode("','",$vlist);
		$sql="insert into {$this->tabname}({$klist}) values('{$vlist}')";
		$stmt= $this->pdo->exec($sql);
		if($this->pdo->lastInsertId()>0){
			return true;
		}else{
			return false;
		}
	}
	
	
	

	

		
//===== 修改数据

	public function update($data=array()){
		if(empty($data)){
			$data = $_POST;
		}
		$list=array();
		foreach($data as $k=>$v){
			if(in_array($k,$this->fields) && $k!=='id'){
				$list[]="$k='{$v}'";
			}
		}
		$list = implode(',',$list);
		$sql="update {$this->tabname} set {$list} where {$this->pk}=:id";
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam('id',$data['id']);
		$stmt->execute();
		if($stmt->rowCount()>0){
			return true;
		}else{
			return false;
		}
		
	}


	
	
	

	

	
}








