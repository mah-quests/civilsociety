<script type="text/javascript">
    function showHideChronicInfo(){
        var noOption = document.getElementById("chronic_medication").value;
        if( noOption > 0){
            jQuery('#chronic-info').show();
            document.getElementById("chronic-info").style.visibility = 'visible';
        }else{
            jQuery('#chronic-info').hide();
            document.getElementById("chronic-info").style.visibility = 'hidden';            
        }
    }

    function showHideFrontWorkerInfo(){
        var noOption = document.getElementById("essential_services_worker").value;
        if( noOption == "Yes"){
            jQuery('#frontline-info').show();
            document.getElementById("frontline-info").style.visibility = 'visible';
        }else{
            jQuery('#frontline-info').hide();
            document.getElementById("frontline-info").style.visibility = 'hidden';            
        }
    }


    function showHideMeduimOfInfo(){
        var noOption = document.getElementById("infoCovid").value;
        if( noOption == "Yes"){
            jQuery('#media-info').show();
            document.getElementById("media-info").style.visibility = 'visible';
        }else{
            jQuery('#media-info').hide();
            document.getElementById("media-info").style.visibility = 'hidden';            
        }
    }  

    function showHideSymptomsInfo(){
        var noOption = document.getElementById("symptoms_composition").value;
        if( noOption == "Yes"){
            jQuery('#covid-symptoms-info').show();
            document.getElementById("covid-symptoms-info").style.visibility = 'visible';
        }else{
            jQuery('#covid-symptoms-info').hide();
            document.getElementById("covid-symptoms-info").style.visibility = 'hidden';            
        }
    }       

</script>

<div class="row">
    <fieldset>
            <br>

            <div class="form-group col-md-12" align="center">
              <h5>Household Health Profile</h5>
            </div>

            <div class="col-md-12">
              <label for="chronic_medication">Number of people on chronic medication in the household </label>
                <div style="width:98%">
                <select name="chronic_medication" size="1" id="chronic_medication" class="form-control unit" value="<?php echo $edit ? $user_id['chronic_medication'] : ''; ?>" required onchange="showHideChronicInfo(this.value);" required>
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
    </fieldset> 
</div>

<div class="row">

    <fieldset id="chronic-info" style="display:none">

            <div class="col-md-12">
              <label for="patients-details"><br>Patients Identification block:<br></label>
            </div>

            <div class="col-md-4">
              <label for="patient1_fullnames"><br>#1 Full Names</label>
                <input class="form-control" type="text" name="patient1_fullnames" id="patient1_fullnames" placeholder="Please enter Patient full names" > 
            </div>

            <div class="col-md-4">
              <label for="patient1_id"><br>#1 Identification Number</label>
                <input class="form-control" type="text" name="patient1_id" id="patient1_id" placeholder="Please enter Patient Identification Number"> 
            </div>

            <div class="col-md-4">
              <label for="patient1_facility"><br>#1 Medication Pickup Point</label>
                <input class="form-control" type="text" name="patient1_facility" id="patient1_facility" placeholder="Please enter Patient medication pick-up place"> 
            </div>            

            <div class="col-md-4">
              <label for="patient2_fullnames"><br>#2 Full Names</label>
                <input class="form-control" type="text" name="patient2_fullnames" id="patient2_fullnames" placeholder="Please enter Patient full names"> 
            </div>

            <div class="col-md-4">
              <label for="patient2_id"><br>#2 Identification Number</label>
                <input class="form-control" type="text" name="patient2_id" id="patient2_id" placeholder="Please enter Patient Identification Number"> 
            </div>

            <div class="col-md-4">
              <label for="patient2_facility"><br>#2 Medication Pickup Point</label>
                <input class="form-control" type="text" name="patient2_facility" id="patient2_facility" placeholder="Please enter Patient medication pick-up place"> 
            </div> 

            <div class="col-md-4">
              <label for="patient3_fullnames"><br>#3 Full Names</label>
                <input class="form-control" type="text" name="patient3_fullnames" id="patient3_fullnames" placeholder="Please enter Patient full names"> 
            </div>

            <div class="col-md-4">
              <label for="patient3_id"><br>#3 Identification Number</label>
                <input class="form-control" type="text" name="patient3_id" id="patient3_id" placeholder="Please enter Patient Identification Number"> 
            </div>

            <div class="col-md-4">
              <label for="patient3_facility"><br>#3 Medication Pickup Point</label>
                <input class="form-control" type="text" name="patient3_facility" id="patient3_facility" placeholder="Please enter Patient medication pick-up place"> 
            </div> 
    </fieldset>
</div>

<div class="row">
    <fieldset>

            <div class="col-md-12">
              <label for="traditional_healers"><br>Do you have access to traditional healers for medication purposes? </label>
                <div style="width:98%">
                <select name="traditional_healers" size="1" id="traditional_healers" class="form-control unit" required>
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div>

            <div class="col-md-12">
              <label for="essential_services_worker"><br>Is there anyone at your house working as COVID-19 Frontline Worker for essential service?  </label>
                <div style="width:98%">
                <select name="essential_services_worker" size="1" id="essential_services_worker" class="form-control unit" required onchange="showHideFrontWorkerInfo(this.value);">
                    <option selected></option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>  
                </select>
                </div>
            </div>   
    </fieldset>
</div>

<div class="row">
    <fieldset id="frontline-info" style="display:none" >  


            <div class="col-md-2">
              <label for="healthCareCondition"><br>Health care </label>
                <div style="width:98%">
                <select name="healthCareCondition" size="1" id="healthCareCondition" class="form-control unit" >
                    <option selected value="No"></option>
                    <option>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>  


            <div class="col-md-2">
              <label for="disasterCondition"><br>Disaster Management </label>
                <div style="width:98%">
                <select name="disasterCondition" size="1" id="disasterCondition" class="form-control unit">
                    <option selected value="No"></option>
                    <option>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>                        


            <div class="col-md-2">
              <label for="retailCondition"><br>Retail </label>
                <div style="width:98%">
                <select name="retailCondition" size="1" id="retailCondition" class="form-control unit" >
                    <option selected value="No"></option>
                    <option>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="emegencyCondition"><br>Emegency Respondants </label>
                <div style="width:98%">
                <select name="emegencyCondition" size="1" id="emegencyCondition" class="form-control unit" >
                    <option selected value="No"></option>
                    <option>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>    
            

            <div class="col-md-3">
              <label for="transportCondition"><br>Transport Services </label>
                <div style="width:98%">
                <select name="transportCondition" size="1" id="transportCondition" class="form-control unit" >
                    <option selected value="No"></option>
                    <option>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>  
    </fieldset>  
</div>           

<div class="row">
    <div class="col-md-12">
      <label for="no_pregnant_people"><br>Number of pregnant people in the house</label>
        <div style="width:98%">
        <select name="no_pregnant_people" size="1" id="no_pregnant_people" class="form-control unit" required>
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


    <div class="col-md-12">
      <label for="symptoms_composition"><br>Have you or anyone in the house exhibited COVID-19 related symptoms? </label>
        <div style="width:98%">
        <select name="symptoms_composition" size="1" id="symptoms_composition" class="form-control unit" onchange="showHideSymptomsInfo(this.value);">
            <option selected value="No"></option>
            <option>No</option>
            <option>Yes</option>  
            <option value="Yes">Not sure</option>  
        </select>
        </div>
    </div>          
</div>

<div class="row">
    <fieldset  id="covid-symptoms-info" style="display:none">
        <div class="col-md-3">
          <label for="dryCoughCond">Dry Cough </label>
            <div style="width:98%">
            <select name="dryCoughCond" size="1" id="dryCoughCond" class="form-control unit">
                <option selected value="No"></option>
                <option>Yes</option>
                <option>No</option>
            </select>
            </div>
        </div> 


        <div class="col-md-3">
          <label for="soreThroatConditionCond">Sore Throat </label>
            <div style="width:98%">
            <select name="soreThroatConditionCond" size="1" id="soreThroatConditionCond" class="form-control unit">
                <option selected value="No"></option>
                <option>Yes</option>
                <option>No</option>
            </select>
            </div>
        </div> 


        <div class="col-md-3">
          <label for="shortBreathConditionCond">Shortness of breath </label>
            <div style="width:98%">
            <select name="shortBreathConditionCond" size="1" id="shortBreathConditionCond" class="form-control unit" >
                <option selected value="No"></option>
                <option>Yes</option>
                <option>No</option>
            </select>
            </div>
        </div> 


        <div class="col-md-3">
          <label for="musclePainConditionCond">Muscle Pain </label>
            <div style="width:98%">
            <select name="musclePainConditionCond" size="1" id="musclePainConditionCond" class="form-control unit">
                <option selected value="No"></option>
                <option>Yes</option>
                <option>No</option>
            </select>
            </div>
        </div> 


        <div class="col-md-3">
          <label for="tirednessCondition">Tiredness </label>
            <div style="width:98%">
            <select name="tirednessCondition" size="1" id="tirednessCondition" class="form-control unit">
                <option selected value="No"></option>
                <option>Yes</option>
                <option>No</option>
            </select>
            </div>
        </div> 


        <div class="col-md-3">
          <label for="highTempCond">High Temperature </label>
            <div style="width:98%">
            <select name="highTempCond" size="1" id="highTempCond" class="form-control unit" >
                <option selected value="No"></option>
                <option>Yes</option>
                <option>No</option>
            </select>
            </div>
        </div> 


        <div class="col-md-3">
          <label for="diarrhoeaCondition">Diarrhoea </label>
            <div style="width:98%">
            <select name="diarrhoeaCondition" size="1" id="diarrhoeaCondition" class="form-control unit">
                <option selected value="No"></option>
                <option>Yes</option>
                <option>No</option>
            </select>
            </div>
        </div> 
    </fieldset>
</div>

<div class="row">
    <fieldset>
            <div class="col-md-12">
              <label for="infoCovid"><br>Do you have enough infomation about Covid-19 </label>
                <div style="width:98%">
                <select name="infoCovid" size="1" id="infoCovid" class="form-control unit" onchange="showHideMeduimOfInfo(this.value);" required>
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 

    </fieldset>
</div>

<div class="row">
    <fieldset id="media-info" style="display:none" >  

            <div class="col-md-12">
              <label for="symptoms-composition"><br>Where do you mostly receive information about COVID–19<br></label>
            </div>


            <div class="col-md-3">
              <label for="email">E-mail </label>
                <div style="width:98%">
                <select name="email" size="1" id="email" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="social_media">Social Media </label>
                <div style="width:98%">
                <select name="social_media" size="1" id="social_media" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="billboards">Billboards</label>
                <div style="width:98%">
                <select name="billboards" size="1" id="billboards" class="form-control unit" >
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="internet">Internet Search </label>
                <div style="width:98%">
                <select name="internet" size="1" id="internet" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="print_media">Printed Media</label>
                <div style="width:98%">
                <select name="print_media" size="1" id="print_media" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="sms">SMS </label>
                <div style="width:98%">
                <select name="sms" size="1" id="sms" class="form-control unit" >
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="radio_tv">Radio and TV </label>
                <div style="width:98%">
                <select name="radio_tv" size="1" id="radio_tv" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="municipality">Municipalities </label>
                <div style="width:98%">
                <select name="municipality" size="1" id="municipality" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="neighbourhood_committee">Neighbourhood Committee </label>
                <div style="width:98%">
                <select name="neighbourhood_committee" size="1" id="neighbourhood_committee" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="local_npo">Local NPOs </label>
                <div style="width:98%">
                <select name="local_npo" size="1" id="local_npo" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div>             


            <div class="col-md-12">
              <label for="info-language"><br>What language are you receiving information regarding COVID 19<br></label>
            </div>


            <div class="col-md-3">
              <label for="isindebele">IsiNdebele </label>
                <div style="width:98%">
                <select name="isindebele" size="1" id="isindebele" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="sesotho_sa_leboa">Sesotho sa Leboa </label>
                <div style="width:98%">
                <select name="sesotho_sa_leboa" size="1" id="sesotho_sa_leboa" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="sesotho_sa_borwa">Sesotho sa Borwa</label>
                <div style="width:98%">
                <select name="sesotho_sa_borwa" size="1" id="sesotho_sa_borwa" class="form-control unit" >
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="siswati">SiSwati</label>
                <div style="width:98%">
                <select name="siswati" size="1" id="siswati" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="xitsonga">Xitsonga</label>
                <div style="width:98%">
                <select name="xitsonga" size="1" id="xitsonga" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="setswana">Setswana </label>
                <div style="width:98%">
                <select name="setswana" size="1" id="setswana" class="form-control unit" >
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="tshivenda">Tshivenḓa </label>
                <div style="width:98%">
                <select name="tshivenda" size="1" id="tshivenda" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="isixhosa">IsiXhosa </label>
                <div style="width:98%">
                <select name="isixhosa" size="1" id="isixhosa" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="isizulu">IsiZulu</label>
                <div style="width:98%">
                <select name="isizulu" size="1" id="isizulu" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="afrikaans">Afrikaans </label>
                <div style="width:98%">
                <select name="afrikaans" size="1" id="afrikaans" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="english">English </label>
                <div style="width:98%">
                <select name="english" size="1" id="english" class="form-control unit">
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 

    </fieldset>
</div>

<div class="row">
    <fieldset>
 
            <div class="col-md-6">
              <label for="whatsappp_subscribe"><br>Should we share Covid-19 related infomation to you on WhatsApp </label>
                <div style="width:98%">
                <select name="whatsappp_subscribe" size="1" id="whatsappp_subscribe" class="form-control unit" required>
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 
 
                       
    </fieldset>
</div>