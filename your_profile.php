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
                            <a href="your_requests.php"> My Requests
                            </a>
                    </li>
                    <li class="col-xs-12 col-sm-4 link-item">
                        <span>2</span>
                            <a href="your_profile.php"> My Profile
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
                                    <p><br><br><br><br><br><br><br>
                                    <br><br><br><br><br></p>       
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

            <div class="page-wrapper">
            <div class="breadcrumb">
              <h3 align="center">User Profile Update</h3>
               <div class="container">
                  <ul>
                     <li>
                      <a href="#" class="active">
                        <span style="color:red;"><?php echo $message; ?></span>
                                  <span style="color:green;">
                          <?php echo $success; ?>
                                            </span>
                      </a>
                    </li> 
                  </ul>
               </div>
            </div>

           

            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                    <div class="col-md-12">
                      <div class="widget">
                        <div class="widget-body">

                        <form action="" method="post">
                          <div class="row">
                  
<?php  

  $query_res= mysqli_query($db,"select * from users where 
    u_id='".$_SESSION['user_id']."'");

  $result=mysqli_query($db, $query_res); 

  while($user=mysqli_fetch_array($query_res)){

    echo '<div class="col-md-6">
        <label for="organization_structure">Partner Network Structure 
        </label>
          <input type="text" name="organization_structure" value="'.$user['organization_structure'].'" class="form-control" readonly>
      </div>';          


    echo '<div class="col-md-6">
        <label for="organization_name">Organization Name
        </label>
          <input type="text" name="organization_name" value="'.$user['organization_name'].'" class="form-control" readonly>
      </div>'; 


    echo '<div class="col-md-12">
        <label for="username">Identification Number
        </label>
          <input type="text" name="username" value="'.$user['username'].'" class="form-control" readonly>
      </div>';


    echo '<div class="col-md-6">
        <label for="f_name">First Names
        </label>
          <input type="text" name="f_name" value="'.$user['f_name'].'" class="form-control" readonly>
      </div>'; 


    echo '<div class="col-md-6">
        <label for="l_name">Surname
        </label>
          <input type="text" name="l_name" value="'.$user['l_name'].'" class="form-control" readonly>
      </div>'; 


    echo '<div class="col-md-6">
        <label for="sex">Sex
        </label>
          <input type="text" name="sex" value="'.$user['sex'].'" class="form-control" readonly>
      </div>';


    echo '<div class="col-md-6">
        <label for="phone">Celphone Number
        </label>
          <input type="text" name="phone" value="'.$user['phone'].'" class="form-control" readonly>
      </div>';   


    echo '<div class="col-md-6">
        <label for="email">Email Address 
        </label>
          <input type="text" name="email" value="'.$user['email'].'" class="form-control" readonly>
      </div>';  

        
    echo '<div class="col-md-12">
        <label for="address">Address
        </label>
          <input type="textarea" name="address" rows="5" value="'.$user['address'].'" class="form-control" readonly>
      </div>';                                


    echo '<div class="col-md-6">
        <label for="nationality">Nationality
        </label>
          <input type="text" name="nationality" value="'.$user['nationality'].'" class="form-control" readonly>
      </div>';                                


    echo '<div class="col-md-6">
        <label for="municipality">Municipality
        </label>
          <input type="text" name="municipality" value="'.$user['municipality'].'" class="form-control" readonly>
      </div>';    


    echo '<div class="col-md-6">
        <label for="district">District
        </label>
          <input type="text" name="district" value="'.$user['district'].'" class="form-control" readonly>
      </div>';    


    echo '<div class="col-md-6">
        <label for="provice">Province
        </label>
          <input type="text" name="provice" value="'.$user['provice'].'" class="form-control" readonly>
      </div>';    


    echo '<div class="col-md-6">
        <label for="alt_person">Alternate Contact Person
        </label>
          <input type="text" name="alt_person" value="'.$user['alt_person'].'" class="form-control" readonly>
      </div>';     


    echo '<div class="col-md-6">
        <label for="alt_number">Alternate Person Contact Numbers
        </label>
          <input type="text" name="alt_number" value="'.$user['alt_number'].'" class="form-control" readonly>
      </div>';  

  }


?>

                    </form>
                  </div>
                  <!-- end: Widget -->
                </div>
                <!-- /REGISTER -->
              </div>
            </div>
          </div>
        </section>



          

<?php
include_once 'footer.php';
?>            