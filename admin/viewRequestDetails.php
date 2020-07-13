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
      <td><b>Ward</b></td>
      <td><?php echo htmlentities($ro['ward']); ?></td>
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
  while($row=mysqli_fetch_array($householdDetails))
  {
?>

    <tr>
      <td colspan="2">
        <center>
          <b>House Composition Profile</b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>Type of Settlement</b></td>
      <td><?php echo htmlentities($row['settlement']); ?></td>
  </tr>    
  
  <tr>
      <td><b>Number of people living in the household</b></td>
      <td><?php echo htmlentities($row['people_in_house']); ?>
      </td>
  </tr>


  <tr>
    <td colspan="2">
      <center>
        <b>Household Sex Composition:</b>
      </center>
    </td>
  </tr>


   <tr>
      <td><b>Intersex</b></td>
      <td><?php echo htmlentities($row['num_homo_sex']); ?></td>
  </tr>

   <tr>
      <td><b>Females</b></td>
      <td><?php echo htmlentities($row['females_in_house']); ?></td>
  </tr>

   <tr>
      <td><b>Males</b></td>
      <td><?php echo htmlentities($row['males_in_house']); ?></td>
  </tr>

   <tr>
      <td><b>Other(s)</b></td>
      <td><?php echo htmlentities($row['lgbt_in_house']); ?></td>
  </tr>

  <tr>
    <td colspan="2">
      <center>
        <b>Household Sexuality composition:</b>
      </center>
    </td>
  </tr>

   <tr>
      <td><b>Bisexual(s)</b></td>
      <td><?php echo htmlentities($row['num_bi_sex']); ?></td>
  </tr>  

   <tr>
      <td><b>Gay(s)</b></td>
      <td><?php echo htmlentities($row['gay_in_house']); ?></td>
  </tr>

   <tr>
      <td><b>Heterosexual(s)</b></td>
      <td><?php echo htmlentities($row['num_hetero_sex']); ?></td>
  </tr>  

   <tr>
      <td><b>Lesbian(s)</b></td>
      <td><?php echo htmlentities($row['lesbian_in_house']); ?></td>
  </tr> 

   <tr>
      <td><b>Cisgender(s)</b></td>
      <td><?php echo htmlentities($row['num_cis_gender']); ?></td>
  </tr> 

   <tr>
      <td><b>Gender Nonconfirming/ Non-Binary</b></td>
      <td><?php echo htmlentities($row['num_nonconfirm_gender']); ?></td>
  </tr>

   <tr>
      <td><b>Transgender(s)</b></td>
      <td><?php echo htmlentities($row['num_trans_gender']); ?></td>
  </tr>  

   <tr>
      <td><b>Queer/ Questioning(s)</b></td>
      <td><?php echo htmlentities($row['num_queer_gender']); ?></td>
  </tr>

   <tr>
      <td><b>Other Genders(s)</b></td>
      <td><?php echo htmlentities($row['num_other_gender']); ?></td>
  </tr>  

  <tr>
    <td colspan="2">
      <center>
        <b>Age grouping of the house occupants:</b>
      </center>
    </td>
  </tr>

   <tr>
      <td><b>Between 0 and 13 years</b></td>
      <td><?php echo htmlentities($row['age0_2']); ?></td>
  </tr> 

   <tr>
      <td><b>Between 14 and 18 years</b></td>
      <td><?php echo htmlentities($row['age13_18']); ?></td>
  </tr> 

   <tr>
      <td><b>Between 19 and 35 years</b></td>
      <td><?php echo htmlentities($row['age19_59']); ?></td>
  </tr> 

   <tr>
      <td><b>Between 36 and 59 years</b></td>
      <td><?php echo htmlentities($row['age36_59']); ?></td>
  </tr> 

   <tr>
      <td><b>Older than 60 years</b></td>
      <td><?php echo htmlentities($row['age60plus']); ?></td>
  </tr> 

  <tr>
    <td colspan="2">
      <center>
        <b>How many people in the household are studying:</b>
      </center>
    </td>
  </tr>

   <tr>
      <td><b>Pre Grade-R</b></td>
      <td><?php echo htmlentities($row['pre_r']); ?></td>
  </tr>  

   <tr>
      <td><b>Grade R</b></td>
      <td><?php echo htmlentities($row['grade_r']); ?></td>
  </tr> 

   <tr>
      <td><b>Grade 1 - 7</b></td>
      <td><?php echo htmlentities($row['grade1_7']); ?></td>
  </tr> 

   <tr>
      <td><b>Grade 8 - 9</b></td>
      <td><?php echo htmlentities($row['grade8_9']); ?></td>
  </tr> 

   <tr>
      <td><b>Grade 10 - 12</b></td>
      <td><?php echo htmlentities($row['grade10_12']); ?></td>
  </tr>          

   <tr>
      <td><b>Tertiary</b></td>
      <td><?php echo htmlentities($row['tertiary']); ?></td>
  </tr>  

<?php
  }
  while($row=mysqli_fetch_array($employmentStats))
  {
?>

    <tr>
      <td colspan="2">
        <center>
          <b>Household Employment Profile</b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>How many people are employed in the household</b></td>
      <td><?php echo htmlentities($row['number_people_employed']); ?></td>
  </tr>    
  
  <tr>
      <td><b>Number of people with Formal employment</b></td>
      <td><?php echo htmlentities($row['number_formal_employment']); ?>
      </td>
  </tr>

   <tr>
      <td><b>Number of people with informal employment</b></td>
      <td><?php echo htmlentities($row['number_informal_employment']); ?></td>
  </tr>

   <tr>
      <td><b>Number of people still receiving income during the covid pandemic and lockdown?</b></td>
      <td><?php echo htmlentities($row['still_receiving_income']); ?></td>
  </tr>


   <tr>
      <td><b>How many people have lost their jobs in the household due to COVID 19/Lockdown?</b></td>
      <td><?php echo htmlentities($row['employment_lost']); ?></td>
  </tr>

   <tr>
      <td><b>Anyone in the household receiving any form of debt relief?</b></td>
      <td><?php echo htmlentities($row['debt_relief']); ?></td>
  </tr>  


   <tr>
      <td><b>Number of people on social grant recepients in the household</b></td>
      <td><?php echo htmlentities($row['social_grants']); ?></td>
  </tr> 

   <tr>
      <td><b>Is there anyone in the house who is receiving any form of debt relief?</b></td>
      <td><?php echo htmlentities($row['debt_relief']); ?></td>
  </tr> 

    <tr>
      <td colspan="2">
        <center>
          <b>Type of grants in the household</b>
        </center>
      </td>
    </tr>

   <tr>
      <td><b>Old persons’ Grant</b></td>
      <td><?php echo htmlentities($row['oldperson_grant']); ?></td>
  </tr> 

   <tr>
      <td><b>Disability Grant</b></td>
      <td><?php echo htmlentities($row['disability_grant']); ?></td>
  </tr>       

   <tr>
      <td><b>People on Care-Dependency Grant</b></td>
      <td><?php echo htmlentities($row['caredependancy_grant']); ?></td>
  </tr> 

   <tr>
      <td><b>War Veterans’ Grant</b></td>
      <td><?php echo htmlentities($row['warveteran_grant']); ?></td>
  </tr> 

   <tr>
      <td><b>Child Support Grant</b></td>
      <td><?php echo htmlentities($row['childsupport_grant']); ?></td>
  </tr> 

   <tr>
      <td><b>Foster Child Grant</b></td>
      <td><?php echo htmlentities($row['fosterchild_grant']); ?></td>
  </tr> 
 
   <tr>
      <td><b>Grant-in-Aid</b></td>
      <td><?php echo htmlentities($row['grantin_grant']); ?></td>
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
  while($row=mysqli_fetch_array($disabilityDetails))
  {
?>

    <tr>
      <td colspan="2">
        <center>
          <b>Disability House Profile</b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>Disabled Adults</b></td>
      <td><?php echo htmlentities($row['number_disabled_adult']); ?></td>
  </tr>    
  
  <tr>
      <td><b>Disabled Children</b></td>
      <td><?php echo htmlentities($row['number_disabled_child']); ?>
      </td>
  </tr>

   <tr>
      <td><b>Psycho social disability</b></td>
      <td><?php echo htmlentities($row['psyco_social_disability']); ?></td>
  </tr>

   <tr>
      <td><b>Physical disability</b></td>
      <td><?php echo htmlentities($row['physical_disability']); ?></td>
  </tr>


   <tr>
      <td><b>Other disability</b></td>
      <td><?php echo htmlentities($row['other_disability']); ?></td>
  </tr>

<?php
  }
  while($row=mysqli_fetch_array($medicalInfo01))
  {
?>

    <tr>
      <td colspan="2">
        <center>
          <b>Household Health Profile</b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>Number of people on chronic medication in the household</b></td>
      <td><?php echo htmlentities($row['chronic_medication']); ?></td>
  </tr>    
  
  <tr>
      <td><b>Do you have access to traditional healers for medication purposes</b></td>
      <td><?php echo htmlentities($row['traditional_healers']); ?>
      </td>
  </tr>

   <tr>
      <td><b>Number of pregnant people in the house</b></td>
      <td><?php echo htmlentities($row['no_pregnant_people']); ?></td>
  </tr>  

<?php
  }
  while($row=mysqli_fetch_array($medicalInfo02))
  {
?>


   <tr>
      <td><b>Is there anyone at your house working as COVID-19 Frontline Worker for essential service</b></td>
      <td><?php echo htmlentities($row['essential_services_worker']); ?></td>
  </tr>

    <tr>
      <td colspan="2">
        <center>
          <b>Household frontline workers in: </b>
        </center>
      </td>
    </tr>

   <tr>
      <td><b>Health care</b></td>
      <td><?php echo htmlentities($row['healthCareCondition']); ?></td>
  </tr>

   <tr>
      <td><b>Disaster Management</b></td>
      <td><?php echo htmlentities($row['disasterCondition']); ?></td>
  </tr>

   <tr>
      <td><b>Retail</b></td>
      <td><?php echo htmlentities($row['retailCondition']); ?></td>
  </tr>

   <tr>
      <td><b>Emegency Respondants</b></td>
      <td><?php echo htmlentities($row['emegencyCondition']); ?></td>
  </tr>

   <tr>
      <td><b>Transport Services</b></td>
      <td><?php echo htmlentities($row['transportCondition']); ?></td>
  </tr>

    <tr>
      <td colspan="2">
        <center>
          <b>Have you or anyone in the house exhibited the following symptoms: </b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>Dry Cough</b></td>
      <td><?php echo htmlentities($row['dryCoughCond']); ?></td>
  </tr>    
  
  <tr>
      <td><b>Sore Throat</b></td>
      <td><?php echo htmlentities($row['soreThroatConditionCond']); ?>
      </td>
  </tr>

   <tr>
      <td><b>Muscle Pain</b></td>
      <td><?php echo htmlentities($row['musclePainConditionCond']); ?></td>
  </tr>

   <tr>
      <td><b>Tiredness</b></td>
      <td><?php echo htmlentities($row['tirednessCondition']); ?></td>
  </tr>

   <tr>
      <td><b>High Temperature</b></td>
      <td><?php echo htmlentities($row['highTempCond']); ?></td>
  </tr>

   <tr>
      <td><b>Diarrhoea</b></td>
      <td><?php echo htmlentities($row['diarrhoeaCondition']); ?></td>
  </tr>

   <tr>
      <td><b>Shortness of breath</b></td>
      <td><?php echo htmlentities($row['shortBreathConditionCond']); ?></td>
  </tr>      


   <tr>
      <td><b>Should we share Covid-19 related infomation to you on WhatsApp</b></td>
      <td><?php echo htmlentities($row['whatsappp_subscribe']); ?></td>
  </tr> 

   <tr>
      <td><b>Do you have enough infomation about Covid-19</b></td>
      <td><?php echo htmlentities($row['infoCovid']); ?></td>
  </tr>      


<?php
  }
  while($row=mysqli_fetch_array($requestMediaSource))
  {
?>

    <tr>
      <td colspan="2">
        <center>
          <b>Household mostly receive COVID–19 related information on the following mediums: </b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>E-mail</b></td>
      <td><?php echo htmlentities($row['email']); ?></td>
  </tr>    
  
  <tr>
      <td><b>Social Media</b></td>
      <td><?php echo htmlentities($row['social_media']); ?>
      </td>
  </tr>

   <tr>
      <td><b>Billboards</b></td>
      <td><?php echo htmlentities($row['billboards']); ?></td>
  </tr>

   <tr>
      <td><b>Internet Search</b></td>
      <td><?php echo htmlentities($row['internet']); ?></td>
  </tr>

   <tr>
      <td><b>Printed Media</b></td>
      <td><?php echo htmlentities($row['print_media']); ?></td>
  </tr>

   <tr>
      <td><b>SMS</b></td>
      <td><?php echo htmlentities($row['sms']); ?></td>
  </tr>

   <tr>
      <td><b>Radio and TV </b></td>
      <td><?php echo htmlentities($row['radio_tv']); ?></td>
  </tr>

   <tr>
      <td><b>Municipalities</b></td>
      <td><?php echo htmlentities($row['municipality']); ?></td>
  </tr>    

   <tr>
      <td><b>Neighbourhood Committee</b></td>
      <td><?php echo htmlentities($row['neighbourhood_committee']); ?></td>
  </tr>

   <tr>
      <td><b>Local NPOs </b></td>
      <td><?php echo htmlentities($row['local_npo']); ?></td>
  </tr> 
<?php
  }
  while($row=mysqli_fetch_array($requestLanguageInfo))
  {
?>

    <tr>
      <td colspan="2">
        <center>
          <b>Household mostly receive COVID–19 related information on the following languages: </b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>IsiNdebele</b></td>
      <td><?php echo htmlentities($row['isindebele']); ?></td>
  </tr>    
  
  <tr>
      <td><b>Sesotho sa Leboa</b></td>
      <td><?php echo htmlentities($row['sesotho_sa_leboa']); ?>
      </td>
  </tr>

   <tr>
      <td><b>Sesotho sa Borwa</b></td>
      <td><?php echo htmlentities($row['sesotho_sa_borwa']); ?></td>
  </tr>

   <tr>
      <td><b>SiSwati</b></td>
      <td><?php echo htmlentities($row['siswati']); ?></td>
  </tr>


   <tr>
      <td><b>Xitsonga</b></td>
      <td><?php echo htmlentities($row['xitsonga']); ?></td>
  </tr>


   <tr>
      <td><b>Setswana</b></td>
      <td><?php echo htmlentities($row['setswana']); ?></td>
  </tr>

   <tr>
      <td><b>Tshivenḓa</b></td>
      <td><?php echo htmlentities($row['tshivenda']); ?></td>
  </tr>

   <tr>
      <td><b>IsiXhosa</b></td>
      <td><?php echo htmlentities($row['isixhosa']); ?></td>
  </tr>

   <tr>
      <td><b>IsiZulu</b></td>
      <td><?php echo htmlentities($row['isizulu']); ?></td>
  </tr>

   <tr>
      <td><b>Afrikaans</b></td>
      <td><?php echo htmlentities($row['afrikaans']); ?></td>
  </tr>

   <tr>
      <td><b>English</b></td>
      <td><?php echo htmlentities($row['english']); ?></td>
  </tr>  
<?php
  }
  while($row=mysqli_fetch_array($requestPriority01))
  {
?>

    <tr>
      <td colspan="2">
        <center>
          <b>1st Level Priority Needs</b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>Food</b></td>
      <td><?php echo htmlentities($row['food']); ?></td>
  </tr>    
  
  <tr>
      <td><b>Shelter</b></td>
      <td><?php echo htmlentities($row['shelter']); ?>
      </td>
  </tr>

   <tr>
      <td><b>Water</b></td>
      <td><?php echo htmlentities($row['water']); ?></td>
  </tr>

   <tr>
      <td><b>Clothing</b></td>
      <td><?php echo htmlentities($row['clothing']); ?></td>
  </tr>

   <tr>
      <td><b>Masks</b></td>
      <td><?php echo htmlentities($row['masks']); ?></td>
  </tr>

   <tr>
      <td><b>Sanitizers/ Soap</b></td>
      <td><?php echo htmlentities($row['sanitizers']); ?></td>
  </tr>

   <tr>
      <td><b>Medical attention</b></td>
      <td><?php echo htmlentities($row['medicals']); ?></td>
  </tr>

   <tr>
      <td><b>Human Rights Violations</b></td>
      <td><?php echo htmlentities($row['rights_violation']); ?></td>
  </tr>

   <tr>
      <td><b>Signs/ Symptoms of COVID – 19</b></td>
      <td><?php echo htmlentities($row['symptoms_covid']); ?></td>
  </tr>

<?php
  }
  while($row=mysqli_fetch_array($requestPriority02))
  {
?>

    <tr>
      <td colspan="2">
        <center>
          <b>2nd Level Priority Needs</b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>Identification Documents</b></td>
      <td><?php echo htmlentities($row['id_documents']); ?></td>
  </tr>    
  
  <tr>
      <td><b>Social Grants</b></td>
      <td><?php echo htmlentities($row['social_grants_assist']); ?>
      </td>
  </tr>

   <tr>
      <td><b>Essential worker’s Safety Equipment</b></td>
      <td><?php echo htmlentities($row['ppe']); ?></td>
  </tr>

<?php
  }
  while($row=mysqli_fetch_array($requestPriority03))
  {
?>

    <tr>
      <td colspan="2">
        <center>
          <b>3rd Level Priority Needs</b>
        </center>
      </td>
    </tr>

  <tr>
      <td><b>Employment</b></td>
      <td><?php echo htmlentities($row['employment']); ?></td>
  </tr>    
  
  <tr>
      <td><b>Education</b></td>
      <td><?php echo htmlentities($row['education']); ?>
      </td>
  </tr>

   <tr>
      <td><b>Electricity</b></td>
      <td><?php echo htmlentities($row['electricity']); ?></td>
  </tr>

   <tr>
      <td><b>Transport</b></td>
      <td><?php echo htmlentities($row['transport']); ?></td>
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
