<?php /* Smarty version Smarty-3.1.8, created on 2016-09-02 00:00:43
         compiled from "./templates\stu\index.html" */ ?>
<?php /*%%SmartyHeaderCode:186355ffcc655b5042-97108430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a84f019f16f126d2ba48c1fe0df1ed18095a5d51' => 
    array (
      0 => './templates\\stu\\index.html',
      1 => 1471769336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186355ffcc655b5042-97108430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55ffcc656458e5_23471017',
  'variables' => 
  array (
    'list' => 0,
    'stu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffcc656458e5_23471017')) {function content_55ffcc656458e5_23471017($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>学生信息管理</title>
    </head>
    <body>
        <center>
           <?php echo $_smarty_tpl->getSubTemplate ("stu/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <h3>浏览学生信息</h3>
            <table width="700" border="1">
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>年龄</th>
                    <th>班级</th>
                    <th>操作</th>
                </tr>
               <?php  $_smarty_tpl->tpl_vars['stu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stu']->key => $_smarty_tpl->tpl_vars['stu']->value){
$_smarty_tpl->tpl_vars['stu']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['stu']->value['id'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['stu']->value['name'];?>
</td>
						<td><?php if ($_smarty_tpl->tpl_vars['stu']->value['sex']==1){?>男<?php }else{ ?>女<?php }?></td>
						<td><?php echo $_smarty_tpl->tpl_vars['stu']->value['age'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['stu']->value['classid'];?>
</td>
						<td><a href="stu.php?a=del&id=<?php echo $_smarty_tpl->tpl_vars['stu']->value['id'];?>
">删除</a>
							<a href="stu.php?a=edit&id=<?php echo $_smarty_tpl->tpl_vars['stu']->value['id'];?>
">编辑</a></td>
					</tr>
			   <?php } ?>
            </table>
        </center>
    </body>
</html><?php }} ?>