<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://www.nisastore.com/application/Admin/Public/style/bootstrap.css" rel="stylesheet">
    <link href="http://www.nisastore.com/application/Admin/Public/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="http://www.nisastore.com/application/Admin/Public/style/beyond.css" rel="stylesheet">
    <link href="http://www.nisastore.com/application/Admin/Public/style/demo.css" rel="stylesheet">
    <link href="http://www.nisastore.com/application/Admin/Public/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">管理员登录</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <!--验证码-->
                <div class="loginbox-textbox">
                    <input class="form-control"  name="verify" type="text" style="width: 100px;height:50px;float: left">
                    <img src="/admin.php/Login/verify" onclick="this.src='/admin.php/Login/verify/'+Math.random()" alt=""  style="width:120px;height: 50px">
                </div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="登录" type="submit">
                </div>
            </div>
                <div class="logobox">
                    <p class="text-center"><h4 align="center">欢迎来到妮萨商城</h4></p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="http://www.nisastore.com/application/Admin/Public/style/jquery.js"></script>
    <script src="http://www.nisastore.com/application/Admin/Public/style/bootstrap.js"></script>
    <script src="http://www.nisastore.com/application/Admin/Public/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="http://www.nisastore.com/application/Admin/Public/style/beyond.js"></script>




</body><!--Body Ends--></html>