<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 2/3/2018
 * Time: 1:20 PM
 */
?>

<body id="contact">
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
                <li><a href="<?php echo base_url('index.php/Home');?>" id="homenav" >Home</a></li>
                <li><a href="<?php echo base_url('index.php/Home/site_availables');?>" id="blognav">Availables</a></li>
                <!--                <li><a href="fullwidth.html" id="fullwidthnav">Full width</a></li>-->
                <li><a href="<?php echo base_url('index.php/Home/contact');?>" id="contactnav">Contact</a></li>
                <li><a href="<?php echo base_url('index.php/Home/about');?>" id="aboutnav">About</a></li>
                <li><a href="<?php echo base_url('index.php/Home/login');?>" >Login</a></li>
            </ul>
        </nav>
    </header>

    <!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
    <section>
        <div id="contactpost">
            <h1>Contact Us</h1>
<!--            <p>You can contuct our partners for requesting, buying or selling vehicle:</p>-->
            <form method="post" action="#">
                <div id="contactform">
                    <br>
                    <div id="cat"><br><b>Ananda Weerasinghe</b><br>Sales Manager - Gampola Auto Trading<br>0773843822<br><br></div>
                    <div   id="archives">
                        <img src="<?php echo base_url('assets/dist/img/ananda.jpg');?>" class="img-circle" alt="User Image">
                    </div>
                    <br><br>
                    <hr style="margin-right: 20%">

                    <br>
                    <div id="cat"><br><br><b>Dileep Nawagaththegama</b><br>Sales Executive - Gampola Auto Trading<br>0777419469 <br><br></div>
                    <div id="archives">
                        <img src="<?php echo base_url('assets/dist/img/dilip.jpg');?>" class="img-circle" alt="User Image">
                    </div>
                    <br><br>
                    <hr style="margin-right: 20%">

                    <br>
                    <div id="cat"><br><br>Amil Jayasinghe<br><b>Sales Executive - Gampola Auto Trading</b><br>0777845030 <br><br></div>
                    <div id="archives">
                        <img src="<?php echo base_url('assets/dist/img/amil_jayasinghe1.jpg');?>" class="img-circle" alt="User Image">
                    </div>
                    <br><br>
                    <hr style="margin-right: 20%">

                    <br>
                    <div id="cat"><br><br>Chamara Lakmal<br><b>Executive (Marketing) - Gampola Auto Trading</b><br>0717139878 <br><br></div>
                    <div id="archives">
                        <img src="<?php echo base_url('assets/dist/img/chamara.jpg');?>" class="img-circle" alt="User Image">
                    </div>
                    <br><br>
                    <hr style="margin-right: 20%">

                    <br></div>
            </form>
            &nbsp;

        </div>

        <!--__--__--__--  S I D E B A R --__--__--__--__-->
        <div id="sidebar">
            <aside>
                <h1>Land Mark</h1>
                <div id="map" style="width:380px;height:300px;background:yellow"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d760.4388962199253!2d80.57284950730984!3d7.1639923894297075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMDknNTAuNCJOIDgwwrAzNCcyNC4zIkU!5e1!3m2!1sen!2slk!4v1517924081111" width="380" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>




            </aside>
            <aside>
                <h1>Address </h1><br>
                <p style="font-size: medium"><b>Gampola Auto Trading, <br>No : 12/A ,<br>Gangasiri Road, <br>Gampola, <br>Sri Lanka</b></p>


            </aside>
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

</html>





