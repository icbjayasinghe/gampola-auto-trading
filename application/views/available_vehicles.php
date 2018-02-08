<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/30/2018
 * Time: 11:52 PM
 */
?>
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
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-car"></i>
                        <span>Vehicles</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="<?php echo base_url('index.php/Home/available');?>"><i class="fa fa-circle-o"></i> Available</a></li>
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
                        <li><a href="<?php echo base_url('index.php/Home/buyer_add');?>"><i class="fa fa-user-plus"></i> Add Buyer</a></li>
                        <li><a href="<?php echo base_url('index.php/Home/view_buyer');?>"><i class="fa fa-users"></i> View Buyers</a></li>
                        <li><a href="<?php echo base_url('index.php/Home/notified_buyer');?>"><i class="fa fa-circle-o"></i> Notified Buyers</a></li>
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
                Available Vehicles
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
                <li><a href="#">Vehicle</a></li>
                <li class="active">Available</li>
            </ol>
        </section>

        <!-- Main content -->



        <section class="content">
            <div class="callout">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Available Vehicle</h3>

                                <div class="box-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" id='myInput' onkeyup='searchTable()' class="form-control pull-right" placeholder="Search">

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover" id="myTable">
                                    <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Brand</th>
                                        <th>Model</th>
                                        <th>Number</th>
                                        <th>Ch. Number</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Supplier Details</th>
                                    </tr>

                                    </thead>

                                    <tbody id="tbody">
                                    <?php
                                    if($request->num_rows()>0){
                                        foreach ($request->result() as $row){
                                            ?>
                                            <tr>
                                                <td><?php echo $row->type;  ?></td>
                                                <td><?php echo $row->brand;  ?></td>
                                                <td><?php echo $row->model;  ?></td>
                                                <td><?php echo $row->number; ?></td>
                                                <td><?php echo $row->ch_number; ?></td>
                                                <td><?php echo $row->price;  ?></td>
                                                <td><?php echo $row->description;  ?></td>

                                                <td><button class="btn btn-info btn-sm" onclick="viewbtn(this)" data-toggle="modal" data-target="#mymodal"><span class="glyphicon glyphicon-eye-open"></span> View</button></td>
                                                <td><button class="btn btn-danger btn-sm delete" onclick="deletebtn(this)"><span class="glyphicon glyphicon-remove"></span> Delete</button></td>



                                            </tr>


                                            <?php
                                        }

                                    }
                                    else{

                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
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



<script>
    function viewbtn(element) {
        $.ajax({
            type:"POST",
            data:{ch_number:element.parentElement.parentElement.getElementsByTagName('td')[4].innerHTML},
            url:'<?php echo site_url('Home/ava_details'); ?>',
            dataType: "json",
            cache: false,
            success:function (data) {
                $('#name_modal').val(data.sup_name);
                $('#nic_modal').val(data.nic);
                $('#phone').val(data.tel);
                $('#address').val(data.address);



            }
        })

    }

    function deletebtn(element) {
        //alert("asda");
        $.ajax({
            type:"post",
            data:{ch_number:element.parentElement.parentElement.getElementsByTagName('td')[4].innerHTML},
            url:'<?php echo site_url('Home/delete_vehicle'); ?>',
            cache: false,
            success:function (data) {
                element.parentElement.parentElement.remove();


            }

        })

    }


</script>







</body>
</html>

<!-- model change -->
<div id="mymodal" class="modal fade text-center">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #3c8dbc">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <h3 class="modal-title">Supplier Details</h3>
            </div>

            <div class="modal-body">
                <form method="post" id="insert_form">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-4 col-form-label clearfix">Name</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="name_modal" id="name_modal" disabled="disabled" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-4 col-form-label clearfix">NIC</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="nic_modal" id="nic_modal" disabled="disabled" maxlength="50" required="">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-4 col-form-label clearfix">Contact Number</label>
                        <div class="col-md-8">
                            <input class="form-control" type="number" name="phone" id="phone" maxlength="50" disabled="disabled" required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-md-4 col-form-label">Address</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text"  id="address" name="address" disabled="disabled" maxlength="50" required="">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-4 col-form-label clearfix"></label>
                        <div class="col-md-8">
                            <p id="message" style="padding-top:5px;margin-bottom: 0px; font-weight: bold; font-size: 110%"></p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function searchTable() {
        var input, filter, found, table, tr, td, i, j;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    found = true;
                }
            }
            if (found) {
                tr[i].style.display = "";
                found = false;
            } else {
                tr[i].style.display = "none";
            }
        }
    }
</script>
