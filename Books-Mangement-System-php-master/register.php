<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图书馆 || 请注册</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body{
            width: 100%;
            overflow: hidden;
            background: url("300046-106.jpg") no-repeat;
            background-size:cover;
            color: antiquewhite;
        }
    </style>
    <script>
        function f() {
            window.location = "register.php";
        }
    </script>
</head>
<body>
<h1 style="text-align: center"><strong>用户注册</strong></h1>
<div style="padding: 180px 550px 10px;text-align: center">
    <form  action="register_reader.php" method="POST" class="bs-example bs-example-form" role="form">
        <div id="login">
            <div class="input-group"><span class="input-group-addon">账户</span><input  name="account" type="text" placeholder="请输入注册账号" class="form-control"></div><br><br>
            <div class="input-group"><span class="input-group-addon">姓名</span><input  name="name" type="text" placeholder="请输入注册姓名" class="form-control"></div><br><br>
            <div class="input-group"><span class="input-group-addon">密码</span><input  name="pass" type="password" placeholder="请输入注册密码" class="form-control"></div><br><br>
            <div class="input-group"><span class="input-group-addon">确认密码</span><input  name="repass" type="password" placeholder="请确认密码" class="form-control"></div><br><br>
            <input type="submit" value="注册" class="btn btn-default">
        </div>
    </form>
</div>
</body>
</html>