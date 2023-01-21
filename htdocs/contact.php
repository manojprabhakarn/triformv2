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
  <div class="container" style="background:#1c1c1c">
    <h1 class="text-center" style="color:white">Contact Address</h1>
    <hr style="border: 0.5px #818181 solid">
    <div class="row">
      <div class="col-sm-6">
        <iframe src="//maps.google.com/maps?output=embed&amp;q=9.9343611,78.0971944&amp;z=10&amp;t=m" data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMm1hZHVyYWklMjIlMkMlMjJ6b29tJTIyJTNBMTAlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQSUyMiUyMiU3RA==" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-sm-6" id="contact2">
        <h3 style="color:white">Triform Architectss</h3>
        <p style="color:white">No 256/1, 2nd floor, dhanaraj complex, bye pass road, near babushankar kaylana mahal, madurai - 625016</p>
        <h4 class="pt-2" style="color:white">Contact</h4>
        <i class="fas fa-phone" style="color:white"></i> <a href="tel:+"> +91 97871 17767</a><br>
        <h4 class="pt-2" style="color:white">Email</h4>
        <i class="fa fa-envelope" style="color:white"></i> <a href="">ar3architects@gmail.com</a><br>
        <br>
        <form id="fs-frm" name="simple-contact-form" onsubmit="alert('Thank you for submitting \n Our team will contact you :)')" accept-charset="utf-8" action="https://formspree.io/f/mvolqwjl" method="post">
          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="form4Example1" class="form-control form-control-sm bg-dark" placeholder="Name" style="color:white" />
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" style="color:white" class="form-control form-control-sm bg-dark" placeholder="Phone number" />
          </div>

          <!-- Message input -->
          <div class="form-outline mb-4">
            <textarea class="form-control form-control-sm bg-dark" id="form4Example3" rows="4" placeholder="Message" style="color:white"></textarea>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
        </form>

      </div>


    </div>
  </div>
</body>
<!-- footer -->
<? load_template('footer'); ?>

</html>