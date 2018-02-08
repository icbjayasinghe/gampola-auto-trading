<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <link rel="stylesheet" href="../../css/bootstrap.css">-->
<!--	<meta charset="utf-8">-->
<!--	<title>Welcome to CodeIgniter</title>-->
<!---->
<!---->
<!--</head>-->
<!--<body>-->
<!---->
<!--<div id="container">-->
<!--	<h1>Gampola Enterprises</h1>-->
<!---->
<!--</div>-->
<!---->
<!--hello-->
<!---->
<!--</body>-->
<!--<script src="../../js/bootstrap.min.js"></script>-->
<!--</html>-->

<body id="home">
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
                <li><a href="<?php echo base_url('index.php/Home/login');?>">Login</a></li>
<!--                <li><button class="btn">Login</button></li>-->
            </ul>
        </nav>
    </header>

    <!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <img src="<?php echo base_url('images/slide1.jpg');?>" alt="" title="Welcome to Gampola Auto Trading" />
            <img src="<?php echo base_url('images/slide2.jpg');?>" alt="" title="Buy new and old vehicles in great condition" />
            <img src="<?php echo base_url('images/slide3.jpg');?>" alt="" title="Sell vehicles for the best prices" />
            <img src="<?php echo base_url('images/slide4.jpg');?>" alt="" title="Gampola Auto Trading the best place for vehicle trade in" />
        </div>
    </div>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({pauseTime: 6000,});
        });
    </script>

    <!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
    <section>
        <div id="line">
            <div class="dline"></div>
            <h1>Services</h1>
            <div class="dline"></div>
        </div>
        <div id="ourserv">
            <article>
                <h1>Buy Vehicle</h1>
                <img src="<?php echo base_url('images/buying.jpg');?>" alt="" />
                <p>Buy the vehicle of your dreams with easy access to finance and insurance under the same roof.</p>
                <a href="<?php echo base_url('index.php/Home/contact');?>" class="rm">Get More</a>
            </article>
            <article>
                <h1>Sell Vehicle</h1>
                <img src="<?php echo base_url('images/sale.jpg');?>" alt="" />
                <p>Sell your current vehicle directly to us for the best prices at the time or contact a new buyer to sell your vehicle to the price you wish.</p>
                <a href="<?php echo base_url('index.php/Home/contact');?>" class="rm">Get More</a>
            </article>
            <article class="lastarticle">
                <h1>Trade In Vehicle</h1>
                <img src="<?php echo base_url('images/upgrade.jpg');?>" alt="" />
                <p>Trade in your old vehicle and purchase new vehicles at Gampola Auto Trading. Upgrade your vehicle experience with best trading facilities here with us.</p>
                <a href="<?php echo base_url('index.php/Home/contact');?>" class="rm">Get More</a>
            </article>
        </div>
        <div id="sline">
            <div class="sdline"></div>
            <h1>Latest Updates</h1>
            <div class="sdline"></div>
        </div>
        <div id="latestp">
            <article>
                <h1><?php echo $request->result()[0]->brand ?></h1>
                <img src="<?php echo base_url('uploads/1.jpg');?>" alt="" />
                <p>Price : <?php echo $request->result()[0]->price ?> <br><?php echo $request->result()[0]->description ?></p>
                <a href="<?php echo base_url('index.php/Home/contact');?>" class="rm">Contact</a>
            </article>
            <article>
                <h1><?php echo $request->result()[1]->brand ?></h1>
                <img src="<?php echo base_url('uploads/2.jpg');?>" alt="" />
                <p>Price : <?php echo $request->result()[1]->price ?> <br><?php echo $request->result()[1]->description ?></p>
                <a href="<?php echo base_url('index.php/Home/contact');?>" class="rm">Contact</a>
            </article>
            <article>
                <h1><?php echo $request->result()[2]->brand ?></h1>
                <img src="<?php echo base_url('uploads/3.jpg');?>" alt="" />
                <p>Price : <?php echo $request->result()[2]->price ?> <br><?php echo $request->result()[2]->description ?></p>
                <a href="<?php echo base_url('index.php/Home/contact');?>" class="rm">Contact</a>
            </article>
            <article class="lastarticle">
                <h1><?php echo $request->result()[3]->brand ?></h1>
                <img src="<?php echo base_url('uploads/4.jpg');?>" alt="" />
                <p>Price : <?php echo $request->result()[3]->price ?> <br><?php echo $request->result()[3]->description ?></p>
                <a href="<?php echo base_url('index.php/Home/contact');?>" class="rm">Contact</a>
            </article>
        </div>
    </section>


    <!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
    <footer>
        <hr>
        <br>

        <p>Developed by <a href="#">Isuru Jayasinghe</a> &copy2018. All rights reserved.</p>
    </footer>
</div>
</body>
<!--<script src="../../js/bootstrap.min.js"></script>-->
</html>




