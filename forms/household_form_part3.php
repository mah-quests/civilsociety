<fieldset>
        <div class="row">
            <br>

            <div class="form-group col-md-12" align="center">
              <h5>Household Employment Status</h5>
            </div>


            <div class="col-md-6">
              <label for="number_people_employed">How many people employed in the household? </label>
                <div style="width:98%">
                <select name="number_people_employed" size="1" id="number_people_employed" class="form-control unit" value="<?php echo $edit ? $user_id['number_people_employed'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>0</option>
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
              <label for="employment_lost">Number of jobs lost employment due to the corona virus and lockdown? </label>
                <div style="width:98%">
                <select name="employment_lost" size="1" id="employment_lost" class="form-control unit" value="<?php echo $edit ? $user_id['employment_lost'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>0</option>
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
              <label for="still_receiving_income">Are you still receiving income during the covid pandemic and lockdown? </label>
                <div style="width:98%">
                <select name="still_receiving_income" size="1" id="still_receiving_income" class="form-control unit" value="<?php echo $edit ? $user_id['still_receiving_income'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>Yes</option>
                    <option>No</option> 
                </select>
                </div>
            </div>

            <div class="col-md-6">
              <label for="social_grants">Number of people on social grant recepients in the household </label>
                <div style="width:98%">
                <select name="social_grants" size="1" id="social_grants" class="form-control unit" value="<?php echo $edit ? $user_id['social_grants'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>0</option>
                    <option>1</option>                            
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>                                  
                    <option>7</option>
                    <option>8</option> 
                </select>
                </div>
            </div>            
    </div>
</fieldset>