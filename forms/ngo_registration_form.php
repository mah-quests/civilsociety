<fieldset>
        <div class="row">

            <div class="col-md-12">
              <label for="organization_structure">Registration Number</label>
                <input class="form-control" type="text" name="organization_structure" id="example-text-input" placeholder="Please enter a valid NPO Registration Number" value="<?php echo $edit ? $user_id['organization_structure'] : '';?>" required> 
            </div>


            <div class="col-md-12">
              <label for="organization_name">Registered Name</label>
                <input class="form-control" type="text" name="organization_name" id="example-text-input" placeholder="Please enter a valid NPO Registration Name" value="<?php echo $edit ? $user_id['organization_name'] : '';?>" required> 
            </div>


            <div class="col-md-12">
              <label for="network">Network</label>
                <div style="width:98%">
                <select name="network" size="1" class="form-control unit" value="<?php echo $edit ? $user_id['network'] : ''; ?>" required>
                        <option selected></option>
                        <option>Registered Non Profit Organization</option>
                        <option>Churches</option>
                        <option>Cooperatives</option>
                        <option>Traditional healers</option>
                        <option>Traditional leaders</option>
                </select>
                </div>
            </div>


            <div class="col-md-6">
              <label for="firstname">First Names</label>
                <input class="form-control" type="text" name="firstname" id="example-text-input" placeholder="Please enter your first names" value="<?php echo $edit ? $user_id['firstname'] : '';?>" required> 
            </div>


            <div class="col-md-6">
              <label for="lastname">Surname</label>
                <input class="form-control" type="text" name="lastname" id="example-text-input-2" placeholder="Please enter your surname" value="<?php echo $edit ? $user_id['lastname'] : '';?>" required> 
            </div>


            <div class="col-md-12">
              <label for="username">Identification Number</label>
                <input class="form-control" type="text" name="username" id="example-text-input" placeholder="Please enter your unique identification number" value="<?php echo $edit ? $user_id['username'] : '';?>" required> 
              </div>   


            <div class="col-md-6">
              <label for="sex">Sex</label>
                <div style="width:98%">
                <select name="sex" size="1" class="form-control unit" value="<?php echo $edit ? $user_id['sex'] : ''; ?>" required>
                        <option selected></option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Intersex</option>
                        <option>Other</option>
                </select>
                </div>
            </div>


            <div class="col-md-6">
              <label for="phone">Cellphone number</label>
                <input class="form-control" type="text" name="phone" id="example-text-input" placeholder="Please enter your unique celphone number" value="<?php echo $edit ? $user_id['phone'] : '';?>" required> 
              </div>  


            <div class="col-md-6">
              <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Please enter valid email" value="<?php echo $edit ? $user_id['email'] : '';?>" required> 
            </div>


            <div class="col-md-6">
              <label for="nationality">Nationality</label>
                <div style="width:98%">
                <select name="nationality" size="1" class="form-control unit" value="<?php echo $edit ? $user_id['nationality'] : ''; ?>" required>
                        <option selected>South Africa</option>
                        <option>Other</option>
                </select>
                </div>
            </div>
            

            <div class="col-md-12">
              <label for="address">Home Address</label>
                <textarea class="form-control" id="exampleTextarea"  name="address" rows="3" value="<?php echo $edit ? $user_id['address'] : ''; ?>"  required>
                </textarea>
            </div>


            <div class="col-md-12">
            <label for="municipality"><br>Location Selection<br></label>
            <div style="width:98%">
                  
              <select name='List1' id="List1" onchange="fillSelect(this.value,this.form['List2'])" required>
                <option selected>Select Province</option>
                  </select> &nbsp;

              <select name='List2' id="List2" onchange="fillSelect(this.value,this.form['List3'])" class="DDlist" required>
                <option selected>Select District</option>
                  </select> &nbsp;

              <select name='List3' id="List3" onchange="fillSelect(this.value,this.form['List4'])" class="DDlist" required>
                <option selected >Choose Manucipality</option>
                  </select> &nbsp;
              </div>
            </div>

            <div class="col-md-12">
              <br><br>
            </div>


            <div class="col-md-6">
              <label for="alt_person">Alternative Contact Person</label>
              <input type="text" class="form-control" id="alt_person" name="alt_person" placeholder="Please enter alternative contact person" value="<?php echo $edit ? $user_id['alt_person'] : ''; ?>" required>
            </div>


            <div class="col-md-6">
              <label for="alt_number">Alternative Contact Number</label>
              <input type="text" class="form-control" id="alt_number" name="alt_number" placeholder="Please enter alternative contact number" value="<?php echo $edit ? $user_id['alt_number'] : ''; ?>" required>
            </div>                                                                          
            <div class="col-md-6">
              <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Please enter your password" value="<?php echo $edit ? $user_id['password'] : ''; ?>" required> 
                  <small id="password" class="form-text text-muted">Your password has to be 8 characters and more.
            </small> 
            </div>            

            <div class="col-md-6">
              <label for="cpassword">Repeat password</label>
                <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2" placeholder="Please enter your password again" value="<?php echo $edit ? $user_id['cpassword'] : ''; ?>" required> 
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