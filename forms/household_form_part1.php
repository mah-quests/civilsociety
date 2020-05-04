<fieldset>
        <div class="row">

            <div class="form-group col-md-12" align="center">
              <h5>Contact Person Details</h5>
            </div>

            <div class="col-md-6">
              <label for="firstname">First Names</label>
                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Please enter your first names" value="<?php echo $edit ? $user_id['firstname'] : '';?>" required> 
            </div>

            <div class="col-md-6">
              <label for="lastname">Surname</label>
                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Please enter your surname" value="<?php echo $edit ? $user_id['lastname'] : '';?>" required> 
            </div>

            <div class="col-md-12">
              <label for="identification">Identification Number</label>
                <input class="form-control" type="text" name="identification" id="identification" placeholder="Please enter your unique identification number" value="<?php echo $edit ? $user_id['identification'] : '';?>" required> 
                <small id="emailHelp" class="form-text text-muted">We will use this for verification purposes ONLY.
                </small> 
            </div>             

            <div class="col-md-6">
              <label for="sex">Sex</label>
                <div style="width:98%">
                <select name="sex" size="1" id="sex" class="form-control unit" value="<?php echo $edit ? $user_id['sex'] : ''; ?>" required>
                        <option selected>Choose</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                </select>
                </div>
            </div> 

            <div class="col-md-6">
              <label for="phone">Celphone number</label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="Please enter your unique celphone number" value="<?php echo $edit ? $user_id['phone'] : '';?>" required> 
              </div>   

            <div class="col-md-12">
              <label for="address">Home Address</label>
                <textarea class="form-control" id="address"  name="address" rows="3" value="<?php echo $edit ? $user_id['address'] : ''; ?>"  placeholder="Please enter your full home address" required>
                </textarea>
            </div>

            <div class="col-md-6">
              <label for="municipality">Municipality</label>
                <input class="form-control" type="text" name="municipality" id="municipality" placeholder="Please enter your local municipality" value="<?php echo $edit ? $user_id['municipality'] : ''; ?>"  required> 
            </div>

            <div class="col-md-6">
              <label for="district">District</label>
              <input class="form-control" type="text" name="district" id="district" placeholder="Please enter your local district" value="<?php echo $edit ? $user_id['district'] : ''; ?>" >
            </div>


            <div class="col-md-12">
              <label for="provice">Province</label>
                <div style="width:98%">
                <select name="provice" size="1" class="form-control unit" value="<?php echo $edit ? $user_id['provice'] : ''; ?>" required>
                        <option selected>Choose</option>
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
            </div>


            <div class="col-md-6">
              <label for="alt_person">Alternative Contact Person</label>
              <input type="text" class="form-control" id="alt_person" name="alt_person" placeholder="Please enter alternative contact person" value="<?php echo $edit ? $user_id['alt_person'] : ''; ?>" required>
            </div>


            <div class="col-md-6">
              <label for="alt_number">Alternative Contact Number</label>
              <input type="text" class="form-control" id="alt_number" name="alt_number" placeholder="Please enter alternative contact number" value="<?php echo $edit ? $user_id['alt_number'] : ''; ?>" required>
            </div>   

  </div>
</fieldset>
