<?php
include 'libs/load.php';

?>


<!doctype html>
<html lang="en">
<!-- header -->
<? load_template('header'); ?>


<!-- Navbar -->
<? load_template('nav'); ?>

<body>
    <!-- hero page
    <div class="jumbotron text-center" style="margin-top: -100px;">

    </div> -->


    <!-- Background image -->
    <div class="jumbotron text-center bg-image" style="
      background-image: url('/htdocs/assets/images/heroimage.jpeg');
      height: 400px;
      margin-top: -100px;
    ">
        <div class="d-flex justify-content-center align-items-center h-100">

            <div class="text-black" style="margin-top: -170px;">

                <img class="mb-5" src="/htdocs/assets/brand/logoblack.png" style="max-width:25%;" alt="...">
                <h2 class="mb-3 fw-bold" style="font-size:4rem" >Triform<span style="font-weight: 300; color: #db545a !important;"> Architects</span></h2>
                <p>Design the space not by the look<br>
                    Design how it works </p>
            </div>
        </div>

    </div>
    <!-- Background image -->




</body>



<!-- footer -->
<? load_template('footer'); ?>


</html>