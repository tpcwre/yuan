<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DBNAME","lamp113");

//������Ϣ������
class Model{
	protected $link; //���ݿ�������Դ
	protected $tabname; //��ǰ����
	protected $fields=array(); //���ֶ���Ϣ
	protected $pk="id"; //������
	protected $where=array(); //where����
	protected $order; //��������
	protected $limit; //limit�Ӿ�����
	
	//���췽������ȡ���ݿ����ӣ�
	public function __construct($tabname){
		$this->tabname = $tabname;
		$this->link = @mysql_connect(HOST,USER,PASS)or die("���ݿ�����ʧ�ܣ�");
		mysql_select_db(DBNAME,$this->link);
		mysql_set_charset("utf8");
		//�����ֶ���Ϣ
		$this->getField();
	}
	
	//ִ�б��ֶμ���
	private function getField(){
		//sql���
		$sql = "desc {$this->tabname}";
		$result = mysql_query($sql,$this->link);
		//����
		while($row = mysql_fetch_assoc($result)){
			//�����ÿ���ֶ����ŵ�����fields��
			$this->fields[]=$row['Field'];
			//�ж��Ƿ�������
			if($row['Key']=="PRI"){
				$this->pk = $row['Field']; //��ȡ����
			}
		}
		mysql_free_result($result);
	}
	
	//��ѯ����
	public function select(){
		//�����ѯsql���
		$sql = "select * from {$this->tabname}";
		
		//�ж�ƴװ����
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
		//����ִ�У������ؽ����
		$result = mysql_query($sql,$this->link);
		//�������
		$list = array(); //����һ�����ڷ������ݵı���
		
		while($row = mysql_fetch_assoc($result)){
			$list[]=$row; //�������Ľ������list��
		}
		//�ͷŽ����
		mysql_free_result($result);
		return $list;
	}
	
	//��ѯ��������
	public function find($id=0){
		//�����ѯsql���
		$sql = "select * from {$this->tabname} where {$this->pk}={$id}";
		//����ִ�У������ؽ����
		$result = mysql_query($sql,$this->link);
		//�������
		if($ob = mysql_fetch_assoc($result)){
			//�ͷŽ����
			mysql_free_result($result);
			return $ob;
		}
		return null;
	}
	
	//ɾ��ָ��id����Ϣ
	public function del($id=0){
		//����ɾ��sql���
		$sql = "delete from {$this->tabname} where {$this->pk}={$id}";
		//ִ��ɾ��
		mysql_query($sql,$this->link);
		//����Ӱ������
		return mysql_affected_rows($this->link);
	}
	
	//��ӷ���
	public function insert($data=array()){
		//�жϲ����Ƿ���ֵ
		if(empty($data)){
			$data = $_POST; //û��ֵ���Դ�post�����л�ȡ
		}
		//������Ч�ֶ�
		$fieldlist= array(); //�����Ч�ֶ�
		$valuelist= array(); //�����Чֵ
		foreach($data as $k=>$v){
			//�ж��Ƿ�����Ч�ֶ�
			if(in_array($k,$this->fields)){
				$fieldlist[]=$k;
				$valuelist[]=$v;
			}
		}
		$fieldinfo = implode(",",$fieldlist); //���ֶ�ƴװ
		$valueinfo = implode("','",$valuelist); //ƴװֵ
		//ƴװsql���
		$sql = "insert into {$this->tabname}({$fieldinfo}) values('{$valueinfo}')";
		//echo $sql;
		//ִ�в���������id
		mysql_query($sql,$this->link);
		return  mysql_insert_id($this->link);
	}
	
	//�޸ķ���
	public function update($data=array()){
		//�жϲ����Ƿ���ֵ
		if(empty($data)){
			$data = $_POST; //û��ֵ���Դ�post�����л�ȡ
		}
		//������Ч�ֶ�
		$valuelist= array(); //�����Ч�޸�ֵ
		foreach($data as $k=>$v){
			//�ж��Ƿ�����Ч�ֶ�,����������
			if(in_array($k,$this->fields) && $k!=$this->pk){
				$valuelist[]="{$k}='{$v}'";
			}
		}
		$valueinfo = implode(",",$valuelist); //ƴװֵ
		//ƴװsql���
		$sql = "update {$this->tabname} set {$valueinfo} where {$this->pk}={$data[$this->pk]}";
		//echo $sql;
		//ִ�в�����Ӱ������
		mysql_query($sql,$this->link);
		return  mysql_affected_rows($this->link);
	}
	
	//��װwhere��������
	public function where($where){
		$this->where[] = $where;
		return $this;
	}
	
	//��װorder��������
	public function order($order){
		$this->order  = $order;
		return $this;
	}
	
	//��װlimit��ҳ����
	public function limit($m,$n=0){
		if($n>0){
			$this->limit="{$m},{$n}";
		}else{
			$this->limit=$m;
		}
		return $this;
	}
	
	//�����������ر����ݿ⣩
	public function __destruct(){
		if($this->link){
			mysql_close($this->link);
		}
	}
	
} 
