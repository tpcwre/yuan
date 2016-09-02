<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>学生信息管理</title>
    </head>
    <body>
        <center>
            <?php include("menu.php"); //导入导航栏页 ?>
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
                <?php
                    $sex = array(1=>"男",0=>"女");
                    //实现信息的查询显示
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
                   
                    //3.定义sql语句并发送执行,并返回PDOStatement对象
                    $sql = "select * from stu";
                    $stmt = $pdo->query($sql); 
                    //4.解析结果集，遍历输出
					$list  = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($list as $row){
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$sex[$row['sex']]}</td>";
                        echo "<td>{$row['age']}</td>";
                        echo "<td>{$row['classid']}</td>";
                        echo "<td>
                            <a href='action.php?a=del&id={$row['id']}'>删除</a>
                            <a href='edit.php?id={$row['id']}'>修改</a></td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </center>
    </body>
</html>