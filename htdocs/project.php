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

    <!-- Project Category -->
    <div class="block block--dark category" style="margin-top: -20px;">
        <header class="block__header">
            <h2 class="block__heading">Projects</h2>
        </header>
        <div class="container grid grid--1x3">
            <div class="card category">
                <div class="container">
                    <div class="card__photo">
                        <a href="#">
                            <img src="images/projectCard_img_plans.jpg" alt="" />
                        </a>
                    </div>
                    <br>
                    <div class="card__body">
                        <h3 class="heading">Architecture</h3>
                        
                        <a href="#" class="btn btn--dark">Projects</a>
                    </div>
                </div>
            </div>
            <div class="card category">
                <div class="container">
                    <div class="card__photo">
                        <a href="#">
                            <img src="images/projectCard_img_plans.jpg" alt="" />
                        </a>
                    </div>
                    <br>
                    <div class="card__body">
                        <h3 class="heading">Interior</h3>
                        
                        <a href="#" class="btn btn--dark">Projects</a>
                    </div>
                </div>
            </div>
            <div class="card category">
                <div class="container">
                    <div class="card__photo">
                        <a href="#">
                            <img src="images/projectCard_img_plans.jpg" alt="" />
                        </a>
                    </div>
                    <br>
                    <div class="card__body">
                        <h3 class="heading">Renovation</h3>
                        <a href="#" class="btn btn--dark">Projects</a>
                    </div>
                </div>
            </div>
            <div class="card category">
                <div class="container">
                    <div class="card__photo">
                        <a href="#">
                            <img src="images/projectCard_img_plans.jpg" alt="" />
                        </a>
                    </div>
                    <br>
                    <div class="card__body">
                        <h3 class="heading">Techniques and Competitions</h3>
                        <a href="#" class="btn btn--dark">Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="block project">
        <header class="block__header image">
            <h2 class="block__heading">Projects</h2>
        </header>
        <div class="container grid grid--1x2">
            <div class="card project">
                <div class="card__photo">
                    <a href="#">
                        <img src="images/1AA.jpg" alt="" />
                    </a>
                </div>
                <br>
                <div class="card__body">
                    <h3 class="heading">Project Title</h3>
                    <address>Cuddalore, Tamil Nadu</address>
                    <p class="description">
                        3000 Sq.ft | 3BHK RESIDENTIAL BUILDING | CONTEMPORARY STYLE
                    </p>
                    <a href="#" class="btn btn--light">Project Detail</a>
                </div>
            </div>
            <div class="card project">
                <div class="card__photo">
                    <a href="#">
                        <img src="images/pjt2.jpg" alt="" />
                    </a>
                </div>
                <div class="card__body">
                    <h3 class="heading">Project Title</h3>
                    <address>Cuddalore, Tamil Nadu</address>
                    <p class="description">
                        3000 Sq.ft | 3BHK RESIDENTIAL BUILDING | CONTEMPORARY STYLE
                    </p>
                    <a href="#" class="btn btn--light">Project Detail</a>
                </div>
            </div>
            <div class="card project">
                <div class="card__photo">
                    <a href="#">
                        <img src="images/projectCard_img_plans.jpg" alt="" />
                    </a>
                </div>
                <div class="card__body">
                    <h3 class="heading">Project Title</h3>
                    <address>Cuddalore, Tamil Nadu</address>
                    <p class="description">
                        3000 Sq.ft | 3BHK RESIDENTIAL BUILDING | CONTEMPORARY STYLE
                    </p>
                    <a href="#" class="btn btn--light">Project Detail</a>
                </div>
            </div>
        </div>
    </div>

    <div class="block block--dark project-detail">
        <header class="block__header image">
            <h2 class="block__heading">Sakthi Ganesh Kodimangalam</h2>
        </header>
        <div class="media-object grid">
            <div class="media__photo">
                <img src="/images/pjt2.jpg" alt="" />
            </div>
            <div class="media__data">
                <table class="data-table">
                    <tr>
                        <td class="name">Client Name:</td>
                        <td class="detail">SAKTHI GANESH . U</td>
                    </tr>
                    <tr>
                        <td class="name">Site Location:</td>
                        <td class="detail">KODIMANGALAM - MADURAI.</td>
                    </tr>
                    <tr>
                        <td class="name">Build-Up Area:</td>
                        <td class="detail">1800 SQ.FT</td>
                    </tr>
                    <tr>
                        <td class="name">Building Specifitions:</td>
                        <td class="detail">3BHK RESIDENTIAL BUILDING</td>
                    </tr>
                    <tr>
                        <td class="name">Building Type:</td>
                        <td class="detail">CONTEMPORARY STYLE</td>
                    </tr>
                    <tr>
                        <td class="name">Project Status:</td>
                        <td class="detail">Project Completed</td>
                    </tr>
                    <tr>
                        <td class="name">Year:</td>
                        <td class="detail">2019 - 2020</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="photo-gallery grid">
            <div class="photo">
                <header>
                    <h3 class="photo__heading">Stage 1</h3>
                </header>
                <img src="/images/STAGE1.jpg" alt="" />
            </div>
            <div class="photo">
                <header>
                    <h3 class="photo__heading">Stage 1</h3>
                </header>
                <img src="/images/STAGE2.jpg" alt="" />
            </div>
            <div class="photo">
                <header>
                    <h3 class="photo__heading">Stage 1</h3>
                </header>
                <img src="/images/STAGE3.jpg" alt="" />
            </div>
            <div class="photo">
                <header>
                    <h3 class="photo__heading">Stage 1</h3>
                </header>
                <img src="/images/STAGE4.jpg" alt="" />
            </div>
        </div>
    </div>

    <script src="js/index.js"></script>
</body>

<!-- footer -->
<? load_template('footer'); ?>
</html>