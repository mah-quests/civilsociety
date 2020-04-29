<?php
include_once 'header_app.php';
session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/connect.php"); // connection
if(isset($_POST['submit'] )) //if submit btn is pressed
{
     if(empty($_POST['firstname']) ||  //fetching and find if its empty
   	    empty($_POST['username'])|| 
        empty($_POST['lastname'])|| 
		    empty($_POST['email']) ||  
		    empty($_POST['phone'])||
		    empty($_POST['password'])||
        empty($_POST['district']) ||
        empty($_POST['municipality']) ||
        empty($_POST['provice']) ||
        empty($_POST['sex']) ||
        empty($_POST['alt_person']) ||
        empty($_POST['alt_number']) ||
        empty($_POST['nationality']) ||
        empty($_POST['cpassword']) ||
        empty($_POST['cpassword']))
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

    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) // Validate email address
    {
       	$message = "Invalid email address please type a valid email!";
    }
	elseif(mysqli_num_rows($check_username) > 0)  //check username
     {
    	$message = 'ID Number already registered!';
     }
	elseif(mysqli_num_rows($check_celphone) > 0) //check email
     {
    	$message = 'Celphone Number already exists!';
     }
	else{
       
	 //inserting values into db
	  $mql = "INSERT INTO users
  (username, f_name, l_name, email, phone, password, address, district, municipality, provice, sex, alt_person, alt_number, network, organization_structure, organization_name, nationality) 
  VALUES
  ('".$_POST['username']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['phone']."', '".md5($_POST['password'])."', '".$_POST['address']."' ,'".$_POST['district']."', '".$_POST['municipality']."' ,'".$_POST['provice']."', '".$_POST['sex']."', '".$_POST['alt_person']."', '".$_POST['alt_number']."', 'C', 'Community Member', 'Community Member', '".$_POST['nationality']."')";
  
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
            <section class="inner-page-hero bg-image" data-image-src="images/img/banner-covid-english.png">
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
                          <div class="form-group col-sm-6">
                            <label for="exampleInputFirstNames">First Names</label>
                              <input class="form-control" type="text" name="firstname" id="example-text-input" placeholder="First Name" required> 
                          </div>
                          <div class="form-group col-sm-6">
                            <label for="exampleInputSurname">Surname</label>
                              <input class="form-control" type="text" name="lastname" id="example-text-input-2" placeholder="Surname" required> 
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Sex</label>
                            <select id="inputState" class="form-control" name="sex">
                              <option selected>Male</option>
                              <option>Female</option>
                              <option>Other</option>
                            </select>
                          </div>  
                          <div class="form-group col-sm-6">
                            <label for="exampleCelphone">Celphone number</label>
                              <input class="form-control" type="text" name="phone" id="example-tel-input-3" placeholder="Phone" required> 
                              <small id="emailHelp" class="form-text text-muted">You will be contacted using this celphone number. Must be unique!
                              </small> 
                          </div>                          
                          <div class="form-group col-sm-6">
                            <label for="exampleEmail">Email address</label>
                              <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter valid email" required> 
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Nationality</label>
                            <select id="inputState" class="form-control" name="nationality">
                              <option>South Africa</option>
                              <option>Lesotho</option>
                              <option>Botswana</option>
                              <option>Zimbabwe</option>
                              <option>Zambia</option>
                              <option>Eswatini</option>
                              <option>Other</option>
                            </select>
                          </div>                            
                          <div class="form-group col-sm-12">
                            <label for="exampleTextarea">Home Address</label>
                              <textarea class="form-control" id="exampleTextarea"  name="address" rows="3" required>
                              </textarea>
                          </div>
                          <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Municipality</label>
                              <input class="form-control" type="text" name="municipality" id="example-text-input-2" placeholder="Enter Municipality"> 
                          </div>
                          <div class="form-group col-sm-6">
                            <label for="exampleCity">District</label>
                            <input class="form-control" type="text" name="district" id="example-text-input" placeholder="Enter City"> 
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputState">Province</label>
                            <select id="inputState" class="form-control" name="provice" required>
                              <option selected>Gauteng</option>
                              <option>Free State</option>
                              <option>North West</option>
                              <option>Mpumalanga</option>
                              <option>Limpopo</option>
                              <option>KwaZulu Natal</option>
                              <option>Northern Cape</option>
                              <option>Eastern Cape</option>
                              <option>Western Cape</option>
                            </select>
                          </div> 
                          <div class="form-group col-md-6" >
                            <label for="inputFirstName">Alternative Contact Person</label>
                            <input type="text" class="form-control" id="alt_person" name="alt_person" placeholder="Enter Alternative Contact Person" required>
                          </div>
                          <div class="form-group col-md-6" >
                            <label for="inputIDNumber">Alternative Contact Number</label>
                            <input type="text" class="form-control" id="alt_number" name="alt_number" placeholder="Enter Alternative Contact Number" required>
                          </div>                                                   
                          <div class="form-group col-sm-12">
                            <label for="exampleInputIDNumber">ID Number</label>
                              <input class="form-control" type="text" name="username" id="example-text-input" placeholder="ID Number" required> 
                              <small id="emailHelp" class="form-text text-muted">You will use your ID Number to login. Must be unique
                              </small> 
                            </div>                          
                          <div class="form-group col-sm-6">
                            <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required> 
                          </div>
                          <div class="form-group col-sm-6">
                            <label for="exampleInputPassword1">Repeat password</label>
                              <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2" placeholder="Password" required> 
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-sm-12" align="center">
                          <p> 
                            <input type="submit" value="Register" name="submit" class="btn btn-primary"> 
                          </p>
                        </div>                     
                      </div>
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