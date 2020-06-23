<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Thusa Sechaba">
    <meta name="author" content="Thusa Sechaba">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="../images/black-covid-logo.png">
    <title>ThusaSechaba Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animsition.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">    
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../assets/css/animate.min.css'>  


    <style>
        
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      color: black;
      text-align: center ;
    }

    body, head, p, div{
        font: normal 16px "Raleway","Helvetica Neue",Helvetica,Arial,sans-serif;
        font-weight: 300;
    }
    </style> 

</head>

<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <img alt="LOGO" width="200" height="120" src="../images/color-covid-logo.png" alt="Thusa Sechaba Web App" align="center">
                        </span>
                    </a>
                </div>

                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                       
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                      
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/ThatoM.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->

            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->


<!-- Users [admin, m-n-e, mabalane, nhlanhla] -->
<?php if($_SESSION["adm_id"] == "6" || $_SESSION["adm_id"] == "11" || $_SESSION["adm_id"] == "10" || $_SESSION["adm_id"] == "9" || $_SESSION["adm_id"] == "15" || $_SESSION["adm_id"] == "16" || $_SESSION["adm_id"] == "17" ){ ?>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider">
                            <br><br><br><br>
                        </li>
                        <li class="nav-label">
                            <br>
                            <br>
                        </li>
                        <li> <a class="has-arrow  " href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>                             
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="showDashLiveStats.php">
                                    Live & Recent Stats
                                    </a>
                                </li> 
                                <li>
                                    <a href="showDashRequestsOverview.php">
                                    Household Stats Overview
                                    </a>
                                </li>                                
                                <li>
                                    <a href="showDashAgents.php">
                                    Social mobilisation
                                    </a>
                                </li>
                                <li>
                                    <a href="showDashCallCenter.php">
                                        Call Center Agents</a>
                                </li>
                                <li>
                                    <a href="showDashHumanRights.php">
                                        Human Rights</a>
                                </li>               
                                <li>
                                    <a href="showDashAdvocacy.php">
                                    Advocacy
                                    </a>
                                </li>                               
                                <li>
                                    <a href="showDashCommunications.php">
                                        Communications & <br>Public awareness
                                    </a>
                                </li>                              
                                <li>
                                    <a href="#">
                                        Contact tracing & <br>Screening
                                    </a>
                                </li>
                                <li>
                                    <a href="doShowAllRequests.php">
                                        All Requests
                                    </a>
                                </li>
                                <li>
                                    <a href="doShowAllAdminLogins.php">
                                        Admin Logins
                                    </a>
                                </li>
                            </ul> 
                                                                                                              
                        </li>
                        <li class="nav-label">Administration & Support</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">User Support</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="doShowAgents.php">All Users</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu">Requests</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="doShowAllRequests.php">All Requests</a></li>
                            </ul>
                        </li>

                        <li class="nav-label">Special Projects</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Solidarity Fund</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-dashboard.php">Overall Dashboard</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Live Dash</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-showDashAgents.php">Social Mobalisation</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Call Center Agents</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Human Rights</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Advocacy</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-showDashComms.php">Communications & <br>Public Awareness</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Contact tracing & <br> Screening</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
<?php } ?>                
<!-- Users [admin, m-n-e, mabalane, nhlanhla] -->

<!-- Users [advocacy] -->
<?php if($_SESSION["adm_id"] == "12"){ ?>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider">
                            <br><br><br><br>
                        </li>
                        <li class="nav-label">
                            <br>
                            <br>
                        </li>
                        <li> <a class="has-arrow  " href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>                             
                            <ul aria-expanded="false" class="collapse">                           
                                <li>
                                    <a href="showDashLiveStats.php">
                                    Live & Recent Stats
                                    </a>
                                </li> 
                                <li>
                                    <a href="showDashRequestsOverview.php">
                                    Household Stats Overview
                                    </a>
                                </li>              
                                <li>
                                    <a href="#">
                                    Advocacy
                                    </a>
                                </li>
                            </ul> 
                        </li>

                        <li class="nav-label">Special Projects</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Solidarity Fund</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-dashboard.php">Overall Dashboard</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Live Dash</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-showDashAgents.php">Social Mobalisation</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Call Center Agents</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Human Rights</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Advocacy</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-showDashComms.php">Communications & <br>Public Awareness</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Contact tracing & <br> Screening</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
<?php } ?>    
<!-- Users [advocacy] -->

<!-- Users [social-mobilization] -->
<?php if($_SESSION["adm_id"] == "13"){ ?>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider">
                            <br><br><br><br>
                        </li>
                        <li class="nav-label">
                            <br>
                            <br>
                        </li>
                        <li> <a class="has-arrow  " href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="showDashLiveStats.php">
                                    Live & Recent Stats
                                    </a>
                                </li>                            
                                <li>
                                    <a href="showDashAgents.php">
                                    Social mobilisation
                                    </a>
                                </li>
                            </ul> 
                        </li>

                        <li class="nav-label">Special Projects</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Solidarity Fund</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-dashboard.php">Overall Dashboard</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Live Dash</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-showDashAgents.php">Social Mobalisation</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Call Center Agents</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Human Rights</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Advocacy</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-showDashComms.php">Communications & <br>Public Awareness</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Contact tracing & <br> Screening</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
<?php } ?>   
<!-- Users [social-mobilization] -->

<!-- Users [human-rights] -->
<?php if($_SESSION["adm_id"] == "14"){ ?>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider">
                            <br><br><br><br>
                        </li>
                        <li class="nav-label">
                            <br>
                            <br>
                        </li>
                        <li> <a class="has-arrow" href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="showDashLiveStats.php">
                                    Live & Recent Stats
                                    </a>
                                </li> 
                                <li>
                                    <a href="showDashHumanRights.php">
                                        Human Rights</a>
                                </li>                           
                            </ul>            
                        </li>

                        <li class="nav-label">Special Projects</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Solidarity Fund</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-dashboard.php">Overall Dashboard</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Live Dash</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-showDashAgents.php">Social Mobalisation</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Call Center Agents</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Human Rights</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Advocacy</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="sp-showDashComms.php">Communications & <br>Public Awareness</a></li>
                            </ul>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Contact tracing & <br> Screening</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
<?php } ?>   
<!-- Users [human-rights] -->

                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
    </div>