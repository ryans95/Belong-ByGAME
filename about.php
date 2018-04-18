<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Belong ByGAME</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true"
    />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet">
    <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <script src="assets/switcher/js/switcher.js"></script>
    <script src="js/custom.js" type="text/javascript"></script>
</head>

<body>
    <div id="page">

        <!--Header-->
        <?php include('includes/header.php');?>
        <!-- /Header -->

        <section class="image-head-wrapper" style="background-image: url('images/banner3.jpg');">
            <div class="inner-wrapper">
                <h1 style="color:#ffffff">About us</h1>
            </div>
        </section>
        <div class="clearfix"></div>


        <section class="about-block">
            <div class="container">
                <div class="contact-form" align="center">
                    <h3>WHAT
                        <span>
                            <strong> WE DO</strong>
                        </span>
                    </h3>
                </div>
                <div class="row offspace-45">
                    <div class="view-set-block">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="event-blog-image">
                                <img alt="image" class="img-responsive" src="images/about1.jpg">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                            <div class="event-blog-details">
                                <h4>Our Arenas</h4>
                                <p align="justify">From the halls of Insomnia to the online battlegrounds of the UK Masters, gaming has always
                                    been at the very heart of Belong. Our first Belong Gaming Arena opened in Manchester
                                    in July 2016 as part of the Trafford Centre’s GAME store. From there, Belong arenas have
                                    continued to open across the country including Glasgow, Milton Keynes and Plymouth! Gaming,
                                    competition and community are the driving force behind Belong, and we believe the best
                                    gaming experiences are those shared with others.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row offspace-45">
                    <div class="view-set-block">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="event-blog-image">
                                <img alt="image" class="img-responsive" src="images/about2.jpg">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                            <div class="event-blog-details">
                                <h4>What You Can Do At Belong</h4>
                                <p align="justify">Belong aims to be a place where every gamer can come and feel part of something bigger. Want
                                    to play the latest and greatest titles next to your friends? Compete in your favourite
                                    game against some of the country’s best? How about experience the latest in VR gaming?
                                    We’ve got you covered! You can do all of this at Belong, and even take part in some exclusive
                                    events that we host right across the country!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </section>

        <!-----blog slider----->
        <!--blog trainer block-->
        <section class="blog-block-slider">
            <div class="blog-block-slider-fix-image">
                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                    <div class="container">
                        <!-- Wrapper for slides -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                            <li data-target="#myCarousel2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="blog-box">
                                    <p>Visited the arena at the weekend being a regular gamer and having seen the gaming centre.
                                        Something new and fresh which provides something we don't have in this current gaming
                                        age. Ideal for children's parties and other events and hosting LAN events.
                                    </p>
                                </div>
                                <div class="blog-view-box">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/Nade.jpg" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading blog-title">Danny S</h3>
                                            <h5 class="blog-rev">Satisfied Customer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-box">
                                    <p>Only intended to be meeting in the shop before going to grab a coffee, ended up playing
                                        games for the afternoon on one of the station's. The staff are very accommodating
                                        and welcoming of a couple of 40+ year olds and nothing was too much trouble. You
                                        can also buy drinks and food to have at the desk whilst you are playing. I will definitely
                                        be back
                                    </p>
                                </div>
                                <div class="blog-view-box">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/client.jpg" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading blog-title">Mark W</h3>
                                            <h5 class="blog-rev">Satisfied Customer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-box">
                                    <p>I have been to Belong at least once a week for the past 3 weeks and I have always found
                                        the staff to be incredibly friendly and helpful. Also the gaming machinces used are
                                        of high quality. It can definitely get packed on the weekends, so if you plan on
                                        going, I would suggest booking a spot. They also do a lot of events and community
                                        nights to get people envolved and it is a great time. </p>
                                </div>
                                <div class="blog-view-box">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/client3.png" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading blog-title">James Worth</h3>
                                            <h5 class="blog-rev">Satisfied Customer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
        <!--back to top-->
        <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <span>
                <i aria-hidden="true" class="fa fa-angle-up fa-lg"></i>
            </span>
            <span>Top</span>
        </a>
    </div>
    <!--Footer -->
    <?php include('includes/footer.php');?>
    <!-- /Footer-->

    <!--Login-Form -->
    <?php include('includes/login.php');?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php');?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php');?>
    <!--/Forgot-password-Form -->
</body>

</html>