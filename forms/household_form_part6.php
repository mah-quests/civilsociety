<script type="text/javascript">
    function showHideChronicInfo(){
        var noOption = document.getElementById("chronic_medication").value;
        if( noOption == "Yes"){
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

</script>

<div class="row">
    <fieldset>
            <br>

            <div class="form-group col-md-12" align="center">
              <h5>Household Health Profile</h5>
            </div>

            <div class="col-md-12">
              <label for="chronic_medication">Is there anyone on chronic medication? </label>
                <div style="width:98%">
                <select name="chronic_medication" size="1" id="chronic_medication" class="form-control unit" value="<?php echo $edit ? $user_id['chronic_medication'] : ''; ?>" required onchange="showHideChronicInfo(this.value);" required>
                    <option selected></option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
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
              <label for="symptoms-composition"><br>Have you or anyone in the house exhibited any of the following in the past 3 days:<br></label>
            </div>


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



            <div class="col-md-6">
              <label for="infoCovid"><br>Do you have enough infomation about Covid-19 </label>
                <div style="width:98%">
                <select name="infoCovid" size="1" id="infoCovid" class="form-control unit" required>
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


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

</div>