<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>学生信息管理</title>
    </head>
    <body>
        <center>
            <?php 
                include("menu.php"); //导入导航栏页 
                //获取要修改的信息
                //1.导入配置文件
                require("pdo.class.php");
				
				$p = new pdos('user');
				$stu=$p->find($_GET['id']);
            ?>
            <h3>修改学生信息</h3>
            <form action="action.php?a=update" method="post">
            <input type="hidden" name="id" value="<?php echo $stu['id']; ?>"/>
            <table width="320">
                <tr>
                    <td>姓名：</td>
                    <td><input type="text" name="name" value="<?php echo $stu['name']; ?>"/></td>
                </tr>
                <tr>
                    <td>性别：</td>
                    <td><input type="radio" name="sex" value="m" <?php echo ($stu['sex']=='1')?"checked":""; ?>/>男
                        <input type="radio" name="sex" value="w" <?php echo ($stu['sex']=='0')?"checked":""; ?>/>女
                    </td>
                </tr>
                <tr>
                    <td>年龄：</td>
                    <td><input type="text" name="age" value="<?php echo $stu['age']; ?>"/></td>
                </tr>
                <tr>
                    <td>班级：</td>
                    <td><input type="text" name="classid" value="<?php echo $stu['classid']; ?>"/></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改"/>
                        <input type="reset" value="重置"/>
                    </td>
                </tr>
            </table>
            </form>
        </center>
    </body>
</html>