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

        <section class="image-head-wrapper" style="background-image: url('images/eventsBanner.jpg');">
            <div class="inner-wrapper">
                <h1 style="color:#ffffff">Events</h1>
            </div>
        </section>
        <div class="clearfix" style="margin-bottom:60px;"></div>

        <div class="container">
            <div class="row" style="margin-bottom:60px;">
                <div class="col-md-4 col-sm-4 col-xs-7">
                    <a href="nightEvent.php">
                        <img class="img-responsive" src="images/Event5.png" />
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-7">
                    <a href="legendsEvent.php">
                        <img class="img-responsive" src="images/Event1.png">
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-7">
                    <a href="tekkenEvent.php">
                        <img class="img-responsive" src="images/Event2.png" />
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-7">
                    <a href="codEvent.php">
                        <img class="img-responsive" src="images/Event3.png" />
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-7">
                    <a href="overwatchEvent.php">
                        <img class="img-responsive" src="images/Event4.png" />
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-7">
                    <a href="codEvent.php">
                        <img class="img-responsive" src="images/Event6.png" />
                    </a>
                </div>
            </div>
        </div>
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