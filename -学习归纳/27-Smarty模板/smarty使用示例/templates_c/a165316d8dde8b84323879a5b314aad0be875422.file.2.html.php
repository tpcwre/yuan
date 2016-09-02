<?php /* Smarty version Smarty-3.1.8, created on 2016-09-01 12:35:04
         compiled from "./templates\2.html" */ ?>
<?php /*%%SmartyHeaderCode:3241955ffa9dce1ebf6-93531655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a165316d8dde8b84323879a5b314aad0be875422' => 
    array (
      0 => './templates\\2.html',
      1 => 1471769336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3241955ffa9dce1ebf6-93531655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55ffa9dce55703_76332898',
  'variables' => 
  array (
    'title' => 0,
    'str' => 0,
    'a' => 0,
    'b' => 0,
    'name' => 0,
    'str1' => 0,
    'str2' => 0,
    'str3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa9dce55703_76332898')) {function content_55ffa9dce55703_76332898($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'E:\\xampp\\htdocs\\s2\\libs\\plugins\\modifier.regex_replace.php';
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>
    <body>
        <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
		<h3><a href="index.php">返回首页</a></h3>
		<?php $_smarty_tpl->tpl_vars['str'] = new Smarty_variable("Hello PHP!", null, 0);?>
		<h3>原字串：<?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</h3>
		<h3>小写后：<?php echo mb_strtolower($_smarty_tpl->tpl_vars['str']->value, 'UTF-8');?>
 ： <?php echo strtolower($_smarty_tpl->tpl_vars['str']->value);?>
</h3>
		<h3>大写后：<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['str']->value, 'UTF-8');?>
 ： <?php echo strtoupper($_smarty_tpl->tpl_vars['str']->value);?>
</h3>
		<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable("hello ", null, 0);?>
		<?php $_smarty_tpl->tpl_vars['b'] = new Smarty_variable("world!", null, 0);?>
		<h3><?php echo ($_smarty_tpl->tpl_vars['a']->value).($_smarty_tpl->tpl_vars['b']->value);?>
 字串连接 <?php echo $_smarty_tpl->tpl_vars['a']->value;?>
<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</h3>
		
		<h3>你好！<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? "mayao" : $tmp);?>
</h3>
		<?php $_smarty_tpl->tpl_vars['str'] = new Smarty_variable("<b style='color:red;'>ccccc</b>", null, 0);?>
		<h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['str']->value, ENT_QUOTES, 'UTF-8', true);?>
</h3>
		
		<hr/>
		
		<?php $_smarty_tpl->tpl_vars['str'] = new Smarty_variable("aaaaaa\nbbbbbbbb\nccccccccc\nddddddddd", null, 0);?>
		<?php echo nl2br($_smarty_tpl->tpl_vars['str']->value);?>

		<hr/>
		
		
		<?php $_smarty_tpl->tpl_vars['str'] = new Smarty_variable("2015-09-21", null, 0);?>
		<?php echo preg_replace("/(\d\d\d\d)\-(\d\d)\-(\d\d)/","\\2/\\3/\\1",$_smarty_tpl->tpl_vars['str']->value);?>

		<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['str']->value,"/(\d\d\d\d)-(\d\d)-(\d\d)/",'$2/$3/$1');?>

		<hr/>
		
		
		
		<?php $_smarty_tpl->tpl_vars['str'] = new Smarty_variable("<b>aaa</b><b>bb>b</b><b>ccc</b>", null, 0);?>
		<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['str']->value,"/<b>(.*?)<\/b>/","<i>\\1</i>");?>

		<hr/>
		自定义汉字截取函数或调节器<br/>
		<?php $_smarty_tpl->tpl_vars['str1'] = new Smarty_variable("塔科马港口港务局委员康妮培根女士告诉法晚记者", null, 0);?>
		<?php $_smarty_tpl->tpl_vars['str2'] = new Smarty_variable("当时习近福州市", null, 0);?>
		<?php $_smarty_tpl->tpl_vars['str3'] = new Smarty_variable("市人大常委会主任的身份率团访问塔科马", null, 0);?>
		
		<?php echo mysubstr($_smarty_tpl->tpl_vars['str1']->value,8);?>
<br/>
		<?php echo mysubstr($_smarty_tpl->tpl_vars['str2']->value,8);?>
<br/>
		<?php echo mysubstr($_smarty_tpl->tpl_vars['str3']->value,8);?>
<br/>
		<?php echo mysubstr($_smarty_tpl->tpl_vars['str2']->value,6);?>
<br/>
		<?php echo mysubstr($_smarty_tpl->tpl_vars['str3']->value,10);?>
<br/>
		
    </body>
</html><?php }} ?>