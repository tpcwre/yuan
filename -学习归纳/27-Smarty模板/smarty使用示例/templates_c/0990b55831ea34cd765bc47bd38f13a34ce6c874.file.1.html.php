<?php /* Smarty version Smarty-3.1.8, created on 2016-09-01 12:35:02
         compiled from "./templates\1.html" */ ?>
<?php /*%%SmartyHeaderCode:593855ff9f6c60ce35-82165825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0990b55831ea34cd765bc47bd38f13a34ce6c874' => 
    array (
      0 => './templates\\1.html',
      1 => 1471769336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '593855ff9f6c60ce35-82165825',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55ff9f6c6477c7_78779759',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ff9f6c6477c7_78779759')) {function content_55ff9f6c6477c7_78779759($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\s2\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>
    <body>
        <?php $_smarty_tpl->_capture_stack[0][] = array("mycapture", null, null); ob_start(); ?>hello world!<br/>hello php!<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
		<h3><a href="index.php">返回首页</a></h3>
		<h4>从GET中获取id值:<?php echo $_GET['id'];?>
</h4>
		<h4>从POST中获取name值:<?php echo $_POST['name'];?>
</h4>
		<h4>从session中获取username值:<?php echo $_SESSION['username'];?>
</h4>
		<h4>从cookie中获取loginname值:<?php echo $_COOKIE['loginname'];?>
</h4>
		<h4>当前时间戳:<?php echo time();?>
</h4>
		<h4>当前日期:<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
</h4>
		<h4>当前常量:<?php echo @PI;?>
</h4>
		<h4>输出捕获信息:<?php echo Smarty::$_smarty_vars['capture']['mycapture'];?>
</h4>
		<h4>当前模板名:<?php echo basename($_smarty_tpl->source->filepath);?>
</h4>
		<h4>当前模板版本:<?php echo 'Smarty-3.1.8';?>
</h4>
		<h4>当前模板左右定界符:<?php echo '{';?>
, <?php echo '}';?>
</h4>
    </body>
</html><?php }} ?>