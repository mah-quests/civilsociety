<?php

include("../connection/connect.php");
error_reporting(0);
session_start();

  if(isset($_POST['update']))
  {
  $usersOrders=mysqli_query($db,"select * FROM users_orders where o_id='".$_GET['newform_id']."'");

  while($ro=mysqli_fetch_array($usersOrders)) {
    $unique_code = $ro['unique_code'];
  }

    $address=$_POST['address'];
    $ward=$_POST['ward'];
    $municipality=$_POST['municipality'];
    $district=$_POST['district'];
    $provice=$_POST['provice'];
    $phone=$_POST['phone'];
    $alt_person=$_POST['alt_person'];
    $alt_number=$_POST['alt_number'];
    $age=$_POST['age'];
    $race=$_POST['race'];
    $religion=$_POST['religion'];


$sql=mysqli_query($db,"update request_by_partner
                        set

                        address='$address',
                        ward='$ward',
                        municipality='$municipality',
                        district='$district',
                        provice='$provice',
                        phone='$phone',
                        alt_person='$alt_person',
                        alt_number='$alt_number',
                        age='$age',
                        race='$race',
                        religion='$religion'

                        where unique_code='$unique_code'");


$sql=mysqli_query($db,"update users_orders
                        set

                        delivery_address='$address',
                        municipality='$municipality',
                        province='$provice'

                        where unique_code='$unique_code'");

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
      <td>
        <input type="text" size="150" class="form-control" name="firstname" value="<?php  echo $ro['firstname'];  ?>" readonly><br>
        <input type="text" class="form-control"  name="lastname" value="<?php  echo $ro['lastname'];  ?>" readonly>
      </td>
  </tr>

  <tr>
      <td><b>Identification Number </b></td>
      <td>
          <input type="text" class="form-control"  name="identification" value="<?php  echo $ro['identification'];  ?>" readonly>
      </td>
  </tr>

  <tr>
      <td><b>Home Address</b></td>
      <td>
          <input type="text" class="form-control"  style="height:80px" name="address" value="<?php  echo $ro['address']; ?>" >
      </td>
  </tr>

  <tr>
      <td><b>Ward</b></td>
      <td>
          <input type="text" class="form-control"  name="ward" value="<?php  echo $ro['ward'] ?>" >
      </td>
  </tr>

  <tr>
      <td><b>Municipality </b></td>
      <td>
          <input type="text" class="form-control"  name="municipality" value="<?php  echo $ro['municipality']; ?>" >
      </td>
  </tr>

  <tr>
      <td><b>District </b></td>
      <td>
          <input type="text" class="form-control"  name="district" value="<?php  echo $ro['district'];  ?>" >
      </td>
  </tr>

  <tr>
      <td><b>Province </b></td>
      <td>
          <input type="text" class="form-control"  name="provice" value="<?php  echo $ro['provice'];  ?>" >
      </td>
  </tr>

  <tr>
      <td><b>Cellphone </b></td>
    <td>
        <input type="text" class="form-control"  name="phone" value="<?php  echo $ro['phone'];  ?>" >
    </td>
  </tr>

  <tr>
      <td><b>Alternate Contact Person </b></td>
    <td>
        <input type="text" class="form-control"  name="alt_person" value="<?php  echo $ro['alt_person'];  ?>" >
    </td>
  </tr>

  <tr>
      <td><b>Alternate Contact Number</b></td>
    <td>
        <input type="text" class="form-control"  name="alt_number" value="<?php  echo $ro['alt_number'];  ?>" >
    </td>
  </tr>

  <tr>
      <td><b>Age </b></td>
    <td>
        <input type="text" class="form-control"  name="age" value="<?php  echo $ro['age']; ?>"  >
    </td>
  </tr>

  <tr>
      <td><b>Race</b></td>
      <?php if($ro['race'] != ""){ ?>
                  <td>
                      <input type="text" class="form-control"  name="race" value="<?php  echo $ro['race']; ?>"  >
                  </td>
                <?php } else { ?>
                  <td>
                      <input type="text" class="form-control"  name="other_race" value="<?php  echo $ro['other_race']; ?>"  >
                  </td>
                <?php  } ?>
  </tr>

  <tr>
      <td><b>Religion </b></td>
    <td>
        <input type="text" class="form-control"  name="religion" value="<?php  echo $ro['religion']; ?>"  >
    </td>
  </tr>
<!--
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
    <td>
        <input type="text" class="form-control"  name="settlement" value="<?php  echo $row['settlement']; ?>"  readonly>
    </td>
  </tr>

  <tr>
      <td><b>Number of people living in the household</b></td>
    <td>
        <input type="text" class="form-control"  name="people_in_house" value="<?php  echo $row['people_in_house']; ?>"  readonly>
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
    <td>
        <input type="text" class="form-control"  name="num_homo_sex" value="<?php  echo $row['num_homo_sex']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Females</b></td>
    <td>
        <input type="text" class="form-control"  name="females_in_house" value="<?php  echo $row['females_in_house']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Males</b></td>
    <td>
        <input type="text" class="form-control"  name="males_in_house" value="<?php  echo $row['males_in_house']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Other(s)</b></td>
    <td>
        <input type="text" class="form-control"  name="lgbt_in_house" value="<?php  echo $row['lgbt_in_house']; ?>"  readonly>
    </td>
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
    <td>
        <input type="text" class="form-control"  name="num_bi_sex" value="<?php  echo $row['num_bi_sex']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Gay(s)</b></td>
    <td>
        <input type="text" class="form-control"  name="gay_in_house" value="<?php  echo $row['gay_in_house']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Heterosexual(s)</b></td>
    <td>
        <input type="text" class="form-control"  name="num_hetero_sex" value="<?php  echo $row['num_hetero_sex']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Lesbian(s)</b></td>
    <td>
        <input type="text" class="form-control"  name="lesbian_in_house" value="<?php  echo $row['lesbian_in_house']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Cisgender(s)</b></td>
    <td>
        <input type="text" class="form-control"  name="num_cis_gender" value="<?php  echo $row['num_cis_gender']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Gender Nonconfirming/ Non-Binary</b></td>
    <td>
        <input type="text" class="form-control"  name="num_nonconfirm_gender" value="<?php  echo $row['num_nonconfirm_gender']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Transgender(s)</b></td>
    <td>
        <input type="text" class="form-control"  name="num_trans_gender" value="<?php  echo $row['num_trans_gender']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Queer/ Questioning(s)</b></td>
    <td>
        <input type="text" class="form-control"  name="num_queer_gender" value="<?php  echo $row['num_queer_gender']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Other Genders(s)</b></td>
    <td>
        <input type="text" class="form-control"  name="num_other_gender" value="<?php  echo $row['num_other_gender']; ?>"  readonly>
    </td>
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
    <td>
        <input type="text" class="form-control"  name="age0_2" value="<?php  echo $row['age0_2']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Between 14 and 18 years</b></td>
    <td>
        <input type="text" class="form-control"  name="age13_18" value="<?php  echo $row['age13_18']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Between 19 and 35 years</b></td>
    <td>
        <input type="text" class="form-control"  name="age19_59" value="<?php  echo $row['age19_59']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Between 36 and 59 years</b></td>
    <td>
        <input type="text" class="form-control"  name="age36_59" value="<?php  echo $row['age36_59']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Older than 60 years</b></td>
    <td>
        <input type="text" class="form-control"  name="age60plus" value="<?php  echo $row['age60plus']; ?>" readonly >
    </td>
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
    <td>
        <input type="text" class="form-control"  name="pre_r" value="<?php  echo $row['pre_r']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Grade R</b></td>
    <td>
        <input type="text" class="form-control"  name="grade_r" value="<?php  echo $row['grade_r']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Grade 1 - 7</b></td>
    <td>
        <input type="text" class="form-control"  name="grade1_7" value="<?php  echo $row['grade1_7']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Grade 8 - 9</b></td>
    <td>
        <input type="text" class="form-control"  name="grade8_9" value="<?php  echo $row['grade8_9']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Grade 10 - 12</b></td>
    <td>
        <input type="text" class="form-control"  name="grade10_12" value="<?php  echo $row['grade10_12']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Tertiary</b></td>
    <td>
        <input type="text" class="form-control"  name="tertiary" value="<?php  echo $row['tertiary']; ?>" readonly >
    </td>
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
    <td>
        <input type="text" class="form-control"  name="number_people_employed" value="<?php  echo $row['number_people_employed']; ?>"  readonly>
    </td>
  </tr>

  <tr>
      <td><b>Number of people with Formal employment</b></td>
    <td>
        <input type="text" class="form-control"  name="number_formal_employment" value="<?php  echo $row['number_formal_employment']; ?>" readonly >
    </td>
      </td>
  </tr>

   <tr>
      <td><b>Number of people with informal employment</b></td>
    <td>
        <input type="text" class="form-control"  name="number_informal_employment" value="<?php  echo $row['number_informal_employment']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Number of people still receiving income during the covid pandemic and lockdown?</b></td>
    <td>
        <input type="text" class="form-control"  name="still_receiving_income" value="<?php  echo $row['still_receiving_income']; ?>" readonly >
    </td>
  </tr>


   <tr>
      <td><b>How many people have lost their jobs in the household due to COVID 19/Lockdown?</b></td>
    <td>
        <input type="text" class="form-control"  name="employment_lost" value="<?php  echo $row['employment_lost']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Anyone in the household receiving any form of debt relief?</b></td>
    <td>
        <input type="text" class="form-control"  name="debt_relief" value="<?php  echo $row['debt_relief']; ?>" readonly >
    </td>
  </tr>


   <tr>
      <td><b>Number of people on social grant recepients in the household</b></td>
    <td>
        <input type="text" class="form-control"  name="social_grants" value="<?php  echo $row['social_grants']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Is there anyone in the house who is receiving any form of debt relief?</b></td>
    <td>
        <input type="text" class="form-control"  name="debt_relief" value="<?php  echo $row['debt_relief']; ?>" readonly >
    </td>
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
    <td>
        <input type="text" class="form-control"  name="oldperson_grant" value="<?php  echo $row['oldperson_grant']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Disability Grant</b></td>
    <td>
        <input type="text" class="form-control"  name="disability_grant" value="<?php  echo $row['disability_grant']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>People on Care-Dependency Grant</b></td>
    <td>
        <input type="text" class="form-control"  name="caredependancy_grant" value="<?php  echo $row['caredependancy_grant']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>War Veterans’ Grant</b></td>
    <td>
        <input type="text" class="form-control"  name="warveteran_grant" value="<?php  echo $row['warveteran_grant']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Child Support Grant</b></td>
    <td>
        <input type="text" class="form-control"  name="childsupport_grant" value="<?php  echo $row['childsupport_grant']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Foster Child Grant</b></td>
    <td>
        <input type="text" class="form-control"  name="fosterchild_grant" value="<?php  echo $row['fosterchild_grant']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Grant-in-Aid</b></td>
    <td>
        <input type="text" class="form-control"  name="grantin_grant" value="<?php  echo $row['grantin_grant']; ?>"  readonly>
    </td>
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
    <td>
        <input type="text" class="form-control"  name="any_kind_abuse" value="<?php  echo $row['any_kind_abuse']; ?>" readonly >
    </td>
  </tr>

  <tr>
      <td><b>From Law Enforcement</b></td>
    <td>
        <input type="text" class="form-control"  name="lawEnforcementCond" value="<?php  echo $row['lawEnforcementCond']; ?>" readonly >
    </td>
  </tr>

  <tr>
      <td><b>Type of Law Enforcement violation</b></td>
    <td>
        <input type="text" class="form-control"  name="lawEnforcementType" value="<?php  echo $row['lawEnforcementType']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>From Community Member</b></td>
    <td>
        <input type="text" class="form-control"  name="communityMemberCond" value="<?php  echo $row['communityMemberCond']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Type of Community Member violation</b></td>
    <td>
        <input type="text" class="form-control"  name="communityMemberType" value="<?php  echo $row['communityMemberType']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>From Health Professional</b></td>
    <td>
        <input type="text" class="form-control"  name="healthCareCheck" value="<?php  echo $row['healthCareCheck']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Type of Health Professional violation</b></td>
    <td>
        <input type="text" class="form-control"  name="healthCareType" value="<?php  echo $row['healthCareType']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>From Gender Based Violance</b></td>
    <td>
        <input type="text" class="form-control"  name="domesticCond" value="<?php  echo $row['domesticCond']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Type of Gender Based Violance violation</b></td>
    <td>
        <input type="text" class="form-control"  name="domesticType" value="<?php  echo $row['domesticType']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Violation details</b></td>
    <td>
        <input type="text" class="form-control"  name="violation_details" value="<?php  echo $row['violation_details']; ?>" readonly >
    </td>
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
    <td>
        <input type="text" class="form-control"  name="number_disabled_adult" value="<?php  echo $row['number_disabled_adult']; ?>" readonly >
    </td>
  </tr>

  <tr>
      <td><b>Disabled Children</b></td>
    <td>
        <input type="text" class="form-control"  name="number_disabled_child" value="<?php  echo $row['number_disabled_child']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Psycho social disability</b></td>
    <td>
        <input type="text" class="form-control"  name="psyco_social_disability" value="<?php  echo $row['psyco_social_disability']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Physical disability</b></td>
    <td>
        <input type="text" class="form-control"  name="physical_disability" value="<?php  echo $row['physical_disability']; ?>" readonly >
    </td>
  </tr>


   <tr>
      <td><b>Other disability</b></td>
    <td>
        <input type="text" class="form-control"  name="other_disability" value="<?php  echo $row['other_disability']; ?>" readonly >
    </td>
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
    <td>
        <input type="text" class="form-control"  name="chronic_medication" value="<?php  echo $row['chronic_medication']; ?>"  readonly>
    </td>
  </tr>

  <tr>
      <td><b>Do you have access to traditional healers for medication purposes</b></td>
    <td>
        <input type="text" class="form-control"  name="traditional_healers" value="<?php  echo $row['traditional_healers']; ?>" readonly >
    </td>
      </td>
  </tr>

   <tr>
      <td><b>Number of pregnant people in the house</b></td>
    <td>
        <input type="text" class="form-control"  name="no_pregnant_people" value="<?php  echo $row['no_pregnant_people']; ?>" readonly >
    </td>
  </tr>

<?php
  }
  while($row=mysqli_fetch_array($medicalInfo02))
  {
?>


   <tr>
      <td><b>Is there anyone at your house working as COVID-19 Frontline Worker for essential service</b></td>
    <td>
        <input type="text" class="form-control"  name="essential_services_worker" value="<?php  echo $row['essential_services_worker']; ?>" readonly >
    </td>
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
    <td>
        <input type="text" class="form-control"  name="healthCareCondition" value="<?php  echo $row['healthCareCondition']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Disaster Management</b></td>
    <td>
        <input type="text" class="form-control"  name="disasterCondition" value="<?php  echo $row['disasterCondition']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Retail</b></td>
    <td>
        <input type="text" class="form-control"  name="retailCondition" value="<?php  echo $row['retailCondition']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Emegency Respondants</b></td>
    <td>
        <input type="text" class="form-control"  name="emegencyCondition" value="<?php  echo $row['emegencyCondition']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Transport Services</b></td>
    <td>
        <input type="text" class="form-control"  name="transportCondition" value="<?php  echo $row['transportCondition']; ?>" readonly >
    </td>
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
    <td>
        <input type="text" class="form-control"  name="dryCoughCond" value="<?php  echo $row['dryCoughCond']; ?>"  readonly>
    </td>
  </tr>

  <tr>
      <td><b>Sore Throat</b></td>
    <td>
        <input type="text" class="form-control"  name="soreThroatConditionCond" value="<?php  echo $row['soreThroatConditionCond']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Muscle Pain</b></td>
    <td>
        <input type="text" class="form-control"  name="musclePainConditionCond" value="<?php  echo $row['musclePainConditionCond']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Tiredness</b></td>
    <td>
        <input type="text" class="form-control"  name="tirednessCondition" value="<?php  echo $row['tirednessCondition']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>High Temperature</b></td>
    <td>
        <input type="text" class="form-control"  name="highTempCond" value="<?php  echo $row['highTempCond']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Diarrhoea</b></td>
    <td>
        <input type="text" class="form-control"  name="diarrhoeaCondition" value="<?php  echo $row['diarrhoeaCondition']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Shortness of breath</b></td>
    <td>
        <input type="text" class="form-control"  name="shortBreathConditionCond" value="<?php  echo $row['shortBreathConditionCond']; ?>" readonly >
    </td>
  </tr>


   <tr>
      <td><b>Should we share Covid-19 related infomation to you on WhatsApp</b></td>
    <td>
        <input type="text" class="form-control"  name="whatsappp_subscribe" value="<?php  echo $row['whatsappp_subscribe']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Do you have enough infomation about Covid-19</b></td>
    <td>
        <input type="text" class="form-control"  name="infoCovid" value="<?php  echo $row['infoCovid']; ?>" readonly >
    </td>
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
    <td>
        <input type="text" class="form-control"  name="email" value="<?php  echo $row['email']; ?>"  readonly>
    </td>
  </tr>

  <tr>
      <td><b>Social Media</b></td>
    <td>
        <input type="text" class="form-control"  name="social_media" value="<?php  echo $row['social_media']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Billboards</b></td>
    <td>
        <input type="text" class="form-control"  name="billboards" value="<?php  echo $row['billboards']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Internet Search</b></td>
    <td>
        <input type="text" class="form-control"  name="internet" value="<?php  echo $row['internet']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Printed Media</b></td>
    <td>
        <input type="text" class="form-control"  name="print_media" value="<?php  echo $row['print_media']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>SMS</b></td>
    <td>
        <input type="text" class="form-control"  name="sms" value="<?php  echo $row['sms']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Radio and TV </b></td>
    <td>
        <input type="text" class="form-control"  name="radio_tv" value="<?php  echo $row['radio_tv']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Municipalities</b></td>
    <td>
        <input type="text" class="form-control"  name="municipality" value="<?php  echo $row['municipality']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Neighbourhood Committee</b></td>
    <td>
        <input type="text" class="form-control"  name="neighbourhood_committee" value="<?php  echo $row['neighbourhood_committee']; ?>" readonly >
    </td>

  </tr>

   <tr>
      <td><b>Local NPOs </b></td>
    <td>
        <input type="text" class="form-control"  name="local_npo" value="<?php  echo $row['local_npo']; ?>"  readonly>
    </td>
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
    <td>
        <input type="text" class="form-control"  name="isindebele" value="<?php  echo $row['isindebele']; ?>" readonly >
    </td>
  </tr>

  <tr>
      <td><b>Sesotho sa Leboa</b></td>
    <td>
        <input type="text" class="form-control"  name="sesotho_sa_leboa" value="<?php  echo $row['sesotho_sa_leboa']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Sesotho sa Borwa</b></td>
    <td>
        <input type="text" class="form-control"  name="sesotho_sa_borwa" value="<?php  echo $row['sesotho_sa_borwa']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>SiSwati</b></td>
    <td>
        <input type="text" class="form-control"  name="siswati" value="<?php  echo $row['siswati']; ?>" readonly >
    </td>
  </tr>
   <tr>
      <td><b>Xitsonga</b></td>
    <td>
        <input type="text" class="form-control"  name="xitsonga" value="<?php  echo $row['xitsonga']; ?>" readonly >
    </td>
  </tr>


   <tr>
      <td><b>Setswana</b></td>
    <td>
        <input type="text" class="form-control"  name="setswana" value="<?php  echo $row['setswana']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Tshivenḓa</b></td>
    <td>
        <input type="text" class="form-control"  name="tshivenda" value="<?php  echo $row['tshivenda']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>IsiXhosa</b></td>
    <td>
        <input type="text" class="form-control"  name="isixhosa" value="<?php  echo $row['isixhosa']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>IsiZulu</b></td>
    <td>
        <input type="text" class="form-control"  name="isizulu" value="<?php  echo $row['isizulu']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Afrikaans</b></td>
    <td>
        <input type="text" class="form-control"  name="afrikaans" value="<?php  echo $row['afrikaans']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>English</b></td>
    <td>
        <input type="text" class="form-control"  name="english" value="<?php  echo $row['english']; ?>"  readonly>
    </td>
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
    <td>
        <input type="text" class="form-control"  name="food" value="<?php  echo $row['food']; ?>" readonly>
    </td>
  </tr>

  <tr>
      <td><b>Shelter</b></td>
    <td>
        <input type="text" class="form-control"  name="shelter" value="<?php  echo $row['shelter']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Water</b></td>
    <td>
        <input type="text" class="form-control"  name="water" value="<?php  echo $row['water']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Clothing</b></td>
    <td>
        <input type="text" class="form-control"  name="clothing" value="<?php  echo $row['clothing']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Masks</b></td>
    <td>
        <input type="text" class="form-control"  name="masks" value="<?php  echo $row['masks']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Sanitizers/ Soap</b></td>
    <td>
        <input type="text" class="form-control"  name="sanitizers" value="<?php  echo $row['sanitizers']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Medical attention</b></td>
    <td>
        <input type="text" class="form-control"  name="medicals" value="<?php  echo $row['medicals']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Human Rights Violations</b></td>
    <td>
        <input type="text" class="form-control"  name="rights_violation" value="<?php  echo $row['rights_violation']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Signs/ Symptoms of COVID – 19</b></td>
    <td>
        <input type="text" class="form-control"  name="symptoms_covid" value="<?php  echo $row['symptoms_covid']; ?>" readonly >
    </td>
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
    <td>
        <input type="text" class="form-control"  name="id_documents" value="<?php  echo $row['id_documents']; ?>" readonly >
    </td>
  </tr>

  <tr>
      <td><b>Social Grants</b></td>
    <td>
        <input type="text" class="form-control"  name="social_grants_assist" value="<?php  echo $row['social_grants_assist']; ?>"  readonly>
    </td>
  </tr>

   <tr>
      <td><b>Essential worker’s Safety Equipment</b></td>
    <td>
        <input type="text" class="form-control"  name="ppe" value="<?php  echo $row['ppe']; ?>"  readonly>
    </td>
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
    <td>
        <input type="text" class="form-control"  name="employment" value="<?php  echo $row['employment']; ?>" readonly >
    </td>
  </tr>

  <tr>
      <td><b>Education</b></td>
    <td>
        <input type="text" class="form-control"  name="education" value="<?php  echo $row['education']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Electricity</b></td>
    <td>
        <input type="text" class="form-control"  name="electricity" value="<?php  echo $row['electricity']; ?>" readonly >
    </td>
  </tr>

   <tr>
      <td><b>Transport</b></td>
    <td>
        <input type="text" class="form-control"  name="transport" value="<?php  echo $row['transport']; ?>" readonly >
    </td>
  </tr>

<?php } ?>

-->

</table>

<br>

<div align="center">
    <tr align="center">
      <td>
      <td><input type="submit" name="update"  class="btn btn-primary" value="Submit">

      <input name="Submit2" type="submit"  class="btn btn-danger"  value="Close" onClick="return f2();" style="cursor: pointer;"  />
    </td>
    </tr>
</div>

 </form>
</div>

<br>

</body>
</html>