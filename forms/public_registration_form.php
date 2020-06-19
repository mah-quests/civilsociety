<fieldset>
        <div class="row">


            <div class="col-md-6">
              <label for="firstname">First Names</label>
                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Please enter your first names"  required> 
            </div>


            <div class="col-md-6">
              <label for="lastname">Surname</label>
                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Please enter your surname"  required> 
            </div>


            <div class="col-md-12">
              <label for="username">Identification Number</label>
                <input class="form-control" type="text" name="username" id="username" placeholder="Please enter your unique identification number"  required> 
              </div>   


            <div class="col-md-6">
              <label for="sex">Sex</label>
                <div style="width:100%">
                <select name="sex" size="1" class="form-control unit" required>
                        <option selected value=""></option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Intersex</option>
                        <option>Other</option>
                </select>
                </div>
            </div>


            <div class="col-md-6">
              <label for="phone">Cellphone number</label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="Please enter your unique celphone number"  required> 
              </div>  


            <div class="col-md-6">
              <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Please enter valid email"  > 
            </div>


            <div class="col-md-6">
              <label for="nationality">Nationality</label>
                <div style="width:100%">
                <select name="nationality" size="1" class="form-control unit" value="<?php echo $edit ? $user_id['nationality'] : ''; ?>" required>
                        <option selected value=""></option>
                        <option>South Africa</option>
                        <option>Other</option>
                </select>
                </div>
            </div>

            <div class="col-md-12">
              <label for="address">Home Address</label>
                <textarea class="form-control" id="address"  name="address" rows="3" required>
                </textarea>
            </div>


            <div class="col-md-12">
            <label for="municipality"><br>Location Selection<br></label>
            <div style="width:100%">
                  
              <select name='List1' id="List1" onchange="fillSelect(this.value,this.form['List2'])" required>
                <option selected value="">Select Province</option>
                  </select> &nbsp;

              <select name='List2' id="List2" onchange="fillSelect(this.value,this.form['List3'])" class="DDlist" required>
                <option selected value="">Select District</option>
                  </select> &nbsp;

              <select name='List3' id="List3" onchange="fillSelect(this.value,this.form['List4'])" class="DDlist" required>
                <option selected value="">Choose Manucipality</option>
                  </select> &nbsp;
              </div>
            </div>

            <div class="col-md-12">
              <br><br>
            </div>


            <div class="col-md-6">
              <label for="alt_person">Alternative Contact Person</label>
              <input type="text" class="form-control" id="alt_person" name="alt_person" placeholder="Please enter alternative contact person"  required>
            </div>


            <div class="col-md-6">
              <label for="alt_number">Alternative Contact Number</label>
              <input type="text" class="form-control" id="alt_number" name="alt_number" placeholder="Please enter alternative contact number"  required>
            </div>                                                                          
            <div class="col-md-6">
              <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Please enter your password"  required> 
                  <small id="password" class="form-text text-muted">Your password has to be 8 characters and more.
            </small> 
            </div>            

            <div class="col-md-6">
              <label for="cpassword">Repeat password</label>
                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Please enter your password again"  required> 
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