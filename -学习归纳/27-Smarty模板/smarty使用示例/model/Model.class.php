<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DBNAME","lamp113");

//单表信息操作类
class Model{
	protected $link; //数据库链接资源
	protected $tabname; //当前表名
	protected $fields=array(); //表字段信息
	protected $pk="id"; //主键名
	protected $where=array(); //where条件
	protected $order; //排序条件
	protected $limit; //limit子句条件
	
	//构造方法（获取数据库链接）
	public function __construct($tabname){
		$this->tabname = $tabname;
		$this->link = @mysql_connect(HOST,USER,PASS)or die("数据库链接失败！");
		mysql_select_db(DBNAME,$this->link);
		mysql_set_charset("utf8");
		//加载字段信息
		$this->getField();
	}
	
	//执行表字段加载
	private function getField(){
		//sql语句
		$sql = "desc {$this->tabname}";
		$result = mysql_query($sql,$this->link);
		//解析
		while($row = mysql_fetch_assoc($result)){
			//将表的每个字段名放到属性fields中
			$this->fields[]=$row['Field'];
			//判断是否是主键
			if($row['Key']=="PRI"){
				$this->pk = $row['Field']; //获取主键
			}
		}
		mysql_free_result($result);
	}
	
	//查询数据
	public function select(){
		//定义查询sql语句
		$sql = "select * from {$this->tabname}";
		
		//判断拼装条件
		if(count($this->where)>0){
			$sql .= " where ".implode(" and ",$this->where);
		}
		if(!empty($this->order)){
			$sql .= " order by ".$this->order;
		}
		if(!empty($this->limit)){
			$sql.= " limit ".$this->limit;
		}
		
		echo $sql."<br/>";
		//发送执行，并返回结果集
		$result = mysql_query($sql,$this->link);
		//解析结果
		$list = array(); //定义一个用于返回数据的变量
		
		while($row = mysql_fetch_assoc($result)){
			$list[]=$row; //将解析的结果方法list中
		}
		//释放结果集
		mysql_free_result($result);
		return $list;
	}
	
	//查询单条数据
	public function find($id=0){
		//定义查询sql语句
		$sql = "select * from {$this->tabname} where {$this->pk}={$id}";
		//发送执行，并返回结果集
		$result = mysql_query($sql,$this->link);
		//解析结果
		if($ob = mysql_fetch_assoc($result)){
			//释放结果集
			mysql_free_result($result);
			return $ob;
		}
		return null;
	}
	
	//删除指定id的信息
	public function del($id=0){
		//定义删除sql语句
		$sql = "delete from {$this->tabname} where {$this->pk}={$id}";
		//执行删除
		mysql_query($sql,$this->link);
		//返回影响行数
		return mysql_affected_rows($this->link);
	}
	
	//添加方法
	public function insert($data=array()){
		//判断参数是否无值
		if(empty($data)){
			$data = $_POST; //没有值尝试从post请求中获取
		}
		//过滤有效字段
		$fieldlist= array(); //存放有效字段
		$valuelist= array(); //存放有效值
		foreach($data as $k=>$v){
			//判断是否是有效字段
			if(in_array($k,$this->fields)){
				$fieldlist[]=$k;
				$valuelist[]=$v;
			}
		}
		$fieldinfo = implode(",",$fieldlist); //将字段拼装
		$valueinfo = implode("','",$valuelist); //拼装值
		//拼装sql语句
		$sql = "insert into {$this->tabname}({$fieldinfo}) values('{$valueinfo}')";
		//echo $sql;
		//执行并返回自增id
		mysql_query($sql,$this->link);
		return  mysql_insert_id($this->link);
	}
	
	//修改方法
	public function update($data=array()){
		//判断参数是否无值
		if(empty($data)){
			$data = $_POST; //没有值尝试从post请求中获取
		}
		//过滤有效字段
		$valuelist= array(); //存放有效修改值
		foreach($data as $k=>$v){
			//判断是否是有效字段,并不是主键
			if(in_array($k,$this->fields) && $k!=$this->pk){
				$valuelist[]="{$k}='{$v}'";
			}
		}
		$valueinfo = implode(",",$valuelist); //拼装值
		//拼装sql语句
		$sql = "update {$this->tabname} set {$valueinfo} where {$this->pk}={$data[$this->pk]}";
		//echo $sql;
		//执行并返回影响行数
		mysql_query($sql,$this->link);
		return  mysql_affected_rows($this->link);
	}
	
	//封装where过滤条件
	public function where($where){
		$this->where[] = $where;
		return $this;
	}
	
	//封装order排序条件
	public function order($order){
		$this->order  = $order;
		return $this;
	}
	
	//封装limit分页条件
	public function limit($m,$n=0){
		if($n>0){
			$this->limit="{$m},{$n}";
		}else{
			$this->limit=$m;
		}
		return $this;
	}
	
	//析构方法（关闭数据库）
	public function __destruct(){
		if($this->link){
			mysql_close($this->link);
		}
	}
	
} 
