<?php
//绑定模块
define("BIND_MODULE","Admin");
//模块路径
define("APP_PATH","application/");
//开启调试模式
define("APP_DEBUG",true);

//引入css，image，js文件
define("__ROOT__","http://www.nisastore.com/");
define("ADMIN_STYLE",__ROOT__."public/Admin/style/");
define("ADMIN_IMAGE",__ROOT__."public/Admin/images/");

//引入框架入口文件
require_once "library/ThinkPHP/ThinkPHP.php";