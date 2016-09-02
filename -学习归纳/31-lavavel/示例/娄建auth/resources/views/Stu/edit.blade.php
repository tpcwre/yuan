<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>学生信息管理</title>
    </head>
    <body>
        <center>
            
            <h3>编辑学生信息</h3>
            <form action="{{url()}}/Stu/{{$stu -> id}}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PUT">
            <table width="320">
                <tr>
                    <td>姓名：</td>
                    <td><input type="text" name="name" value="{{$stu -> name}}"/></td>
                </tr>
                <tr>
                    <td>性别：</td>
                    <td><input type="radio" name="sex" value="1" @if($stu -> sex == 1)checked @endif />男
                        <input type="radio" name="sex" value="0" @if($stu -> sex == 0)checked @endif />女
                    </td>
                </tr>
                <tr>
                    <td>年龄：</td>
                    <td><input type="text" name="age" value="{{$stu -> age}}"/></td>
                </tr>
                <tr>
                    <td>班级：</td>
                    <td><input type="text" name="classid" value="{{$stu -> classid}}"/></td>
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
</html>