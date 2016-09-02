<?php

//echo 2233445566;


//===== 特殊操作
//@9	sdb($number)    	选择数据库      $number-> 数据库编号	    return->返回数据库编号


//===== 字串型操作
//@2	incr($name)			键的自增				
//@10	get($key)			获取键的值      $key->键名      return->返回键的值
//@8	set($key,$val)		设置一个字串数据		
//@16 	setex($k,$t,$v)		设置带过期的元素	$k->键名   $t->时间   $v->值
//@1	del($key)			删除指定KEY对应的那条数据		
//@17 	setnx($k,$v)        设置一个不重复的键值对数据      $k->键名   $v->值   return->成功返回1，失败返回0


//===== 哈希类型操作
//@@6	hgetAll($name)		获取一条哈希中所有字段的数据	 
//@@3	hmset($name,$arr)	多字段同时添加或修改哈希数据	
//@@7   hget($key,$field)	获取哈希中指定字段值   	 	
//@11	hkeys($name)		获取哈希中所有的key     $name->哈希表名         return->所有key(数组)
//@12	hvals($name)		获取哈希中所有的值      $name->哈希表名         return->所有值（数组）
//@13	hset($name,$k,$v)	单条添加或修改哈希键值对        $name->哈希表名  $k->字段名  $v->值
//@18   hdel($key,$field);     删除哈希中指定的字段     $key-> 哈希表名    $field-> 要删除的字段名   retunr->返回1 或 0


//===== 链表操作
//@4	rpush($name,$val)	创建链表或右侧添加数据		
//@5	lrange($name,$v1,$v2)	获取链表中的数据		
//@14	lrem($name,$v,$c)   删除链表中的key    $name->链表名  $v->删除的值  $count->正数从左删，负数从右删，0 删除所有匹配的)
//@15	lpush($name,$k)     链表左侧添加元素        $name->链表名   $k->元素名      return->成功添加的条数











class RedisTools{
	public $redis;
	public function __construct(){
		$redis = new Redis();
		$redis->connect('localhost');
		$redis->auth('root1234');
		$this->redis=$redis;
	}




//@ 18   hdel($key,$field);	删除哈希中指定的字段     $key-> 哈希表名    $field-> 要删除的字段名   retunr->返回1 或 0
	public function hdel($key,$field){
		return $this->redis->hdel($key,$field);
	}







//@ 17  setnx($k,$v)	设置一个不重复的键值对数据 	$k->键名   $v->值   return->成功返回1，失败返回0
	public function setnx($k,$v){
		return $this->redis->setnx($k,$v);
	}







//@ 16 setex($k,$t,$v)		设置带过期的元素	$k->键名   $t->时间   $v->值
	public function setex($k,$t,$v){
		return $this->redis->setex($k,$t,$v);
	}


//@ 15 	lpush($name,$k)		链表左侧添加元素	$name->链表名	$k->元素名	return->成功添加的条数
	public function lpush($name,$k){
		return $this->redis->lpush($name,$k);
	}






//@ 14 	lrem($name,$v,$c)   删除链表中的key    $name->链表名  $v->删除的值  $count->正数从左删，负数从右删，0 删除所有匹配的)

	public function lrem($listname,$value,$count){
		return $this->redis->lrem($listname,$value,$count);
	}








//@ 13 	hset($name,$k,$v)	单条添加或修改哈希键值对	$name->哈希表名	 $k->字段名  $v->值
	public function hset($name,$k,$v){
		return $this->redis->hset($name,$k,$v);
	}


//@ 12 hvals($name)		获取哈希中所有的值	$name->哈希表名 	return->所有值（数组）
	public function hvals($name){
		return $this->redis->hvals($name);
	}


//@ 11 hkeys($name)		获取哈希中所有的key	$name->哈希表名		return->所有key(数组)
	public function hkeys($name){
		return $this->redis->hkeys($name);
	}







//@ 10 	get($key)		获取键的值	$key->键名	return->返回键的值
	public function get($key){
		return $this->redis->get($key);
	}









//@ 9 	sdb($number)		选择数据库 	$number-> 数据库编号	return->返回数据库编号
	public function sdb($number){
		return $this->redis->select($number);
	}




/* 
*@8  	设置一个字串数据
*
*@param	$key	设置key名
*@param $val	设置val值
*
*@return 	返回成功添加的条数*
*/
	public function set($key,$val){
		return $this->redis->set($key,$val);
	}












//1
/*
*@ 	删除指定KEY对应的那条数据
*
*@param $key	要删除的key
*
*@return 	返回删除的条数
**/
	public function del($key){
		return $this->redis->del($key);
	}







//2
/*
*@	键的自增
*@param	$name	自增字段名
*@return 	返回自增后的值
*/
	public function incr($name){
		return $this->redis->incr($name);
	}



//3
/*
*@	多字段同时添加或修改哈希数据
*@param $name	键名
*@param $arr	数组
*@return	返回添加成功的条数
*/
	public function hmset($name,$arr){
		return $this->redis->hmset($name,$arr);
	}


	
	
	
//4
/*
*@	创建链表或右侧添加数据
*
*@param $name	链表名
*@param $val	要添加到链表的值
*
*@return 	返回成功添加到链表的当前条数
*/
	public function rpush($name,$val){
		return $this->redis->rpush($name,$val);
	}




//5
/*
*@	获取链表中的数据
*@param $name 	链表名
*
*@param $v1	起始位置
*@param $v2	结束位置
*
*return 	返回数组
**/
	public function lrange($name,$v1,$v2){
		return $this->redis->lrange($name,$v1,$v2);
	
	}



	
	
	
//6	
/*
*@	获取一条哈希中所有字段的数据
*
*@param	$name	指定哈希的KEY
*
*@return	以数组形式返回该条哗然的所有字段内容
*/
	public function hgetAll($name){
		return $this->redis->hgetAll($name);
	}



	
	
	
	
	
	
//7
/*
*@	获取哈希中指定字段值	
*
*@param $key	指定的key
*@param $field	指定的字段
*
*@return	返回该字段的值 
**/
	public function hget($key,$field){
		return $this->redis->hget($key,$field);
	}


















}

