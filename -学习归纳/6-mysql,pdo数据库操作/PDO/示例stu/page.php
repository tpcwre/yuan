<?php
//header("content-type:text/html;charset=utf-8");

class Page{
	public $count;		//总行数
	public $pcount;		//每页行数
	public $pnum;		//总页数
	public $pnow=1;		//当前页

	
	
	public function limit(){
		return ($this->pnow-1)*$this->pcount.','.$this->pcount;
	}
	
	public function show(){
		$str="{$this->pnow} / {$this->pnum}";
		$url=$_SERVER['PHP_SELF'];
		$and = '';
		foreach($_GET as $k=>$v){
			if($k!='pnow'){
				$and .= "&{$k}={$v}";
			}
		}
		$str.="<a href={$url}?pnow=1{$and}> 首页 </a>";
		$prev=$this->pnow<=1?1:$this->pnow-1;
		$str.="<a href={$url}?pnow={$prev}{$and}> 上一页 </a>";
		$next=$this->pnow>=$this->pnum?$this->pnum:$this->pnow+1;
		$str.="<a href={$url}?pnow={$next}{$and}> 下一页 </a>";
		$str.="<a href={$url}?pnow={$this->pnum}{$and}> 尾页 </a>";
		return $str;
	}

	
	
	public function __construct($count,$pcount){
		$this->count=$count;
		$this->pcount=$pcount;
		
		$this->pnum();
		$this->pnow();
	}
	
	//求总页数
	private function pnum(){
		$this->pnum=ceil($this->count/$this->pcount);
	}

	//当前页
	private function pnow(){
		$this->pnow=isset($_GET['pnow'])?$_GET['pnow']:1;
	}
	





}









