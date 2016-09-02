<?php /* Smarty version Smarty-3.1.8, created on 2016-09-01 12:34:59
         compiled from "./templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2370055ff9f52d71a04-17544834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc1c3ef5cc9c08dc853f6b428d15c38ce0aa533a' => 
    array (
      0 => './templates\\index.html',
      1 => 1471769336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2370055ff9f52d71a04-17544834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55ff9f52e4c633_34022734',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ff9f52e4c633_34022734')) {function content_55ff9f52e4c633_34022734($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>
    <body>
        <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
		<h3><a href="1.php">1. Smarty的保留变量</a></h3>
		<h3><a href="2.php">2. Smarty的变量调节器</a></h3>
		<h3><a href="3.php">3. Smarty的内置函数</a></h3>
		<h3><a href="stu.php">4. 学生信息管理</a></h3>
		
    </body>
</html><?php }} ?>