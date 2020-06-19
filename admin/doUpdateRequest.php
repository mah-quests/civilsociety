<?php

include("../connection/connect.php");
error_reporting(0);
session_start();


  $usersOrders=mysqli_query($db,"select * FROM users_orders where o_id='".$_GET['form_id']."'");

  while($ro=mysqli_fetch_array($usersOrders)) {

  $unique_code = $ro['unique_code'];
  $rowID=$ro['o_id'];
  $link_to_url =" 


  To view the requestion. Click here:
  http://thusasechaba.org.za/admin/guestViewRequestDetails.php?user_upd=$rowID ";

  }

  $adminUsers=mysqli_query($db,"SELECT * FROM admin where adm_id='".$_SESSION["adm_id"]."'");

  while($row=mysqli_fetch_array($adminUsers)) {

  $adm_id = $row['adm_id'];
  $username = $row['username'];

  }

  if(isset($_POST['update']))
  {
  
  $form_id=$_GET['form_id'];
  $status=$_POST['status'];
  $remark=$username.' initiated a request for your attention.';
  $remark.=
'

'.$_POST['remark'];
  $heads=$_POST['heads'];
  $advocacy=$_POST['advocacy'];
  $mobilization=$_POST['mobilization'];
  $humanright=$_POST['humanright'];
  $media=$_POST['media'];
  $administration=$_POST['administration'];
  $database=$_POST['database'];
  $comms=$_POST['comms'];
  $screen=$_POST['screen'];
  $mne=$_POST['mne'];
  $it=$_POST['it'];


  $query=mysqli_query($db,"insert into remark(frm_id,status,remark)
                   values
                   ('$form_id','$status','$remark')");    

  $sql=mysqli_query($db,"update users_orders set status='$status' where o_id='$form_id'");

//Send email notification

  if ( $heads == "yes") {
    include("./emails/heads_mail.php");
  }

  if ( $advocacy == "yes" ) {
    include("./emails/advocacy_mail.php");
  }

  if ( $mobilization == "yes" ) {
    include("./emails/mobilization_mail.php");
  }        

  if ( $humanright == "yes" ) {
    include("./emails/humanright_mail.php");
  }

  if ( $media == "yes" ) {
    include("./emails/media_mail.php");
  }

  if ( $it == "yes" ) {
    include("./emails/it_mail.php");
  }   

  if ( $administration == "yes" ) {
    include("./emails/administration_mail.php");
  } 

  if ( $database == "yes" ) {
    include("./emails/database_mail.php");
  }   

  if ( $comms == "yes" ) {
    include("./emails/comms_mail.php");
  }

  if ( $screen == "yes" ) {
    include("./emails/screen_mail.php");
  }  

  if ( $mne == "yes" ) {
    include("./emails/mne_mail.php");
  }     

  echo "<script>alert('Successfully updated request details');</script>";

  }

 ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Thusa Sechaba">
    <meta name="author" content="Thusa Sechaba">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="../images/black-covid-logo.png">
    <title>View Request Details</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style type="text/css" rel="stylesheet">


.indent-small {
  margin-left: 5px;
}
.form-group.internal {
  margin-bottom: 0;
}
.dialog-panel {
  margin: 10px;
}
.datepicker-dropdown {
  z-index: 200 !important;
}
.panel-body {
  background: #e5e5e5;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  font: 600 15px "Open Sans", Arial, sans-serif;
}
label.control-label {
  font-weight: 600;
  color: #777;
}


table { 
	width: 650px; 
	border-collapse: collapse; 
	margin: auto;
	margin-top:50px;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #004684; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 14px;
	}

	</style>
</head>

<body>

<div style="margin-left:50px;">
 <form name="updateticket" id="updatecomplaint" method="post"> 
 
<?php 

  $usersOrders=mysqli_query($db,"select * FROM users_orders where o_id='".$_GET['form_id']."'");

  while($ro=mysqli_fetch_array($usersOrders)) {

  $unique_code = $ro['unique_code'];

}

?>


<table  border="0" cellspacing="0" cellpadding="0">
    <tr >
      <td><b>Unique Form Number</b></td>
      <td><?php echo htmlentities($_GET['form_id']); ?></td>
    </tr>
	 <tr>
      <td>Reference Number</td>
      <td ><?php echo $unique_code; ?></td>
    </tr>
   
    <tr >
      <td><b>Status</b></td>
      <td>
        <select name="status" required="required" >
          <option value="">Select Status</option>
          <option value="in process">In Progress</option>
          <option value="closed">Closed</option>
	         <option value="rejected">Rejected</option>
        </select>
      </td>
    </tr>

      <tr >
      <td><b>Comments from M&E or Stream head</b></td>
      <td><textarea name="remark" cols="50" rows="10" required="required"></textarea></td>
    </tr>

    <tr >
      <td><b>Email Notification</b></td>
      <td>
        <p>

            <label><input type="checkbox" name="mobilization" value="yes" /> Social Mobilization</label>
            <label><input type="checkbox" name="humanright" value="yes" /> Human Rights</label>
            <label><input type="checkbox" name="it" value="yes" /> IT</label> <br>
            <label><input type="checkbox" name="mne" value="yes" /> Monitoring and Evaluation</label>            
            <label><input type="checkbox" name="media" value="yes" /> Media</label>
            <label><input type="checkbox" name="advocacy" value="yes" /> Advocacy</label><br>           
            <label><input type="checkbox" name="administration" value="yes" /> Administration</label>
            <label><input type="checkbox" name="database" value="yes" /> Database</label>
            <label><input type="checkbox" name="comms" value="yes" /> Comms Team</label>
            <label><input type="checkbox" name="screen" value="yes" /> Screen and Tracing</label> 
                               
        </p>
      </td>
    </tr>    

    <tr align="center">
      <td>
      <td><input type="submit" name="update"  class="btn btn-primary" value="Submit">
	   
      <input name="Submit2" type="submit"  class="btn btn-danger"  value="Close" onClick="return f2();" style="cursor: pointer;"  />
    </td>
    </tr>
</table>
 </form>


</div>

</body>
</html>
