<?php
session_start();
$userid=$_SESSION['userid'];
include ('mysqli_connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员主页</title>
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
        /*    antiquewhite*/
        }

    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">图书馆管理系统</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="admin_index.php">主页</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">书籍信息<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="admin_book.php">查询书籍</a></li>
                        <li><a href="admin_book_add.php">添加书籍</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">读者信息<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="admin_reader.php">查询读者</a></li>
                        <li><a href="admin_reader_add.php">添加读者</a></li>
                    </ul>
                </li>
                <li><a href="admin_borrow_info.php">借还信息</a></li>
                <li><a href="admin_repass.php">修改密码</a></li>
                <li><a href="index.php">退出登录</a></li>
            </ul>
        </div>
    </div>
</nav>


<h3 style="text-align: center; margin-top: 150px">欢迎管理员</h3><br/><br/><br/>

    <div id="bot" style="text-align: center;font-size:40px;position:absolute;left:30%;top:80px "><i style="text-align: center">哈 尔 滨 理 工 大 学 图 书 管 理 系 统 </i></div>


</body>
</html>