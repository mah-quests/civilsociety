<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta property="og:title" content="Thusa Sechaba Web Application" />
    <meta property="og:url" content="https://www.thusasechaba.org.za/" />
    <meta property="og:description" content="Thusa Sechaba Web Application">
    <meta property="og:image" sizes="32x32" content="images/color-covid-logo.png">
    <meta property="og:type" content="thusasechaba" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/color-covid-logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Thusa Sechaba, Thusa Sechaba Web App, ThusaSechaba, Thusa, Sechaba, COVID-19 Front, Civil Society, Civil, Society">
    <meta name="author" content="Community Constituency Covid-19 Front">
    <link rel="icon" type="image/png" sizes="32x32" href="images/black-covid-logo.png" alt="Thusa Sechaba Logo">
    <title>Thusa Sechaba Web Application</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/css/animate.min.css'>
    <link rel='stylesheet' href="assets/css/font-awesome.min.css"/>
    <link rel='stylesheet' href="assets/css/style.css"/>

</head>

<body>

<?php
    $input = $_GET['id'];
?>

    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img alt="LOGO" width="450" height="110" src="images/covid-logo.png" alt="Thusa Sechaba">
                    </a>
                    <b>
                            <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.php">Home
                                            <span class="sr-only">(current)</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="doHouseRequest.php">Household Request
                                            <span class="sr-only">(current)</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                    </b>
                </div>
                <br><br><br><br>
            </nav>
            <!-- /.navbar -->
        </header>


    <div class="page-wrapper"
        <!-- top Links -->
        <div class="top-links">
        <br><br><br><br>
            <div class="container" align="center">
                <ul class="row links">
                    <li class="col-xs-12 col-sm-4 link-item active">
                    </li>
                    <?php if($input == 1) { ?>
                    <li class="col-xs-12 col-sm-4 link-item">
                            <h1>GeoLocation Error</h1>
                            <p>You've decided not to share your position, session cannot continue. Please close your browser and start again. The application cannot start without giving a permission. Click Allow on the location pop-up </p>
                    </li>
                    <?php } elseif ($input == 2) { ?>
                    <li class="col-xs-12 col-sm-4 link-item">
                        <h1>GeoLocation Error</h1>
                        <p>The network is down or the positioning service can't be reached. Please close your browser and start again. The application cannot start without giving a permission. Click Allow on the location pop-up </p>
                    </li>
                    <?php } elseif ($input == 3) { ?>
                    <li class="col-xs-12 col-sm-4 link-item">
                        <h1>GeoLocation Error</h1>
                        <p>The attempt timed out before it could get the location data. Please close your browser and start again. The application cannot start without giving a permission. Click Allow on the location pop-up  </p>
                    </li>
                    <?php } elseif ($input == 4) { ?>
                    <li class="col-xs-12 col-sm-4 link-item">
                        <h1>GeoLocation Error</h1>
                        <p>Geolocation failed due to unknown error. Please close your browser and start again. The application cannot start without giving a permission. Click Allow on the location pop-up  </p>
                    </li>
                    <?php }
                        sessionStorage.clear();
                        localStorage.clear();
                    ?>
                    <li class="col-xs-12 col-sm-4 link-item">
                    </li>
                </ul>
            </div>
        </div>
            <section class="inner-page-hero bg-image" data-image-src="images/img/banner-covid-ori.jpg">
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                                <div class="pull-left right-text white-txt">
                                    <h6><a href="#"></a></h6>
                                    <p></p>
                                    <ul class="nav nav-inline">
                                        <li class="nav-item"> <a class="nav-link active" href="#"><i></i></a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#"><i></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end:Inner page hero -->

            <div class="breadcrumb">
                <div class="container">
                </div>
            </div>
        </div>
    </div>


    <!-- Credits
    =============================================== -->
    <section id="credits" class="text-center">
        <p><p><span class="social wow zoomIn">
        <a href="https://www.facebook.com/Covid19Front/" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/CivilSociety_SA" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/UCTtgR8BX1HZqoxNLqVQbC4Q" target="_blank"><i class="fa fa-youtube"></i></a>
            </span><br/>
          Copyright &copy; <a href="#">Community Constituency COVID-19 Front</a> | <a href="https://communityconstituency.org.za/support" target="_blank"> Click here for support </a></p> </p>
        <p><img src="covid-partners.png" alt="partners"><br/>
      </p>
    </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>