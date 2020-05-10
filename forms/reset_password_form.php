<fieldset>
        <div class="row">

            <div class="col-md-6">
              <label for="password-label">Password</label>
            </div>

            <div class="col-md-6">
                <input class="form-control" type="password" name="password" id="password" placeholder="Please enter your password" value="<?php echo $user['password']; ?>" required> 
            </div>


            <div class="col-md-6">
              <label for="cpassword-label">Confirm Password</label>
            </div>

            <div class="col-md-6">
                <input class="form-control" type="password" name="cpassword" id="cpassword" placeholder="Please enter your password" value="<?php echo $user['password']; ?>" required> 
            </div>


            <div class="form-group col-md-12" align="center">
              <h5><br></h5>
            </div>                    
<!-- Comment out until the functionality has been completed. -->
          
          <div class="row">
            <div class="col-sm-12" align="center">
              <p> 
                <input type="submit" value="reset" name="reset" class="btn btn-primary"> 
              </p>
            </div>                     
          </div>


      </div>
</fieldset>