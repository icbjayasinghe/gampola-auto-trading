<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 1/23/2018
 * Time: 9:28 AM
 */
?>
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('index.php/Home/admin');?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>GAT</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>G</b>ampola<b>A</b>uto<b>T</b>rading</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <?php if($this->session->userdata('$result4') > 0){ ?>
                        <span class="label label-warning"><?php echo $this->session->userdata('$result4') ?> </span>
                        <?php } ?>
<!--                        --><?php //base_url('index.php/Home/dashboard_header');?>
                    </a>
                    <?php if($this->session->userdata('$result4') > 0){ ?>
                    <ul class="dropdown-menu">
                        <li class="header">You have <?php echo $this->session->userdata('$result4') ?> notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="<?php echo base_url('index.php/Home/notified_buyer');?>">
                                        <i class="fa fa-users text-aqua"></i> <?php echo $this->session->userdata('$result4') ?> customers finance will be completed in this month
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                    <?php } ?>
                </li>


                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url("assets/dist/img/user2-160x160.jpg");?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"> <?php echo $this->session->userdata('$fname')." ".$this->session->userdata('$lname'); ?> </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                            <p>
                                <?php echo $this->session->userdata('$fname')." ".$this->session->userdata('$lname'); ?>  - Sales
                                <small>Member</small>
                                <input type="hidden" value=" <?php echo $this->session->userdata('$emp_id')?>" id="emp_id">
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a  class="btn btn-default btn-flat" onclick="change_btn(this)">Change Password</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url('index.php/Login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                            <div style="display: none" id="password_div">
                                <div class="col-md-12">
                                    New Password : <input type="password" id="password">
                                </div>
                                <div class="col-md-12">
                                    Confirm Password : <input type="password" id="cpassword" >
                                </div>

                                <div class="pull-right">
                                    <button id="save" class="btn btn-primary" onclick="save_btn(this)">Save</button>
                                </div>



                            </div>

                        </li>

                        <li>

                        </li>

                    </ul>
                </li>
<!--                <li><a href="--><?php //echo base_url('index.php/Upload');?><!--"><i class="fa  fa-picture-o"></i> Photo Uploads</a></li>-->
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a  data-toggle="control-sidebar"><i href="<?php echo base_url('index.php/Upload');?>" class="fa fa-picture-o"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    function change_btn(element) {
        $("div#password_div").css("display","block");

    }

</script>

<script>
    function save_btn(element) {
        var emp_id=document.getElementById('emp_id').value;
        var password=document.getElementById('password').value;
        var cpassword=document.getElementById('cpassword').value;
        //alert(password);
        if(password==cpassword && password!=false){
            $.ajax({
                type:"post",
                data:{emp_id:emp_id, password:password},
                url:'<?php echo site_url('Login/change_password'); ?>',
                cache: false,
                success:function (data) {
                    //alert(data);
                    document.getElementById('message1').innerHTML="Successfully Changed Your Password";
                    $('#modal-success').modal('show');



                }

            })

        }
        else {
            document.getElementById('message').innerHTML="Password and Confirm password are not matched or enter null password";
            $('#modal-missing').modal('show');

        }



    }
</script>

<div class="modal modal-success fade" id="modal-success">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="message1"></h4>
                <button type="button" class="btn btn-outline pull-right" data-dismiss="modal">OK</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal modal-danger fade" id="modal-missing">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="message"></h4>
                <button type="button" class="btn btn-outline pull-right" data-dismiss="modal">OK</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


