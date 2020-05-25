<html>
<head>
<title> 1- to 4-level Drop Down</title>
<style type="text/css">
.DDlist { display:none; }
</style>

<script type="text/javascript">
// From: http://www.codingforums.com/showthread.php?t=202456
// and: http://www.codingforums.com/showthread.php?t=169465
// Modified for 1 to 4 (+) level drop down selections

var categories = [];

// Level 01
  categories["startDropDown"] = ["Female","Intersex","Male","Other"];


// Level 02 
	categories["Female"] = ["Bisexual","Heterosexual", "Homosexual", "Other Sexuality"]; 

	categories["Intersex"] = ["Bisexual","Heterosexual", "Homosexual", "Other Sexuality"];

	categories["Male"] = ["Bisexual","Heterosexual", "Homosexual", "Other Sexuality"]; 

	categories["Other"] = ["Bisexual","Heterosexual", "Homosexual", "Other Sexuality"];

// Level 03
  	categories["Heterosexual"] = ["Cisgender","Gender Nonconfirming / Non-Binary","Transgender", "Queer / Questioning", "Other Gender"];

  	categories["Homosexual"] = ["Cisgender","Gender Nonconfirming / Non-Binary","Transgender", "Queer / Questioning", "Other Gender"];

  	categories["Bisexual"] = ["Cisgender","Gender Nonconfirming / Non-Binary","Transgender", "Queer / Questioning", "Other Gender"]; 

	categories["Other Sexuality"] = ["Cisgender","Gender Nonconfirming / Non-Binary","Transgender", "Queer / Questioning", "Other Gender"];	


var nDropDowns = 3; // number of lists in the set

function fillSelect(currCat,currDropDown){
  var step = Number(currDropDown.name.replace(/\D/g,""));
  for (i=step; i<nDropDowns+1; i++) {
    document.forms[0]['DropDown'+i].length = 1;
    document.forms[0]['DropDown'+i].selectedIndex = 0;
    document.getElementById('DropDown'+i).style.display = 'none';
  }
  var nCat = categories[currCat];
  if (nCat != undefined) { 
    document.getElementById('DropDown'+step).style.display = 'inline';
    for (each in nCat) 	{
      var nOption = document.createElement('option'); 
      var nData = document.createTextNode(nCat[each]); 
      nOption.setAttribute('value',nCat[each]); 
      nOption.appendChild(nData); 
      currDropDown.appendChild(nOption); 
    }
  } 
}


function init() { fillSelect('startDropDown',document.forms[0]['DropDown1']); }

navigator.appName == "Microsoft Internet Explorer"
   ? attachEvent('onload', init, false) 
		   : addEventListener('load', init, false);	

</script>
</head>
<body>
<form action="" onsubmit="return false">

<select name='DropDown1' id="DropDown1" onchange="fillSelect(this.value,this.form['DropDown2'])">
<option selected required>Select Your Sex Composition</option>
</select> &nbsp;

<select name='DropDown2' id="DropDown2" onchange="fillSelect(this.value,this.form['DropDown3'])" class="DDlist">
<option selected>Select Your Sexuality</option>
</select> &nbsp;

<select name='DropDown3' id="DropDown3" onchange="fillSelect(this.value,this.form['DropDown4'])" class="DDlist">
<option selected >Select Your Gender</option>
</select> &nbsp;


<!-- can add more levels if desired as "List5"+ -->
</form>
</body>
</html>