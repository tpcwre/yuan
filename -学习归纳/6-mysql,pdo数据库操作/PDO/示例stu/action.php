<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>学生信息管理</title>
    </head>
    <body>
        <center>
            <?php include("menu.php"); //导入导航栏页 ?>
            <h3>执行学生信息操作</h3>
            <?php
                //执行学生信息的增删改操作
                //1.导入配置文件
				require("./pdo.class.php");
				$p = new pdos('user');
			
                switch($_GET['a']){
                    case "insert": //执行添加
                        $insid=$p->insert();
                        if($insid){
                            echo "添加成功！";
                        }else{
                            echo "添加失败！";
                        }
                        break;
                    case "update": //执行修改
						$affect = $p->update();
						//$mysql->update($_POST);
                        if($affect>0){
                            echo "修改成功！";
                        }else{
                            echo "修改失败！";
                        }
                        break;
                    case "del": //执行删除
                        //定义删除sql语句
                        $affect = $p->delete($_GET['id']);
                        if($affect){
                            echo "删除成功！";
                        }else{
                            echo "删除失败！";
                        }
                        break;
                }
         
            ?>
        </center>
    </body>
</html>