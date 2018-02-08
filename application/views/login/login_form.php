
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="../../css/default/default.css" type="text/css" media="screen" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="../../js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Gampola Auto Trading</title>
</head>
<body id="login">
<div id="wrapper">

    <!--__--__--__--__--__--  L O G O  &   N A V    B A R --__--___--__--__--__-->
    <header>
        <div id="logo">
            <h1>Gampola Auto Trading<span id="iisrt"><span id="ii">II</span>  <span id="srt">WSA</span></span></h1>
            <div id="tagline">
                <h2>Vehicle buy & selling service !</h2>
            </div>
        </div>
        <nav>

            <ul>
                <li><a href="<?php echo base_url('index.php/Home');?>" id="homenav">Home</a></li>
                <li><a href="<?php echo base_url('index.php/Home/site_availables');?>" id="blognav">Availables</a></li>
                <!--                <li><a href="fullwidth.html" id="fullwidthnav">Full width</a></li>-->
                <li><a href="<?php echo base_url('index.php/Home/contact');?>">Contact</a></li>
                <li><a href="<?php echo base_url('index.php/Home/about');?>" id="aboutnav">About</a></li>
                <li><a href="<?php echo base_url('index.php/Home/login');?>" id="loginnav">Login</a></li>
<!--                                <li><button class="btn">Login</button></li>-->
            </ul>
        </nav>
    </header>

    <?php
    $this->load->helper('form');
    $error = $this->session->flashdata('errmsg');

    if ($error) {
        ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $error; ?>
        </div>
    <?php }  ?>


<!--    --><?php //if($this->session->flashdata('errmsg')){
//        echo "<h3>".$this->session->falshdata('errmsg')."</h3>";
//    }
//    ?>
    <hr>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Login/LoginUser') ?>
    <div class="form-horizontal">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
            </div>
        </div>
    </div>
    <?php echo form_close();?>
    <hr>

    <footer>


        <p>Developed by <a href="#">Isuru Jayasinghe</a> &copy2018. All rights reserved.</p>
    </footer>


</div>


</body>
<!--<script src="../../js/bootstrap.min.js"></script>-->
<script
        src="https://code.jquery.com/jquery-3.3.0.min.js"
        integrity="sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4="
        crossorigin="anonymous"></script>
<script src="../../js/bootstrap.min.js">
</html>




