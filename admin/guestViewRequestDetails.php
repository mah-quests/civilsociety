
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

?>

<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+800+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>

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


                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
    </div>


        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
<div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Action A Requests</h3> 

</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->
<div class="row">
<div class="col-12">


<div class="card">
<div class="card-body">
<h4 class="card-title">View Requests</h4>

<div class="table-responsive m-t-20">
<table id="myTable" class="table table-bordered table-striped">

<tbody>
<?php
	$sql="SELECT users.*, users_orders.* FROM users INNER JOIN users_orders ON users.u_id=users_orders.u_id where o_id='".$_GET['user_upd']."'";
	$query=mysqli_query($db,$sql);
	$rows=mysqli_fetch_array($query);

?>

            <tr>
                <td><strong>Reference Number</strong></td>
                <td><center><?php echo $rows['unique_code']; ?></center></td>
            </tr>             
            <tr>
                <td><strong>Agent Name & Surname</strong></td>
                <td>
                    <center>
                        <?php echo $rows['f_name'].' '.$rows['l_name'].' - '. $rows['organization_name'] ?>
                </center></td>
            </tr>   
            <tr>
            <td><strong>Household Contact Person's Name & Surname</strong></td>
            <td><center><?php echo $rows['request_first_name'].' '.$rows['request_surname'] ?></center></td>
            </tr>   
            <tr>
                <td><strong>Date and time of the survey</strong></td>
                <td><center><?php echo $rows['date']; ?></center>
                </td>
            </tr>
            <tr>
                <td><strong>Address:</strong></td>
                <td><center><?php echo $rows['delivery_address']; ?></center></td>
            </tr>
            <tr>
                <td><strong>Province</strong></td>
                <td><center><?php echo $rows['province']; ?></center></td>
            </tr>
            <tr>
                <td><strong>Municipality</strong></td>
                <td><center><?php echo $rows['municipality']; ?></center></td>
            </tr>  
            <tr>
                <td><strong>Comments made by agent</strong></td>
                <td><center><?php echo $rows['comments']; ?></center></td>
            </tr>  
            <tr>
                <td><strong>status:</strong></td>
    <?php $status=$rows['status']; 
        if($status=="" or $status=="NULL"){
    ?>
                <td> 
                    <center>
                        <button type="button" class="btn btn-info" style="font-weight:bold;"><span class="fa fa-circle-o"  aria-hidden="true" > 
                            Not Processed
                        </button>
                    </center>
                </td>
    <?php 
    }
        if($status=="in process")
    { ?>
		        <td>   
		            <center>
		                <button type="button" class="btn btn-warning">
		                    <span class="fa fa-circle-o-notch fa-spin"  aria-hidden="true" ></span>
		                        Processing!
		                </button>
		            </center>
		        </td> 
        
    <?php
    }
    
    if($status=="closed")
        {
    ?>
		        <td>  
		            <center>
		                <button type="button" class="btn btn-success" >
		                    <span  class="fa fa-circle" aria-hidden="true">   Completed
		                </button>
		            </center>
		        </td> 
    <?php 
        } 
    ?>
    <?php
        if($status=="rejected")
        {
    ?>
                                                            
		        <td>  
		            <center>
		                <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i> Rejected
		                </button> 
		            </center>
		        </td> 
            </tr>
        <?php 
        } 

    $sql="SELECT remark.*, users_orders.* FROM remark INNER JOIN users_orders ON remark.frm_id=users_orders.o_id where o_id='".$_GET['user_upd']."'";
    $query=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($query);

?>

            <tr>
                <td><strong>M & E Remarks and Updates</strong></td>
                <td><center><?php echo $row['remark']; ?></center></td>
            </tr>

            <tr>
                <td><strong>Last Updated</strong></td>
                <td><center><?php echo $row['remarkDate']; ?></center></td>
            </tr>            

<?php 


    $sql="SELECT users.*, users_orders.* FROM users INNER JOIN users_orders ON users.u_id=users_orders.u_id where o_id='".$_GET['user_upd']."'";
    $query=mysqli_query($db,$sql);
    $rows=mysqli_fetch_array($query);

?>

				</tbody>
			</table>
			</div>

        <div align="center">

            <a href="javascript:void(0);" onClick="popUpWindow('viewRequestDetails.php?newform_id=<?php echo htmlentities($rows['o_id']);?>');" title="View Full Request Details">
                <button type="button" class="btn btn-primary">
                    View Full Request Details
                </button>
            </a>

            <a href="javascript:void(0);" onClick="popUpWindow('doUpdateRequest.php?form_id=<?php echo htmlentities($rows['o_id']);?>');" title="Take Action on request">
                <button type="button" class="btn btn-primary">
                    Take Action
                </button>
            </a>

            <a onclick="window.location.href = 'showInProgressRequests.php';">
                <button type="button" class="btn btn-secondary">
                    Back
                </button>
            </a>            

        </div>

		</div>
	</div>
</div>

</div>
</div>
</div>
</div>
<!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
			
			
<?php

include_once 'footer.php';

?> 