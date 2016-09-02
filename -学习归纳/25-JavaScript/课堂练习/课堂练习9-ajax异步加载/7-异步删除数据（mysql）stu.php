<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>PHP_MySQL实现学生信息管理</title>
        <script type="text/javascript" src="./myajax.js"></script>
        <script type="text/javascript" src="./myajax.js"></script>
        <script type="text/javascript">
            //执行删除学生信息操作
            function doDel(id){
               //执行自定ajax函数，发送删除操作
               myAjax("studel.php?id="+id,true,function(row){
                    //判断是否成功
                    if(row>0){
                        //执行表格的行删除
                        var tid = document.getElementById("tid");
                        var tr = document.getElementById("stu"+id);
                        tid.deleteRow(tr.rowIndex);
                        
                        alert('删除成功！');
                    }else{
                        alert("删除失败！");
                    }
               });
            }
        </script>
    </head>
    <body>
        <center>
            <h3>浏览学生信息</h3>
            <table id="tid" width="600" border="1">
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>年龄</th>
                    <th>班级</th>
                    <th>操作</th>
                </tr>
                <?php
                    //实现学生信息浏览
                    //1. 导入配置文件
                   
                    //2. 连接MySQL，并判断
                    $link = @mysql_connect("localhost","root","1234567")or die("数据库连接失败！");
                    //3. 选择数据库，设置字符编码
                    mysql_select_db("lamp113",$link);
                    mysql_set_charset("utf8");
                    
                    //4. 定义sql语句，并发送执行
                    $sql = "select * from stu ";
                    $result = mysql_query($sql,$link);
                    //5. 解析结果集，并遍历输出
                    while($row = mysql_fetch_assoc($result)){
                        echo "<tr id=\"stu{$row['id']}\">";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['sex']}</td>";
                        echo "<td>{$row['age']}</td>";
                        echo "<td>{$row['classid']}</td>";
                        echo "<td><a href='javascript:doDel({$row['id']})'>删除</a></td>";
                        echo "</tr>";
                    }
                    
                    //6. 释放结果集，关闭数据库
                    mysql_free_result($result);
                    mysql_close($link);
                ?>
            </table>
        </center>
    </body>
</html>