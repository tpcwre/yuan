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
					error_reporting(E_ALL & ~E_NOTICE);
				
				
                    $sex = array(0=>"男",1=>"女");
                    //实现信息的查询显示
                    //1.导入配置文件
					require("./pdo.class.php");
					$p=new pdos('user');
			
					if(!empty($_GET['name'])){
						$p->where("name like '%{$_GET['name']}%'");
					}
					if(!empty($_GET['sex']) || $_GET['sex']==='0'){
				
						$p->where("sex like '%{$_GET['sex']}%'");
					}
					
					// print_r($_GET);
					// print_r($p->where);
                    $count = $p->count();
					require "page.php";
					$pa =  new Page($count,5);
					$limit = $pa->limit();
					//echo $limit;
					$result=$p->limit($limit)->fetchAll();
				
                    foreach($result as $row){
						$sex = $row['sex']==0?'女':'男';
						
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>".$sex."</td>";
                        echo "<td>{$row['age']}</td>";
                        echo "<td>{$row['classid']}</td>";
                        echo "<td>
                            <a href='action.php?a=del&id={$row['id']}'>删除</a>
                            <a href='edit.php?id={$row['id']}'>修改</a></td>";
                        echo "</tr>";
                    }
					
                ?>
            </table>
			<?php echo $pa->show(); ?>
        </center>
    </body>
</html>