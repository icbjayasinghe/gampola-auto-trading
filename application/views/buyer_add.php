<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/26/2018
 * Time: 1:36 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/23/2018
 * Time: 6:08 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gampola Auto Trading | Add buyer</title>
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

<!--    <link rel="stylesheet" href="--><?php //echo base_url('assets\bower_components\jquery-ui\themes\base\sortable.css');?><!--">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <?php include 'dashboard_header.php'; ?>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
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
                <li class="treeview">
                    <a href="<?php echo base_url('index.php/Home/admin');?>">
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
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-upload"></i>
                        <span>Vehicle Buyers</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="<?php echo base_url('index.php/Home/buyer_add');?>"><i class="fa fa-user-plus"></i> Add Buyer</a></li>
                        <li><a href="<?php echo base_url('index.php/Home/view_buyer');?>"><i class="fa fa-users"></i> View Buyers</a></li>
                        <li><a href="<?php echo base_url('index.php/Home/notified_buyer');?>"><i class="fa fa-circle-o"></i> Notified Buyers </a></li>
                    </ul>
                </li>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">


            <h1>
                Add Buyer
                <!--                <small>Blank example to the fixed layout</small>-->
            </h1>

            <?php
            $this->load->helper('form');
            $success = $this->session->flashdata('successmsg');
            $err = $this->session->flashdata('errmsg');

            if ($success) {
                ?>
                <div class="alert alert-success alert-circled">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $success; ?>
                </div>
            <?php }
            elseif ($err){
                ?>

                <div class="alert alert-danger alert-circled">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $err; ?>
                </div>
            <?php
            }
            ?>

            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/Home/admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Vehicle Buyers</a></li>
                <li class="active">Add Buyer</li>
            </ol>
        </section>

        <!-- Main content -->

        <?php echo validation_errors(); ?>
        <?php echo form_open('Buyer/add');?>
        <section class="content">
            <div class="callout">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Vehicle Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <div class="radio">
                                &nbsp &nbsp<label>
                                    <input type="radio" name="cond" id="optionsRadios1" value="Registered" onclick="registered()" checked>
                                    Registered &nbsp &nbsp &nbsp
                                </label>

                                <label>
                                    <input type="radio" name="cond" id="optionsRadios2" value="Unregistered" onclick="unregistered()">
                                    Unregistered
                                </label>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Vehicle Number:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-automobile"></i>
                                </div>
                                <input type="text" class="form-control"  placeholder="ex: CPCAM1111" name="number" id="number">
                                <div class="input-group-addon">
                                    <button type="button" class="glyphicon glyphicon-search btn-success" onclick="number_search(this)"></button>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group col-md-8">
                            <label>Ch. Number:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-automobile"></i>
                                </div>
                                <input type="text" class="form-control"  placeholder="ex:" name="ch_number" id="ch_number" disabled>
                                <div class="input-group-addon">
                                    <button type="button" class="glyphicon glyphicon-search btn-success" onclick="ch_number_search(this)"></button>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>


                        <div class="form-group col-md-6">
                            <label>Suggested Price: </label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-money"></i>
                                </div>
                                <input type="number" class="form-control"  placeholder="Rs." name="price" id="price" readonly="readonly">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="form-group col-md-6">
                            <label>Selling Price: </label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-money"></i>
                                </div>
                                <input type="number" style="border: 2px solid red;border-radius: 4px" class="form-control"  placeholder="Rs." name="selling_price" id="selling_price">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Vehicle Type</label>
                                <input type="name" class="form-control" placeholder="Vehicle Type" name="type" id="type" readonly="readonly">

                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Brand</label>
                                <input type="name" class="form-control" placeholder="Brand" name="brand" id="brand" readonly="readonly">
                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Model</label>
                                <input type="text" class="form-control" placeholder="Model" name="model" id="model" readonly="readonly">
                            </div>

                        </div>

                    </div>
                    <div class="box-body">
                        <!--                        <form role="form">-->
                        <!-- text input -->


                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Supplier Details</h3>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Supplier Name:</label>
                            <input type="name" class="form-control" placeholder="Name" name="sup_name" id="name" readonly="readonly">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Supplier NIC:</label>
                            <input type="text" class="form-control" placeholder="National Identity Card Number" maxlength="12" name="nic" id="nic" readonly="readonly">
                        </div>

                        <!-- phone mask -->
                        <div class="form-group">
                            <label>Supplier Phone Number:</label>

                            <div class="input-group col-md-6">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="number" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(000) 000-0000" name="tel" id="tel" readonly="readonly">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->

                        <div class="box box-warning">
                            <div class="box-header with-border">
                                <h3 class="box-title">Buyer Details</h3>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Buyer Name:</label>
                            <input type="name" class="form-control" placeholder="Name" name="buy_name">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Buyer NIC:</label>
                            <input type="text" class="form-control" placeholder="National Identity Card Number" maxlength="12" name="buy_nic">
                        </div>

                        <!-- phone mask -->
                        <div class="form-group col-md-6">
                            <label>Buyer Phone Number:</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="number" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(000) 000-0000" name="buy_tel">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <!-- textarea -->
                        <div class="form-group col-md-12">
                            <label>Address:</label>
                            <textarea class="form-control" rows="3" placeholder="Address" name="buy_address"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Leasing Company:</label>
                            <input type="name" class="form-control" placeholder="Leasing Company Name" name="leasing_name">
                        </div>

                        <div class="form-group col-md-3">
                            <label>No.of Installments:</label>
                            <input type="number" class="form-control" placeholder="Number of installments" name="no_of_installments">
                        </div>

                        <div class="form-group col-md-3">
                            <label>Installment amount:</label>
                            <input type="number" class="form-control" placeholder="Installment amount" name="installment_amount">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Insurance Company:</label>
                            <input type="name" class="form-control" placeholder="Insurance Company Name" name="insurance_name">
                        </div>

                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="buy_description"></textarea>
                        </div>


                        <!-- /.form group -->


                        <div style="align-content: right" class="col-md-12">
                            <button type="submit" class="btn btn-success ">Submit</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <!-- /.box-body -->
                </div>



            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">

        <strong>Developed by <a href="#">Isuru Jayasinghe</a> &copy2018. All rights reserved.</strong>
    </footer>
    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="--><?php //echo base_url('assets/dist/js/pages/dashboard.js');?><!--"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js');?>"></script>

<!--<script src="--><?php //echo base_url('assets\bower_components\jquery-ui\ui\sortable.js');?><!--"></script>-->




<script>
    function unregistered() {
        document.getElementById('number').disabled=true;
        document.getElementById('ch_number').disabled=false;
    }
    function registered() {
        document.getElementById('number').disabled=false;
        document.getElementById('ch_number').disabled=true;
    }

</script>

<script>
    function number_search(element) {
        var number=document.getElementById('number').value;
        $.ajax({
            type:"POST",
            data:{number:number},
            url:'<?php echo site_url('Buyer/searchNumber'); ?>',
            dataType: "json",
            cache: false,


            success: function (data) {
                //alert(data.nic);
                $('#ch_number').val(data.ch_number);
                $('#price').val(data.price);
                $('#type').val(data.type);
                $('#brand').val(data.brand);
                $('#model').val(data.model);
                $('#name').val(data.sup_name);
                $('#nic').val(data.nic);
                $('#tel').val(data.tel)
            }
        });
    }
</script>

<script>
    function ch_number_search(element) {
        var ch_number=document.getElementById('ch_number').value;
        $.ajax({
            type:"POST",
            data:{ch_number:ch_number},
            url:'<?php echo site_url('Buyer/searchChNumber'); ?>',
            dataType: "json",
            cache: false,


            success: function (data) {
                //alert(data.nic);
                $('#number').val(data.number);
                $('#price').val(data.price);
                $('#type').val(data.type);
                $('#brand').val(data.brand);
                $('#model').val(data.model);
                $('#name').val(data.sup_name);
                $('#nic').val(data.nic);
                $('#tel').val(data.tel)
            }
        });
    }
</script>


</body>
</html>

