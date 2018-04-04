<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">


<!--  header  -->
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>cssmoban</title>
  <!-- Bootstrap Styles-->
  <link href="/Public/assets/css/bootstrap.css" rel="stylesheet"/>
  <!-- FontAwesome Styles-->
  <link href="/Public/assets/css/font-awesome.css" rel="stylesheet"/>
  <!-- Morris Chart Styles-->

  <!-- Custom Styles-->
  <link href="/Public/assets/css/custom-styles.css" rel="stylesheet"/>
  <!-- Google Fonts-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
  <!-- TABLE STYLES-->
  <link href="/Public/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet"/>
</head>
<!--  header  -->


<body>
<div id="wrapper">
  <nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><strong>Marvel</strong></a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
          <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-messages">
          <li>
            <a href="#">
              <div>
                <strong>John Doe</strong>
                <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
              </div>
              <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <strong>John Smith</strong>
                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
              </div>
              <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <strong>John Smith</strong>
                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
              </div>
              <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a class="text-center" href="#">
              <strong>Read All Messages</strong>
              <i class="fa fa-angle-right"></i>
            </a>
          </li>
        </ul>
        <!-- /.dropdown-messages -->
      </li>
      <!-- /.dropdown -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
          <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-tasks">
          <li>
            <a href="#">
              <div>
                <p>
                  <strong>Task 1</strong>
                  <span class="pull-right text-muted">60% Complete</span>
                </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                       aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (success)</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <p>
                  <strong>Task 2</strong>
                  <span class="pull-right text-muted">28% Complete</span>
                </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0"
                       aria-valuemax="100" style="width: 28%">
                    <span class="sr-only">28% Complete</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <p>
                  <strong>Task 3</strong>
                  <span class="pull-right text-muted">60% Complete</span>
                </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                       aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (warning)</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <p>
                  <strong>Task 4</strong>
                  <span class="pull-right text-muted">85% Complete</span>
                </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                       aria-valuemax="100" style="width: 85%">
                    <span class="sr-only">85% Complete (danger)</span>
                  </div>
                </div>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a class="text-center" href="#">
              <strong>See All Tasks</strong>
              <i class="fa fa-angle-right"></i>
            </a>
          </li>
        </ul>
        <!-- /.dropdown-tasks -->
      </li>
      <!-- /.dropdown -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
          <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
          <li>
            <a href="#">
              <div>
                <i class="fa fa-comment fa-fw"></i> New Comment
                <span class="pull-right text-muted small">4 min</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                <span class="pull-right text-muted small">12 min</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-envelope fa-fw"></i> Message Sent
                <span class="pull-right text-muted small">4 min</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-tasks fa-fw"></i> New Task
                <span class="pull-right text-muted small">4 min</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                <span class="pull-right text-muted small">4 min</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a class="text-center" href="#">
              <strong>See All Alerts</strong>
              <i class="fa fa-angle-right"></i>
            </a>
          </li>
        </ul>
        <!-- /.dropdown-alerts -->
      </li>
      <!-- /.dropdown -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
          <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
          </li>
          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
          </li>
          <li class="divider"></li>
          <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>
        </ul>
        <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
  </nav>
  <!--/. NAV TOP  -->
  <!--  nav -->
  <nav class="navbar-default navbar-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">

      <li>
        <a class="active-menu" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
      </li>


      <li>
        <a href="#"><i class="fa fa-sitemap"></i>订单管理<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="<?php echo U('/Admin/Index/order_list');?>">订单列表</a>
          </li>
          <li>
            <a href="<?php echo U('/Admin/Index/export_order');?>">导出订单列表</a>
          </li>
        </ul>
      </li>


      <li>
        <a href="chart.html"><i class="fa fa-bar-chart-o"></i> Charts</a>
      </li>
      <li>
        <a href="tab-panel.html"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
      </li>

      <li>
        <a href="table.html"><i class="fa fa-table"></i> Responsive Tables</a>
      </li>
      <li>
        <a href="form.html"><i class="fa fa-edit"></i> Forms </a>
      </li>


      <li>
        <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="#">Second Level Link</a>
          </li>
          <li>
            <a href="#">Second Level Link</a>
          </li>
          <li>
            <a href="#">Second Level Link<span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
              <li>
                <a href="#">Third Level Link</a>
              </li>
              <li>
                <a href="#">Third Level Link</a>
              </li>
              <li>
                <a href="#">Third Level Link</a>
              </li>

            </ul>

          </li>
        </ul>
      </li>
      <li>
        <a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
      </li>
    </ul>

  </div>

</nav>
  <!--  nav -->
  <!-- /. NAV SIDE  -->

  <div id="page-wrapper">
    <div class="header">
      <h1 class="page-header">
        Tables Page
        <small>Responsive tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data</li>
      </ol>

    </div>

    <div id="page-inner">

      <div class="row">
        <div class="col-md-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
            <div class="panel-heading">
              Advanced Tables
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                  <tr>
                    <th>订单号</th>
                    <th>下单时间</th>
                    <th>收货人</th>
                    <th>总金额</th>
                    <th>应付金额</th>
                    <th>订单状态</th>
                    <th>操作</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php if(is_array($order_data)): foreach($order_data as $key=>$vo): ?><tr class="odd gradeX">
                      <td><?php echo ($vo["order_no"]); ?></td>
                      <td><?php echo ($vo["order_place"]); ?></td>
                      <td><?php echo ($vo["consignee_name"]); ?></td>
                      <td class="center"><?php echo ($vo["total_amount"]); ?></td>
                      <td class="center"><?php echo ($vo["amount_payable"]); ?></td>
                      <td>
                        <?php if($vo["pay_stauts"] == 1): ?>已付款
                          <?php else: ?>
                          未付款<?php endif; ?>
                        &nbsp;&nbsp;&nbsp;
                        <?php if($vo["delivery_status"] == 1): ?>已发货
                          <?php else: ?>
                          未发货<?php endif; ?>
                        &nbsp;&nbsp;&nbsp;
                        <?php if($vo["confirm_status"] == 1): ?>已确认
                          <?php else: ?>
                          未确认<?php endif; ?>
                      </td>
                      <td>
                          <a href="<?php echo U('Admin/Index/order_detail/',array('id'=>$vo['id']));?>">
                          查看
                        </a>
                      </td>
                    </tr><?php endforeach; endif; ?>
                  </tbody>
                </table>
               <?php echo ($page); ?>
              </div>
            </div>
          </div>
          <!--End Advanced Tables -->
        </div>
      </div>

      <!-- /. ROW  -->
    </div>

  </div>
  <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="/Public/assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="/Public/assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="/Public/assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="/Public/assets/js/dataTables/jquery.dataTables.js"></script>
<script src="/Public/assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
  // $(document).ready(function(){
  //   $('#dataTables-example').dataTable();
  // });
</script>
<!-- Custom Js -->
<script src="/Public/assets/js/custom-scripts.js"></script>


</body>
</html>