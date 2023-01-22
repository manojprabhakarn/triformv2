<?php
include 'libs/load.php';

?>


<!doctype html>
<html lang="en">
<!-- header -->
<? load_template('header'); ?>

<!-- Navbar -->
<? load_template('nav'); ?>

<body class="bg-black text-white">
    <div class="container text-center">
        <h1 class="p-4 fw-1" style="font-size: 3rem ;">Meet The Team
            <br> Our Professionals
        </h1>
    </div>

    <!-- Team Details-->

    <div class="container  sec-bg" style="text-align: center;" width=200>
        <div class="row  justify-content-md-center">
            <div class="p-4 col-4">
                <div class="p-3">
                    <img  src="/htdocs/assets/people/AR.AATHAVANTT.jpg" class="rounded-circle img-w" alt="Avatar" />
                </div>
                <h3>AR.AATHAVAN TT</h3>
                <h6>Chief Architect <span class="badge bg-primary">Founder</span></h6>
                <p>(Madurai Branch)</p>
            </div>
            <div class="p-4 col-4">
                <div class="p-3">
                    <img src="/htdocs/assets/people/AR.PRAKASHS.jpg" class="rounded-circle img-w" alt="Avatar" />
                </div>
                <h3>Ar.PRAKASH S</h3>
                <h6>Chief Architect <span class="badge bg-primary">CEO</span></h6>
                <p>(Salem Branch)</p>
            </div>
            
            <hr>
            <div class="p-4 col-4">
                <div class="p-3">
                    <img src="/htdocs/assets/people/AR.VENKATESHV.jpg" class="rounded-circle img-w" alt="Avatar" />
                </div>
                <h3>Ar.VENKATESH V</h3>

                <h6>Junior Architect</h6>
                <p>(Madurai Branch)</p>

            </div>
            <div class="p-4 col-4">
                <div class="p-3">
                    <img src="/htdocs/assets/people/AR.RAVEENARAMASAMY.jpg" class="rounded-circle img-w" alt="Avatar" />
                </div>
                <h3>Ar.RAVEENA</h3>
                <h6>Junior Architect</h6>
                <p>(Madurai Branch)</p>

            </div>


        </div>

    </div>
    <br>
    <br>
</body>

<!-- footer -->
<? load_template('footer'); ?>

</html>