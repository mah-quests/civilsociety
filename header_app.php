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
                                                Register User
                                            </a>
                                    <?php
                                        if(!empty($_SESSION["user_id"]))
                                        {  
                                        echo '<a href="household_application_form.php" class="dropdown-item">
                                                Log a Need Request
                                            </a>';
                                        }
                                    ?>     
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">NPO Partners</a>
                                        <div class="dropdown-menu">
                                            <a href="npo_list.php" class="dropdown-item">
                                                List of CCC Partners 
                                            </a>         
                                            <a href="npo_registration.php" class="dropdown-item">
                                                Register User
                                            </a>
                                    <?php
                                        if(!empty($_SESSION["user_id"]))
                                        {  
                                        echo '<a href="household_application_form.php" class="dropdown-item">
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
                            echo  '<li class="nav-item">
                                        <a href="household_application_form.php" class="nav-link active">Log a Need Request</a> </li>';                                
							echo  '<li class="nav-item">
                                        <a href="your_requests.php" class="nav-link active"> Your Requests</a> </li>';
							echo  '<li class="nav-item">
                                        <a href="logout.php" class="nav-link active"> Logout
                                        </a> 
                                    </li>';
							}
						   ?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        
