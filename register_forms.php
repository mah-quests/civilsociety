<fieldset>
  <div class="col-md-12">
    <div class="widget">
      <h3 align="center">Household Infomation</h3>
      <div class="widget-body">
        <div></div>
          <div class="form-row">
              <h5>Contact Person</h5>
            <div class="form-group col-md-6" >
              <label for="inputFirstName">First Name</label>
              <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Names" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputSurname">Surname</label>
              <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter Surnames" required>
            </div>
            <div class="form-group col-md-6" >
              <label for="inputIDNumber">ID Number</label>
              <input type="text" class="form-control" id="idnumber" name="idnumber" placeholder="Enter ID Number" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputCelphone">Celphone</label>
              <input type="text" class="form-control" id="celphone" name="celphone" placeholder="Enter Celphone Number" required>
            </div>     
            <div class="form-group col-md-6">
              <label for="inputAddress">House Number and Street</label>
              <input type="text" class="form-control" id="inputAddress" name="address1" placeholder="Eg, 123 Moloto Street">
            </div>              
            <div class="form-group col-md-6">
              <label for="inputAddress2">Address</label>
              <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Molapo">
            </div>     
            <div class="form-row col-md-6">
              <div class="form-group">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Soweto">
              </div>
            </div>
            <div class="form-row col-md-6">
              <div class="form-group">
                <label for="inputCity">Municipality</label>
                  <?php require 'municipality.html'; ?>
                <input type="text" class="form-control" id="inputMunicipality" name="municipality">
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">Province</label>
              <select id="inputState" class="form-control" name="provice" >
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
              <label for="inputState">Sex</label>
              <select id="inputState" class="form-control" name="sex">
                <option selected>Choose...</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group col-md-6" >
              <label for="inputFirstName">Alternative Contact Person</label>
              <input type="text" class="form-control" id="alt_person" name="altperson" placeholder="Enter Alternative Contact Person" required>
            </div>
            <div class="form-group col-md-6" >
              <label for="inputIDNumber">Alternative Contact Number</label>
              <input type="text" class="form-control" id="alt_number" name="idnumber" placeholder="Enter Alternative Contact Number" required>
            </div>                        
            
            <div class="form-group col-md-12" align="center">
              <h5>Household questionares</h5>
            </div>         

            <div class="form-group col-md-6">
              <label for="inputPeopleInHouse">People living in the house</label>
              <input type="text" class="form-control" name="people_in_house"id="inputPeopleInHouse" placeholder="Eg, 5">
            </div> 
            <div class="form-group col-md-6">
              <label for="inputState">Type of Settlement</label>
              <select id="inputState" class="form-control" name="settlement">
                <option selected>Choose...</option>
                <option>House</option>
                <option>Informal Settlement</option>
                <option>Hostel</option>
                <option>Back Room (rent) </option>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="inputState">Number of males in the house</label>
              <select id="inputState" class="form-control" name="males_in_house">
                <option selected>0</option>
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

            <div class="form-group col-md-6">
              <label for="inputState">Number of females in the house</label>
              <select id="inputState" class="form-control" name="females_in_house">
                <option selected>0</option>
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

            <div class="form-group col-md-6">
              <label for="inputState">Number of others (LGBT+) in the house</label>
              <select id="inputState" class="form-control" name="lgbt_in_house">
                <option selected>0</option>
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

            <div class="form-group col-md-6">
              <label for="inputState">Age groups [0 - 2 ] </label>
              <select id="inputState" class="form-control" name="age0_2">
                <option selected>0</option>
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


            <div class="form-group col-md-6">
              <label for="inputState">Age groups [3 - 12 ] </label>
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

            <div class="form-group col-md-6">
              <label for="inputState">Age groups [13 - 18 ] </label>
              <select id="inputState" class="form-control" name="age13_18">
                <option selected>0</option>
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

            <div class="form-group col-md-6">
              <label for="inputState">Age groups [19 - 59 ] </label>
              <select id="inputState" class="form-control" name="age19_59">
                <option selected>0</option>
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

            <div class="form-group col-md-6">
              <label for="inputState">Age groups [60+ ] </label>
              <select id="inputState" class="form-control" name="age60plus">
                <option selected>0</option>
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


          </div>
      </div>
    </div>
  </div>

  <!-- medical infomation -->

  <div class="col-md-12">
    <div class="widget">
      <div class="widget-body">
        <h4 align="center">Medical Infomation</h4>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputState">Is there anyone on chronic medication?</label>
              <select id="inputState" class="form-control" name="chronic_medication">
                <option selected>Yes</option>
                <option>No</option>
                <option>Not Sure</option>
              </select>
            </div>
            <div class="form-group col-md-12" >
              <label for="inputChronicDesease">Which chronic desease does the patient suffer from?</label>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="diabetesCondition" id="diabetesCheck">
                  <label class="form-check-label" for="diabetesCheck" col-md-3>
                    Diabetes
                  </label>
                  <input class="form-check-input" type="checkbox" name="cancerCondition" id="cancerCheck">
                  <label class="form-check-label" for="cancerCheck">
                    Cancer
                  </label>
                  <input class="form-check-input" type="checkbox" name="heartCondition" id="heartConditionCheck" required>
                  <label class="form-check-label" for="heartConditionCheck">
                    Heart Condition
                  </label> 
                  <input class="form-check-input" type="checkbox" name="highBloodCondition" id="highBloodCheck" required>
                  <label class="form-check-label" for="highBloodCheck">
                    High Blood
                  </label> 
                  <input class="form-check-input" type="checkbox" name="hivCondition" id="hivCheck" required>
                  <label class="form-check-label" for="hivCheck">
                    HIV
                  </label> 
                </div>
              </div>                                                 
            </div>
            <div class="form-group col-md-12" >
              <label for="patient">If so, please provide us with the full patient details
              </label>
            </div>
            <div class="form-group col-md-4">
              <label for="patient1_id">Patient #1 ID Number</label>
              <input type="text" class="form-control" id="patient1_id" name="patient1_id" placeholder="Patient #1 ID Number">
            </div>
            <div class="form-group col-md-4" >
              <label for="patient1_fullnames">Patient #1 Full Names</label>
              <input type="text" class="form-control" id="patient1_fullnames" name="patient1_fullnames" placeholder="Patient #1 ID Full Names">
            </div>
            <div class="form-group col-md-4">
              <label for="patient1_facility">Patient #1 Facility of collection</label>
              <input type="text" class="form-control" id="patient1_facility" name="patient1_facility" placeholder="Patient #1 Facility Collection">
            </div> 
            <div class="form-group col-md-4">
              <label for="patient2_id">Patient #2 ID Number</label>
              <input type="text" class="form-control" id="patient2_id" name="patient2_id" placeholder="Patient #2 ID Number">
            </div>
            <div class="form-group col-md-4" >
              <label for="patient2_fullnames">Patient #2 Full Names</label>
              <input type="text" class="form-control" id="patient2_fullnames" name="patient2_fullnames" placeholder="Patient #2 ID Full Names">
            </div>
            <div class="form-group col-md-4">
              <label for="patient2_facility">Patient #2 Facility of collection</label>
              <input type="text" class="form-control" id="patient2_facility" name="patient2_facility" placeholder="Patient #2 Facility Collection">
            </div> 
            <div class="form-group col-md-4">
              <label for="patient3_id">Patient #3 ID Number</label>
              <input type="text" class="form-control" id="patient3_id" name="patient3_id" placeholder="Patient #3 ID Number">
            </div>
            <div class="form-group col-md-4" >
              <label for="patient3_fullnames">Patient #3 Full Names</label>
              <input type="text" class="form-control" id="patient3_fullnames" name="patient3_fullnames" placeholder="Patient #3 ID Full Names">
            </div>
            <div class="form-group col-md-4">
              <label for="patient3_facility">Patient #3 Facility of collection</label>
              <input type="text" class="form-control" id="patient3_facility" name="patient3_facility" placeholder="Patient #3 Facility Collection">
            </div>                         
            <div class="form-group col-md-12" >
              <label for="inputFirstName">Is there anyone at your house working as essential service</label>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="healthCareCondition" id="healthCareCheck">
                  <label class="form-check-label" for="healthCare" col-md-3>
                    Health care
                  </label>
                  <input class="form-check-input" type="checkbox" name="disasterCondition" id="disasterCheck">
                  <label class="form-check-label" for="disasterCheck">
                    Disaster Management
                  </label>
                  <input class="form-check-input" type="checkbox" name="retailCondition" id="retailConditionCheck" >
                  <label class="form-check-label" for="retailConditionCheck">
                    Retail
                  </label> 
                  <input class="form-check-input" type="checkbox" name="emegencyCondition" id="emegencyCheck" >
                  <label class="form-check-label" for="emegencyCheck">
                    Emegency Respondants
                  </label> 
                  <input class="form-check-input" type="checkbox" name="transportCondition" id="transportCheck" >
                  <label class="form-check-label" for="transportCheck">
                    Transport Services
                  </label> 
                </div>
              </div>                                                 
            </div>
            <div class="form-group col-md-12" >
              <label for="inputFirstName">Have you exhibited any of the following in the past 3 days</label>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="highTempCond" id="highTempCheck">
                  <label class="form-check-label" for="highTempCheck" col-md-3>
                    High Temperature
                  </label>
                  <input class="form-check-input" type="checkbox" name="dryCoughCond" id="dryCoughCheck">
                  <label class="form-check-label" for="dryCoughCheck">
                    Dry Cough
                  </label>
                  <input class="form-check-input" type="checkbox" name="soreThroatConditionCond" id="soreThroatCheck" required>
                  <label class="form-check-label" for="soreThroatCheck">
                    Sore Throat
                  </label> 
                  <input class="form-check-input" type="checkbox" name="diarrhoeaCondition" id="diarrhoeaCheck" required>
                  <label class="form-check-label" for="diarrhoeaCheck">
                    Diarrhoea
                  </label> 
                </div>
              </div>                                            
            </div>
            <div class="form-group col-md-12">
              <label for="infoCovid">Do you have enough infomation about Covid-19?</label>
              <select id="inputState" class="form-control" name="more_covid_info">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>
          </div>
          <div align="center">
          </div>
      </div>
    </div>
  </div>


  <!-- household infomation -->

  <div class="col-md-12">
    <div class="widget">
      <div class="widget-body">
        <h4 align="center">Household necessities</h4>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputState">Is there anyone employed in the household? </label>
              <select id="inputState" class="form-control" name="number_people_employed">
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
            <div class="form-group col-md-12">
              <label for="inputState">Anyone lost employment due to the corona virus and lockdown? </label>
              <select id="inputState" class="form-control" name="employment_lost">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>                    
              </select>
            </div>   
            <div class="form-group col-md-12">
              <label for="inputState">Are you still receiving income during the covid pandemic? </label>
              <select id="inputState" class="form-control" name="still_receiving_income">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>                    
              </select>
            </div>                              
            <div class="form-group col-md-12">
              <label for="inputState">Number of people on social grant in the household? </label>
              <select id="inputState" class="form-control" name="social_grants">
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

          </div>
      </div>
    </div>
  </div>


  <!-- human right infomation -->

  <div class="col-md-12">
    <div class="widget">
      <div class="widget-body">
        <h4 align="center">Human rights & violations</h4>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputState">Has you or anyone in the household experienced any kind of abuse, assult or harrasment during the lockdown </label>
              <select id="inputState" class="form-control" name="any_kind_abuse">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>                     
              </select>
            </div>
            <div class="form-group col-md-12" >
              <label for="inputFirstName">What type of harrasment was it?</label>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="lawEnforcementCond" id="lawEnforcementCheck">
                  <label class="form-check-label" for="lawEnforcementCheck" col-md-3>
                    Law Enforcement
                  </label>
                  <input class="form-check-input" type="checkbox" name="communityMemberCond" id="communityMemberCheck">
                  <label class="form-check-label" for="communityMemberCheck">
                    Community Member
                  </label>
                  <input class="form-check-input" type="checkbox" name="gangsCond" id="gangsCheck" required>
                  <label class="form-check-label" for="gangsCheck">
                    Gangs
                  </label> 
                  <input class="form-check-input" type="checkbox" name="domesticCond" id="domesticCheck" required>
                  <label class="form-check-label" for="domesticCheck">
                    Domestic/GBV/IPV
                  </label> 
                </div>
              </div>                                                 
            </div>                              

          </div>
          <div class="form-group col-md-12">
              <div class="form-check">
              </div>
          </div>

      </div>
    </div>
  </div>

    <div align="center">
      <button type="submit" class="btn btn-primary">Submit Form</button>
    </div>

</fieldset>