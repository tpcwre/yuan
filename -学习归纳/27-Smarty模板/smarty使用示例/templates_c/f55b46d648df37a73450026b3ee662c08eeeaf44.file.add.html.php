<?php /* Smarty version Smarty-3.1.8, created on 2015-09-21 11:26:21
         compiled from "./templates\stu\add.html" */ ?>
<?php /*%%SmartyHeaderCode:3266755ffcd3d5f0ff5-31161347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f55b46d648df37a73450026b3ee662c08eeeaf44' => 
    array (
      0 => './templates\\stu\\add.html',
      1 => 1442827576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3266755ffcd3d5f0ff5-31161347',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55ffcd3d61fe08_98157240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffcd3d61fe08_98157240')) {function content_55ffcd3d61fe08_98157240($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>学生信息管理</title>
    </head>
    <body>
        <center>
            <?php echo $_smarty_tpl->getSubTemplate ("stu/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <h3>添加学生信息</h3>
            <form action="stu.php?a=insert" method="post">
            <table width="320">
                <tr>
                    <td>姓名：</td>
                    <td><input type="text" name="name"/></td>
                </tr>
                <tr>
                    <td>性别：</td>
                    <td><input type="radio" name="sex" value="1"/>男
                        <input type="radio" name="sex" value="0"/>女
                    </td>
                </tr>
                <tr>
                    <td>年龄：</td>
                    <td><input type="text" name="age"/></td>
                </tr>
                <tr>
                    <td>班级：</td>
                    <td><input type="text" name="classid"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加"/>
                        <input type="reset" value="重置"/>
                    </td>
                </tr>
            </table>
            </form>
        </center>
    </body>
</html><?php }} ?>