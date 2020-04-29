<fieldset>
        <div class="row">
        <div class="form-group col-sm-6">
          <label for="exampleInputFirstNames">First Names</label>
            <input class="form-control" type="text" name="firstname" id="example-text-input" placeholder="First Name" required> 
        </div>
        <div class="form-group col-sm-6">
          <label for="exampleInputSurname">Surname</label>
            <input class="form-control" type="text" name="lastname" id="example-text-input-2" placeholder="Surname" required> 
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Sex</label>
          <select id="inputState" class="form-control" name="sex">
            <option selected>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>  
        <div class="form-group col-sm-6">
          <label for="exampleCelphone">Celphone number</label>
            <input class="form-control" type="text" name="phone" id="example-tel-input-3" placeholder="Phone" required> 
            <small id="emailHelp" class="form-text text-muted">You will be contacted using this celphone number. Must be unique!
            </small> 
        </div>                          
        <div class="form-group col-sm-6">
          <label for="exampleEmail">Email address</label>
            <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter valid email" required> 
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Nationality</label>
          <select id="inputState" class="form-control" name="nationality">
            <option>South Africa</option>
            <option>Lesotho</option>
            <option>Botswana</option>
            <option>Zimbabwe</option>
            <option>Zambia</option>
            <option>Eswatini</option>
            <option>Other</option>
          </select>
        </div>                            
        <div class="form-group col-sm-12">
          <label for="exampleTextarea">Home Address</label>
            <textarea class="form-control" id="exampleTextarea"  name="address" rows="3" required>
            </textarea>
        </div>
        <div class="form-group col-sm-6">
          <label for="exampleInputEmail1">Municipality</label>
            <input class="form-control" type="text" name="municipality" id="example-text-input-2" placeholder="Enter Municipality"> 
        </div>
        <div class="form-group col-sm-6">
          <label for="exampleCity">District</label>
          <input class="form-control" type="text" name="district" id="example-text-input" placeholder="Enter City"> 
        </div>
        <div class="form-group col-md-12">
          <label for="inputState">Province</label>
          <select id="inputState" class="form-control" name="provice" required>
            <option selected>Gauteng</option>
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
        <div class="form-group col-md-6" >
          <label for="inputFirstName">Alternative Contact Person</label>
          <input type="text" class="form-control" id="alt_person" name="alt_person" placeholder="Enter Alternative Contact Person" required>
        </div>
        <div class="form-group col-md-6" >
          <label for="inputIDNumber">Alternative Contact Number</label>
          <input type="text" class="form-control" id="alt_number" name="alt_number" placeholder="Enter Alternative Contact Number" required>
        </div>                                                   
        <div class="form-group col-sm-12">
          <label for="exampleInputIDNumber">ID Number</label>
            <input class="form-control" type="text" name="username" id="example-text-input" placeholder="ID Number" required> 
            <small id="emailHelp" class="form-text text-muted">You will use your ID Number to login. Must be unique
            </small> 
          </div>                          
        <div class="form-group col-sm-6">
          <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required> 
        </div>
        <div class="form-group col-sm-6">
          <label for="exampleInputPassword1">Repeat password</label>
            <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2" placeholder="Password" required> 
        </div>
      </div>
    <div class="row">
      <div class="col-sm-12" align="center">
        <p> 
          <input type="submit" value="Register" name="submit" class="btn btn-primary"> 
        </p>
      </div>                     
    </div>
</fieldset>