<?php /* Smarty version Smarty-3.1.8, created on 2015-09-21 11:34:23
         compiled from "./templates\stu\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:3135155ffced38d8187-23670606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92e73763eab02481cae70c8f6847645dbc7cf9db' => 
    array (
      0 => './templates\\stu\\edit.html',
      1 => 1442828020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3135155ffced38d8187-23670606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55ffced3922511_45355691',
  'variables' => 
  array (
    'vo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffced3922511_45355691')) {function content_55ffced3922511_45355691($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>学生信息管理</title>
    </head>
    <body>
        <center>
            <?php echo $_smarty_tpl->getSubTemplate ("stu/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <h3>编辑学生信息</h3>
            <form action="stu.php?a=update" method="post">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"/>
            <table width="320">
                <tr>
                    <td>姓名：</td>
                    <td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['name'];?>
"/></td>
                </tr>
                <tr>
                    <td>性别：</td>
                    <td><input type="radio" name="sex" value="1" <?php if ($_smarty_tpl->tpl_vars['vo']->value['sex']==1){?>checked<?php }?>/>男
                        <input type="radio" name="sex" value="0" <?php if ($_smarty_tpl->tpl_vars['vo']->value['sex']==0){?>checked<?php }?>/>女
                    </td>
                </tr>
                <tr>
                    <td>年龄：</td>
                    <td><input type="text" name="age" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['age'];?>
"/></td>
                </tr>
                <tr>
                    <td>班级：</td>
                    <td><input type="text" name="classid" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['classid'];?>
"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="编辑"/>
                        <input type="reset" value="重置"/>
                    </td>
                </tr>
            </table>
            </form>
        </center>
    </body>
</html><?php }} ?>