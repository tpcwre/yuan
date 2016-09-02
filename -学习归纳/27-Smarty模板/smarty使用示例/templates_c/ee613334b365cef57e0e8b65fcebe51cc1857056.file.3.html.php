<?php /* Smarty version Smarty-3.1.8, created on 2015-09-21 10:39:03
         compiled from "./templates\3.html" */ ?>
<?php /*%%SmartyHeaderCode:1162855ffbda14a2c46-24845447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee613334b365cef57e0e8b65fcebe51cc1857056' => 
    array (
      0 => './templates\\3.html',
      1 => 1442824741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1162855ffbda14a2c46-24845447',
  'function' => 
  array (
    'aa' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55ffbda14e1458_77881942',
  'variables' => 
  array (
    'title' => 0,
    'name1' => 0,
    'name2' => 0,
    'name3' => 0,
    'i' => 0,
    'a' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffbda14e1458_77881942')) {function content_55ffbda14e1458_77881942($_smarty_tpl) {?><!DOCTYPE html>
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
		<?php $_smarty_tpl->tpl_vars["name1"] = new Smarty_variable("mayao", null, 0);?>
		<?php $_smarty_tpl->tpl_vars["name2"] = new Smarty_variable("曾国防", null, 0);?>
		<?php $_smarty_tpl->tpl_vars['name3'] = new Smarty_variable("朱凯凯", null, 0);?>
		<?php echo $_smarty_tpl->tpl_vars['name1']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['name2']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['name3']->value;?>

		<hr/>
		
		<?php if (!function_exists('smarty_template_function_aa')) {
    function smarty_template_function_aa($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['aa']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
			<ul>
				<li>aaaaaaaaa</li>
				<li>aaaaaaaaa</li>
			</ul>
		<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

		
		<?php smarty_template_function_aa($_smarty_tpl,array());?>

		<hr/>
		
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
			<?php echo $_smarty_tpl->tpl_vars['i']->value;?>

		<?php }} ?>
		
		<hr/>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['a']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<?php echo $_smarty_tpl->tpl_vars['v']->value;?>

		<?php } ?>
		
		<hr/>
		
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['k'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['k']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['name'] = 'k';
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['a']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['k']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['k']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['k']['total']);
?>
			<?php echo $_smarty_tpl->tpl_vars['a']->value[$_smarty_tpl->getVariable('smarty')->value['section']['k']['index']];?>

		<?php endfor; endif; ?>
		
		</body>
</html><?php }} ?>