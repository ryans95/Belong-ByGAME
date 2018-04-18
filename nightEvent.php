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

        <section class="image-head-wrapper" style="background-image: url('images/nightBanner.png');">
        </section>
        <div class="clearfix"></div>

        <section class="contact-block">
            <div class="container">
                <div class="col-md-6 contact-left-block">
                    <p class="text-justify">From the earliest beginnings of Belong, giving the community a chance to tell us what they want has been
                        a key part of us. We want to give you the player more chances to tell us what you want, and how we
                        can make all of our events as amazing as possible! With that being said, we're extremely proud to
                        present Community Choice, where you have the power to choose the games you play and make your mark
                        inside your Belong Arena! </p>
                    </br>
                    <p class="text-justify">
                        <strong>FIGHT NIGHT</strong>
                    </p>
                    <p class="text-justify">The second Friday of every month is FIGHT Night at Belong. Players choose which games to play, whether
                        its Tekken 7, Street Fighter V, Dragon Ball FighterZ or anything else, the choice is yours! Check
                        out your local arena for what game we’ll be digging into this month.</p>
                </div>
                <div class="col-md-6 contact-form">
                    <img src="images/nightInfo.png" class="media-object">
                </div>
                <div class="clearfix"></div>
            </div>
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