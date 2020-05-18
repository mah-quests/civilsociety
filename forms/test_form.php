<style type="text/css">
.DDlist { display:none; }
</style>

<script type="text/javascript">
// From: http://www.codingforums.com/showthread.php?t=202456
// and: http://www.codingforums.com/showthread.php?t=169465
// Modified for 1 to 4 (+) level drop down selections

var categories = [];
  categories["startList"] = ["Western Cape","Eastern Cape",'Northern Cape','North West','Free State','Kwazulu Natal','Gauteng','Limpopo','Mpumlanga'];        // Level 1  (True|False is 1 level only)

categories["Western Cape"] = ["Cape Winelands District Municipality","Central Karoo District Municipality","Garden Route District Municipality","Overberg District Municipality","West Coast District Municipality"];                         // Level 2
  categories["Cape Winelands District Municipality"] = ["Witzenberg","Drakenstein","Stellenbosch","Breede Valley","Langeberg"];                     // Level 3        //  Level 4                         //  Level 4
  categories["Central Karoo District Municipality"] = ["Laingsburg","Prince Albert","Beaufort West"];
  categories["Garden Route District Municipality"] = ["Kannaland","Hessequa","Mossel Bay","George","Oudtshoorn","Bitou","Knysna"];
  categories["Overberg District Municipality"] = ["Theewaterskloof","Overstrand Cape","Agulhas","Swellendam"];                         // Level 3        //  Level 4                         //  Level 4
  categories["West Coast District Municipality"] = ["Matzikama","Cederberg","Bergrivier","Saldanha Bay","Swartland"];   
    

categories["Eastern Cape"] = ["Alfred Nzo District Municipality","Amathole District Municipality","Chris Hani District Municipality","Joe Gqabi District Municipality","OR Tambo District Municipality","Sarah Baartman District Municipality"];      // Level 2
  categories["Alfred Nzo District Municipality"] = ["Matatiele","Mbizana","Ntabankulu","Umzimvubu"];  // Level 3 only
  categories["Amathole District Municipality"] = ["Mnquma","Mbhashe","Amahlathi","Ngqushwa","Great Kei","Raymond Mhlaba"];                    // Level 3 only
  categories["Chris Hani District Municipality"] = ["Intsika Yethu","Enoch Mgijima","Engcobo","Emalahleni","Inxuba Yethemba","Sakhisizwe"];
  categories["Joe Gqabi District Municipality"] = ["Elundini","Senqu","Walter Sisulu"];  // Level 3 only
  categories["OR Tambo District Municipality"] = ["King Sabata Dalindyebo Local Municipality","Nyandeni","Ngquza Hill","Mhlontlo","Port St Johns"];                    // Level 3 only
  categories["Sarah Baartman District Municipality"] = ["Blue Crane Route","Dr Beyers Naudé","Kou-Kamma","Kouga","Makana","Ndlambe","Sunday's River Valley"];

  
categories["Northern Cape"] = ["Frances Baard District Municipality","John Taolo Gaetsewe District Municipality","Namakwa District Municipality","Pixley ka Seme District Municipality","ZF Mgcawu District Municipality"];
  categories["Frances Baard District Municipality"] = ["Sol Plaatje","Dikgatlong","Magareng","Phokwane"];     
  categories["John Taolo Gaetsewe District Municipality"] = ["Joe Morolong","Ga-Segonyana","Gamagara"];   
  categories["Namakwa District Municipality"] = ["Richtersveld","Nama Khoi","Kamiesberg","Hantam","Karoo Hoogland","Khâi-Ma"];      
  categories["Pixley ka Seme District Municipality"] = ["Ubuntu","Umsobomvu","Emthanjeni","Kareeberg","Renosterberg","Thembelihle","Siyathemba","Siyancuma"];
  categories["ZF Mgcawu District Municipality"] = ["Dawid Kruiper","Kai ǃGarib","ǃKheis","Tsantsabane","Kgatelopele"];   

    
categories["North West"] = ["Bojanala Platinum","Ngaka Modiri Molema","Dr Ruth Segomotsi Mompati","Dr Kenneth Kaunda"];
  categories["Bojanala Platinum"] = ["Moretele","Madibeng","Rustenburg","Kgetlengrivier","Moses Kotane"];         
  categories["Ngaka Modiri Molema"] = ["Ratlou","Tswaing","Mahikeng","Ditsobotla","Ramotshere"];       
  categories["Dr Ruth Segomotsi Mompati"] = ["Naledi","Mamusa","Greater Taung","Lekwa-Teemane","Kagisano-Molopo"];  
  categories["Dr Kenneth Kaunda"] = ["JB Marks","Matlosana","Maquassi Hills"];     

categories["Free State"] = ["Fezile Dabi District","Lejweleputswa District","Thabo Mofutsanyana District","Xhariep District"];
  categories["Fezile Dabi District"] = ["Moqhaka","Ngwathe","Metsimaholo","Mafube"];         
  categories["Lejweleputswa District"] = ["Masilonyana","Tokologo","Tswelopele","Matjhabeng","Nala"];       
  categories["Thabo Mofutsanyana District"] = ["Setsoto","Dihlabeng","Nketoana","Maluti-a-Phofung","Phumelela","Mantsopa"];  
  categories["Xhariep District"] = ["Letsemeng","Kopanong","Mohokare","Naledi"];  

categories["Kwazulu Natal"] = ["Amajuba District Municipality","Harry Gwala District Municipality","iLembe District Municipality","King Cetshwayo District Municipality ","Ugu District Municipality","uMgungundlovu District Municipality","uMkhanyakude District Municipality","uMzinyathi District Municipality","uThukela District Municipality","Zululand District Municipality"];
  categories["Amajuba District Municipality"] = ["Dannhauser","eMadlangeni","Newcastle"];           
  categories["Harry Gwala District Municipality"] = ["Dr Nkosazana Dlamini-Zuma","Greater Kokstad","Ubuhlebezwe","Umzimkhulu"];     
  categories["iLembe District Municipality"] = ["KwaDukuza","Mandeni","Maphumulo","Ndwedwe"];           
  categories["Ugu District Municipality"] = ["Ray Nkonyeni","uMdoni","uMuziwabantu","Umzumbe","Vulamehlo"];           
  categories["uMgungundlovu District Municipality"] = ["Impendle","Mkhambathini","Mpofana","Msunduzi","Richmond","uMngeni","uMshwathi"];        
  categories["uMkhanyakude District Municipality"] = ["Big Five Hlabisa","Jozini","Mtubatuba","uMhlabuyalingana"];    
  categories["uMzinyathi District Municipality"] = ["Endumeni","Msinga","Nquthu","Umvoti"];            
  categories["uThukela District Municipality"] = ["Alfred Duma","Inkosi Langalibalele","Okhahlamba"];         
  categories["Zululand District Municipality"] = ["Abaqulusi","eDumbe","Nongoma","Ulundi","uPhongolo"];      

categories["Gauteng"] = ["City of Johannesburg Metropolitan Municipality","City of Tshwane Metropolitan Municipality","Ekurhuleni Metropolitan Municipality","Sedibeng District Municipality","West Rand District Municipality"];
  categories["City of Johannesburg Metropolitan Municipality"] = ["Johannesburg"];         
  categories["City of Tshwane Metropolitan Municipality"] = ["Tshwane"];       
  categories["Ekurhuleni Metropolitan Municipality"] = ["Ekurhuleni"];  
  categories["Sedibeng District Municipality"] = ["Emfuleni","Lesedi","Midvaal"];   
  categories["West Rand District Municipality"] = ["Merafong City","Mogale City","Rand West City"];   

categories["Limpopo"] = ["Capricorn District Municipality","Mopani District Municipality","Sekhukhune District Municipality","Vhembe District Municipality","Waterberg District Municipality"];
  categories["Capricorn District Municipality"] = ["Blouberg","Lepelle-Nkumpi","Molemole","Polokwane"];            
  categories["Mopani District Municipality"] = ["Ba-Phalaborwa","Greater Giyani","Greater Letaba","Greater Tzaneen","Maruleng"];    
  categories["Sekhukhune District Municipality"] = ["Elias Motsoaledi","Ephraim Mogale","Fetakgomo/Tubatse","Makhuduthamaga"];       
  categories["Vhembe District Municipality"] = ["Collins Chabane","Makhado","Musina","Thulamela"];   
  categories["Waterberg District Municipality"] = ["Bela-Bela","Lephalale","Mogalakwena","Mookgophong/Modimolle","Thabazimbi"];  

categories["Mpumlanga"] = ["Gert Sibande","Nkangala","Ehlanzeni"];
  categories["Gert Sibande"] = ["Albert Luthuli","Msukaligwa","Mkhondo","Pixley ka Seme","Lekwa","Dipaleseng","Govan Mbeki"];         
  categories["Nkangala"] = ["Victor Khanye","Emalahleni","Steve Tshwete","Emakhazeni","Thembisile Hani","Dr JS Moroka"];        
  categories["Ehlanzeni"] = ["Thaba Chweu","Mbombela","Umjindi","Nkomazi","Bushbuckridge"]; 
      

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


            <div class="col-md-6">
              <label for="firstname">First Names</label>
                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Please enter your first names" value="<?php echo $edit ? $user_id['firstname'] : '';?>" required> 
            </div>


            <div class="col-md-6">
              <label for="lastname">Surname</label>
                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Please enter your surname" value="<?php echo $edit ? $user_id['lastname'] : '';?>" required> 
            </div>


            <div class="col-md-12">
              <label for="username">Identification Number</label>
                <input class="form-control" type="text" name="username" id="username" placeholder="Please enter your unique identification number" value="<?php echo $edit ? $user_id['username'] : '';?>" required> 
              </div>   


            <div class="col-md-6">
              <label for="sex">Sex</label>
                <div style="width:98%">
                <select name="sex" size="1" class="form-control unit" value="<?php echo $edit ? $user_id['sex'] : ''; ?>" required>
                        <option selected>Male</option>
                        <option>Female</option>
                        <option>Intersex</option>
                        <option>Other</option>
                </select>
                </div>
            </div>


            <div class="col-md-6">
              <label for="phone">Cellphone number</label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="Please enter your unique celphone number" value="<?php echo $edit ? $user_id['phone'] : '';?>" required> 
              </div>  


            <div class="col-md-6">
              <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Please enter valid email" value="<?php echo $edit ? $user_id['email'] : '';?>" required> 
            </div>


            <div class="col-md-6">
              <label for="nationality">Nationality</label>
                <div style="width:98%">
                <select name="nationality" size="1" class="form-control unit" value="<?php echo $edit ? $user_id['nationality'] : ''; ?>" required>
                        <option selected>Choose</option>
                        <option>South Africa</option>
                        <option>Other</option>
                </select>
                </div>
            </div>

            <div class="col-md-12">
              <label for="address">Home Address</label>
                <textarea class="form-control" id="address"  name="address" rows="3" value="<?php echo $edit ? $user_id['address'] : ''; ?>"  required>
                </textarea>
            </div>


        <div class="col-md-12">
        <label for="municipality"><br>Test Province<br></label>
        <div style="width:98%">
              
          <select name='List1' id="List1" onchange="fillSelect(this.value,this.form['List2'])">
            <option selected>Select Province</option>
              </select> &nbsp;

          <select name='List2' id="List2" onchange="fillSelect(this.value,this.form['List3'])" class="DDlist">
            <option selected>Select District</option>
              </select> &nbsp;

          <select name='List3' id="List3" onchange="fillSelect(this.value,this.form['List4'])" class="DDlist">
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
                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Please enter your password again" value="<?php echo $edit ? $user_id['cpassword'] : ''; ?>" required> 
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