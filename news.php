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
    <script src="js/articles.js" type="text/javascript"></script>
</head>

<body>
    <div id="page">

        <!--Header-->
        <?php include('includes/header.php');?>
        <!-- /Header -->

        <section class="image-head-wrapper" style="background-image: url('images/newsBanner.jpg');">
            <div class="inner-wrapper">
                <h1 style="color:#ffffff">News</h1>
            </div>
        </section>
        <div class="clearfix"></div>

        <section class="resort-overview-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                        <div class="side-A">
                            <div class="product-thumb">
                                <div class="image">
                                    <div id="game-news">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="side-B">
                            <div class="product-desc-side">
                                <div id="links-title"></div>
                                <div id="links"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                        <div class="side-A">
                            <div class="product-thumb">
                                <div id="game-news2"></div>
                            </div>
                        </div>
                        <div class="side-B">
                            <div class="product-desc-side">
                                <div id="links-title2"></div>
                                <div id="links2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-12 offspace-45"></div>
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                        <div class="side-A">
                            <div class="product-desc-side">
                                <div id="links-title3"></div>
                                <div id="links3"></div>
                            </div>
                        </div>

                        <div class="side-B">
                            <div class="product-thumb">
                                <div id="game-news3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                        <div class="side-A">
                            <div class="product-desc-side">
                                <div id="links-title4"></div>
                                <div id="links4"></div>
                            </div>
                        </div>

                        <div class="side-B">
                            <div class="product-thumb txt-rgt">
                                <div id="game-news4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
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