<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include_once 'product-action.php';
    error_reporting(0);
    session_start();
    if(empty($_SESSION["user_id"]))
    {
        header('location:login.php');
    }
    else{

    foreach ($_SESSION["cart_item"] as $item)
        {
            $item_total += ($item["price"]*$item["quantity"]);
                                                
            if($_POST['submit'])
                {
                    $SQL="insert into users_orders(u_id,title,quantity,price) values('".$_SESSION["user_id"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."')";
                        
                    mysqli_query($db,$SQL);
                                                        
                    $success = "Awesome! Your Request has been sent through successfully!";
                    unset($_SESSION["cart_item"]);
                }
                elseif ($_POST['cancel'])
                {
                    unset($_SESSION["cart_item"]);
                } 
            }
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
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
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;
                    </button>
                    <a class="navbar-brand" href="index.php"> 
                        <img alt="LOGO" width="167" height="68" src="images/covid-logo.png" alt="COVID-19 Front Civil Society Response Team"> 
                    </a>                      
                        <a class="navbar-brand" href="index.php"></a>
                            <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item"> 
                                        <a class="nav-link active" href="index.php">Home 
                                            <span class="sr-only">(current)</span>
                                        </a> 
                                    </li>
                                    <li class="nav-item"> 
                                        <a class="nav-link active" href="doListPartners.php">Partners 
                                            <span class="sr-only">
                                            </span>
                                        </a> 
                                    </li>
                            
                            <?php
                        if(empty($_SESSION["user_id"]))
                            {
                            echo '  <li class="nav-item">
                                        <a href="login.php" class="nav-link active"> Login
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                        <a href="registration.php" class="nav-link active"> Signup
                                        </a> 
                                    </li>';
                            }
                        else
                            {
                            echo  '<li class="nav-item">
                                        <a href="viewYourRequests.php" class="nav-link active"> Your Requests</a> </li>';
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

        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
                <div class="container">
                    <ul class="row links">
                      
                        <li class="col-xs-12 col-sm-4 link-item">
                            <span>1</span>
                                <a href="doListPartners.php"> Choose Nearest Network Partner</a>
                        </li>
                        <li class="col-xs-12 col-sm-4 link-item active">
                            <span>2</span>
                                <a href="request.php?res_id=<?php echo $_GET['res_id']; ?>"> Pick Your Request
                                </a>
                        </li>
                        <li class="col-xs-12 col-sm-4 link-item">
                            <span>3</span>
                                <a href="checkout.php">Confirm and Submit Request
                                </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->

            <section class="inner-page-hero bg-image" data-image-src="images/img/banner-covid-ori.jpg">
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                                <div>
                                    <p><br><br><br><br><br><br></p>
                                    <p><br><br><br><br><br><br></p>
                                    <p><br><br><br><br><br></p>        
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                                <div class="pull-left right-text white-txt" id="sec01">
                                    <h6><a href="#sec01"></a></h6>
                                    <p></p>
                                    <ul class="nav nav-inline">
                                        <li class="nav-item"> <a class="nav-link active" href="#sec01"><i></i></a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#sec01"><i></i></a> 
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
            
            <div class="container"> 
                <span style="color:green;">
                    <?php echo $success; ?>
                </span>
            </div>
             
            <div class="container m-t-30">
            <form action="" method="post">
                <div class="widget clearfix">    
                    <div class="widget-body">
                        <form method="post" action="">
                            <div class="row">  
                                <div class="col-sm-12">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title">
                                            <h4>Cart Summary</h4> </div>
                                        <div class="cart-totals-fields">
                                        

                                        <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Summary of the request</td>
                                                <td> 
                                                    <?php echo $item["title"]; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Delivery</td>
                                                <td>By a local partner</td>
                                            </tr>
                                            <tr>
                                             <div class="form-group col-sm-12">
                                               <label for="exampleTextarea">Delivery Address</label>
                                               <textarea class="form-control" id="exampleTextarea"  name="address" rows="3"></textarea>
                                            </div>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--cart summary-->
                    <div class="payment-option">
                        <ul class=" list-unstyled">
                            <li>
                                <label class="custom-control custom-radio  m-b-20">
                                    <input name="mod" id="radioStacked1" checked value="COD" type="radio" class="custom-control-input"> 
                                        <span class="custom-control-indicator">
                                        </span> 
                                        <span class="custom-control-description">Delivery by local partner
                                        </span>

                                        <br> 
                                        <span>
                                            Please ensure that the address for delivery is correct. 
                                        </span> 
                                    </label>
                            </li>
                            <li>
                            </li>
                        </ul>
                            <p class="text-xs-center"> 
                                <input type="submit" onclick="return confirm('Please confirm all details before sending a request. Continue with the request?');" name="submit"  class="btn btn-outline-success btn-block" value="Complete Request"> 
                            </p>
                            <p class="text-xs-center"> 
                                <input type="submit" onclick="return confirm('Are you sure you want to canclel? ');" name="cancel"  class="btn btn-outline-danger btn-block" value="Cancel"> 
                            </p>                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </form>
        </div>
        
<?php
include_once 'footer.php';
?>

            <!-- end:Footer -->
        </div>
        <!-- end:page wrapper -->
         </div>
    </div>
    <!--/end:Site wrapper -->
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

<?php
}
?>