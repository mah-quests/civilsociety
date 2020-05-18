<fieldset>
        <div class="row">

            <div class="form-group col-md-12" align="center">
              <h5>Contact Person Details</h5>
            </div>

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
              <label for="exampleCelphone">Cellphone number</label>
                <input class="form-control" type="text" name="phone" id="example-tel-input-3" placeholder="Phone" required> 
                <small id="emailHelp" class="form-text text-muted">You will be contacted using this celphone number. Must be unique!
                </small> 
            </div>   

            <div class="form-group col-sm-12">
              <label for="exampleTextarea">Home Address</label>
                <textarea class="form-control" id="exampleTextarea"  name="address" rows="3" required>
                </textarea>
            </div>

            <div class="form-group col-sm-6">
              <label for="exampleInputEmail1">Municipality</label>
                <input class="form-control" type="text" name="municipality" id="example-text-input-2" placeholder="Enter Municipality"> 
            </div>


            <div class="form-group col-sm-6">
              <label for="district">District</label>
              <input class="form-control" type="text" name="district" id="example-text-input" placeholder="Enter District"> 
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


            <div class="form-group col-md-6" >
              <label for="inputFirstName">Alternative Contact Person</label>
              <input type="text" class="form-control" id="alt_person" name="alt_person" placeholder="Enter Alternative Contact Person" required>
            </div>


            <div class="form-group col-md-6" >
              <label for="inputIDNumber">Alternative Contact Number</label>
              <input type="text" class="form-control" id="alt_number" name="alt_number" placeholder="Enter Alternative Contact Number" required>
            </div>   


            <div class="form-group col-sm-12">
              <label for="exampleInputIDNumber">Any form of identification</label>
                <input class="form-control" type="text" name="identification" id="example-text-input" placeholder="Enter identification Number" required> 
                <small id="emailHelp" class="form-text text-muted">We will use this for verification purposes ONLY.
                </small> 
            </div>

            <div class="form-group col-md-12" align="center">
              <h5>Household People Profile</h5>
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
                        <label for="inputState"><b>House composition:</b></label>
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
                      <label for="inputState"><b>Age composition:</b></label>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputState">Pregnant </label>
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
                      <label for="inputState">[0 - 2 ] </label>
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
                    <label for="inputState">[3 - 12 ] </label>
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
                    <label for="inputState">[13 - 18 ] </label>
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
                    <label for="inputState">[19 - 59 ] </label>
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
                    <label for="inputState">Age groups [60+ ] </label>
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

            <div class="form-group col-md-12" align="center">
              <br>
              <h5>Household Health Profile</h5>
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
                  <label for="patient1_id">Patient #1 ID Number</label>
                  <input type="text" class="form-control" id="patient1_id" name="patient1_id" placeholder="Patient #1 ID Number" value="None">
                </div>

                <div class="form-group col-md-4" >
                  <label for="patient1_fullnames">Patient #1 Full Names</label>
                  <input type="text" class="form-control" id="patient1_fullnames" name="patient1_fullnames" placeholder="Patient #1 ID Full Names" value="None">
                </div>

              <div class="form-group col-md-4">
                <label for="patient1_facility">Patient #1 Facility of collection</label>
                <input type="text" class="form-control" id="patient1_facility" name="patient1_facility" placeholder="Patient #1 Facility Collection" value="None">
              </div> 

            <div class="form-group col-md-4">
              <label for="patient2_id">Patient #2 ID Number</label>
              <input type="text" class="form-control" id="patient2_id" name="patient2_id" placeholder="Patient #2 ID Number" value="None">
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
              <label for="inputState">Have you exhibited any of the following in the past 3 days : </label>
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

        <div class="form-group col-md-12" align="center">
          <br>
          <h5>Household Employment Status</h5>
        </div>

            <div class="form-group col-md-6">
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

            <div class="form-group col-md-6">
              <label for="inputState">Anyone lost employment due to the corona virus and lockdown? </label>
              <select id="inputState" class="form-control" name="employment_lost">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>                    
              </select>
            </div> 

            <div class="form-group col-md-6">
              <label for="inputState">Are you still receiving income during the covid pandemic? </label>
              <select id="inputState" class="form-control" name="still_receiving_income">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>                    
              </select>
            </div>  

            <div class="form-group col-md-6">
              <label for="inputState">Number of people on social grant recepients in the household? </label>
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

        <div class="form-group col-md-12" align="center">
          <br>
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
              <select id="inputState" class="form-control" name="healthCareCheck">
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

            <div class="form-group col-md-3">
              <label for="inputState">Law Enforcement </label>
              <select id="inputState" class="form-control" name="lawEnforcementCond">
                <option selected>Choose...</option>
                <option>Unlawful detention </option>
                <option>Assault</option>
                <option>Inhuman treatment </option>            
              </select>
            </div>  
            
            <div class="form-group col-md-3">
              <label for="inputState">Community Member </label>
              <select id="inputState" class="form-control" name="communityMemberCond">
                <option selected>Choose...</option>
                <option>Discrimination</option>
                <option>Stigma</option>
                <option>Domestic violence</option>
              </select>
            </div>                       

            <div class="form-group col-md-3">
              <label for="inputState">Health Professional </label>
              <select id="inputState" class="form-control" name="gangsCheck">
                <option selected>Choose...</option>
                <option>Discrimination</option>
                <option>Disclosure of confidential information</option>
                <option>Access to health care </option>
                <option>Access to sexual and reproductive health</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="inputState">GBV </label>
              <select id="inputState" class="form-control" name="domesticCond">
                <option selected>Choose...</option>
                <option>Assault</option>
                <option>Abuse</option>
                <option>Discrimination</option>
              </select>
            </div> 

        <div class="form-group col-md-12" align="center">
          <br>
          <h5>People living with disabilities</h5>
        </div>

            <div class="form-group col-md-12">
              <label for="inputState">Is there anyone with a disabled in the house? </label>
              <select id="inputState" class="form-control" name="any_kind_abuse">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>                     
              </select>
            </div>

            <div class="form-group col-md-3">
              <label for="inputState">Is there a disabled child in the house?</label>
              <select id="inputState" class="form-control" name="lawEnforcementCond">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>  
            
            <div class="form-group col-md-3">
              <label for="inputState">Is there a disabled adult in the house?</label>
              <select id="inputState" class="form-control" name="communityMemberCond">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>                       

            <div class="form-group col-md-12">
              <label for="inputState">What is the kind od disability in the house? </label>
            </div>

            <div class="form-group col-md-3">
              <label for="inputState">Psycho social </label>
              <select id="inputState" class="form-control" name="domesticCond">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>
              </select>
            </div>            

            <div class="form-group col-md-3">
              <label for="inputState">Physical</label>
              <select id="inputState" class="form-control" name="lawEnforcementCond">
                <option selected>Choose...</option>
                <option>Yes</option>
                <option>No</option>          
              </select>
            </div>  

            <div class="form-group col-md-4">
              <label for="patient2_facility">Other</label>
              <input type="text" class="form-control" id="patient2_facility" name="patient2_facility" placeholder="Other types of disabilities" value="Other">
            </div>             
            
            <div class="form-group col-sm-12">
              <label for="exampleTextarea">Remarks and observations</label>
                <textarea class="form-control" id="exampleTextarea"  name="address" rows="5" required>
                </textarea>
            </div>                      

        </div>


          <div class="row">
            <div class="col-sm-12" align="center">
              <p> 
                <input type="submit" value="Register" name="submit" class="btn btn-primary"> 
              </p>
            </div>                     
          </div>
          
      </div>
</fieldset>