<script type="text/javascript">
    function showHideDisabilityInfo(){
        var noOption = document.getElementById("number_disabled").value;
        if( noOption == "Yes"){
            jQuery('#disability-info').show();
            document.getElementById("disability-info").style.visibility = 'visible';
        }else{
            jQuery('#disability-info').hide();
            document.getElementById("disability-info").style.visibility = 'hidden';            
        }
    }
</script>
<div class="row">
<fieldset>
            <br>

            <div class="form-group col-md-13" align="center">
              <h5><br>People with disabilities</h5>
            </div>


            <div class="col-md-12">
              <label for="number_disabled">Is there anyone with a disability in the house? </label>
                <div style="width:98%">
                <select name="number_disabled" size="1" id="number_disabled" class="form-control unit" value="<?php echo $edit ? $user_id['number_disabled'] : ''; ?>" required onchange="showHideDisabilityInfo(this.value);">
                    <option></option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option> 
                </select>
                </div>
            </div> 

</fieldset>
<fieldset id="disability-info" style="display:none">

            <div class="col-md-6">
              <label for="number_disabled_child">
                Is there a disabled child in the house? 
                    <i style="font-size: 12px">(Ages 0 - 18)
                    </i>
                </label>
                <div style="width:98%">
                <select name="number_disabled_child" size="1" id="number_disabled_child" class="form-control unit">
                    <option selected value="No"></option>
                    <option>No</option>
                    <option>Yes</option> 
                </select>
                </div>
            </div> 


            <div class="col-md-6">
              <label for="number_disabled_adult">
                Is there a disabled adult in the house? 
                    <i style="font-size: 12px">(Ages 19+)
                    </i>                
                </label>
                <div style="width:98%">
                <select name="number_disabled_adult" size="1" id="number_disabled_adult" class="form-control unit">
                    <option selected value="No"></option>
                    <option>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>

            <div class="col-md-4">
              <label for="psyco_social_disability">Psycho social disability</label>
                <div style="width:98%">
                <select name="psyco_social_disability" size="1" id="psyco_social_disability" class="form-control unit">
                    <option selected value="No"></option>
                    <option>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>       
   
            
            <div class="col-md-4">
              <label for="physical_disability">Physical disability </label>
                <div style="width:98%">
                <select name="physical_disability" size="1" id="physical_disability" class="form-control unit" value="No" >
                    <option selected value="No"></option>
                    <option>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>             


            <div class="col-md-4">
              <label for="other_disability">Other disability type</label>
                <div style="width:98%">
                <select name="other_disability" size="1" id="other_disability" class="form-control unit" >
                    <option selected value="No"></option>
                    <option>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>   
 
</fieldset>
</div>