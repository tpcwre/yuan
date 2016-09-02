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
                //执行学生信息的增删改操作(带预处理器)
                //1.导入配置文件
                require("./config.php");
                //2.创建PDO对象，实现数据库连接
				try{
					$pdo = new PDO(DSN,USER,PASS);
					//改为错误处理为异常模式。
					$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					$pdo->query("set names utf8");
				}catch(PDOException $pe){
					die("实例化PDO失败！原因：".$pe->getMessage());
				}
                //4.根据参数a的值执行对应的操作
                switch($_GET['a']){
                    case "insert": //执行添加
                        //获取添加的信息
                        $name = $_POST['name'];
                        $sex = $_POST['sex'];
                        $age = $_POST['age'];
                        $classid = $_POST['classid'];
						
                        //拼装sql语句(?号式的预处理SQL语句)
                        $sql = "insert into stu values(null,?,?,?,?)";
                        //预处理sql语句，返回PDOStatement对象
                        $stmt = $pdo->prepare($sql);
						
						/*
						//对预处理sql语句中?参数绑定值(要求此时变量必须有值)
						$stmt->bindValue(1,$name);
						$stmt->bindValue(2,$sex);
						$stmt->bindValue(3,$age);
						$stmt->bindValue(4,$classid);
						*/
						
						//对预处理sql语句中?参数绑定变量(要求此时变量只要在执行前有值即可)
						$stmt->bindParam(1,$name);
						$stmt->bindParam(2,$sex);
						$stmt->bindParam(3,$age);
						$stmt->bindParam(4,$classid);
						
						//执行sql语句
						$stmt->execute();
                        //根据自增id的值判断是否成功
                        if($pdo->lastInsertId()>0){
                            echo "添加成功！";
                        }else{
                            echo "添加失败！";
                        }
                        break;
                    case "update": //执行修改
                        //拼装sql语句(别名式的预处理sql语句)
                        $sql = "update stu set name=:name,age=:age,sex=:sex,classid=:classid where id=:id";
                        
						//执行预处理sql语句，并返回PDOStatement对象
                        $stmt = $pdo->prepare($sql);
						
						/*
						//为参数sql中的别名绑定变量
						$stmt->bindParam("name",$_POST['name']);
						$stmt->bindParam("sex",$_POST['sex']);
						$stmt->bindParam("age",$_POST['age']);
						$stmt->bindParam("classid",$_POST['classid']);
						$stmt->bindParam("id",$_POST['id']);
						//执行
						$stmt->execute();
						*/
						//获取要修改的信息
						$data = array("name"=>$_POST['name'],"sex"=>$_POST['sex'],"age"=>$_POST['age'],"classid"=>$_POST['classid'],"id"=>$_POST['id']);
						//绑定值带执行
						$stmt->execute($data);
						
                        //根据影响的行数判断是否成功
                        if($stmt->rowCount()>0){
                            echo "修改成功！";
                        }else{
                            echo "修改失败！";
                        }
                        break;
                    case "del": //执行删除
                        //定义删除sql语句
                        $sql = "delete from stu where id=?";
						//预处理
						$stmt = $pdo->prepare($sql);
                        //执行
                        $stmt->execute(array($_GET['id']));
                        //通过影响的行数来判断成功与否
                        if($stmt->rowCount()>0){
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