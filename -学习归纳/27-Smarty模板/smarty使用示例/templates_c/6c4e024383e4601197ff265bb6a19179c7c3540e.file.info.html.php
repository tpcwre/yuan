<?php /* Smarty version Smarty-3.1.8, created on 2015-09-21 11:27:59
         compiled from "./templates\stu\info.html" */ ?>
<?php /*%%SmartyHeaderCode:1618455ffcd9f460ff1-54975917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c4e024383e4601197ff265bb6a19179c7c3540e' => 
    array (
      0 => './templates\\stu\\info.html',
      1 => 1442827674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1618455ffcd9f460ff1-54975917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55ffcd9f48fdf1_50015717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffcd9f48fdf1_50015717')) {function content_55ffcd9f48fdf1_50015717($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>学生信息管理</title>
    </head>
    <body>
        <center>
            <?php echo $_smarty_tpl->getSubTemplate ("stu/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <h3>学生操作信息</h3>
			<?php echo $_smarty_tpl->tpl_vars['info']->value;?>

        </center>
    </body>
</html><?php }} ?>