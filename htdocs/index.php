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

            <div class="text-black">

                <img class="mb-5" src="/htdocs/assets/brand/logoblack.png" style="max-width:20%;" alt="...">
                <h1 class="mb-3">Triform<span> Architects</span></h1>
                <p>Design the space not by the look
                    Design how it works </p>
            </div>
        </div>

    </div>
    <!-- Background image -->




</body>



<!-- footer -->
<? load_template('footer'); ?>


</html>