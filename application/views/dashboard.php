<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/22/2018
 * Time: 7:50 PM
 */

if(!($this->session->userdata('logedin'))){
    redirect('Home/login');

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gampola Auto Trading | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css');?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css');?>">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/morris.js/morris.css');?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/jvectormap/jquery-jvectormap.css');?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css');?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        body{
            padding: 0;
            margin: 0;
        }
        #canvas-holder{
            width:90%;
        }
    </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include 'dashboard_header.php'; ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $this->session->userdata('$fname')." ".$this->session->userdata('$lname'); ?> </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">
                    <a href="<?php echo base_url('index.php/Home');?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-car"></i>
                        <span>Vehicles</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url('index.php/Home/available');?>"><i class="fa fa-circle-o"></i> Available </a></li>
                        <li><a href="<?php echo base_url('index.php/Home/sold');?>"><i class="fa fa-circle-o"></i> Sold</a></li>
                        <li><a href="<?php echo base_url('index.php/Upload');?>"><i class="fa  fa-picture-o"></i> Photo Uploads</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-download"></i>
                        <span>Vehicle Suppliers</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>

                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url('index.php/Home/supplier_add');?>"><i class="fa fa-user-plus"></i> Add Supplier</a></li>
                        <li><a href="<?php echo base_url('index.php/Home/view_supplier');?>"><i class="fa fa-users"></i> View Suppliers</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-upload"></i>
                        <span>Vehicle Buyers</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url('index.php/Home/buyer_add');?>"><i class="fa fa-user-plus"></i> Add buyer</a></li>
                        <li><a href="<?php echo base_url('index.php/Home/view_buyer');?>"><i class="fa fa-users"></i> View Buyers</a></li>
                        <li><a href="<?php echo base_url('index.php/Home/notified_buyer');?>"><i class="fa fa-circle-o"></i> Notified Buyers </a></li>
                    </ul>
                </li>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo($result1) ?></h3>

                            <p>Available Vehicles</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-model-s"></i>
                        </div>
                        <a href="<?php echo base_url('index.php/Home/available');?>" class="small-box-footer">Click here <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo($result2) ?></h3>

                            <p>Add Supplier</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?php echo base_url('index.php/Home/supplier_add');?>" class="small-box-footer">Click here <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?php echo($result3) ?></h3>

                            <p>Add Buyer</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?php echo base_url('index.php/Home/buyer_add');?>" class="small-box-footer">Click here <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3><?php echo($result4) ?></h3>

                            <p>Notified Customers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="<?php echo base_url('index.php/Home/notified_buyer');?>" class="small-box-footer">Click here <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="nav-tabs-custom" hidden>
                        <!-- Tabs within a box -->
                        <ul class="nav nav-tabs pull-right">
                            <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                            <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                            <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
                        </ul>
                        <div class="tab-content no-padding">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                        </div>
                    </div>
                    <!-- /.nav-tabs-custom -->

                    <!-- BAR CHART -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Available Vehicle Chart</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body chart-responsive">


                            <div id="canvas-holder" >
                                <canvas id="chart-area" style="height: 300px;"/>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>



                    <!-- quick email widget -->


                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">


                    <!-- /.box -->

                    <!-- solid sales graph -->
                    <span hidden><div class="box box-solid bg-teal-gradient">

                        <div class="box-body border-radius-none">
                            <div class="chart" id="line-chart" style="height: 250px;"></div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer no-border">

                        </div>
                        <!-- /.box-footer -->
                    </div></span>
                    <!-- /.box -->

                    <!-- Calendar -->
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header">
                            <i class="fa fa-calendar"></i>

                            <h3 class="box-title">Calendar</h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <!-- button with a dropdown -->
                                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%"></div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-black">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Progress bars -->
                                    <div class="clearfix">
<!--                                        <span class="pull-left">Task #1</span>-->
<!--                                        <small class="pull-right">100%</small>-->
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 100%;"></div>
                                    </div>


                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.box -->

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->

        </section>

        <section class="content">

            <div class="row">
<!--               -->
                <!-- /.col (LEFT) -->
                <div class="col-md-6">



                </div>
                <!-- /.col (RIGHT) -->
            </div>
            <!-- /.row -->

        </section>
        <title>Doughnut Chart</title>
<!--        <script src="../Chart.js"></script>-->


        <div id="canvas-holder">
            <canvas id="chart-area" width="500" height="500"/>
        </div>


        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">

        <strong>Developed by <a href="#">Isuru Jayasinghe</a> &copy2018. All rights reserved.</strong>
    </footer>

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<!--    <div class="control-sidebar-bg"></div>-->
</div>
<!-- ./wrapper -->
<script src="<?php echo base_url('assets/bower_components\chart.js\Chart.js');?>"></script>


<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/bower_components/jquery-ui/jquery-ui.min.js');?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/bower_components/raphael/raphael.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/morris.js/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/bower_components/jquery-knob/js/jquery.knob.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/dist/js/pages/dashboard.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js');?>"></script>


<script>

    var doughnutData = [
        {
            value: <?php echo($moto)  ?>,
            color:"#3c8dbc",
            highlight: "#8080f5",
            label: "Motor Cycles"
        },
        {
            value: <?php echo($three)  ?>,
            color: "#f56954",
            highlight: "#ffb3b3",
            label: "Three Wheelers"
        },
        {
            value: <?php echo($car)  ?>,
            color: "#00a65a",
            highlight: "#80ff80",
            label: "Cars"
        },
        {
            value: <?php echo($van)  ?>,
            color: "#7a7a52",
            highlight: "#c2c2a3",
            label: "Vans"
        },
        {
            value: <?php echo($lorry)  ?>,
            color: "#734d26",
            highlight: "#d9b38c",
            label: "Lorry"
        },
        {
            value: <?php echo($other)  ?>,
            color: "#ffbf00",
            highlight: "#ffdf80",
            label: "Other"
        }

    ];

    window.onload = function(){
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
    };



</script>



</body>
</html>

