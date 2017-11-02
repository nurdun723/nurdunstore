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

			 <!-- Page Sidebar -->
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
                        <span class="menu-text">商品列表</span>
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
            <!-- /Page Sidebar -->

            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="/admin.php/index/index">系统</a></li>
                        <li><a href="/admin.php/Goods/typelist">商品分类列表</a></li>
                        <li class="active">修改商品分类</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-blue">
                                    <span class="widget-caption">修改商品分类</span>
                                </div>
                                <div class="widget-body">
                                    <div id="horizontal-form">
                                      <form class="form-horizontal" role="form" action="" method="post">
                                          <input type="hidden" name="typeid" value="<?php echo ($res["typeid"]); ?>">
                                         <div class="form-group">
                                            <label for="typeName" class="col-sm-2 control-label no-padding-right">商品分类名称：</label>
                                            <div class="col-sm-6">
                                                 <input class="form-control" id="typeName" name="typeName" type="text" value="<?php echo ($res["typename"]); ?>">
                                            </div>
                                             <p class="help-block col-sm-4 red">* 必填</p>
                                         </div>
                                         <div class="form-group">
                                         <label for="group_id" class="col-sm-2 control-label no-padding-right">上级分类：</label>
                                            <div class="col-sm-6">
                                                <select name="typepid" >
                                                    <option value="0">顶级分类</option>
                                                    <?php if(is_array($types)): $k = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><option <?php if($res['typepid'] == $v['typeid']): ?>selected='selected'<?php endif; ?> value=<?php echo ($v["typeid"]); ?>><?php if($v["typepid"] != 0): ?>|<?php endif; echo str_repeat('-',$v['lavel']*6); echo ($v["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-default">保存信息</button>
                                                </div>
                                            </div>
                                        </form>
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