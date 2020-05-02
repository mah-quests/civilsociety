<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php"); // connection to db
error_reporting(0);
session_start();

include_once 'product-action.php'; //including controller

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>COVID-19 South African coronavirus news and information for civil society</title>
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

  <style>
    .image-box {
      /* Here's the trick */
      box-shadow: inset 0 0 0 100vw rgba(0,0,0,0.5);

      /* Basic background styles */
      background: var(--image-url) center center;
      background-size: cover;

      /* Here's the same styles we applied to our content-div earlier */
      color: white;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      
      /* Add a transition, just for fun */
      transition: box-shadow .3s ease-out;
    }
    .image-box:hover {
        box-shadow: inset 0 0 0 100vw rgba(0,0,0,0.2);
    }

    body, head, p, div{
        color: black;
        font: normal 16px "Raleway","Helvetica Neue",Helvetica,Arial,sans-serif;
        font-weight: 300;
    }

    /* For demo only */
    html, body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
    h1 {
      font-size: 40px;
    }

    .special-card {

      background-color: rgba(245, 245, 245, 1) !important;
      opacity: .4;
      font: normal 16px "Raleway","Helvetica Neue",Helvetica,Arial,sans-serif;
    }

  </style>
  
</head>

<body>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">                    
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;                      
                    </button>
                    <a class="navbar-brand" href="index.php"> 
                        <img alt="LOGO" width="167" height="48" src="images/covid-logo.png" alt="COVID-19 Front Civil Society Response Team"> 
                    </a>  
                            <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item"> 
                                        <a class="nav-link active" href="index.php">Home 
                                            <span class="sr-only">(current)</span>
                                        </a> 
                                    </li> 
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">CCC Partners</a>
                                        <div class="dropdown-menu">
                                            <a href="local_partners.php" class="dropdown-item">
                                                List of CCC Partners 
                                            </a>        
                                            <a href="partner_registration.php" class="dropdown-item">
                                                Register CCC User
                                            </a>
                                    <?php
                                        if(!empty($_SESSION["user_id"]))
                                        {  
                                echo '<a href="household_application.php" class="dropdown-item">
                                                Log a Need Request
                                            </a>';
                                        }
                                    ?>     
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Community Based <br>Organisation</a>
                                        <div class="dropdown-menu">
                                            <a href="npo_list.php" class="dropdown-item">
                                                List of CBO Partners 
                                            </a>         
                                            <a href="npo_registration.php" class="dropdown-item">
                                                Register CBO User
                                            </a>
                                    <?php
                                        if(!empty($_SESSION["user_id"]))
                                        {  
                                    echo '<a href="household_application.php" class="dropdown-item">
                                                Log a Need Request
                                            </a>';
                                        }
                                    ?> 
                                        </div>
                                    </li>  

							<?php
						if(empty($_SESSION["user_id"]))
							{
							echo '  <li class="nav-item">
                                        <a href="login.php" class="nav-link active"> Login
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                        <a href="household_registration.php" class="nav-link active"> Community Member Registration
                                        </a> 
                                    </li>';
							}
						else
							{
                            echo '<li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                            Community Resources
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="household_application.php" class="dropdown-item">
                                                Log a Need Request
                                            </a>
                                            <a href="household_registration.php?user_id=" class="dropdown-item">
                                                Community Member Registration
                                            </a>         
                                        </div>
                                    </li>';

                            echo '<li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Details</a>
                                        <div class="dropdown-menu">
                                            <a href="your_requests.php" class="dropdown-item">
                                                My Requests 
                                            </a>
                                            <a href="your_profile.php?user_id=" class="dropdown-item">
                                                My Profile 
                                            </a>        
                                            <a href="logout.php" class="dropdown-item">
                                                Log Off
                                            </a>    
                                        </div>
                                    </li>';
							     }
						   ?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        
