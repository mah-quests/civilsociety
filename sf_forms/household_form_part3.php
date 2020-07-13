<script type="text/javascript">
    function showHideGrantInfo(){
        var noOption = document.getElementById("social_grants").value;
        if( noOption > 0 ){
            jQuery('#socialgrants-info').show();
            document.getElementById("socialgrants-info").style.visibility = 'visible';
        }else{
            jQuery('#socialgrants-info').hide();
            document.getElementById("socialgrants-info").style.visibility = 'hidden';            
        }
    }

    function showHideEmploymentTypeInfo(){
        var noOption = document.getElementById("number_people_employed").value;
        if( noOption > 0 ){
            jQuery('#employmenttype-info').show();
            document.getElementById("employmenttype-info").style.visibility = 'visible';
        }else{
            jQuery('#employmenttype-info').hide();
            document.getElementById("employmenttype-info").style.visibility = 'hidden';            
        }
    }   

    function showHideDebtRelief(){
        var noOption = document.getElementById("debt_relief").value;
        if( noOption == "Yes"){
            jQuery('#debt-relief-info').show();
            document.getElementById("debt-relief-info").style.visibility = 'visible';
        }else{
            jQuery('#debt-relief-info').hide();
            document.getElementById("debt-relief-info").style.visibility = 'hidden';            
        }
    }     
</script>


<div class="row">
<fieldset>
        
            <br>

            <div class="form-group col-md-12" align="center">
              <h5><br>Household Employment Status<br></h5>
            </div>

            <div class="col-md-12">
              <label for="number_people_employed">How many people are employed in the household? </label>
                <div style="width:100%">
                <select name="number_people_employed" size="1" id="number_people_employed" class="form-control unit" onchange="showHideEmploymentTypeInfo(this.value);" required>
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

<fieldset id="employmenttype-info" style="display:none">

            <div class="col-md-12">
              <label for="house-composition"><br>Number of people on different employment types<br></label>
            </div>

            <div class="col-md-6">
              <label for="number_formal_employment">
                <a data-toggle="tooltip" data-placement="top" title="A formally registered business">
                  <span class="glyphicon glyphicon-info-sign"></span>
                    Formal 
                </a>
              </label>
                <div style="width:100%">
                <select name="number_formal_employment" size="1" id="number_formal_employment" class="form-control unit" required>
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


            <div class="col-md-6">
              <label for="number_informal_employment">
                <a data-toggle="tooltip" data-placement="top" title="A non legally registered business">
                  <span class="glyphicon glyphicon-info-sign"></span>
                    Informal 
                </a>
              </label>
                <div style="width:100%">
                <select name="number_informal_employment" size="1" id="number_informal_employment" class="form-control unit" required>
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

<fieldset>
            <div class="col-md-6">
              <label for="still_receiving_income">Number of people still receiving income during the covid pandemic and lockdown? </label>
                <div style="width:100%">
                <select name="still_receiving_income" size="1" id="still_receiving_income" class="form-control unit" required>
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

            <div class="col-md-6">
              <label for="employment_lost">How many people have lost their jobs in the household due to COVID 19/Lockdown? </label>
                <div style="width:100%">
                <select name="employment_lost" size="1" id="employment_lost" class="form-control unit" value="<?php echo $edit ? $user_id['employment_lost'] : ''; ?>" required>
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

<fieldset>
    
    <div class="col-md-12">
      <label for="debt_relief">
        Is there anyone in the house who is receiving any form of debt relief?
      </label>
        <div style="width:100%">
        <select name="debt_relief" size="1" id="debt_relief" class="form-control unit"  required onchange="showHideDebtRelief(this.value);">
                <option selected value="No"></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
        </select>
        </div>
    </div>     


    <div class="col-md-12" id="debt-relief-info" style="display:none">
      <label for="debt_relief_details"><br>Please specify:</label>
        <textarea class="form-control" id="debt_relief_details"  name="debt_relief_details" rows="3" placeholder="Enter debt relief details" >
        </textarea>
    </div>     
</fieldset>

<fieldset>
    
            <div class="col-md-12">
              <label for="social_grants">Number of people on social grant recepients in the household</label>
                <div style="width:100%">
                <select name="social_grants" size="1" id="social_grants" class="form-control unit"  onchange="showHideGrantInfo(this.value);"  required> 
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

<fieldset id="socialgrants-info" style="display:none">

            <div class="col-md-12">
              <label for="house-composition"><br>Number of people on different grant<br></label>
            </div>

            <div class="col-md-3">
              <label for="oldperson_grant">Old persons’ Grant</label>
                <div style="width:100%">
                <select name="oldperson_grant" size="1" id="oldperson_grant" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option> 
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="disability_grant">Disability Grant </label>
                <div style="width:100%">
                <select name="disability_grant" size="1" id="disability_grant" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option>                      
                    <option>No</option>
                </select>
                </div>
            </div>


            <div class="col-md-3">
              <label for="caredependancy_grant">Care-Dependency Grant  </label>
                <div style="width:100%">
                <select name="caredependancy_grant" size="1" id="caredependancy_grant" class="form-control unit">
                    <option selected value="No"></option> 
                    <option>Yes</option>  
                    <option>No</option>
                </select>
                </div>
            </div>       
   
            
            <div class="col-md-3">
              <label for="warveteran_grant">War Veterans’ Grant </label>
                <div style="width:100%">
                <select name="warveteran_grant" size="1" id="warveteran_grant" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option>  
                    <option>No</option>
                </select>
                </div>
            </div>             


            <div class="col-md-3">
              <label for="childsupport_grant">Child Support Grant </label>
                <div style="width:100%">
                <select name="childsupport_grant" size="1" id="childsupport_grant" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option>                      
                    <option>No</option>
                </select>
                </div>
            </div>


            <div class="col-md-3">
              <label for="fosterchild_grant">Foster Child Grant </label>
                <div style="width:100%">
                <select name="fosterchild_grant" size="1" id="fosterchild_grant" class="form-control unit">
                    <option selected value="No"></option> 
                    <option>Yes</option>  
                    <option>No</option>
                </select>
                </div>
            </div>       
   
            
            <div class="col-md-3">
              <label for="grantin_grant">Grant-in-Aid </label>
                <div style="width:100%">
                <select name="grantin_grant" size="1" id="grantin_grant" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option>  
                    <option>No</option>
                </select>
                </div>
            </div>  
</fieldset>

</div>