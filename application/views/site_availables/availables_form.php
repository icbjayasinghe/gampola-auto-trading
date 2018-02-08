
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

    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css');?>">
    <![endif]-->
    <title>Gampola Auto Trading</title>
</head>
<body id="blog">
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


    <hr>

    <div class="row">

    <div class="box-header col-md-12">
        <h3 class="box-title ">Available Vehicles</h3>


    </div>
        <div class="box-tools  col-md-9">
            <div class="input-group input-group-sm col-md-9" style="width: 150px;">
                <input type="text" name="table_search" id='myInput' onkeyup='searchTable()' class="form-control " placeholder="Filter">


            </div>
        </div>


    <div class="form-horizontal col-md-12">


        <br>
        <div class="box-body table-responsive no-padding">

            <table class="table table-hover" id="myTable">
                <thead>
                <tr>
                    <th>Type</th>
                    <th>Brand</th>
                    <th>Model</th>
<!--                    <th>Number</th>-->
<!--                    <th>Ch. Number</th>-->
                    <th>Price</th>
<!--                    <th>Description</th>-->
<!--                    <th>Supplier Details</th>-->
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
<!--                            <td>--><?php //echo $row->number; ?><!--</td>-->
<!--                            <td>--><?php //echo $row->ch_number; ?><!--</td>-->
                            <td><?php echo $row->price;  ?></td>
<!--                            <td>--><?php //echo $row->description;  ?><!--</td>-->

<!--                            <td><button class="btn btn-info btn-sm" onclick="viewbtn(this)" data-toggle="modal" data-target="#mymodal"><span class="glyphicon glyphicon-eye-open"></span> View</button></td>-->
<!--                            <td><button class="btn btn-danger btn-sm delete" onclick="deletebtn(this)"><span class="glyphicon glyphicon-remove"></span> Delete</button></td>-->



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
    </div>
    </div>

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
<script src="../../js/bootstrap.min.js"></script>

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


    </html>




