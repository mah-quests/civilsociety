<?php
include_once 'header_app.php';
?>


    <div class="page-wrapper">
        <!-- top Links -->
        <div class="top-links">
            <div class="container">
                <ul class="row links">
                    <li class="col-xs-12 col-sm-4 link-item active">
                        <span>1</span>
                            <a href="viewYourRequests.php"> My Requests
                            </a>
                    </li>
                    <li class="col-xs-12 col-sm-4 link-item">
                        <span>2</span>
                            <a href="viewYourProfile.php"> My Profile
                            </a>
                    </li>
                    <li class="col-xs-12 col-sm-4 link-item">
                        <span>3</span>
                            <a href="logout.php"> Logout
                            </a>
                    </li>
                </ul>
            </div>
        </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <section class="inner-page-hero bg-image" data-image-src="images/img/banner-covid-sotho.png">
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


            <section class="restaurants-page">
                <div class="container">
                    <div class="row">


    <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">Unique Code</th>
                <th class="th-sm">Date</th>
                <th class="th-sm">Full Names</th>
                <th class="th-sm">Delivery Address</th>
                <th class="th-sm">Comments</th>
            </tr>
        </thead>
        <tbody>

        <?php $ress= mysqli_query($db,"select * from users_orders where u_id = '".$_SESSION["user_id"]."' ");
                while($rows=mysqli_fetch_array($ress))
                {

            echo '<tr>
                        <td>
                            '.$rows['unique_code'].'
                        </td>                        
                        <td>
                            '.$rows['date'].' 
                        </td>
                        <td>   
                            '.$rows['request_first_name'].' '.$rows['request_surname'].'
                        </td>
                        <td>
                            '.$rows['delivery_address'].'
                        </td>
                        <td>
                        '.$rows['comments'].'
                        </td> 
                    </tr>'; 
                }
                ?>
        </tbody>
    </table>                                  
                    </div>
                </div>
            </section>


<?php
include_once 'footer.php';
?>            