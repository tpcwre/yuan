<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <center>
        <form action="{{url()}}/Stu/doLogin" method="post" style="margin-top: 100px">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="username" placeholder="用户名"><br/><br/>
            <input type="password" name="password" placeholder="密码"><br/><br/>
            <input type="submit" value="登录">
            <input type="reset" value="重置">
            <a href="{{url()}}/Stu/signup">注册</a>
        </form>

    </center>
</body>
</html>