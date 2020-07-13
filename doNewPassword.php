<!DOCTYPE html>
<html lang="en" >
<html>
<head>
  <title>Covid Front Reset Password</title>
   
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel='stylesheet' href="assets/css/style.css"/>

    <style type="text/css">
    #buttn{
      color:#fff;
      background-color: #ff3300;
    }
    </style>

<?php
include("connection/connect.php"); //INCLUDE CONNECTION
error_reporting(0); // hide undefine index errors
session_start(); // temp sessions
if(isset($_POST['submit']))   // if button is submit
{

  $user_id = $_GET['user_id'];

  if($_POST['password'] != $_POST['cpassword']){  //matching passwords
      $message = "Password not match";
  }
  elseif(strlen($_POST['password']) < 6)  //cal password length
  {
      $message = "Password Must be more than 8 characters!";
  }
  else{

  $mql = " UPDATE users SET password = '".md5($_POST['password'])."' 
      WHERE u_id = '$user_id' "; 

  mysqli_query($db, $mql);

    $success = "Passwords changed successfully! <p>Page redirection... <span id='counter'>5</span> second(s).</p>
          <script type='text/javascript'>
          function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML)<=0) {
              location.href = 'doNewPassword.php';
            }
            i.innerHTML = parseInt(i.innerHTML)-1;
          }
          setInterval(function(){ countdown(); },1000);
          </script>'";
    
     header("refresh:5;url=login.php");
    }
  } 
?>

</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,body{
    background-image: url('images/img/login-reset-page.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    font: normal 16px "Raleway","Helvetica Neue",Helvetica,Arial,sans-serif;
    }

    .container{
    height: 100%;
    align-content: center;
    }

    .card{
    height: 420px;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
    background-color: rgba(0,0,0,0.5) !important;
    }

    .social_icon span{
    font-size: 60px;
    margin-left: 10px;
    color: #FFFFFF;
    }

    .social_icon span:hover{
    color: white;
    cursor: pointer;
    }

    .card-header h3{
    color: white;
    }

    .social_icon{
    position: absolute;
    right: 20px;
    top: -45px;
    }

    .input-group-prepend span{
    width: 50px;
    background-color: #ffffff;
    color: black;
    border:0 !important;
    }

    input:focus{
    outline: 0 0 0 0  !important;
    box-shadow: 0 0 0 0 !important;

    }

    .remember{
    color: white;
    }

    .remember input
    {
    width: 20px;
    height: 20px;
    margin-left: 15px;
    margin-right: 5px;
    }

    .login_btn{
    color: black;
    background-color: #447EBA;
    width: 100px;
    }

    .login_btn:hover{
    color: black;
    background-color: white;
    }

    .links{
    color: white;
    }

    .links a{
    margin-left: 4px;
    }

</style>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header" align="center">
        <h3 align="center">Reset User Password</h3>
          <a class="navbar-brand"> 
              <img align="center" width="200" height="52" src="images/img/logo-login-page.png" alt="COVID-19 Front"> 
          </a>         
        <div >
        </div>
      </div>
      <div class="card-body">

        <form  action="" method="post">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-key"></i>
              </span>
          </div>
            <input type="password" class="form-control" placeholder="Enter New Password" name="password" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-key"></i>
              </span>
          </div>
            <input type="password" class="form-control" placeholder="Renter your Password" name="cpassword" required>
          </div>
          <div class="row align-items-center remember">
            <input type="checkbox">Remember Me
          </div>
          <div class="form-group">
            <input align="center" type="submit" id="buttn" name="submit" value="Reset" class="btn float-right login_btn">
          </div>
        </form>
      </div>

      <div align="center">
        <span style="color:red;"><?php echo $message; ?></span> 
        <span style="color:green;"><?php echo $success; ?></span>
      </div>

      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Ooooh, I remember my password now... <a href="login.php"> Going Back to login.</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>