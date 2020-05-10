<fieldset>
        <div class="row">
            <br>

            <div class="form-group col-md-12" align="center">
              <h5>People with disabilities</h5>
            </div>


            <div class="col-md-12">
              <label for="number_disabled">Is there anyone with a disability in the house? </label>
                <div style="width:98%">
                <select name="number_disabled" size="1" id="number_disabled" class="form-control unit" value="<?php echo $edit ? $user_id['number_disabled'] : ''; ?>" required>
                    <option selected>No</option>
                    <option>Yes</option> 
                </select>
                </div>
            </div> 

            <div class="col-md-6">
              <label for="number_disabled_child">Is there a disabled child in the house?</label>
                <div style="width:98%">
                <select name="number_disabled_child" size="1" id="number_disabled_child" class="form-control unit" value="<?php echo $edit ? $user_id['number_disabled_child'] : ''; ?>" required>
                    <option selected>No</option>
                    <option>Yes</option> 
                </select>
                </div>
            </div> 


            <div class="col-md-6">
              <label for="number_disabled_adult">Is there a disabled adult in the house? </label>
                <div style="width:98%">
                <select name="number_disabled_adult" size="1" id="number_disabled_adult" class="form-control unit" value="<?php echo $edit ? $user_id['number_disabled_adult'] : ''; ?>" required>
                    <option selected>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>

            <div class="col-md-4">
              <label for="psyco_social_disability">Psycho social disability</label>
                <div style="width:98%">
                <select name="psyco_social_disability" size="1" id="psyco_social_disability" class="form-control unit" value="<?php echo $edit ? $user_id['psyco_social_disability'] : '';?>" required>
                    <option selected>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>       
   
            
            <div class="col-md-4">
              <label for="physical_disability">Physical disability </label>
                <div style="width:98%">
                <select name="physical_disability" size="1" id="physical_disability" class="form-control unit" value="<?php echo $edit ? $user_id['physical_disability'] : ''; ?>" required>
                    <option selected>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>             


            <div class="col-md-4">
              <label for="other_disability">Other disability type</label>
                <div style="width:98%">
                <select name="other_disability" size="1" id="other_disability" class="form-control unit" value="<?php echo $edit ? $user_id['other_disability'] : ''; ?>" required>
                    <option selected>No</option>
                    <option>Yes</option>  
                </select>
                </div>
            </div>   
 
    </div>
</fieldset>