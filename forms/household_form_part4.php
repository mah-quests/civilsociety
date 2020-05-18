<script type="text/javascript">
    function showHideViolationInfo(){
        var noOption = document.getElementById("any_kind_abuse").value;
        if( noOption == "Yes"){
            jQuery('#violations-info').show();
            document.getElementById("violations-info").style.visibility = 'visible';
        }else{
            jQuery('#violations-info').hide();
            document.getElementById("violations-info").style.visibility = 'hidden';            
        }
    }
</script>

<div class="row">
<fieldset>
            <br>

            <div class="form-group col-md-12" align="center">
              <h5><br>Human rights & violations</h5>
            </div>


            <div class="col-md-12">
              <label for="any_kind_abuse">Has you or anyone in the household experienced any kind of abuse, assult or harrasment during the lockdown? </label>
                <div style="width:98%">
                <select name="any_kind_abuse" size="1" id="any_kind_abuse" class="form-control unit" value="<?php echo $edit ? $user_id['any_kind_abuse'] : ''; ?>" required onchange="showHideViolationInfo(this.value);">
                    <option></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option> 
                </select>
                </div>
            </div> 

</fieldset>
<fieldset id="violations-info" style="display:none">
            <div class="col-md-3">
              <label for="lawEnforcementCond">Law Enforcement </label>
                <div style="width:98%">
                <select name="lawEnforcementCond" size="1" id="lawEnforcementCond" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option> 
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="communityMemberCond">Community Member </label>
                <div style="width:98%">
                <select name="communityMemberCond" size="1" id="communityMemberCond" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option>                      
                    <option>No</option>
                </select>
                </div>
            </div>

            <div class="col-md-3">
              <label for="healthCareCheck">Health Professional  </label>
                <div style="width:98%">
                <select name="healthCareCheck" size="1" id="healthCareCheck" class="form-control unit">
                    <option selected value="No"></option> 
                    <option>Yes</option>  
                    <option>No</option>
                </select>
                </div>
            </div>       
   
            
            <div class="col-md-3">
              <label for="domesticCond">GBV  </label>
                <div style="width:98%">
                <select name="domesticCond" size="1" id="domesticCond" class="form-control unit" >
                    <option selected value="No"></option> 
                    <option>Yes</option>  
                    <option>No</option>
                </select>
                </div>
            </div>             


            <div class="col-md-3">
              <label for="lawEnforcementType">Law Enforcement </label>
                <div style="width:98%">
                <select name="lawEnforcementType" size="1" id="lawEnforcementType" class="form-control unit" >
                    <option selected value="None"></option> 
                    <option>Unlawful detention </option>
                    <option>Assault</option>
                    <option>Inhuman treatment </option>  
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="communityMemberType">Community Member </label>
                <div style="width:98%">
                <select name="communityMemberType" size="1" id="communityMemberType" class="form-control unit">
                <option selected value="None"></option> 
                <option>Discrimination</option>
                <option>Stigma</option>
                <option>Domestic violence</option>
                </select>
                </div>
            </div>
   

            <div class="col-md-3">
              <label for="healthCareType">Health Professional  </label>
                <div style="width:98%">
                <select name="healthCareType" size="1" id="healthCareType" class="form-control unit" >
                    <option selected value="None"></option> 
                    <option>Discrimination</option>
                    <option>Disclosure of confidential information</option>
                    <option>Access to health care </option>
                    <option>Access to sexual and reproductive health</option>
                </select>
                </div>
            </div>    
            
            <div class="col-md-3">
              <label for="domesticType">GBV </label>
                <div style="width:98%">
                <select name="domesticType" size="1" id="domesticType" class="form-control unit" >
                    <option selected value="None"></option> 
                    <option>Assault</option>
                    <option>Abuse</option>
                    <option>Discrimination</option>
                </select>
                </div>
            </div>
</fieldset>
</div>