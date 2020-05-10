<fieldset>
        <div class="row">


            <div class="col-md-12">
              <label for="organization_name">Organization Name</label>
                <input class="form-control" type="text" name="organization_name" id="organization_name" placeholder="Please enter your organization name" value="<?php echo $user['organization_name']; ?>" required> 
            </div>


            <div class="col-md-6">
              <label for="firstname">First Names</label>
                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Please enter your first names" value="<?php echo $user['f_name']; ?>" required> 
            </div>


            <div class="col-md-6">
              <label for="lastname">Surname</label>
                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Please enter your surname" value="<?php echo $user['l_name']; ?>" required> 
            </div>


            <div class="col-md-6">
              <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Please enter valid email" value="<?php echo $user['email']; ?>" required> 
            </div>


            <div class="col-md-6">
              <label for="phone">Celphone number</label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="Please enter your unique celphone number" value="<?php echo $user['phone']; ?>" required> 
            </div>  


            <div class="col-md-6">
              <label for="sex">Sex</label>
                <div style="width:98%">
                <select name="sex" size="1" class="form-control unit" value="<?php echo $user['sex']; ?>" required>
                        <option selected>Please Choose</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                </select>
                </div>
            </div>


            <div class="col-md-6">
              <label for="nationality">Nationality</label>
                <div style="width:98%">
                <select name="nationality" size="1" class="form-control unit" value="<?php echo $edit ? $user['nationality'] : ''; ?>" required>
                        <option selected>Please Choose</option>
                        <option>South Africa</option>
                        <option>Other</option>
                </select>
                </div>
            </div>


            <div class="col-md-12">
              <label for="address">Home Address</label>
                <input class="form-control" type="text" name="address" id="address" rows="3" placeholder="Please enter your local address" value="<?php echo $user['address']; ?>"  required> 
            </div>


            <div class="col-md-6">
              <label for="municipality">Municipality</label>
                <input class="form-control" type="text" name="municipality" id="municipality" placeholder="Please enter your local municipality" value="<?php echo $user['municipality']; ?>"  required> 
            </div>


            <div class="col-md-6">
              <label for="district">District</label>
              <input class="form-control" type="text" name="district" id="district" placeholder="Please enter your local district" value="<?php echo $user['district']; ?>" required>
            </div>


            <div class="col-md-12">
              <label for="provice">Province</label>
                <div style="width:98%">
                <select name="provice" size="1" class="form-control unit" value="<?php echo  $user['provice'] ; ?>" value="<?php echo $edit ? $user['provice'] : ''; ?>" required>
                        <option selected>Please Choose</option>
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
            <input type="text" class="form-control" id="alt_person" name="alt_person" placeholder="Please enter alternative contact person" value="<?php echo $user['alt_person']; ?>" required>
          </div>


          <div class="col-md-6">
            <label for="alt_number">Alternative Contact Number</label>
            <input type="text" class="form-control" id="alt_number" name="alt_number" placeholder="Please enter alternative contact number" value="<?php echo $user['alt_number'] ; ?>" required>
          </div>    

            <div class="form-group col-md-12" align="center">
              <h5><br></h5>
            </div>                    
<!-- Comment out until the functionality has been completed. -->
          
          <div class="row">
            <div class="col-sm-12" align="center">
              <p> 
                <input type="submit" value="update" name="update" class="btn btn-primary"> 
              </p>
            </div>                     
          </div>


      </div>
</fieldset>