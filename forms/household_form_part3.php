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
</script>


<div class="row">
<fieldset>
        
            <br>

            <div class="form-group col-md-12" align="center">
              <h5><br>Household Employment Status<br></h5>
            </div>



            <div class="col-md-6">
              <label for="still_receiving_income">Number of people still receiving income during the covid pandemic and lockdown? </label>
                <div style="width:98%">
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
                <div style="width:98%">
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


            <div class="col-md-6">
              <label for="number_people_employed">How many people are employed in the household? </label>
                <div style="width:98%">
                <select name="number_people_employed" size="1" id="number_people_employed" class="form-control unit" value="<?php echo $edit ? $user_id['number_people_employed'] : ''; ?>" required>
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
              <label for="social_grants">Number of people on social grant recepients in the household</label>
                <div style="width:98%">
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
            <div class="col-md-3">
              <label for="oldperson_grant">Old persons’ Grant</label>
                <div style="width:98%">
                <select name="oldperson_grant" size="1" id="oldperson_grant" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option> 
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="disability_grant">Disability Grant </label>
                <div style="width:98%">
                <select name="disability_grant" size="1" id="disability_grant" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option>                      
                    <option>No</option>
                </select>
                </div>
            </div>


            <div class="col-md-3">
              <label for="caredependancy_grant">Care-Dependency Grant  </label>
                <div style="width:98%">
                <select name="caredependancy_grant" size="1" id="caredependancy_grant" class="form-control unit">
                    <option selected value="No"></option> 
                    <option>Yes</option>  
                    <option>No</option>
                </select>
                </div>
            </div>       
   
            
            <div class="col-md-3">
              <label for="warveteran_grant">War Veterans’ Grant </label>
                <div style="width:98%">
                <select name="warveteran_grant" size="1" id="warveteran_grant" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option>  
                    <option>No</option>
                </select>
                </div>
            </div>             


            <div class="col-md-3">
              <label for="childsupport_grant">Child Support Grant </label>
                <div style="width:98%">
                <select name="childsupport_grant" size="1" id="childsupport_grant" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option>                      
                    <option>No</option>
                </select>
                </div>
            </div>


            <div class="col-md-3">
              <label for="fosterchild_grant">Foster Child Grant </label>
                <div style="width:98%">
                <select name="fosterchild_grant" size="1" id="fosterchild_grant" class="form-control unit">
                    <option selected value="No"></option> 
                    <option>Yes</option>  
                    <option>No</option>
                </select>
                </div>
            </div>       
   
            
            <div class="col-md-3">
              <label for="grantin_grant">Grant-in-Aid </label>
                <div style="width:98%">
                <select name="grantin_grant" size="1" id="grantin_grant" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option>  
                    <option>No</option>
                </select>
                </div>
            </div>  

</fieldset>

</div>