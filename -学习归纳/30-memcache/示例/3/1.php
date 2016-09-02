<?php
header("Content-type:text/html;charset=utf-8");
//使用php操作memcache缓存

//1. 实例化Memcahe类
$mem = new Memcache();

//2. 添加memcache服务
$mem->addServer("192.168.103.250",11211);
$mem->addServer("192.168.103.76",11211);
$mem->addServer("192.168.103.148",11211);
$mem->addServer("192.168.103.69",11211);
$mem->addServer("192.168.103.188",11211);
/*
//3. 执行操作(放置或修改)
$mem->set("username","张三",MEMCACHE_COMPRESSED,3600);
$mem->set("age","88",MEMCACHE_COMPRESSED,3600);
$mem->set("sex","man",MEMCACHE_COMPRESSED,3600);
$mem->set("num","100",MEMCACHE_COMPRESSED,3600);
$mem->set("a",array(10,20,30,40,50),MEMCACHE_COMPRESSED,3600);
*/
//4. 输出
echo $mem->get("username").":";
echo $mem->get("age").":";
echo $mem->get("sex").":";
echo $mem->get("num").":";

print_r($mem->get("a"));


