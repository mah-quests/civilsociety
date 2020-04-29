<?php
include_once 'header_app.php';
session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/connect.php"); // connection
if (isset($_POST['submit'])) //if submit btn is pressed
{
  if (
    !empty($_POST['firstname']) &  //fetching and find if its !empty
    !empty($_POST['surname']) &
    !empty($_POST['phone']) &
    !empty($_POST['address']) &
    !empty($_POST['district']) &
    !empty($_POST['municipality']) &
    !empty($_POST['provice']) &
    !empty($_POST['identification']) &
    !empty($_POST['sex']) &
    !empty($_POST['alt_person']) &
    !empty($_POST['alt_number']) &


    !empty($_POST['people_in_house']) &
    !empty($_POST['settlement']) &
    !empty($_POST['males_in_house']) &
    !empty($_POST['females_in_house']) &
    !empty($_POST['lgbt_in_house']) &
    !empty($_POST['age0_2']) &
    !empty($_POST['age3_12']) &
    !empty($_POST['age13_18']) &
    !empty($_POST['age19_59']) &
    !empty($_POST['age60plus']) &

    !empty($_POST['number_people_employed']) &
    !empty($_POST['employment_lost']) &
    !empty($_POST['still_receiving_income']) &
    !empty($_POST['social_grants'])


    //        empty($_POST['any_kind_abuse']) &
    //        empty($_POST['lawEnforcementCond']) &
    //        empty($_POST['communityMemberCond']) &
    //        empty($_POST['gangsCheck']) &
    //        empty($_POST['domesticCond'])  

    //        empty($_POST['chronic_medication'])& 
    //        empty($_POST['diabetesCondition'])&
    //        empty($_POST['cancerCondition'])&
    //        empty($_POST['heartCondition']) &
    //        empty($_POST['highBloodCondition']) &
    //        empty($_POST['hivCondition']) &
    //        empty($_POST['tbCondition']) &
    //        empty($_POST['patient1_id']) &    
    //        empty($_POST['patient1_fullnames']) &
    //       empty($_POST['patient1_facility'])&
    //       empty($_POST['patient2_id']) &
    //        empty($_POST['patient2_fullnames']) &
    //        empty($_POST['patient2_facility']) &
    //        empty($_POST['essential_services_worker']) &
    //        empty($_POST['healthCareCondition']) &
    //        empty($_POST['disasterCondition']) &
    //        empty($_POST['retailCondition']) &    
    //        empty($_POST['emegencyCondition']) &         
    //        empty($_POST['transportCondition']) &
    //        empty($_POST['covid_signs']) &
    //        empty($_POST['highTempCond']) &
    //        empty($_POST['dryCoughCond']) &
    //        empty($_POST['soreThroatConditionCond']) &    
    //        empty($_POST['diarrhoeaCondition']) &                          
    //        empty($_POST['more_covid_info'])        
  ) {
    $check_username = mysqli_query($db, "SELECT username FROM users where username = '" . $_POST['username'] . "' ");
    $check_celphone = mysqli_query($db, "SELECT phone FROM users where phone = '" . $_POST['phone'] . "' ");

    if (strlen($_POST['phone']) < 10)  //cal phone length
    {
      $message = "invalid phone number!";
    } elseif (mysqli_num_rows($check_username) > 0)  //check username
    {
      $message = 'identification already exists already registered!';
    } elseif (mysqli_num_rows($check_celphone) > 0) //check email
    {
      $message = 'Celphone Number already exists!';
    } else {

      $reference = rand(0, 10000);

      //inserting values into the request_by_partner db
      $mql = "INSERT INTO request_by_partner
  (firstname, lastname, sex, phone, address, municipality, district, provice, alt_person, alt_number, identification, unique_code) 
  VALUES
  ('" . $_POST['firstname'] . "','" . $_POST['lastname'] . "','" . $_POST['sex'] . "','" . $_POST['phone'] . "','" . $_POST['address'] . "','" . $_POST['municipality'] . "','" . $_POST['district'] . "','" . $_POST['provice'] . "','" . $_POST['alt_person'] . "','" . $_POST['alt_number'] . "','" . $_POST['identification'] . "','" . $reference . "')";

      //inserting values into the request_people db
      $mql_rp = "INSERT INTO request_people
  (unique_code, people_in_house, settlement, males_in_house, females_in_house, lgbt_in_house, age0_2, age3_12, age13_18, age19_59, age60plus) 
  VALUES
  ('" . $reference . "', '" . $_POST['people_in_house'] . "','" . $_POST['settlement'] . "','" . $_POST['males_in_house'] . "','" . $_POST['females_in_house'] . "','" . $_POST['lgbt_in_house'] . "','" . $_POST['age0_2'] . "','" . $_POST['age3_12'] . "','" . $_POST['age13_18'] . "','" . $_POST['age19_59'] . "','" . $_POST['age60plus'] . "')";

      //inserting values into the house_employment_status db
      $mql_emp = "INSERT INTO request_employment_stats
(unique_code, number_people_employed, employment_lost, still_receiving_income, social_grants) 
VALUES
('" . $reference . "', '" . $_POST['number_people_employed'] . "', '" . $_POST['employment_lost'] . "', '" . $_POST['still_receiving_income'] . "', '" . $_POST['social_grants'] . "')";


      //$mql_med = "INSERT INTO request_medication
      //(unique_code, chronic_medication, diabetesCondition, cancerCondition, heartCondition, highBloodCondition, hivCondition, tbCondition, patient1_id, patient1_fullnames, patient1_facility, patient2_id, patient2_fullnames, patient2_facility, essential_services_worker, healthCareCondition, disasterCondition, retailCondition, emegencyCondition, transportCondition, covid_signs, highTempCond, dryCoughCond, soreThroatConditionCond, diarrhoeaCondition, more_covid_info) 
      //VALUES
      //('".$reference."', '".$_POST['chronic_medication']."', '".$_POST['diabetesCondition']."', '".$_POST['cancerCondition']."', '".$_POST['heartCondition']."', '".$_POST['highBloodCondition']."', '".$_POST['hivCondition']."', '".$_POST['tbCondition']."', '".$_POST['patient1_id']."', '".$_POST['patient1_fullnames']."', '".$_POST['patient1_facility']."', '".$_POST['patient2_id']."', '".$_POST['patient2_fullnames']."', '".$_POST['patient2_facility']."', '".$_POST['essential_services_worker']."', '".$_POST['healthCareCondition']."' , '".$_POST['disasterCondition']."', '".$_POST['retailCondition']."', '".$_POST['emegencyCondition']."', '".$_POST['transportCondition']."', '".$_POST['covid_signs']."', '".$_POST['highTempCond']."' , '".$_POST['dryCoughCond']."', '".$_POST['soreThroatConditionCond']."', '".$_POST['diarrhoeaCondition']."', '".$_POST['more_covid_info']."')";



      //$mql_viol = "INSERT INTO violations_status
      //(unique_code, any_kind_abuse, lawEnforcementCond, communityMemberCond, gangsCheck, domesticCond) 
      //VALUES
      //('".$reference."', '".$_POST['any_kind_abuse']."', '".$_POST['lawEnforcementCond']."', '".$_POST['communityMemberCond']."', '".$_POST['gangsCheck']."', '".$_POST['domesticCond']."')";


      //$mql_chart = "INSERT INTO users_orders
      //(unique_code, u_id, request_first_name, request_surname, delivery_address) 
      //VALUES
      //('".$reference."', '".$_SESSION["user_id"]."', '".$_POST['firstname']."', '".$_POST['surname']."', '".$_POST['address']."')";

      mysqli_query($db, $mql);
      mysqli_query($db, $mql_rp);
      //  mysqli_query($db, $mql_emp);
      //  mysqli_query($db, $mql_viol);
      //  mysqli_query($db, $mql_med); 
      //  mysqli_query($db, $mql_chart);

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
  
   
  } else {
    //cheching username & email if already present
    $message = "Something is wrong with the inputs. Please make sure  fields required not filled! ";
  }

}

?>


<div class="page-wrapper">
  <!-- top Links -->
  <!-- end:Top links -->
  <!-- start: Inner page hero -->
  <section class="inner-page-hero bg-image" data-image-src="images/login.png">
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

                    <div class="form-group col-sm-6">
                      <label for="exampleInputFirstNames">First Names</label>
                      <input class="form-control" type="text" name="firstname" id="example-text-input" placeholder="First Name" required>
                    </div>

                    <div class="form-group col-sm-6">
                      <label for="exampleInputSurname">Surname</label>
                      <input class="form-control" type="text" name="surname" id="example-text-input-2" placeholder="Surname" required>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputState">Sex</label>
                      <select id="inputState" class="form-control" name="sex">
                        <option selected>Choose...</option>
                        <option>Male</option>
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

                    <div class="form-group col-sm-12">
                      <label for="exampleTextarea">Home Address</label>
                      <textarea class="form-control" id="exampleTextarea" name="address" rows="3" required>
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
                        <option selected>Choose...</option>
                        <option>Gauteng</option>
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


                    <div class="form-group col-md-6">
                      <label for="inputFirstName">Alternative Contact Person</label>
                      <input type="text" class="form-control" id="alt_person" name="alt_person" placeholder="Enter Alternative Contact Person" required>
                    </div>


                    <div class="form-group col-md-6">
                      <label for="inputIDNumber">Alternative Contact Number</label>
                      <input type="text" class="form-control" id="alt_number" name="alt_number" placeholder="Enter Alternative Contact Number" required>
                    </div>


                    <div class="form-group col-sm-12">
                      <label for="exampleInputIDNumber">Any form of identification</label>
                      <input class="form-control" type="text" name="identification" id="example-text-input" placeholder="Identification detail" required>
                      <small id="emailHelp" class="form-text text-muted">We will use this for verification purposes.
                      </small>
                    </div>


                    <div class="form-group col-md-12" align="center">
                      <h5>Household Employment Status</h5>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputState">Is there anyone employed in the household? </label>
                      <select id="inputStillEmployed" class="form-control" name="number_people_employed">
                        <option selected>Choose...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                      </select>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputState">Anyone lost employment due to the corona virus and lockdown? </label>
                      <select id="inputEmploymentLost" class="form-control" name="employment_lost">
                        <option selected>Choose...</option>
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputState">Are you still receiving income during the covid pandemic? </label>
                      <select id="inputStillIncome" class="form-control" name="still_receiving_income">
                        <option selected>Choose...</option>
                        <option>Yes</option>
                        <option>No</option>
                      </select>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputState">Number of people on social grant recepients in the household? </label>
                      <select id="inputSocial" class="form-control" name="social_grants">
                        <option selected>Choose...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                      </select>
                    </div>

                    <!-- 
        <div class="form-group col-md-12" align="center">
          <h5>Human rights & violations</h5>
        </div>

            <div class="form-group col-md-12">
              <label for="inputState">Has you or anyone in the household experienced any kind of abuse, assult or harrasment during the lockdown </label>
              <select id="inputState" class="form-control" name="any_kind_abuse">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>                     
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="inputState">Law Enforcement </label>
              <select id="inputState" class="form-control" name="lawEnforcementCond">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>  
            
            <div class="form-group col-md-3">
              <label for="inputState">Community Member </label>
              <select id="inputState" class="form-control" name="communityMemberCond">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>                       

            <div class="form-group col-md-3">
              <label for="inputState">Health Professional </label>
              <select id="inputState" class="form-control" name="gangsCheck">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="inputState">GBV </label>
              <select id="inputState" class="form-control" name="domesticCond">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>            

-->
                    <div class="form-group col-md-12" align="center">
                      <h5>Household questionares</h5>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputState">Number of people living in the house</label>
                      <select id="inputState" class="form-control" name="people_in_house">
                        <option selected>Choose...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                      </select>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="inputState">Type of Settlement</label>
                      <select id="inputState" class="form-control" name="settlement">
                        <option selected>Choose...</option>
                        <option>Informal Settlement</option>
                        <option>Rural (Village)</option>
                        <option>Formal (Townhouse)</option>
                        <option>Formal (Background Shack)</option>
                        <option>Traditional </option>
                        <option>Urban (Flats) </option>
                      </select>
                    </div>


                    <div class="form-group col-md-12">
                      <label for="inputState">House composition: </label>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Males</label>
                      <select id="inputState" class="form-control" name="males_in_house">
                        <option selected>Choose...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="inputState">Females</label>
                      <select id="inputState" class="form-control" name="females_in_house">
                        <option selected>Choose...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="inputState">Other</label>
                      <select id="inputState" class="form-control" name="lgbt_in_house">
                        <option selected>Choose...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="inputState">Age groups composition: </label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputState">[ 0 - 2 ] </label>
                      <select id="inputState" class="form-control" name="age0_2">
                        <option selected>Choose...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>

                    <div class="form-group col-md-2">
                      <label for="inputState">[ 3 - 12 ] </label>
                      <select id="inputState" class="form-control" name="age3_12">
                        <option selected>Choose...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>

                    <div class="form-group col-md-2">
                      <label for="inputState">[ 13 - 18 ] </label>
                      <select id="inputState" class="form-control" name="age13_18">
                        <option selected>Choose...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>

                    <div class="form-group col-md-2">
                      <label for="inputState">[ 19 - 59 ] </label>
                      <select id="inputState" class="form-control" name="age19_59">
                        <option selected>Choose...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>

                    <div class="form-group col-md-2">
                      <label for="inputState">Age groups [ 60+ ] </label>
                      <select id="inputState" class="form-control" name="age60plus">
                        <option selected>Choose...</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      </select>
                    </div>
                    <!--

            <div class="form-group col-md-12" align="center">
              <h5>Medical Infomation</h5>
            </div>

                <div class="form-group col-md-12">
                  <label for="inputState">Is there anyone on chronic medication?</label>
                  <select id="inputState" class="form-control" name="chronic_medication">
                    <option selected>Choose...</option>
                    <option>Yes</option>
                    <option>No</option>
                    <option>Not Sure</option>
                  </select>
                </div>

                <div class="form-group col-md-2">
                  <label for="inputState">Diabetes</label>
                  <select id="inputState" class="form-control" name="diabetesCondition">
                    <option selected>Choose...</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </div>

                <div class="form-group col-md-2">
                  <label for="inputState">Cancer</label>
                  <select id="inputState" class="form-control" name="cancerCondition">
                    <option selected>Choose...</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </div>

                <div class="form-group col-md-2">
                  <label for="inputState">Heart Condition</label>
                  <select id="inputState" class="form-control" name="heartCondition">
                    <option selected>Choose...</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </div>    
                
                <div class="form-group col-md-2">
                  <label for="inputState">High Blood</label>
                  <select id="inputState" class="form-control" name="highBloodCondition">
                    <option selected>Choose...</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </div>      

                <div class="form-group col-md-2">
                  <label for="inputState">HIV</label>
                  <select id="inputState" class="form-control" name="hivCondition">
                    <option selected>Choose...</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </div>   

                <div class="form-group col-md-2">
                  <label for="inputState">TB</label>
                  <select id="inputState" class="form-control" name="tbCondition">
                    <option selected>Choose...</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </div>                                                        
                <div class="form-group col-md-4">
                  <label for="patient1_id">Patient #1 Identification </label>
                  <input type="text" class="form-control" id="patient1_id" name="patient1_id" placeholder="Patient #1 Identification Detail" value="None">
                </div>

                <div class="form-group col-md-4" >
                  <label for="patient1_fullnames">Patient #1 Full Names</label>
                  <input type="text" class="form-control" id="patient1_fullnames" name="patient1_fullnames" placeholder="Patient #1 Full Names" value="None">
                </div>

              <div class="form-group col-md-4">
                <label for="patient1_facility">Patient #1 Facility of collection</label>
                <input type="text" class="form-control" id="patient1_facility" name="patient1_facility" placeholder="Patient #1 Facility Collection" value="None">
              </div> 

            <div class="form-group col-md-4">
              <label for="patient2_id">Patient #2 Identification</label>
              <input type="text" class="form-control" id="patient2_id" name="patient2_id" placeholder="Patient #2 Identification Detail" value="None">
            </div>

            <div class="form-group col-md-4" >
              <label for="patient2_fullnames">Patient #2 Full Names</label>
              <input type="text" class="form-control" id="patient2_fullnames" name="patient2_fullnames" placeholder="Patient #2 ID Full Names" value="None">
            </div>

            <div class="form-group col-md-4">
              <label for="patient2_facility">Patient #2 Facility of collection</label>
              <input type="text" class="form-control" id="patient2_facility" name="patient2_facility" placeholder="Patient #2 Facility Collection" value="None">
            </div> 


            <div class="form-group col-md-12">
              <label for="inputState">Is there anyone at your house working as essential service? </label>
              <select id="inputState" class="form-control" name="essential_services_worker">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="inputState">Health care </label>
              <select id="inputState" class="form-control" name="healthCareCondition">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="inputState">Disaster Management </label>
              <select id="inputState" class="form-control" name="disasterCondition">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-2">
              <label for="inputState">Retail </label>
              <select id="inputState" class="form-control" name="retailCondition">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>            

            <div class="form-group col-md-3">
              <label for="inputState">Emegency Respondants </label>
              <select id="inputState" class="form-control" name="emegencyCondition">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>  

            <div class="form-group col-md-2">
              <label for="inputState">Transport Services </label>
              <select id="inputState" class="form-control" name="transportCondition">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-12">
              <label for="inputState">Have you exhibited any of the following in the past 3 days</label>
              <select id="inputState" class="form-control" name="covid_signs">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="inputState">High Temperature </label>
              <select id="inputState" class="form-control" name="highTempCond">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="inputState">Dry Cough </label>
              <select id="inputState" class="form-control" name="dryCoughCond">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="inputState">Sore Throat </label>
              <select id="inputState" class="form-control" name="soreThroatConditionCond">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="inputState">Diarrhoea </label>
              <select id="inputState" class="form-control" name="diarrhoeaCondition">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

            <div class="form-group col-md-12">
              <label for="infoCovid">Do you have enough infomation about Covid-19?</label>
              <select id="inputState" class="form-control" name="more_covid_info">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>

-->
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