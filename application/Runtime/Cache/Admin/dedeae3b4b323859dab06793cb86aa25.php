<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://www.nisastore.com/application/Admin/Public/style/bootstrap.css" rel="stylesheet">
    <link href="http://www.nisastore.com/application/Admin/Public/style/font-awesome.css" rel="stylesheet">
    <link href="http://www.nisastore.com/application/Admin/Public/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://www.nisastore.com/application/Admin/Public/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://www.nisastore.com/application/Admin/Public/style/demo.css" rel="stylesheet">
    <link href="http://www.nisastore.com/application/Admin/Public/style/typicons.css" rel="stylesheet">
    <link href="http://www.nisastore.com/application/Admin/Public/style/animate.css" rel="stylesheet">
    
</head>
<body>
	<!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="http://www.nisastore.com/application/Admin/Public/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://www.nisastore.com/application/Admin/Public/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo (session('admin_name')); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin.php/admin/logout">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin.php/admin/edit/id/<?php echo (session('admin_id')); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">

			<!-- Page Sidebar 左部-->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">商品管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin.php/goods/typelist">
                        <span class="menu-text">商品分类</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin.php/brand/brandlist">
                        <span class="menu-text">品牌管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">文章管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/user/index.html">
                        <span class="menu-text">文章列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">管理员管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin.php/admin/lst">
                        <span class="menu-text">管理员列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin.php/admin/add">
                        <span class="menu-text">添加管理员</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="/admin.php/admin/edit">
                        <span class="menu-text">修改管理员</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">订单管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/user/index.html">
                        <span class="menu-text">订单列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>


    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar 左部-->

            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="/admin.php/index/index">系统</a></li>
                        <li class="active">品牌列表</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加品牌" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '/admin.php/brand/addbrand'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="15%">品牌ID</th>
                                <th algin="left">品牌名称</th>
                                <th algin="left">品牌Logo</th>
                                <th algin="left">品牌网址</th>
                                <th class="text-center" width="15%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php if(is_array($result)): foreach($result as $k=>$v): ?><tr>
                                     <td align="center"><?php echo ($v["typeid"]); ?></td>
                                     <td algin="left"><?php if($v["typepid"] != 0): ?>|<?php endif; echo str_repeat('-',$v['lavel']*4); echo ($v["typename"]); ?></td>
                                     <td algin="left"></td>
                                     <td align="center">
                                         <a href="/admin.php/Brand/edittype/id/<?php echo ($v["typeid"]); ?>" class="btn btn-primary btn-sm shiny">
                                             <i class="fa fa-edit"></i> 编辑
                                         </a>
                                         <a href="#" onClick="warning('确实要删除吗', '/admin.php/Brand/delt/id/<?php echo ($v["typeid"]); ?>')" class="btn btn-danger btn-sm shiny">
                                             <i class="fa fa-trash-o"></i> 删除
                                         </a>
                                     </td>
                                 </tr><?php endforeach; endif; ?>
                                 <tr>
                                     <td colspan="5"><?php echo ($page); ?></td>
                                 </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                	                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="http://www.nisastore.com/application/Admin/Public/style/jquery_002.js"></script>
    <script src="http://www.nisastore.com/application/Admin/Public/style/bootstrap.js"></script>
    <script src="http://www.nisastore.com/application/Admin/Public/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://www.nisastore.com/application/Admin/Public/style/beyond.js"></script>
    


</body></html>