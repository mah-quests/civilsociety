<?php
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
        !empty($_POST['address']) &&
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


        !empty($_POST['number_people_employed']) &&
        !empty($_POST['employment_lost']) &&
        !empty($_POST['still_receiving_income']) &&
        !empty($_POST['social_grants']) &&


        !empty($_POST['any_kind_abuse']) &&
        !empty($_POST['lawEnforcementCond']) &&
        !empty($_POST['communityMemberCond']) &&
        !empty($_POST['healthCareCheck']) &&
        !empty($_POST['domesticCond']) &&!


        !empty($_POST['number_disabled']) &&
        !empty($_POST['number_disabled_child']) &&
        !empty($_POST['number_disabled_adult']) &&
        !empty($_POST['psyco_social_disability']) &&
        !empty($_POST['physical_disability']) &&
        !empty($_POST['other_disability']) &&


        !empty($_POST['chronic_medication']) &&
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
        !empty($_POST['infoCovid']) &&
        !empty($_POST['whatsappp_subscribe']) && 


        !empty($_POST['comments'])

      )
    {

      //cheching username & email if already present
      $message = "Something is wrong with the inputs. Please make sure  fields required not filled! ";

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
       
   $reference = rand(0,10000);

//inserting values into 'request_by_partner' db
 $mql = "INSERT INTO request_by_partner
  (firstname, lastname, sex, other_sex, phone, address, municipality, district, provice, alt_person, alt_number, identification, unique_code,  hetero_sex, homo_sex, bi_sex, other_sexuality, cis_gender, trans_gender, nonconfirm_gender, queer_gender, other_gender) 
  VALUES
  ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['sex']."','".$_POST['other_sex']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['List3']."','".$_POST['List2']."','".$_POST['List1']."','".$_POST['alt_person']."','".$_POST['alt_number']."','".$_POST['identification']."','".$reference."', '".$_POST['hetero_sex']."', '".$_POST['homo_sex']."' ,'".$_POST['bi_sex']."','".$_POST['other_sexuality']."','".$_POST['cis_gender']."','".$_POST['trans_gender']."','".$_POST['nonconfirm_gender']."','".$_POST['queer_gender']."','".$_POST['other_gender']."' )";


//inserting values into 'request_people' db
 $mql_rp = "INSERT INTO request_people
  (unique_code, people_in_house, settlement, males_in_house, females_in_house, lgbt_in_house, age0_2, age13_18, age19_59, age36_59, age60plus, gay_in_house, lesbian_in_house, num_hetero_sex, num_homo_sex, num_bi_sex, num_other_sexuality, num_cis_gender, num_trans_gender, num_nonconfirm_gender, num_queer_gender, num_other_gender) 
  VALUES
  ('".$reference."', '".$_POST['people_in_house']."','".$_POST['settlement']."','".$_POST['males_in_house']."','".$_POST['females_in_house']."','".$_POST['lgbt_in_house']."','".$_POST['age0_2']."', '".$_POST['age13_18']."', '".$_POST['age19_59']."', '".$_POST['age36_59']."', '".$_POST['age60plus']."', '".$_POST['gay_in_house']."', '".$_POST['lesbian_in_house']."', '".$_POST['num_hetero_sex']."', '".$_POST['num_homo_sex']."', '".$_POST['num_bi_sex']."', '".$_POST['num_other_sexuality']."', '".$_POST['num_cis_gender']."', '".$_POST['num_trans_gender']."', '".$_POST['num_nonconfirm_gender']."', '".$_POST['num_queer_gender']."', '".$_POST['num_other_gender']."')";


//inserting values into 'request_employment_stats' db
 $mql_emp = "INSERT INTO request_employment_stats
 (unique_code, number_people_employed, employment_lost, still_receiving_income, social_grants) 
 VALUES
 ('".$reference."', '".$_POST['number_people_employed']."', '".$_POST['employment_lost']."', '".$_POST['still_receiving_income']."', '".$_POST['social_grants']."')";


//inserting values into 'request_violations' db
$mql_viol = "INSERT INTO request_violations
(unique_code, any_kind_abuse, lawEnforcementCond, communityMemberCond, healthCareCheck, domesticCond) 
 VALUES
('".$reference."', '".$_POST['any_kind_abuse']."', '".$_POST['lawEnforcementCond']."', '".$_POST['communityMemberCond']."', '".$_POST['healthCareCheck']."', '".$_POST['domesticCond']."')";


//inserting values into 'request_disability' db
$mql_disable = "INSERT INTO request_disability
(unique_code, number_disabled, number_disabled_child, number_disabled_adult, psyco_social_disability, physical_disability, other_disability) 
 VALUES
('".$reference."', '".$_POST['number_disabled']."', '".$_POST['number_disabled_child']."', '".$_POST['number_disabled_adult']."', '".$_POST['psyco_social_disability']."', '".$_POST['physical_disability']."', '".$_POST['other_disability']."')";


//inserting values into request_medication db
 $mql_med_01 = "INSERT INTO request_medication_01
 (unique_code, chronic_medication, patient1_fullnames, patient1_id, patient1_facility, patient2_fullnames, patient2_id, patient2_facility, no_pregnant_people) 
 VALUES
 ('".$reference."', '".$_POST['chronic_medication']."', '".$_POST['patient1_fullnames']."', '".$_POST['patient1_id']."', '".$_POST['patient1_facility']."', '".$_POST['patient2_fullnames']."', '".$_POST['patient2_id']."', '".$_POST['patient2_facility']."', '".$_POST['no_pregnant_people']."')";


 $mql_med_02 = "INSERT INTO request_medication_02
 (unique_code, essential_services_worker, healthCareCondition, disasterCondition, retailCondition, emegencyCondition, transportCondition, otherCondition, highTempCond, dryCoughCond, soreThroatConditionCond, diarrhoeaCondition, tirednessCondition, infoCovid, whatsappp_subscribe) 
 VALUES
 ('".$reference."', '".$_POST['essential_services_worker']."', '".$_POST['healthCareCondition']."' , '".$_POST['disasterCondition']."',  '".$_POST['retailCondition']."', '".$_POST['emegencyCondition']."', '".$_POST['transportCondition']."', '".$_POST['otherCondition']."', '".$_POST['highTempCond']."', '".$_POST['dryCoughCond']."' , '".$_POST['soreThroatConditionCond']."', '".$_POST['diarrhoeaCondition']."', '".$_POST['tirednessCondition']."', '".$_POST['infoCovid']."', '".$_POST['whatsappp_subscribe']."')";


 $mql_chart = "INSERT INTO users_orders
 (unique_code, u_id, request_first_name, request_surname, delivery_address, municipality, comments, province) 
 VALUES
 ('".$reference."', '".$_SESSION["user_id"]."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['address']."', '".$_POST['List3']."', '".$_POST['comments']."', '".$_POST['List1']."')";

  mysqli_query($db, $mql);
  mysqli_query($db, $mql_rp);
  mysqli_query($db, $mql_emp);
  mysqli_query($db, $mql_viol);
  mysqli_query($db, $mql_disable);  
  mysqli_query($db, $mql_med_01);
  mysqli_query($db, $mql_med_02);
  mysqli_query($db, $mql_chart);

    $success = "Form submitted successfully! <p>You will be redirected in <span id='counter'>5</span> second(s).</p>
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
    
     header("refresh:5;url=doHouseRequest.php"); // redireted once inserted success
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
                  
          <?php  include_once('forms/household_form_part1.php'); ?>
          <?php  include_once('forms/household_form_part2.php'); ?>
          <?php  include_once('forms/household_form_part3.php'); ?>
          <?php  include_once('forms/household_form_part4.php'); ?>
          <?php  include_once('forms/household_form_part5.php'); ?>
          <?php  include_once('forms/household_form_part6.php'); ?>
          <?php  include_once('forms/household_form_part7.php'); ?>
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
include_once 'footer.php';
?>