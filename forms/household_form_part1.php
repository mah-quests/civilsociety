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

<script type="text/javascript">
// From: http://www.codingforums.com/showthread.php?t=202456
// and: http://www.codingforums.com/showthread.php?t=169465
// Modified for 1 to 4 (+) level drop down selections

var genderSexArray = [];

// Level 01
  genderSexArray["startDropDown"] = ["Female","Intersex","Male","Other"];


// Level 02 
  genderSexArray["Female"] = ["Bisexual","Heterosexual", "Homosexual", "Other Sexuality"]; 

  genderSexArray["Intersex"] = ["Bisexual","Heterosexual", "Homosexual", "Other Sexuality"];

  genderSexArray["Male"] = ["Bisexual","Heterosexual", "Homosexual", "Other Sexuality"]; 

  genderSexArray["Other"] = ["Bisexual","Heterosexual", "Homosexual", "Other Sexuality"];

// Level 03
    genderSexArray["Heterosexual"] = ["Cisgender","Gender Nonconfirming / Non-Binary","Transgender", "Queer / Questioning", "Other Gender"];

    genderSexArray["Homosexual"] = ["Cisgender","Gender Nonconfirming / Non-Binary","Transgender", "Queer / Questioning", "Other Gender"];

    genderSexArray["Bisexual"] = ["Cisgender","Gender Nonconfirming / Non-Binary","Transgender", "Queer / Questioning", "Other Gender"]; 

  genderSexArray["Other Sexuality"] = ["Cisgender","Gender Nonconfirming / Non-Binary","Transgender", "Queer / Questioning", "Other Gender"]; 


var nDropDowns = 3; // number of lists in the set

function fillSelectSexGender(currCat,currDropDown){
  var step = Number(currDropDown.name.replace(/\D/g,""));
  for (i=step; i<nDropDowns+1; i++) {
    document.forms[0]['DropDown'+i].length = 1;
    document.forms[0]['DropDown'+i].selectedIndex = 0;
    document.getElementById('DropDown'+i).style.display = 'none';
  }
  var nCat = genderSexArray[currCat];
  if (nCat != undefined) { 
    document.getElementById('DropDown'+step).style.display = 'inline';
    for (each in nCat)  {
      var nOption = document.createElement('option'); 
      var nData = document.createTextNode(nCat[each]); 
      nOption.setAttribute('value',nCat[each]); 
      nOption.appendChild(nData); 
      currDropDown.appendChild(nOption); 
    }
  } 
}


function init() { fillSelectSexGender('startDropDown',document.forms[0]['DropDown1']); }

navigator.appName == "Microsoft Internet Explorer"
   ? attachEvent('onload', init, false) 
       : addEventListener('load', init, false); 

</script>

<fieldset>
        <div class="row">

            <div class="form-group col-md-12" align="center">
              <h5>Contact Person Details</h5>
            </div>


            <div class="col-md-6">
              <label for="firstname">First Names (*)</label>
                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Please enter your first names" value="<?php echo $edit ? $user_id['firstname'] : '';?>" required> 
            </div>


        <div class="col-md-6">            
              <label for="lastname">Surname (*)</label>
                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Please enter your surname" value="<?php echo $edit ? $user_id['lastname'] : '';?>" required> 
            </div>

            <div class="col-md-12">
              <label for="identification">
                Identification Number (*)
                <i style="font-size: 12px">(We will use this for verification purposes ONLY.)</i>
              </label>
                <input class="form-control" type="text" name="identification" id="identification" placeholder="Please enter your unique identification number"  required> 
            </div>             


            <div class="col-md-6">
              <label for="age">Age (*)</label>
                <input class="form-control" type="text" name="age" id="age" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"> 
              </div>  


            <div class="col-md-6">
              <label for="phone">Cellphone number (*)</label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="Please enter your unique celphone number" value="<?php echo $edit ? $user_id['phone'] : '';?>" required> 
              </div>  


            <div class="col-md-3">
              <label for="race">Race (*)</label>
                <div style="width:100%">
                <select name="race" size="1" id="race" class="form-control unit" required onchange="showHideOtherRaceInfo(this.value);">
                        <option selected value=""></option>
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
              <label for="religion">
                Religion
              </label>
                <div style="width:100%">
                <select name="religion" size="1" id="religion" class="form-control unit">
                        <option selected value=""></option>
                        <option>Christian</option>
                        <option>Islam</option>
                        <option>Hinduism</option>
                        <option>African Traditional Religion</option>
                        <option>Judaism</option>
                        <option>Other</option>
                </select>
                </div>
            </div> 


            <div class="col-md-3" id="sex-info" style="display:none">
              <label for="other_sex">If Other: </label>
                <input class="form-control" type="text" name="other_sex" id="other_sex" placeholder="Enter your preferred sex" > 
              </div>             



            <div class="col-md-12">
            <label for="sex-sexuality-gender">
              <br>
                <a data-toggle="tooltip" data-placement="top" 
                title="
--------------------------------------------------
* Sex: An individual’s biological status that is typically categorised as male or female but also as intersex.
* Intersex: A person who possesses genitals, chromosomes, hormones and sex characteristics which do not correspond with the societal standard for male or female categories of sexual anatomy
--------------------------------------------------
* Sexuality: How people experience and express themselves as sexual beings within the spectrum of biological sex, gender identity and presentation, attraction and practices.
* Bisexuality: attraction to members of either sex.
* Heterosexuality: attraction to members of opposite sex.
* Homosexuality: attraction to members of same sex.
--------------------------------------------------
                ">
                  <span class="glyphicon glyphicon-info-sign"></span>
                Sex, Sexuality and Gender
                <a data-toggle="tooltip" data-placement="top" 
                title="
--------------------------------------------------
* Gender: A societal construct on attitudes, feelings and behaviours associated with a person’s biological sex.
* Cisgender: is a term for people whose gender identity matches the sex that they were assigned at birth.
* Gender nonconforming: refers to people who do not follow other people's ideas or stereotypes about how they should look or act based on the female or male sex they were assigned at birth.
* Transgender: An umbrella term frequently used to describe individuals whose gender identity, expression or behavioural pattern does not align with the sex they were assigned to at birth. Transgender is a gender identity not a sexual orientation.
* Queer: is an umbrella term for sexual and gender minorities who are not heterosexual or are not cisgender
--------------------------------------------------
                ">
                  <span class="glyphicon glyphicon-info-sign"></span>                
                <br>
              </a>
              </label>
            <div style="width:100%">
                  
                <select  size="1" name='DropDown1' id="DropDown1" onchange="fillSelectSexGender(this.value,this.form['DropDown2'])" required>
                <option selected value="">Select Your Sex Composition</option>
                </select> &nbsp;

                <select  size="1" name='DropDown2' id="DropDown2" onchange="fillSelectSexGender(this.value,this.form['DropDown3'])" class="DDlist" required>
                <option selected value="">Select Your Sexuality</option>
                </select> &nbsp;

                <select  size="1" name='DropDown3' id="DropDown3" onchange="fillSelectSexGender(this.value,this.form['DropDown4'])" class="DDlist" required>
                <option selected value="">Select Your Gender</option>
                </select> &nbsp;
              </div>
            </div>


            <div class="col-md-12">
              <br>
              <label for="address">Home Address (*)</label>
                <textarea class="form-control" id="address"  name="address" rows="3" placeholder="Please enter your full home address" required>
                </textarea>
            </div>

            <div class="col-md-3">
              <label for="ward">Ward Number</label>
                <input class="form-control" type="ward" name="ward" id="age" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"> 
              </div>  


            <div class="col-md-12">
            <label for="municipality"><br>Location Selection (*)<br></label>
            <div style="width:100%">
                  
              <select  size="1" name='List1' id="List1" onchange="fillSelect(this.value,this.form['List2'])" required>
                <option selected value="">Select Province</option>
                  </select> &nbsp;

              <select  size="1" name='List2' id="List2" onchange="fillSelect(this.value,this.form['List3'])" class="DDlist" required>
                <option selected value="">Select District</option>
                  </select> &nbsp;

              <select  size="1" name='List3' id="List3" onchange="fillSelect(this.value,this.form['List4'])" class="DDlist" required>
                <option selected value="">Choose Municipality</option>
                  </select> &nbsp;
              </div>
            </div>


            <div class="col-md-6">
              <label for="alt_person"><br>Alternative Contact Person (*)</label>
              <input type="text" class="form-control" id="alt_person" name="alt_person" placeholder="Please enter alternative contact person" value="<?php echo $edit ? $user_id['alt_person'] : ''; ?>" required>
            </div>


            <div class="col-md-6">
              <label for="alt_number"><br>Alternative Contact Number (*)</label>
              <input type="text" class="form-control" id="alt_number" name="alt_number" placeholder="Please enter alternative contact number" value="<?php echo $edit ? $user_id['alt_number'] : ''; ?>" required>
            </div>   

  </div>
</fieldset>
