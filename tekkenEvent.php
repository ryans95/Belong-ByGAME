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
        <section class="image-head-wrapper" style="background-image: url('images/tekkenBanner.png');">
        </section>
        <div class="clearfix"></div>

        <section class="contact-block">
            <div class="container">
                <div class="col-md-6 contact-left-block">
                    <p class="text-justify">From Akuma to Yoshimitsu, Monday night is Tekken 7 night in all of our arenas!</p>
                    <p class="text-justify">Put your skills to the test against some of the best players in the country every week as part of our
                        Tekken 7 Community Night!</p>
                    </br>
                    <p class="text-justify">
                        <strong>ARENA CLASH</strong>
                    </p>
                    <p class="text-justify">Arena Clash is our national level tournament where we recruit our best players to represent our arenas
                        against the other tribes across the country! Take part in this tournament to win some amazing prizes
                        but more importantly the ultimate bragging rights. We hold regular events and qualifiers for CLASH
                        to find the best of the best in each location.</p>
                    <p class="text-justify">Find out more details
                        <a href="clash.php">
                            <font color="#9933ff"> here</a>
                    </p>
                </div>
                <div class="col-md-6 contact-form">
                    <img src="images/tekkenInfo.png" class="media-object">
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