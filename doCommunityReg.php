<?php
include_once 'header_app.php';
session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/connect.php"); // connection
if(isset($_POST['submit'] )) //if submit btn is pressed
{
     if(empty($_POST['firstname']) ||  //fetching and find if its empty
        empty($_POST['username']) ||
        empty($_POST['lastname']) ||
        empty($_POST['email']) ||
        empty($_POST['phone']) ||
        empty($_POST['address']) ||
        empty($_POST['password']) ||
        empty($_POST['List1']) ||     // Province
        empty($_POST['List2']) ||     // District
        empty($_POST['List3']) ||     // Municipality
        empty($_POST['sex']) ||
        empty($_POST['gender']) ||
        empty($_POST['age']) ||
        empty($_POST['race']) ||
        empty($_POST['ward']) ||
        empty($_POST['alt_person']) ||
        empty($_POST['alt_number']) ||
        empty($_POST['nationality']) ||
        empty($_POST['cpassword'])
      )
		{
      $message = "All fields required not filled!";

		}
	else
	{
		//cheching username & email if already present
	$check_username= mysqli_query($db, "SELECT username FROM users where username = '".$_POST['username']."' ");
	$check_celphone = mysqli_query($db, "SELECT phone FROM users where phone = '".$_POST['phone']."' ");
		
	if($_POST['password'] != $_POST['cpassword']){  //matching passwords
       	$message = "Password not match";
    }
	elseif(strlen($_POST['password']) < 6)  //cal password length
	{
		$message = "Password Must be >=6";
	}
	elseif(strlen($_POST['phone']) < 10)  //cal phone length
	{
		$message = "invalid phone number!";
	}

	elseif(mysqli_num_rows($check_username) > 100)  //check username
     {
    	$message = 'ID Number already registered!';
     }
	elseif(mysqli_num_rows($check_celphone) > 100) //check email
     {
    	$message = 'Celphone Number already exists!';
     }
	else{


  $agent_email=$_POST['email'];
  $agent_name=$_POST['firstname'];

    if ( true ) {
      include("./agent_welcome_mail.php");
    }

  $mql = "INSERT INTO users
  (username, f_name, l_name, email, phone, age, password, address, ward, district, municipality, provice, sex, race, gender, alt_person,
  alt_number, network, organization_structure, organization_name, network_type, nationality)
  VALUES
  ('".$_POST['username']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['age']."',
  '".md5($_POST['password'])."', '".$_POST['address']."' ,'".$_POST['ward']."' , '".$_POST['List2']."', '".$_POST['List3']."' ,'".$_POST['List1']."', '".$_POST['sex']."',
  '".$_POST['race']."', '".$_POST['gender']."', '".$_POST['alt_person']."', '".$_POST['alt_number']."', 'C', 'Community Member', 'Community Member', 'Community Member',
  '".$_POST['nationality']."')";
  
  mysqli_query($db, $mql);


    $success = "Account Created successfully! <p>You will be redirected in <span id='counter'>5</span> second(s).</p>
                            <script type='text/javascript'>
                            function countdown() {
                              var i = document.getElementById('counter');
                              if (parseInt(i.innerHTML)<=0) {
                                location.href = 'login.php';
                              }
                              i.innerHTML = parseInt(i.innerHTML)-1;
                            }
                            setInterval(function(){ countdown(); },1000);
                            </script>'";
    
     header("refresh:5;url=login.php"); // redireted once inserted success
    }
  }

}

?>


        <div class="page-wrapper">
            <!-- top Links -->
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <section class="inner-page-hero bg-image" data-image-src="images/img/banner-covid-english.jpg">
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                                <div>
                                    <p><br><br><br><br><br><br></p>
                                    <p><br><br><br><br><br></p>        
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                                <div class="pull-left right-text white-txt" id="sec01">
                                    <h6></h6>
                                    <p></p>
                                    <ul class="nav nav-inline">
                                        <li class="nav-item"> 
                                        </li>
                                        <li class="nav-item"> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end:Inner page hero -->

         <div class="page-wrapper">
            <div class="breadcrumb">
              <h3 align="center">Community Member: User Registration</h3>
               <div class="container">
                  <ul>
                     <li>
                      <a href="#" class="active">
                      <?php  if(!empty($message)){ ?>
                        <span style="color:red;">
                            <?php echo $message; ?>
                        <?php  } ?>
                        </span>
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

            <?php  include_once('forms/public_registration_form.php'); ?>

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