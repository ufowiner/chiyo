<!DOCTYPE HTML>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content=" " />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>skin/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>skin/admin/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="<?php echo base_url(); ?>skin/admin/css/lines.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url(); ?>skin/admin/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>skin/admin/js/jquery.min.js"></script>
    <!-- webfonts -->
    <link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- webfonts -->
    <!-- Nav CSS -->
    <link href="<?php echo base_url(); ?>skin/admin/css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>skin/admin/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>skin/admin/js/custom.js"></script>
    <!-- Graph JavaScript -->
    <script src="<?php echo base_url(); ?>skin/admin/js/d3.v3.js"></script>
    <script src="<?php echo base_url(); ?>skin/admin/js/rickshaw.js"></script>
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">YSD_keven</a>
            </div>
            <!-- /.navbar-header -->

            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw nav_icon"></i>控制面板</a>
                        </li>
                        <li>
                            <a href="timeorder.html"><i class="glyphicon glyphicon-bullhorn nav_icon"></i>未处理订单</a>
                        </li>
                        <li>
                            <a href="allorder.html"><i class="glyphicon glyphicon-file nav_icon"></i>所有订单</a>
                        </li>
                        <li>
                            <a href="menuclass.html"><i class="glyphicon glyphicon-tasks nav_icon"></i>菜单分类</a>
                        </li>
                        <li>
                            <a href="menulist.html"><i class="glyphicon glyphicon-modal-window  nav_icon"></i>所有菜品</a>
                        </li>
                        <li>
                            <a href="menuadd.html"><i class="glyphicon glyphicon-copy nav_icon"></i>添加菜品</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
       
        <div id="page-wrapper">
            <div class="graphs">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">菜单分类</h3>
                        </div>
                        <div class="list-group">
                          <li class="list-group-item">
                            <a href="">Cras justo odio</a>
                            <button type="button" class="btn btn-sm btn-info pull-right m75">修改</button>
                            <button type="button" class="btn btn-sm btn-danger pull-right m15">删除</button>
                            <span class="badge">14</span>
                          </li>
                          <li class="list-group-item">
                            <a href="">Cras justo odio</a>
                            <button type="button" class="btn btn-sm btn-info pull-right m75">修改</button>
                            <button type="button" class="btn btn-sm btn-danger pull-right m15">删除</button>
                            <span class="badge">14</span>
                          </li>
                          <li class="list-group-item">
                            <a href="">Cras justo odio</a>
                            <button type="button" class="btn btn-sm btn-info pull-right m75">修改</button>
                            <button type="button" class="btn btn-sm btn-danger pull-right m15">删除</button>
                            <span class="badge">14</span>
                          </li>
                          <li class="list-group-item">
                            <input type="text" name="newClass" id="newClass"  required="required">
                            <button class="btn btn-sm pull-right">添加</button>
                          </li>
                        </div>
                    </div>
                </div>
                
				
				<div class="clearfix">
				
				</div>
                <div class="copy">
                    <p>Copyright &copy; 2016.Company name All rights reserved. <a href="#" target="_blank" title="YSD">YSD</a> - Collect from <a href="#" title="YSD_keven" target="_blank">YSD_keven</a></p>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>