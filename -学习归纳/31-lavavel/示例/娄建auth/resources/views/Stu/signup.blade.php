<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <center>
        <form action="{{url()}}/Stu/doSignup" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="username" placeholder="用户名"><br/><br/>
            <input type="password" name="password" placeholder="密码" ><br/><br/>
            <input type="submit" value="注册">
            <input type="reset">
        </form>
    </center>
</body>
</html>