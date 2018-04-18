<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE HTML>
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

    <!--Header-->
    <?php include('includes/header.php');?>
    <!-- /Header -->

    <div id="page">
        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/banner.jpg" style="width:100%; height: 500px" alt="First slide">
                    <div class="carousel-caption">
                        <h1>Join
                            <br> Our Team</h1>
                    </div>
                </div>
                <div class="item">
                    <img src="images/banner2.png" style="width:100%; height: 500px" alt="Second slide">
                    <div class="carousel-caption">
                        <h1>State of The Art Consoles</h1>
                    </div>
                </div>
                <div class="item">
                    <img src="images/banner3.png" style="width:100%; height: 500px" alt="Third slide">
                    <div class="carousel-caption">
                    </div>
                </div>

            </div>
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'"
                    alt="left">
            </a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                <img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'"
                    alt="left">
            </a>

        </div>
        <div class="clearfix"></div>

        <section class="about-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 about-left home-left-block">
                        <h3>
                            <span>
                                <strong>Designed By Gamers,</strong>
                            </span> For Gamers</h3>
                    </div>
                    <div class="col-md-7 about-right">
                        <p>Each Belong Gaming Arena is a bespoke space, designed to cater for all, from the ultimate hard core
                            gamer to the newest and freshest faces in the world of gaming! With custom high-powered gaming
                            PCs, Xbox One and PlayStation 4 consoles readily available throughout the arena, every game and
                            gamer is catered for.</p>
                        <p>Play the latest and greatest titles next to your friends, compete in your favourite game against
                            some of the country’s best players and experience the latest in VR gaming under one roof at Belong.</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </section>

        <!--gallery block-->
        <section class="gallery-block gallery-front">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="images/ps4.png">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/ps4.png" data-lightbox="example-1">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                                <p>
                                    <a>12x PS4 Pro</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="images/Xbox-One-X.png">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/Xbox-One-X.png" data-lightbox="example-1">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                                <p>
                                    <a>2x Xbox One X</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="images/xbox_one_s.png">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/xbox_one_s.png" data-lightbox="example-1">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                                <p>
                                    <a>10x Xbox one S</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="gallery-image">
                            <img class="img-responsive" src="images/pc.png">
                            <div class="overlay">
                                <a class="info pop example-image-link img-responsive" href="images/pc.png" data-lightbox="example-1">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                                <p>
                                    <a>12x High End PC's</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 about-left home-left-block">
                    <h3>
                        </br>
                        <span>
                            <strong>Check Out</strong>
                        </span> Our Kit</h3>
                </div>
            </div>
        </section>

        <!--book block-->
        <section class="arena-offer-block">
            <div class="arena-offer-bgbanner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-6 col-xs-12">
                            <div class="arena-offer-details">
                                <h1 style="color:#ffffff">Your Opponent Awaits!</h1>
                                <h4 style="color:#ffffff">Showcase your skills</h4>
                                </br>
                                <a href="book.php" button type="button" class="btn btn-xs uppercase">Book Your Seat</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End-->

        <!---blog block-->
        <section class="blog-block">
            <div class="container">
                <div class="row offspace-45">
                    <div class="view-set-block">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="event-blog-image">
                                <img alt="image" class="img-responsive" src="images/game1.jpg">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                            <div class="event-blog-details">
                                <h4>
                                    <a href="grandFinal.php">Arena Clash Spring '18 Grand Finals</a>
                                </h4>
                                <h5>Post By Admin</h5>
                                <p align="justify">After 2 weeks of qualifiers, 5 weeks of league matches and a week of intense playoff matches,
                                    we’re finally at the Belong Arena Clash Spring ‘18 Grand Finals!</p>
                                <p align="justify">Players from up and down the UK joined their tribes, and faced off against the best of the
                                    rest to claim their place with us at Insomnia62 over the Easter Bank Holiday weekend
                                    and the Grand Finals of this season. We’ve broken down how the action from the playoffs
                                    went down fro each game, and which two tribes are joining us at the Grand Finals.</p>
                                <a class="btn btn-xs uppercase" href="grandFinal.php">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row offspace-45">
                    <div class="view-set-block">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="event-blog-image">
                                <img alt="image" class="img-responsive" src="images/game2.jpg">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                            <div class="event-blog-details">
                                <h4>
                                    <a href="insomnia.php">Belong is coming to insomnia62</a>
                                </h4>
                                <h5>Post By Admin</h5>
                                <p align="justify">The halls of the NEC in Birmingham will once again be filled with the sights and sounds of
                                    the Insomnia Gaming Festival, and Belong will be there in full force to be part of the
                                    ride</p>
                                <p align="justify">An expected 50,000 visitors are expected across the 4 days of the show, and we have the best
                                    Belong has to offer throughout the show, across the entire weekend.</p>
                                <a class="btn btn-xs uppercase" href="insomnia.php">Read More</a>
                            </div>
                        </div>
                    </div>
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