<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php"); // connection to db
error_reporting(0);
session_start();

?>


<head>
    <meta charset="utf-8">
    <meta property="og:title" content="Thusa Sechaba Web Application" />
    <meta property="og:url" content="https://www.thusasechaba.org.za/" />
    <meta property="og:description" content="Thusa Sechaba Web Application">
    <meta property="og:image" sizes="32x32" content="images/color-covid-logo.png">
    <meta property="og:type" content="thusasechaba" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/color-covid-logo.png">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Thusa Sechaba, Thusa Sechaba Web App, ThusaSechaba, Thusa, Sechaba, COVID-19 Front, Civil Society, Civil, Society">
    <meta name="author" content="Community Constituency Covid-19 Front">
    <link rel="icon" type="image/png" sizes="32x32" href="images/black-covid-logo.png" alt="Thusa Sechaba Logo">
    <title>Thusa Sechaba Web Application</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> 
    <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/css/animate.min.css'>
    <link rel='stylesheet' href="assets/css/font-awesome.min.css"/>
    <link rel='stylesheet' href="assets/css/style.css"/>        

  <style>
    .image-box {
      /* Here's the trick */
      box-shadow: inset 0 0 0 100vw rgba(0,0,0,0.5);

      /* Basic background styles */
      background: var(--image-url) center center;
      background-size: cover;

      /* Here's the same styles we applied to our content-div earlier */
      color: white;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      
      /* Add a transition, just for fun */
      transition: box-shadow .3s ease-out;
    }
    .image-box:hover {
        box-shadow: inset 0 0 0 100vw rgba(0,0,0,0.2);
    }

    body, head, p, div{
        color: black;
        font: normal 16px "Raleway","Helvetica Neue",Helvetica,Arial,sans-serif;
        font-weight: 300;
    }

    /* For demo only */
    html, body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
    h1 {
      font-size: 40px;
    }

    .special-card {

      background-color: rgba(245, 245, 245, 1) !important;
      opacity: .4;
      font: normal 16px "Raleway","Helvetica Neue",Helvetica,Arial,sans-serif;
    }


  .flip-card {
    background-color: transparent;
    width: 280px;
    height: 200px;
    border: 0;
    perspective: 1000px; /* Remove this if you don't want the 3D effect */
  }

  /* This container is needed to position the front and back side */
  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
  }

  /* Do an horizontal flip when you move the mouse over the flip box container */
  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }

  /* Position the front and back side */
  .flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden; /* Safari */
    backface-visibility: hidden;
  }

  /* Style the front side (fallback if image is missing) */
  .flip-card-front {
    opacity: .9;
    color: black;
  }

  /* Style the back side */
  .flip-card-back {
    background-color: rgba(245, 245, 245, 1);
    font: normal 16px "Raleway","Helvetica Neue",Helvetica,Arial,sans-serif;
    color: black;
    transform: rotateY(180deg);
  }    

  </style>
  
<style type="text/css">
.DDlist { display:none; }
</style>

<script type="text/javascript">
// From: http://www.codingforums.com/showthread.php?t=202456
// and: http://www.codingforums.com/showthread.php?t=169465
// Modified for 1 to 4 (+) level drop down selections

var categories = [];
  categories["startList"] = ["Western Cape","Eastern Cape",'Northern Cape','North West','Free State','Kwazulu Natal','Gauteng','Limpopo','Mpumlanga'];        // Level 1  (True|False is 1 level only)

categories["Western Cape"] = ["Cape Winelands District Municipality","Central Karoo District Municipality","Garden Route District Municipality","Overberg District Municipality","West Coast District Municipality","City of Cape Town Metropolitan"];                         
// Level 2
  categories["Cape Winelands District Municipality"] = ["Witzenberg","Drakenstein","Stellenbosch","Breede Valley","Langeberg"];
  categories["Central Karoo District Municipality"] = ["Laingsburg","Prince Albert","Beaufort West"];
  categories["Garden Route District Municipality"] = ["Kannaland","Hessequa","Mossel Bay","George","Oudtshoorn","Bitou","Knysna"];
  categories["Overberg District Municipality"] = ["Theewaterskloof","Overstrand Cape","Agulhas","Swellendam"];
  categories["West Coast District Municipality"] = ["Matzikama","Cederberg","Bergrivier","Saldanha Bay","Swartland"];
  categories["City of Cape Town Metropolitan"] = ["City of Cape Town"]; 
    

categories["Eastern Cape"] = ["Alfred Nzo District Municipality","Amathole District Municipality","Chris Hani District Municipality","Joe Gqabi District Municipality","OR Tambo District Municipality","Sarah Baartman District Municipality", "Buffalo City Metropolitan"];      // Level 2
  categories["Alfred Nzo District Municipality"] = ["Matatiele","Mbizana","Ntabankulu","Umzimvubu"];  // Level 3 only
  categories["Amathole District Municipality"] = ["Mnquma","Mbhashe","Amahlathi","Ngqushwa","Great Kei","Raymond Mhlaba"];                    // Level 3 only
  categories["Chris Hani District Municipality"] = ["Intsika Yethu","Enoch Mgijima","Engcobo","Emalahleni","Inxuba Yethemba","Sakhisizwe"];
  categories["Joe Gqabi District Municipality"] = ["Elundini","Senqu","Walter Sisulu"];  // Level 3 only
  categories["OR Tambo District Municipality"] = ["King Sabata Dalindyebo Local Municipality","Nyandeni","Ngquza Hill","Mhlontlo","Port St Johns"];                    // Level 3 only
  categories["Sarah Baartman District Municipality"] = ["Blue Crane Route","Dr Beyers Naudé","Kou-Kamma","Kouga","Makana","Ndlambe","Sunday's River Valley"];
  categories["Buffalo City Metropolitan"] = ["Buffalo City"];  

  
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

categories["Free State"] = ["Mangaung Metropolitan","Fezile Dabi District","Lejweleputswa District","Thabo Mofutsanyana District","Xhariep District"];
  categories["Mangaung Metropolitan"] = ["Mangaung Metropolitan Municipality"]; 
  categories["Fezile Dabi District"] = ["Moqhaka","Ngwathe","Metsimaholo","Mafube"];         
  categories["Lejweleputswa District"] = ["Masilonyana","Tokologo","Tswelopele","Matjhabeng","Nala"];       
  categories["Thabo Mofutsanyana District"] = ["Setsoto","Dihlabeng","Nketoana","Maluti-a-Phofung","Phumelela","Mantsopa"];  
  categories["Xhariep District"] = ["Letsemeng","Kopanong","Mohokare","Naledi"];  

categories["Kwazulu Natal"] = ["Amajuba District Municipality","Harry Gwala District Municipality","iLembe District Municipality","King Cetshwayo District Municipality ","Ugu District Municipality","uMgungundlovu District Municipality","uMkhanyakude District Municipality","uMzinyathi District Municipality","uThukela District Municipality","Zululand District Municipality","eThekwini Metropolitan"];
  categories["Amajuba District Municipality"] = ["Dannhauser","eMadlangeni","Newcastle"];           
  categories["Harry Gwala District Municipality"] = ["Dr Nkosazana Dlamini-Zuma","Greater Kokstad","Ubuhlebezwe","Umzimkhulu"];     
  categories["iLembe District Municipality"] = ["KwaDukuza","Mandeni","Maphumulo","Ndwedwe"];           
  categories["Ugu District Municipality"] = ["Ray Nkonyeni","uMdoni","uMuziwabantu","Umzumbe","Vulamehlo"];           
  categories["uMgungundlovu District Municipality"] = ["Impendle","Mkhambathini","Mpofana","Msunduzi","Richmond","uMngeni","uMshwathi"];        
  categories["uMkhanyakude District Municipality"] = ["Big Five Hlabisa","Jozini","Mtubatuba","uMhlabuyalingana"];    
  categories["uMzinyathi District Municipality"] = ["Endumeni","Msinga","Nquthu","Umvoti"];            
  categories["uThukela District Municipality"] = ["Alfred Duma","Inkosi Langalibalele","Okhahlamba"];         
  categories["Zululand District Municipality"] = ["Abaqulusi","eDumbe","Nongoma","Ulundi","uPhongolo"];   
categories["eThekwini Metropolitan"] = ["eThekwini Metropolitan Municipality"];      

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

  
</head>

<body>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">                    
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;                      
                    </button>
                    <a class="navbar-brand" href="index.php"> 
                        <img alt="LOGO" width="167" height="48" src="images/covid-logo.png" alt="Thusa Sechaba"> 
                    </a>  
                            <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item"> 
                                        <a class="nav-link active" href="index.php">Home 
                                            <span class="sr-only">(current)</span>
                                        </a> 
                                    </li> 
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Covid-19 Front<br> Partners</a>
                                        <div class="dropdown-menu">
                                            <a href="doPartnerReg.php" class="dropdown-item">
                                                Register Covid-19 Front User
                                            </a>
                                    <?php
                                        if(!empty($_SESSION["user_id"]))
                                        {  
                                echo '<a href="doHouseRequest.php" class="dropdown-item">
                                                Log a Need Request
                                            </a>';
                                        }
                                    ?>     
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Civil Society <br>Organisation</a>
                                        <div class="dropdown-menu"> 
                                            <a href="doCSOReg.php" class="dropdown-item">
                                                Register Civil Society User
                                            </a>
                                    <?php
                                        if(!empty($_SESSION["user_id"]))
                                        {  
                                    echo '<a href="doHouseRequest.php" class="dropdown-item">
                                                Log a Need Request
                                            </a>';
                                        }
                                    ?> 
                                        </div>
                                    </li>  

							<?php
						if(empty($_SESSION["user_id"]))
							{
							echo '  <li class="nav-item">
                                        <a href="login.php" class="nav-link active"> Login
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                        <a href="doCommunityReg.php" class="nav-link active"> Community Member Registration
                                        </a> 
                                    </li>';
							}
						else
							{
                            echo '<li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                            Community Resources
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="doCommunityReg.php" class="dropdown-item">
                                                Community Member Registration
                                            </a>
                                            <a href="doHouseRequest.php" class="dropdown-item">
                                                Log a Need Request
                                            </a>                   
                                        </div>
                                    </li>';

                            echo '<li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Details</a>
                                        <div class="dropdown-menu">
                                            <a href="viewYourRequests.php" class="dropdown-item">
                                                My Requests 
                                            </a>
                                            <a href="viewYourProfile.php" class="dropdown-item">
                                                My Profile 
                                            </a>        
                                            <a href="logout.php" class="dropdown-item">
                                                Log Off
                                            </a>    
                                        </div>
                                    </li>';
							     }
						   ?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        
