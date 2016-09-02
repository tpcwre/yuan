<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>学生信息管理</title>
        <style type="text/css">
            .pagination{
                list-style: none;

            }
            .pagination li{
                display:block;
                float: left;
                padding: 0 5px;
                font-size: 20px;
            }
            .dc{
              text-align: center;
              width:200px;
              height: 100px;
            }
        </style>
    </head>
    <body>
        <h4>当前用户：{{$user}} <a href="{{url()}}/Stu/cancel">注销</a></h>
        <center>
            <h3>浏览学生信息</h3>
            <h4><a href="{{url()}}/Stu/create">添加学生信息</a></h4>
            <h4>
                <form action="{{url()}}" method="get">
                    <input type="text" name="search" placeholder="学生姓名" size="10">
                    <input type="submit" value="搜索">
                </form>
            </h4>
            <table width="700" border="1">
                <tr>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>年龄</th>
                    <th>班级</th>
                    <th>操作</th>
                </tr>
                @foreach($stus as $stu)
					<tr>
						<td>{{$stu -> id}}</td>
						<td>{{$stu -> name}}</td>
						<td>@if($stu -> sex == 1)男@else 女 @endif</td>
						<td>{{$stu -> age}}</td>
						<td>{{$stu -> classid}}</td>
						<td><a href="Stu/{{$stu -> id}}/delete">删除</a>
							<a href="Stu/{{$stu -> id}}">编辑</a></td>
					</tr>
                @endforeach
            </table>
            <div class="dc">
                <?php 
                        echo $stus -> appends(['search'=>@$_GET['search']]) ->render();
                ?>
            </div>
        </center>
    </body>
</html>