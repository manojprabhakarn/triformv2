<?php
include 'libs/load.php';

?>


<!doctype html>
<html lang="en">
<!-- header -->
<? load_template('header'); ?>


<!-- Navbar -->
<? load_template('nav'); ?>

<body style="background: #1c1c1c">
  <html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <body>
    <div class=container-fluid>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3">
          <div class="cominof text-center">
            <p class="font-color" style="font-size:2rem"><b>Triform</b> Architects</p>
          </div>
          <div class="ml-2">
            <div class="d-flex font-color "><i class="fa-solid fa-location-dot sizeicon"></i>
              <p class="space-m">No 256/1 , 2nd floor , dhanaraj complex , bye pass road , near babushankar kaylana mahal,
                madurai - 625 016</p>
            </div>
            <div class="d-flex font-color "><i class="fa fa-phone sizeicon" aria-hidden="true"></i>
              <p class="space-m">+91 97871 17767</p>
            </div>
            <div class="d-flex font-color"><i class="fa-solid fa-envelope sizeicon"></i>
              <p class="space-m">ar3architects@gmail.com</p>
            </div>
          </div>
          <br>
          <form id="fs-frm" name="simple-contact-form" onsubmit="alert('Thank you for submitting \n Our team will contact you :)')" accept-charset="utf-8" action="https://formspree.io/f/mvolqwjl" method="post">
            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" class="input-style" placeholder="Name" style="color:white" required />
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" style="color:white" class="input-style" placeholder="Phone number" required />
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
              <textarea class="input-style" id="form4Example3" rows="3" placeholder="Message" style="color:white"></textarea>
            </div>

            <!-- Submit button -->
            <button type="submit" class="button-style">Send</button>
          </form>
          <br>
        </div>
        <div class="col-lg-4">
          <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=9.9343611,78.0971944&amp;z=10&amp;t=m" data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMm1hZHVyYWklMjIlMkMlMjJ6b29tJTIyJTNBMTAlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQSUyMiUyMiU3RA==" width=100% height=500></iframe>
        </div>
      </div>
    </div>
  </body>

  </html>
</body>


</html>