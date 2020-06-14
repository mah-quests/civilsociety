<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
include("connection/dataCollection.php");
error_reporting(0);
session_start();

if(empty($_SESSION['user_id']))  //if usser is not login redirected baack to login page
{
    header('location:login.php');
}
else
{
    
include_once 'header_app.php';
session_start(); //temp session
error_reporting(0); // hide undefine index

include("connection/connect.php"); // connection
if(isset($_POST['submit'] )) //if submit btn is pressed
{
     if(
        !empty($_POST['firstname']) &&  //fetching and find if its empty
        !empty($_POST['lastname']) &&
        !empty($_POST['identification']) &&
        !empty($_POST['phone']) &&        
        !empty($_POST['sex']) &&
        !empty($_POST['DropDown1']) &&
        !empty($_POST['DropDown2']) &&
        !empty($_POST['DropDown3']) &&
        !empty($_POST['other_sex']) &&
        !empty($_POST['hetero_sex']) &&
        !empty($_POST['homo_sex']) &&
        !empty($_POST['bi_sex']) &&
        !empty($_POST['other_sexuality']) &&
        !empty($_POST['cis_gender']) &&
        !empty($_POST['trans_gender']) &&
        !empty($_POST['nonconfirm_gender']) &&                        
        !empty($_POST['queer_gender']) &&
        !empty($_POST['other_gender']) &&
        !empty($_POST['race']) &&
        !empty($_POST['religion']) &&
        !empty($_POST['other_race']) &&
        !empty($_POST['age']) &&        
        !empty($_POST['address']) &&
        !empty($_POST['ward']) &&
        !empty($_POST['List1']) &&    //Province
        !empty($_POST['List2']) &&    //District      
        !empty($_POST['List3']) &&   //Municipality
        !empty($_POST['alt_person']) &&
        !empty($_POST['alt_number']) &&


        !empty($_POST['settlement']) &&
        !empty($_POST['people_in_house']) &&
        !empty($_POST['males_in_house']) &&
        !empty($_POST['females_in_house']) &&
        !empty($_POST['lgbt_in_house']) &&
        !empty($_POST['age0_2']) &&
        !empty($_POST['age13_18']) &&
        !empty($_POST['age19_59']) &&
        !empty($_POST['age36_59']) &&        
        !empty($_POST['age60plus']) && 
        !empty($_POST['gay_in_house']) &&
        !empty($_POST['intersex_in_house']) &&        
        !empty($_POST['lesbian_in_house']) &&
        !empty($_POST['num_homo_sex']) &&
        !empty($_POST['num_bi_sex']) &&
        !empty($_POST['num_other_sexuality']) &&
        !empty($_POST['num_cis_gender']) &&
        !empty($_POST['num_trans_gender']) &&
        !empty($_POST['num_nonconfirm_gender']) &&
        !empty($_POST['num_queer_gender']) && 
        !empty($_POST['num_other_gender']) &&   
        !empty($_POST['pre_r']) &&   
        !empty($_POST['grade_r']) &&   
        !empty($_POST['grade1_7']) &&   
        !empty($_POST['grade8_9']) &&   
        !empty($_POST['grade10_12']) &&   
        !empty($_POST['tertiary']) &&         


        !empty($_POST['number_people_employed']) &&
        !empty($_POST['employment_lost']) &&
        !empty($_POST['still_receiving_income']) &&
        !empty($_POST['social_grants']) &&
        !empty($_POST['oldperson_grant']) &&        
        !empty($_POST['disability_grant']) &&        
        !empty($_POST['caredependancy_grant']) &&        
        !empty($_POST['warveteran_grant']) &&        
        !empty($_POST['childsupport_grant']) &&        
        !empty($_POST['fosterchild_grant']) &&   
        !empty($_POST['grantin_grant']) &&       
        !empty($_POST['number_formal_employment']) &&        
        !empty($_POST['number_informal_employment']) &&   
        !empty($_POST['debt_relief']) &&        
        !empty($_POST['debt_relief_details']) &&                        


        !empty($_POST['any_kind_abuse']) &&
        !empty($_POST['lawEnforcementCond']) &&
        !empty($_POST['lawEnforcementType']) &&
        !empty($_POST['communityMemberCond']) &&
        !empty($_POST['communityMemberType']) &&
        !empty($_POST['healthCareCheck']) &&
        !empty($_POST['healthCareType']) &&
        !empty($_POST['domesticCond']) &&
        !empty($_POST['domesticType']) &&


        !empty($_POST['number_disabled']) &&
        !empty($_POST['number_disabled_child']) &&
        !empty($_POST['number_disabled_adult']) &&
        !empty($_POST['psyco_social_disability']) &&
        !empty($_POST['physical_disability']) &&
        !empty($_POST['other_disability']) &&


        !empty($_POST['email']) &&
        !empty($_POST['social_media']) &&
        !empty($_POST['billboards']) &&
        !empty($_POST['internet']) &&
        !empty($_POST['print_media']) &&
        !empty($_POST['sms']) &&
        !empty($_POST['radio_tv']) &&
        !empty($_POST['municipality']) &&
        !empty($_POST['neighbourhood_committee']) &&
        !empty($_POST['local_npo']) &&        


        !empty($_POST['isindebele']) &&
        !empty($_POST['sesotho_sa_leboa']) &&
        !empty($_POST['sesotho_sa_borwa']) &&
        !empty($_POST['siswati']) &&
        !empty($_POST['xitsonga']) &&
        !empty($_POST['setswana']) &&
        !empty($_POST['tshivenda']) &&
        !empty($_POST['isixhosa']) &&
        !empty($_POST['isizulu']) &&
        !empty($_POST['afrikaans']) &&        
        !empty($_POST['english']) &&        


        !empty($_POST['chronic_medication']) &&
        !empty($_POST['traditional_healers']) &&
        !empty($_POST['no_pregnant_people']) &&
        !empty($_POST['essential_services_worker']) &&
        !empty($_POST['healthCareCondition']) &&
        !empty($_POST['disasterCondition']) &&
        !empty($_POST['retailCondition']) &&   
        !empty($_POST['emegencyCondition']) &&
        !empty($_POST['transportCondition']) &&
        !empty($_POST['otherCondition']) &&
        !empty($_POST['highTempCond']) &&
        !empty($_POST['dryCoughCond']) &&
        !empty($_POST['soreThroatConditionCond']) &&
        !empty($_POST['diarrhoeaCondition']) && 
        !empty($_POST['tirednessCondition']) &&                 
        !empty($_POST['shortBreathConditionCond']) &&                 
        !empty($_POST['musclePainConditionCond']) &&                
        !empty($_POST['infoCovid']) &&
        !empty($_POST['whatsappp_subscribe']) && 


        !empty($_POST['food']) &&
        !empty($_POST['shelter']) &&
        !empty($_POST['water']) &&
        !empty($_POST['clothing']) &&
        !empty($_POST['masks']) &&
        !empty($_POST['sanitizers']) &&
        !empty($_POST['medicals']) &&   
        !empty($_POST['rights_violation']) &&   
        !empty($_POST['symptoms_covid']) &&                   


        !empty($_POST['id_documents']) &&
        !empty($_POST['social_grants_assist']) &&
        !empty($_POST['ppe']) &&


        !empty($_POST['employment']) &&
        !empty($_POST['education']) &&   
        !empty($_POST['electricity']) &&   
        !empty($_POST['transport']) &&   


        !empty($_POST['comments'])

      )
    {

      //cheching username & email if already present
      $message = "Something is wrong with the inputs. Please make sure all required fields are filled in correctly! ";

    }
  else
  {
    //cheching username & email if already present
  $check_celphone = mysqli_query($db, "SELECT phone FROM users where phone = '".$_POST['phone']."' ");
    
  if(strlen($_POST['phone']) < 10)  //cal phone length
  {
    $message = "invalid phone number!";
  }
  else{
  
  $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $reference = substr(str_shuffle($permitted_chars), 0, 8);
  $ip_address = $_SERVER['REMOTE_ADDR'];

//inserting values into 'request_by_partner' db
 $mql = "INSERT INTO request_by_partner
  (firstname, lastname, sex, other_sex, phone, address, ward, municipality, district, provice, alt_person, alt_number, identification, unique_code,  hetero_sex, homo_sex, bi_sex, other_sexuality, cis_gender, trans_gender, nonconfirm_gender, queer_gender, other_gender, age, race, other_race, religion, sexuality, gender) 
  VALUES
  ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['DropDown1']."', '".$_POST['other_sex']."', '".$_POST['phone']."', '".$_POST['address']."', '".$_POST['ward']."', '".$_POST['List3']."', '".$_POST['List2']."', '".$_POST['List1']."', '".$_POST['alt_person']."', '".$_POST['alt_number']."', '".$_POST['identification']."', '".$reference."', '".$_POST['hetero_sex']."', '".$_POST['homo_sex']."', '".$_POST['bi_sex']."', '".$_POST['other_sexuality']."', '".$_POST['cis_gender']."', '".$_POST['trans_gender']."', '".$_POST['nonconfirm_gender']."', '".$_POST['queer_gender']."', '".$_POST['other_gender']."' , '".$_POST['age']."' , '".$_POST['race']."', '".$_POST['other_race']."', '".$_POST['religion']."', '".$_POST['DropDown2']."', '".$_POST['DropDown3']."' )";


//inserting values into 'request_people' db
 $mql_rp = "INSERT INTO request_people
  (unique_code, people_in_house, settlement, males_in_house, females_in_house, lgbt_in_house, age0_2, age13_18, age19_59, age36_59, age60plus, gay_in_house, lesbian_in_house, num_hetero_sex, num_homo_sex, num_bi_sex, num_other_sexuality, num_cis_gender, num_trans_gender, num_nonconfirm_gender, num_queer_gender, num_other_gender, pre_r, grade_r, grade1_7, grade8_9, grade10_12, tertiary) 
  VALUES
  ('".$reference."', '".$_POST['people_in_house']."','".$_POST['settlement']."','".$_POST['males_in_house']."','".$_POST['females_in_house']."','".$_POST['lgbt_in_house']."','".$_POST['age0_2']."', '".$_POST['age13_18']."', '".$_POST['age19_59']."', '".$_POST['age36_59']."', '".$_POST['age60plus']."', '".$_POST['gay_in_house']."', '".$_POST['lesbian_in_house']."', '".$_POST['num_hetero_sex']."', '".$_POST['num_homo_sex']."', '".$_POST['num_bi_sex']."', '".$_POST['num_other_sexuality']."', '".$_POST['num_cis_gender']."', '".$_POST['num_trans_gender']."', '".$_POST['num_nonconfirm_gender']."', '".$_POST['num_queer_gender']."', '".$_POST['num_other_gender']."', '".$_POST['pre_r']."', '".$_POST['grade_r']."', '".$_POST['grade1_7']."', '".$_POST['grade8_9']."', '".$_POST['grade10_12']."', '".$_POST['tertiary']."')";


//inserting values into 'request_employment_stats' db
 $mql_emp = "INSERT INTO request_employment_stats
 (unique_code, number_people_employed, employment_lost, still_receiving_income, social_grants, oldperson_grant, disability_grant, caredependancy_grant, warveteran_grant, childsupport_grant, fosterchild_grant, grantin_grant, number_formal_employment, number_informal_employment, debt_relief, debt_relief_details) 
 VALUES
 ('".$reference."', '".$_POST['number_people_employed']."', '".$_POST['employment_lost']."', '".$_POST['still_receiving_income']."', '".$_POST['social_grants']."' , '".$_POST['oldperson_grant']."', '".$_POST['disability_grant']."', '".$_POST['caredependancy_grant']."', '".$_POST['warveteran_grant']."', '".$_POST['childsupport_grant']."', '".$_POST['fosterchild_grant']."', '".$_POST['grantin_grant']."', '".$_POST['number_formal_employment']."', '".$_POST['number_informal_employment']."', '".$_POST['debt_relief']."', '".$_POST['debt_relief_details']."')";


//inserting values into 'request_violations' db
$mql_viol = "INSERT INTO request_violations
(unique_code, any_kind_abuse, lawEnforcementCond, lawEnforcementType, communityMemberCond, communityMemberType, healthCareCheck, healthCareType, domesticCond, domesticType) 
 VALUES
('".$reference."', '".$_POST['any_kind_abuse']."', '".$_POST['lawEnforcementCond']."', '".$_POST['lawEnforcementType']."', '".$_POST['communityMemberCond']."' , '".$_POST['communityMemberType']."' , '".$_POST['healthCareCheck']."' , '".$_POST['healthCareType']."' , '".$_POST['domesticCond']."', '".$_POST['domesticType']."')";


//inserting values into 'request_disability' db
$mql_disable = "INSERT INTO request_disability
(unique_code, number_disabled, number_disabled_child, number_disabled_adult, psyco_social_disability, physical_disability, other_disability) 
 VALUES
('".$reference."', '".$_POST['number_disabled']."', '".$_POST['number_disabled_child']."', '".$_POST['number_disabled_adult']."', '".$_POST['psyco_social_disability']."', '".$_POST['physical_disability']."', '".$_POST['other_disability']."')";


//inserting values into 'request_covid_media_info' db
$mql_covid_media = "INSERT INTO request_covid_media_info
(unique_code, email, social_media, billboards, internet, print_media, sms, radio_tv, municipality, neighbourhood_committee, local_npo) 
 VALUES
('".$reference."', '".$_POST['email']."', '".$_POST['social_media']."', '".$_POST['billboards']."', '".$_POST['internet']."', '".$_POST['print_media']."', '".$_POST['sms']."', '".$_POST['radio_tv']."', '".$_POST['municipality']."', '".$_POST['neighbourhood_committee']."', '".$_POST['local_npo']."')";


//inserting values into 'request_info_language' db
$mql_covid_lang = "INSERT INTO request_info_language
(unique_code, isindebele, sesotho_sa_leboa, sesotho_sa_borwa, siswati, xitsonga, setswana, tshivenda, isixhosa, isizulu, afrikaans, english) 
 VALUES
('".$reference."', '".$_POST['isindebele']."', '".$_POST['sesotho_sa_leboa']."', '".$_POST['sesotho_sa_borwa']."', '".$_POST['siswati']."', '".$_POST['xitsonga']."', '".$_POST['setswana']."', '".$_POST['tshivenda']."', '".$_POST['isixhosa']."', '".$_POST['isizulu']."', '".$_POST['afrikaans']."', '".$_POST['english']."')";


//inserting values into request_medication db
 $mql_med_01 = "INSERT INTO request_medication_01
 (unique_code, chronic_medication, patient1_fullnames, patient1_id, patient1_facility, patient2_fullnames, patient2_id, patient2_facility, patient3_fullnames, patient3_id, patient3_facility, no_pregnant_people, traditional_healers) 
 VALUES
 ('".$reference."', '".$_POST['chronic_medication']."', '".$_POST['patient1_fullnames']."', '".$_POST['patient1_id']."', '".$_POST['patient1_facility']."', '".$_POST['patient2_fullnames']."', '".$_POST['patient2_id']."', '".$_POST['patient2_facility']."', '".$_POST['patient3_fullnames']."', '".$_POST['patient3_id']."', '".$_POST['patient3_facility']."', '".$_POST['no_pregnant_people']."', '".$_POST['traditional_healers']."')";


 $mql_med_02 = "INSERT INTO request_medication_02
 (unique_code, essential_services_worker, healthCareCondition, disasterCondition, retailCondition, emegencyCondition, transportCondition, otherCondition, highTempCond, dryCoughCond, soreThroatConditionCond, diarrhoeaCondition, tirednessCondition, shortBreathConditionCond, musclePainConditionCond, infoCovid, whatsappp_subscribe) 
 VALUES
 ('".$reference."', '".$_POST['essential_services_worker']."', '".$_POST['healthCareCondition']."' , '".$_POST['disasterCondition']."',  '".$_POST['retailCondition']."', '".$_POST['emegencyCondition']."', '".$_POST['transportCondition']."', '".$_POST['otherCondition']."', '".$_POST['highTempCond']."', '".$_POST['dryCoughCond']."' , '".$_POST['soreThroatConditionCond']."', '".$_POST['diarrhoeaCondition']."', '".$_POST['tirednessCondition']."',  '".$_POST['shortBreathConditionCond']."', '".$_POST['musclePainConditionCond']."', '".$_POST['infoCovid']."', '".$_POST['whatsappp_subscribe']."')";


//inserting values into 'request_priority_01 ' db
$mql_priority01 = "INSERT INTO request_priority_01 
(unique_code, food, shelter, water, clothing, masks, sanitizers, medicals, rights_violation, symptoms_covid) 
 VALUES
('".$reference."', '".$_POST['food']."', '".$_POST['shelter']."', '".$_POST['water']."', '".$_POST['clothing']."', '".$_POST['masks']."', '".$_POST['sanitizers']."', '".$_POST['medicals']."', '".$_POST['rights_violation']."', '".$_POST['symptoms_covid']."')";


//inserting values into 'request_priority_02 ' db
$mql_priority02 = "INSERT INTO request_priority_02 
(unique_code, id_documents, social_grants_assist, ppe) 
 VALUES
('".$reference."', '".$_POST['id_documents']."', '".$_POST['social_grants_assist']."', '".$_POST['ppe']."')";


//inserting values into 'request_priority_03 ' db
$mql_priority03 = "INSERT INTO request_priority_03 
(unique_code, employment, education, electricity, transport) 
 VALUES
('".$reference."', '".$_POST['employment']."', '".$_POST['education']."', '".$_POST['electricity']."', '".$_POST['transport']."')";


  $mql_chart = "INSERT INTO users_orders
  (unique_code, u_id, request_first_name, request_surname, delivery_address, municipality, comments, province, ip_address)
  VALUES
  ('".$reference."', '".$_SESSION["user_id"]."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['address']."', '".$_POST['List3']."', '".$_POST['comments']."', '".$_POST['List1']."', '".$ip_address."')";


  mysqli_query($db, $mql);
  mysqli_query($db, $mql_rp);
  mysqli_query($db, $mql_emp);
  mysqli_query($db, $mql_viol);
  mysqli_query($db, $mql_disable); 
  mysqli_query($db, $mql_covid_media); 
  mysqli_query($db, $mql_covid_lang); 
  mysqli_query($db, $mql_med_01);
  mysqli_query($db, $mql_med_02);
  mysqli_query($db, $mql_priority01);
  mysqli_query($db, $mql_priority02);
  mysqli_query($db, $mql_priority03);  
  mysqli_query($db, $mql_chart);


  $household_contact = $_POST['firstname'];
  $household_address = $_POST['address'];
  $household_phone = $_POST['phone'];
  $unique_code = $reference;

  $agentDetails=mysqli_query($db,"SELECT * FROM users where u_id='".$_SESSION["user_id"]."'");

  while($row=mysqli_fetch_array($agentDetails)) {

  $agent_name = $row['f_name'];
  $agent_email = $row['email'];

  include_once("./successful_household_confirmation.php");

  }

    $success = "Application submitted successfully! <p>You will be redirected in <span id='counter'>5</span> second(s).</p>
                            <script type='text/javascript'>
                            function countdown() {
                              var i = document.getElementById('counter');
                              if (parseInt(i.innerHTML)<=0) {
                                location.href = 'viewYourRequests.php';
                              }
                              i.innerHTML = parseInt(i.innerHTML)-1;
                            }
                            setInterval(function(){ countdown(); },1000);
                            </script>'";
    
     header("refresh:5;url=viewYourRequests.php"); // redireted once inserted success
    }
  }

}

?>


        <div class="page-wrapper">
            <!-- top Links -->
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <section class="inner-page-hero bg-image" data-image-src="images/img/banner-covid-xhosa.png">
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
              <h3 align="center">Partner Network: Register a household need</h3>
               <div class="container">
                  <ul>
                     <li>
                      <a href="#" class="active">
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
                  
          <?php  include_once('forms/household_form_part1.php'); ?>
          <?php  include_once('forms/household_form_part2.php'); ?>
          <?php  include_once('forms/household_form_part3.php'); ?>
          <?php  include_once('forms/household_form_part4.php'); ?>
          <?php  include_once('forms/household_form_part5.php'); ?>
          <?php  include_once('forms/household_form_part6.php'); ?>
          <?php  include_once('forms/household_form_part7.php'); ?>
          <?php  include_once('forms/household_form_part8.php'); ?>
          <?php  include_once('forms/household_form_submit.php'); ?>

                    </form>
                  </div>
                  <!-- end: Widget -->
                </div>
                <!-- /REGISTER -->
              </div>
            </div>
          </div>
        </section>

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
}
include_once 'footer.php';
?>