<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>

<script type="text/javascript">
    function showHideOtherSexInfo(){
        var noOption = document.getElementById("sex").value;
        if( noOption == "other"){
            jQuery('#sex-info').show();
            document.getElementById("sex-info").style.visibility = 'visible';
        }else{
            jQuery('#sex-info').hide();
            document.getElementById("sex-info").style.visibility = 'hidden';            
        }
    }


    function showHideOtherRaceInfo(){
        var noOption = document.getElementById("race").value;
        if( noOption == "other"){
            jQuery('#race-info').show();
            document.getElementById("race-info").style.visibility = 'visible';
        }else{
            jQuery('#race-info').hide();
            document.getElementById("race-info").style.visibility = 'hidden';            
        }
    }

    function checkNumber(){
        var num = document.getElementById("age").value;
        var numbers = /^[0-9]+$/;
        if(num.value.match(numbers)) {
         
        } else {
         alert('Please enter a valid age'); 
        }
    }
    
</script>

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
              <label for="identification">
                Identification Number 
                <i style="font-size: 12px">(We will use this for verification purposes ONLY.)</i>
              </label>
                <input class="form-control" type="text" name="identification" id="identification" placeholder="Please enter your unique identification number"  required> 
            </div>             


            <div class="col-md-6">
              <label for="age">Age</label>
                <input class="form-control" type="text" name="age" id="age" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"> 
              </div>  


            <div class="col-md-6">
              <label for="phone">Cellphone number</label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="Please enter your unique celphone number" value="<?php echo $edit ? $user_id['phone'] : '';?>" required> 
              </div>  


            <div class="col-md-3">
              <label for="race">Race</label>
                <div style="width:98%">
                <select name="race" size="1" id="race" class="form-control unit" required onchange="showHideOtherRaceInfo(this.value);">
                        <option selected></option>
                        <option>African (Black)</option>
                        <option>Asian</option>
                        <option>Coloured</option>
                        <option>Indian</option>
                        <option>White</option>
                        <option value="other">Other</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3" id="race-info" style="display:none">
              <label for="other_race">If Other: </label>
                <input class="form-control" type="text" name="other_race" id="other_race" placeholder="Enter your race" >
              </div>  


            <div class="col-md-3">
              <label for="sex">
                <a data-toggle="tooltip" data-placement="top" title="An individual’s biological status that is typically categorised as male or female but also as intersex.">
                  <span class="glyphicon glyphicon-info-sign"></span>                
                Sex 
              </a>
              </label>
                <div style="width:98%">
                <select name="sex" size="1" id="sex" class="form-control unit"  required onchange="showHideOtherSexInfo(this.value);">
                        <option selected></option>
                        <option value="Female">Female</option>
                        <option value="Intersex">Intersex</option>
                        <option value="Male">Male</option>
                        <option value="other">Other</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3" id="sex-info" style="display:none">
              <label for="other_sex">If Other: </label>
                <input class="form-control" type="text" name="other_sex" id="other_sex" placeholder="Enter your preferred sex" > 
              </div>             


            <div class="col-md-12">
              <label for="house-composition">
                <br>
                Sexuality:
                <br><br>
              </label>
            </div>


            <div class="col-md-3">
              <label for="bi_sex">
                <a data-toggle="tooltip" data-placement="top" title="Attraction to members of either sex">
                  <span class="glyphicon glyphicon-info-sign"></span>
                Bisexual
              </a>
              </label>
                <div style="width:98%">
                <select name="bi_sex" size="1" id="bi_sex" class="form-control unit" >
                        <option selected value="No"></option>
                        <option>Yes</option>
                        <option>No</option>
                </select>
                </div>
            </div>            


            <div class="col-md-3">
              <label for="hetero_sex">
                <a data-toggle="tooltip" data-placement="top" title="Attraction to members of opposite sex">
                  <span class="glyphicon glyphicon-info-sign"></span>
                Heterosexual
                </a>
              </label>
                <div style="width:98%">
                <select name="hetero_sex" size="1" id="hetero_sex" class="form-control unit">
                        <option selected value="No"></option>
                        <option>Yes</option>
                        <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="homo_sex">
                <a data-toggle="tooltip" data-placement="top" title="Attraction to members of same sex">
                  <span class="glyphicon glyphicon-info-sign"></span>
                  Homosexual
                </a>
              </label>
                <div style="width:98%">
                <select name="homo_sex" size="1" id="homo_sex" class="form-control unit">
                        <option selected value="None"></option>
                        <option>Gay</option>
                        <option>Lesbian</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="other_sexuality">Other (please specify): </label>
                <input class="form-control" type="text" name="other_sexuality" id="other_sexuality" placeholder="Enter your preferred sex" value="None" > 
              </div> 


            <div class="col-md-12">
              <label for="house-composition"><br>Gender:<br><br></label>
            </div>


            <div class="col-md-2">
              <label for="cis_gender">
                <a data-toggle="tooltip" data-placement="top" title="Cisgender is a term for people whose gender identity matches the sex that they were assigned at birth.">
                  <span class="glyphicon glyphicon-info-sign"></span>
                Cisgender <br>
                  <i style="font-size: 12px">(Man or Woman)</i>
                </a>
              </label>
                <div style="width:98%">
                <select name="cis_gender" size="1" id="cis_gender" class="form-control unit" >
                        <option selected value="No"></option>
                        <option>Yes</option>
                        <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="nonconfirm_gender">
                <a data-toggle="tooltip" data-placement="top" title="Gender nonconforming refers to people who do not follow other people's ideas or stereotypes about how they should look or act based on the female or male sex they were assigned at birth.">
                  <span class="glyphicon glyphicon-info-sign"></span>
                  Gender Nonconfirming /<br> Non-Binary
                </a>
              </label>
                <div style="width:98%">
                <select name="nonconfirm_gender" size="1" id="nonconfirm_gender" class="form-control unit" >
                        <option selected value="No"></option>
                        <option>Yes</option>
                        <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-2">
              <label for="trans_gender">
                <a data-toggle="tooltip" data-placement="top" title="An umbrella term frequently used to describe individuals whose gender identity, expression or behavioural pattern does not align with the sex they were assigned to at birth. Transgender is a gender identity not a sexual orientation.">
                  <span class="glyphicon glyphicon-info-sign"></span>
                  <br>Transgender
                </a>
              </label>
                <div style="width:98%">
                <select name="trans_gender" size="1" id="trans_gender" class="form-control unit" >
                    <option selected value="No"></option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </div> 


            <div class="col-md-2">
              <label for="queer_gender">
                <a data-toggle="tooltip" data-placement="top" title="Queer is an umbrella term for sexual and gender minorities who are not heterosexual or are not cisgender">
                  <span class="glyphicon glyphicon-info-sign"></span><br>
                    Queer / Questioning
                </a>
              </label>
                <div style="width:98%">
                <select name="queer_gender" size="1" id="queer_gender" class="form-control unit">
                        <option selected value="No"></option>
                        <option>Yes</option>
                        <option>No</option>
                </select>
                </div>
            </div>            


            <div class="col-md-3">
              <label for="other_gender"><br>Other (please specify): </label>
                <input class="form-control" type="text" name="other_gender" id="other_gender" placeholder="Enter your preferred gender" value="None"> 
              </div>  


            <div class="col-md-12">
              <label for="address">Home Address</label>
                <textarea class="form-control" id="address"  name="address" rows="3" value="<?php echo $edit ? $user_id['address'] : ''; ?>"  placeholder="Please enter your full home address" required>
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


            <div class="col-md-6">
              <label for="alt_person"><br>Alternative Contact Person</label>
              <input type="text" class="form-control" id="alt_person" name="alt_person" placeholder="Please enter alternative contact person" value="<?php echo $edit ? $user_id['alt_person'] : ''; ?>" required>
            </div>


            <div class="col-md-6">
              <label for="alt_number"><br>Alternative Contact Number</label>
              <input type="text" class="form-control" id="alt_number" name="alt_number" placeholder="Please enter alternative contact number" value="<?php echo $edit ? $user_id['alt_number'] : ''; ?>" required>
            </div>   

  </div>
</fieldset>
