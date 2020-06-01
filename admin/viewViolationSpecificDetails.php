<?php

include("../connection/connect.php");
error_reporting(0);
session_start();

  if(isset($_POST['update']))
  {
    $form_id=$_GET['form_id'];
    $status=$_POST['status'];
    $remark=$_POST['remark'];
$query=mysqli_query($db,"insert into remark(frm_id,status,remark) values('$form_id','$status','$remark')");
$sql=mysqli_query($db,"update users_orders set status='$status' where o_id='$form_id'");

echo "<script>alert('form details updated successfully');</script>";

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
  font: 600 15px "Raleway","Helvetica Neue",Helvetica,Arial,sans-serif;
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
  <table  border="0" cellspacing="0" cellpadding="0">
    
<?php 

  $usersOrders=mysqli_query($db,"select * FROM users_orders where o_id='".$_GET['newform_id']."'");

  while($ro=mysqli_fetch_array($usersOrders)) {

  $agentDetails=mysqli_query($db,"select * FROM users where u_id='".$ro['u_id']."'");

  $unique_code = $ro['unique_code'];

  $requestByPartner=mysqli_query($db,"select * FROM request_by_partner where unique_code='$unique_code'");

  $disabilityDetails=mysqli_query($db,"select * FROM request_disability where unique_code='$unique_code'");

  $employmentStats=mysqli_query($db,"select * FROM request_employment_stats where unique_code='$unique_code'");

  $medicalInfo01=mysqli_query($db,"select * FROM request_medication_01 where unique_code='$unique_code'");

  $medicalInfo02=mysqli_query($db,"select * FROM request_medication_02 where unique_code='$unique_code'");

  $householdDetails=mysqli_query($db,"select * FROM request_people where unique_code='$unique_code'");

  $violationDetails=mysqli_query($db,"select * FROM request_violations where unique_code='$unique_code'");

  $requestDetails=mysqli_query($db,"select * FROM users_orders where unique_code='$unique_code'");

  $requestMediaSource=mysqli_query($db,"select * FROM request_covid_media_info where unique_code='$unique_code'");

  $requestLanguageInfo=mysqli_query($db,"select * FROM request_info_language where unique_code='$unique_code'");

  $requestPriority01=mysqli_query($db,"select * FROM request_priority_01 where unique_code='$unique_code'");

  $requestPriority02=mysqli_query($db,"select * FROM request_priority_02 where unique_code='$unique_code'");        

  $requestPriority03=mysqli_query($db,"select * FROM request_priority_03 where unique_code='$unique_code'");        

  }
  while($ro=mysqli_fetch_array($requestByPartner)) 
  {
?>

    <tr>
      <td colspan="2">
        <center><b>
         Request Reference Number : <?php echo $ro['unique_code'];?>
        </b></center>
      </td>
    </tr>

  <tr>
      <td><b>Contact Person </b></td>
      <td><?php echo htmlentities($ro['firstname'].' '.$ro['lastname']); ?></td>
  </tr>

  <tr>
      <td><b>Identification Number </b></td>
      <td><?php echo htmlentities($ro['identification']); ?></td>
  </tr>

  <tr>
      <td><b>Home Address</b></td>
      <td><?php echo htmlentities($ro['address']); ?></td>
  </tr>

  <tr>
      <td><b>Province, District & Municipality </b></td>
      <td><?php echo htmlentities(
              $ro['provice'].', '
              .$ro['district'].', '
              .$ro['municipality']); ?>
      </td>
  </tr> 

  <tr>
      <td><b>Cellphone </b></td>
      <td><?php echo htmlentities($ro['phone']); ?></td>
  </tr>

  <tr>
      <td><b>Alternate Contact Person </b></td>
      <td><?php echo htmlentities($ro['alt_person']); ?></td>
  </tr>

  <tr>
      <td><b>Alternate Contact Number</b></td>
      <td><?php echo htmlentities($ro['alt_number']); ?></td>
  </tr>  

  <tr>
      <td><b>Sex </b></td>
      <td><?php echo htmlentities($ro['sex']); ?></td>
  </tr>
<?php if ($ro['sexuality'] == ""){

?>
  <tr>
      <td><b>Heterosexual </b></td>
      <td><?php echo htmlentities($ro['hetero_sex']); ?></td>
  </tr>
  <tr>
      <td><b>Homosexual </b></td>
      <td><?php echo htmlentities($ro['homo_sex']); ?></td>
  </tr>
  <tr>
      <td><b>Bisexual </b></td>
      <td><?php echo htmlentities($ro['bi_sex']); ?></td>
  </tr>   
  <tr>
      <td><b>Other Sexuality</b></td>
      <td><?php echo htmlentities($ro['other_sexuality']); ?></td>
  </tr>     

<?php
} else {
?>
  <tr>
      <td><b>Sexuality </b></td>
      <td><?php echo htmlentities($ro['sexuality']); ?></td>
  </tr>
<?php
  }

if ($ro['gender'] == ""){

?>
  <tr>
      <td><b>Cisgender </b></td>
      <td><?php echo htmlentities($ro['cis_gender']); ?></td>
  </tr>
  <tr>
      <td><b>Transgender </b></td>
      <td><?php echo htmlentities($ro['trans_gender']); ?></td>
  </tr>
  <tr>
      <td><b>Gender Nonconfirming </b></td>
      <td><?php echo htmlentities($ro['nonconfirm_gender']); ?></td>
  </tr>   
  <tr>
      <td><b>Queer / Questioning</b></td>
      <td><?php echo htmlentities($ro['queer_gender']); ?></td>
  </tr>   
  <tr>
      <td><b>Other Gender</b></td>
      <td><?php echo htmlentities($ro['other_gender']); ?></td>
  </tr>     

<?php
} else {
?>
  <tr>
      <td><b>Gender </b></td>
      <td><?php echo htmlentities($ro['gender']); ?></td>
  </tr>
<?php
  }
?> 

  <tr>
      <td><b>Age </b></td>
      <td><?php echo htmlentities($ro['age']); ?></td>
  </tr>

  <tr>
      <td><b>Race</b></td>
      <td><?php if($ro['race'] != ""){
                  echo htmlentities($ro['race']); 
                } else {
                  echo htmlentities($ro['other_race']); 
                }
              
          ?>
      </td>
  </tr> 

  <tr>
      <td><b>Religion </b></td>
      <td><?php echo htmlentities($ro['religion']); ?></td>
  </tr>
 

<?php
  }
  while($row=mysqli_fetch_array($violationDetails))
  {
?>

    <tr>
      <td colspan="2">
        <center>
          <b>Human rights & violations profile</b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>Has anyone in the household experienced any kind of abuse, assult or harrasment during the lockdown</b></td>
      <td><?php echo htmlentities($row['any_kind_abuse']); ?></td>
  </tr>    
  
  <tr>
      <td><b>From Law Enforcement</b></td>
      <td><?php echo htmlentities($row['lawEnforcementCond']); ?>
      </td>
  </tr>

  <tr>
      <td><b>Type of Law Enforcement violation</b></td>
      <td><?php echo htmlentities($row['lawEnforcementType']); ?>
      </td>
  </tr>  

   <tr>
      <td><b>From Community Member</b></td>
      <td><?php echo htmlentities($row['communityMemberCond']); ?></td>
  </tr>

   <tr>
      <td><b>Type of Community Member violation</b></td>
      <td><?php echo htmlentities($row['communityMemberType']); ?></td>
  </tr>

   <tr>
      <td><b>From Health Professional</b></td>
      <td><?php echo htmlentities($row['healthCareCheck']); ?></td>
  </tr>

   <tr>
      <td><b>Type of Health Professional violation</b></td>
      <td><?php echo htmlentities($row['healthCareType']); ?></td>
  </tr>

   <tr>
      <td><b>From Gender Based Violance</b></td>
      <td><?php echo htmlentities($row['domesticCond']); ?></td>
  </tr>

   <tr>
      <td><b>Type of Gender Based Violance violation</b></td>
      <td><?php echo htmlentities($row['domesticType']); ?></td>
  </tr>  


<?php 
}
while($row=mysqli_fetch_array($agentDetails))
{
?>

    <tr>
      <td colspan="2">
        <center>
          <b>Agent Details : <?php echo $row['f_name']. ' '.$row['l_name'] ?></b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>Cellphone Number</b></td>
      <td><?php echo htmlentities($row['phone']); ?></td>
  </tr>    
  
  <tr>
      <td><b>Agent Email</b></td>
      <td><?php echo htmlentities($row['email']); ?>
      </td>
  </tr>

   <tr>
      <td><b>Organization Name</b></td>
      <td><?php echo htmlentities($row['organization_name']); ?></td>
  </tr>

<?php 
  }
?>  

 
</table>
 </form>
</div>

<div align="center">
    <input name="Submit2" type="submit" class="btn btn-danger" 
    value="Close this window " onClick="return f2();" 
    style="cursor: pointer;"  
    /> 
</div> 
<br>

</body>
</html>
