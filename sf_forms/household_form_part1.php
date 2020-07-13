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

<script type="text/javascript">

var categories = [];
  categories["startList"] = ["Western Cape","Eastern Cape",'Kwazulu Natal','Gauteng'];        // Level 1  (True|False is 1 level only)

categories["Western Cape"] = ["City of Cape Town Metropolitan"];
// Level 2
  categories["Cape Winelands District Municipality"] = ["Witzenberg","Drakenstein","Stellenbosch","Breede Valley","Langeberg"];
  categories["Central Karoo District Municipality"] = ["Laingsburg","Prince Albert","Beaufort West"];
  categories["Garden Route District Municipality"] = ["Kannaland","Hessequa","Mossel Bay","George","Oudtshoorn","Bitou","Knysna"];
  categories["Overberg District Municipality"] = ["Theewaterskloof","Overstrand Cape","Agulhas","Swellendam"];
  categories["West Coast District Municipality"] = ["Matzikama","Cederberg","Bergrivier","Saldanha Bay","Swartland"];
  categories["City of Cape Town Metropolitan"] = ["City of Cape Town"];

categories["Eastern Cape"] = ["Chris Hani District Municipality","OR Tambo District Municipality","Nelson Mandela Bay Metropolitan", "Buffalo City Metropolitan"];      // Level 2
  categories["Alfred Nzo District Municipality"] = ["Matatiele","Mbizana","Ntabankulu","Umzimvubu"];  // Level 3 only
  categories["Amathole District Municipality"] = ["Mnquma","Mbhashe","Amahlathi","Ngqushwa","Great Kei","Raymond Mhlaba"];                    // Level 3 only
  categories["Chris Hani District Municipality"] = ["Intsika Yethu","Enoch Mgijima","Engcobo","Emalahleni","Inxuba Yethemba","Sakhisizwe"];
  categories["Joe Gqabi District Municipality"] = ["Elundini","Senqu","Walter Sisulu"];  // Level 3 only
  categories["OR Tambo District Municipality"] = ["King Sabata Dalindyebo Local Municipality","Nyandeni","Ngquza Hill","Mhlontlo","Port St Johns"];                    // Level 3 only
  categories["Sarah Baartman District Municipality"] = ["Blue Crane Route","Dr Beyers Naudé","Kou-Kamma","Kouga","Makana","Ndlambe","Sunday's River Valley"];
  categories["Buffalo City Metropolitan"] = ["Buffalo City"];
  categories["Nelson Mandela Bay Metropolitan"] = ["Nelson Mandela Bay Municipality"];

categories["Kwazulu Natal"] = ["iLembe District Municipality","eThekwini Metropolitan"];
  categories["Amajuba District Municipality"] = ["Dannhauser","eMadlangeni","Newcastle"];
  categories["Harry Gwala District Municipality"] = ["Dr Nkosazana Dlamini-Zuma","Greater Kokstad","Ubuhlebezwe","Umzimkhulu"];
  categories["iLembe District Municipality"] = ["KwaDukuza","Mandeni","Maphumulo","Ndwedwe"];
  categories["King Cetshwayo District Municipality"] = ["City of uMhlathuze","Mthonjaneni","Nkandla","uMfolozi","uMlalazi"];
  categories["Ugu District Municipality"] = ["Ray Nkonyeni","uMdoni","uMuziwabantu","Umzumbe","Vulamehlo"];
  categories["uMgungundlovu District Municipality"] = ["Impendle","Mkhambathini","Mpofana","Msunduzi","Richmond","uMngeni","uMshwathi"];
  categories["uMkhanyakude District Municipality"] = ["Big Five Hlabisa","Jozini","Mtubatuba","uMhlabuyalingana"];
  categories["uMzinyathi District Municipality"] = ["Endumeni","Msinga","Nquthu","Umvoti"];
  categories["uThukela District Municipality"] = ["Alfred Duma","Inkosi Langalibalele","Okhahlamba"];
  categories["Zululand District Municipality"] = ["Abaqulusi","eDumbe","Nongoma","Ulundi","uPhongolo"];
categories["eThekwini Metropolitan"] = ["eThekwini Metropolitan Municipality"];

categories["Gauteng"] = ["City of Johannesburg Metropolitan Municipality"];
  categories["City of Johannesburg Metropolitan Municipality"] = ["Johannesburg", "Soweto","Roodepoort"];
  categories["City of Tshwane Metropolitan Municipality"] = ["Tshwane"];
  categories["Ekurhuleni Metropolitan Municipality"] = ["Ekurhuleni"];
  categories["Sedibeng District Municipality"] = ["Emfuleni","Lesedi","Midvaal"];
  categories["West Rand District Municipality"] = ["Merafong City","Mogale City","Rand West City"];


var nLists = 3; // number of lists in the set

function fillSelect(currCat,currList){
  var step = Number(currList.name.replace(/\D/g,""));
  for (i=step; i<nLists+1; i++) {
    document.forms[0]['List'+i].length = 1;
    document.forms[0]['List'+i].selectedIndex = 0;
    document.getElementById('List'+i).style.display = 'none';
    var firstP = document.getElementById('List'+i);
  }
  var nCat = categories[currCat];
  if (nCat != undefined) {
    document.getElementById('List'+step).style.display = 'inline';
    for (each in nCat)  {
      var nOption = document.createElement('option');
      var nData = document.createTextNode(nCat[each]);
      nOption.setAttribute('value',nCat[each]);
      nOption.appendChild(nData);
      currList.appendChild(nOption);
    }
  }
}

function getValues() {
  var str = '';
  str += document.getElementById('List1').value+'\n';
  for (var i=2; i<=nLists; i++) {
    if (document.getElementById('List'+i).selectedIndex != 0) {
      str += document.getElementById('List'+i).value+'\n'; }
  }
  alert(str);
}

function init() { fillSelect('startList',document.forms[0]['List1']); }

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

            <div class="col-md-12"><br>
              <label for="address">Home Address (*)</label>
                <input class="form-control" type="text" name="address" id="address" placeholder="Please enter your full home address" style="height:120px; width:1100px;" required>
            </div>

            <div class="col-md-3">
              <label for="ward">Ward Number</label>
                <input class="form-control" type="ward" name="ward" id="age" required oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"> 
              </div>

            <div class="col-md-9">
                <br><br>
                <div id="result" value="">
                </div>
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
