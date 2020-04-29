<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Covid 19 Front Web App Login Page</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/login.css">

    <style type="text/css">
    #buttn{
      color:#fff;
      background-color: #ff3300;
    }
    </style>
  
</head>

<body style=background-image:url("images/login-banner.png");>

<?php
include("connection/connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions
if(isset($_POST['submit']))   // if button is submit
{
  $username = $_POST['username'];  //fetch records from login form
  $password = $_POST['password'];
  
  if(!empty($_POST["submit"]))   // if records were not empty
     {
    $loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
    
    $result=mysqli_query($db, $loginquery); //executing
    $row=mysqli_fetch_array($result);
  
    if(is_array($row))  // if matching records in the array & if everything is right
      {
        $_SESSION["user_id"] = $row['u_id']; // put user id into temp session
        $message = "Login Successful!";
        header("refresh:1;url=index.php"); // redirect to index.php page
          } 
      else
      {
                $message = "Invalid Username or Password!"; // throw error
            }
   }

}
?>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle">
   
  </div>
  <div class="form" align="center">
    <h2>Login to the Covid Front Web Application</h2>
    <span style="color:red;"><?php echo $message; ?></span> 
   <span style="color:green;"><?php echo $success; ?></span>
    <form action="" method="post">
      <input type="text" placeholder="Username"  name="username"/>
      <input type="password" placeholder="Password" name="password"/>
      <input type="submit" id="buttn" name="submit" value="Login" />
    </form>
  </div>
  
  <div class="cta">Not registered yet?<a href="household_registration.php" style="color:#f30;"> Register a household for requesting assistance.</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>

</html>