<?php
//smarty的初始化文件
//1.导入smarty模板库中的类
require("./libs/Smarty.class.php");

//2.实例化对象
$smarty = new Smarty();

//3.初始化信息
$smarty->template_dir = "./templates";  //模板目录
$smarty->compile_dir = "./templates_c";  //模板编译缓存目录
$smarty->config_dir = "./configs";  //模板的配置文件目录
$smarty->cache_dir = "./cache";  //模板静态缓存目录

$smarty->caching = false; //是否开启模板静态缓存
$smarty->cache_lifetime= 10; //静态缓存时间（单位,秒）

$smarty->left_delimiter = "{"; //左定界符
$smarty->right_delimiter = "}"; //右定界符