<?php

    // Number of chronic at the identified municipalities: ekirhuleni,centurion, city of joburg,rest west city,klipspruit,boksburg
    //Gauteng- ekurhuleni
    $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'ekurhuleni') ";
        $result = mysqli_query($db, $sql); 
        $data = mysqli_fetch_assoc($result);
        $totalFSChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'ekurhuleni')";
        $result=mysqli_query($db,$sql); 
        $ekurhuleni=mysqli_num_rows($result) + $totalFSChronicPatients;  
        
        //centurion
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'centurion') ";
        $result = mysqli_query($db, $sql); 
        $data = mysqli_fetch_assoc($result);
        $totalFSChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'centurion')";
        $result=mysqli_query($db,$sql); 
        $centurion=mysqli_num_rows($result) + $totalFSChronicPatients;  

        //city of joburg
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'city of joburg') ";
        $result = mysqli_query($db, $sql); 
        $data = mysqli_fetch_assoc($result);
        $totalFSChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'city of joburg')";
        $result=mysqli_query($db,$sql); 
        $joburg=mysqli_num_rows($result) + $totalFSChronicPatients;  

        //Rest West city Local municipality
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'Rest West city Local municipality') ";
        $result = mysqli_query($db, $sql); 
        $data = mysqli_fetch_assoc($result);
        $totalFSChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'Rest West city Local municipality')";
        $result=mysqli_query($db,$sql); 
        $RestWestcity=mysqli_num_rows($result) + $totalFSChronicPatients;  

        //klipspruit
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'klipspruit') ";
        $result = mysqli_query($db, $sql); 
        $data = mysqli_fetch_assoc($result);
        $totalFSChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'klipspruit')";
        $result=mysqli_query($db,$sql); 
        $klipspruit=mysqli_num_rows($result) + $totalFSChronicPatients; 

         //boksburg
         $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'boksburg') ";
         $result = mysqli_query($db, $sql); 
         $data = mysqli_fetch_assoc($result);
         $totalFSChronicPatients = $data['totalNum'];
         $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Gauteng' and municipality = 'boksburg')";
         $result=mysqli_query($db,$sql); 
         $boksburg=mysqli_num_rows($result) + $totalFSChronicPatients; 

         $gautengTTotal = $boksburg + $klipspruit + $RestWestcity+$joburg+$centurion+$ekurhuleni;
        //========================================
//      Free State -- matjhabeng
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Free State' and municipality = 'matjhabeng') ";
        $result = mysqli_query($db, $sql); 
        $data = mysqli_fetch_assoc($result);
        $totalFSChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Free State' and municipality = 'matjhabeng')";
        $result=mysqli_query($db,$sql); 
        $matjhabeng=mysqli_num_rows($result) + $totalFSChronicPatients;  
        //dihlabeng
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Free State' and municipality = 'dihlabeng') ";
        $result = mysqli_query($db, $sql); 
        $data = mysqli_fetch_assoc($result);
        $totalFSChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Free State' and municipality = 'dihlabeng')";
        $result=mysqli_query($db,$sql); 
        $dihlabeng=mysqli_num_rows($result) + $totalFSChronicPatients;  
        //tswelopele
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Free State' and municipality = 'tswelopele') ";
        $result = mysqli_query($db, $sql); 
        $data = mysqli_fetch_assoc($result);
        $totalFSChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Free State' and municipality = 'tswelopele')";
        $result=mysqli_query($db,$sql); 
        $tswelopele=mysqli_num_rows($result) + $totalFSChronicPatients;  

        //metsimaholo
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Free State' and municipality = 'metsimaholo') ";
        $result = mysqli_query($db, $sql); 
        $data = mysqli_fetch_assoc($result);
        $totalFSChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Free State' and municipality = 'metsimaholo')";
        $result=mysqli_query($db,$sql); 
        $metsimaholo=mysqli_num_rows($result) + $totalFSChronicPatients;  
        //masilonyana
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Free State' and municipality = 'masilonyana') ";
        $result = mysqli_query($db, $sql); 
        $data = mysqli_fetch_assoc($result);
        $totalFSChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Free State' and municipality = 'masilonyana')";
        $result=mysqli_query($db,$sql); 
        $masilonyana=mysqli_num_rows($result) + $totalFSChronicPatients;
        $freestateTotal = $masilonyana+$metsimaholo+$tswelopele+$dihlabeng+$matjhabeng;
        //=================================
        //North west:-- mhondo
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='North West' and municipality = 'Mkhondo') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalNWChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='North West' and municipality = 'Mkhondo') ";
        $result=mysqli_query($db,$sql); 
        $mkhondo=mysqli_num_rows($result) + $totalNWChronicPatients;  
        //--Rustenburg
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='North West' and municipality = 'Rustenburg') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalNWChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='North West' and municipality = 'Rustenburg') ";
        $result=mysqli_query($db,$sql); 
        $rustenburg=mysqli_num_rows($result) + $totalNWChronicPatients; 
        //-- matlosana 
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='North West' and municipality = 'matlosana') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalNWChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='North West' and municipality = 'matlosana') ";
        $result=mysqli_query($db,$sql); 
        $matlosana=mysqli_num_rows($result) + $totalNWChronicPatients; 


        //Mpumalanga
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Mpumalanga' and municipality = 'Mkhondo') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalMPChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Mpumalanga' and municipality = 'Mkhondo') ";
        $result=mysqli_query($db,$sql); 
        $mkhondo=mysqli_num_rows($result) + $totalMPChronicPatients;  
        //====================================
        //Limpopo -- tzaneen
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Limpopo' and municipality = 'tzaneen') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalLIMChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Limpopo' and municipality = 'tzaneen')";
        $result=mysqli_query($db,$sql); 
        $tzaneen=mysqli_num_rows($result) + $totalLIMChronicPatients;  
        
        //kgapane municipality
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Limpopo' and municipality = 'kgapane municipality') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalLIMChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Limpopo' and municipality = 'kgapane municipality')";
        $result=mysqli_query($db,$sql); 
        $kgapane =mysqli_num_rows($result) + $totalLIMChronicPatients;  
        
        //thulamela
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Limpopo' and municipality = 'Thulamela') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalLIMChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Limpopo' and municipality = 'Thulamela')";
        $result=mysqli_query($db,$sql); 
        $thulamela=mysqli_num_rows($result) + $totalLIMChronicPatients;  

        //mopani
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Limpopo' and municipality = 'mopani') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalLIMChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Limpopo' and municipality = 'mopani')";
        $result=mysqli_query($db,$sql); 
        $mopani=mysqli_num_rows($result) + $totalLIMChronicPatients;  
        $limpopoTotal = $mopani+$thulamela+$kgapane+$tzaneen;
        //===========================
        //KZN --umhlabuyalingana
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Kwazulu Natal' and municipality = 'umhlabuyalingana') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalKZNChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Kwazulu Natal' and municipality = 'umhlabuyalingana')";
        $result=mysqli_query($db,$sql); 
        $umhlabuyalingana=mysqli_num_rows($result) + $totalKZNChronicPatients;  
        //--nongoma
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Kwazulu Natal' and municipality = 'nongoma') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalKZNChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Kwazulu Natal' and municipality = 'nongoma')";
        $result=mysqli_query($db,$sql); 
        $nongoma=mysqli_num_rows($result) + $totalKZNChronicPatients;  

        //--alfred duma
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Kwazulu Natal' and municipality = 'alfred duma') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalKZNChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Kwazulu Natal' and municipality = 'alfred duma')";
        $result=mysqli_query($db,$sql); 
        $alfred=mysqli_num_rows($result) + $totalKZNChronicPatients;  
        //--okhahlamba
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Kwazulu Natal' and municipality = 'okhahlamba') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalKZNChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Kwazulu Natal' and municipality = 'okhahlamba')";
        $result=mysqli_query($db,$sql); 
        $okhahlamba=mysqli_num_rows($result) + $totalKZNChronicPatients;  
        $kznTotal = $alfred+$nongoma+$umhlabuyalingana+$okhahlamba;
        //=============================
        //norther cape
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Northern Cape' and municipality ='Dawid Kruiper') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalNCChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Northern Cape' and municipality = 'Dawid Kruiper')";
        $result=mysqli_query($db,$sql); 
        $Dawid=mysqli_num_rows($result) + $totalNCChronicPatients; 
        
        //Eastern cape -- buffalo municipality
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Eastern Cape' and municipality = 'buffalo municipality') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalECChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Eastern Cape' and municipality = 'buffalo municipality') ";
        $result=mysqli_query($db,$sql); 
        $buffalo=mysqli_num_rows($result) + $totalECChronicPatients; 

        //nyandeni
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Eastern Cape' and municipality = 'nyandeni') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalECChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Eastern Cape' and municipality = 'nyandeni') ";
        $result=mysqli_query($db,$sql); 
        $nyandeni=mysqli_num_rows($result) + $totalECChronicPatients; 
        //king sabata dalindyebo local municipality
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Eastern Cape' and municipality = 'king sabata dalindyebo local municipality') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalECChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Eastern Cape' and municipality = 'king sabata dalindyebo local municipality') ";
        $result=mysqli_query($db,$sql); 
        $kingSabata =mysqli_num_rows($result) + $totalECChronicPatients; 

        //sakhisizwe
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Eastern Cape' and municipality = 'sakhisizwe') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalECChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Eastern Cape' and municipality = 'sakhisizwe') ";
        $result=mysqli_query($db,$sql); 
        $sakhisizwe=mysqli_num_rows($result) + $totalECChronicPatients;
        $easternCapeTotal = $sakhisizwe+$kingSabata+$nyandeni+$buffalo; 
        //================================
        //western cape-- drakenstein
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Western Cape' and municipality = 'drakenstein') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalWCChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Western Cape' and municipality = 'drakenstein') ";
        $result=mysqli_query($db,$sql); 
        $drakenstein=mysqli_num_rows($result) + $totalWCChronicPatients; 
        
        // --mossel bay
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Western Cape' and municipality = 'mossel bay') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalWCChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Western Cape' and municipality = 'mossel bay') ";
        $result=mysqli_query($db,$sql); 
        $mossel=mysqli_num_rows($result) + $totalWCChronicPatients; 
        
        //-- city of cape town
        $sql = "SELECT sum(chronic_medication) as totalNum FROM request_medication_01 where unique_code in (SELECT unique_code FROM users_orders where province='Western Cape' and municipality = 'city of cape town') ";
        $result = mysqli_query($db, $sql);
        $data = mysqli_fetch_assoc($result);
        $totalWCChronicPatients = $data['totalNum'];
        $sql="SELECT * from request_medication_01 where chronic_medication = 'Yes' and unique_code in (SELECT unique_code FROM users_orders where province='Western Cape' and municipality = 'city of cape town') ";
        $result=mysqli_query($db,$sql); 
        $capeTown=mysqli_num_rows($result) + $totalWCChronicPatients; 
        $totalWesternCapeC = $mossel+$capeTown+$drakenstein;
  
        



 // Number of agents at the identified provinces: Gauteng, Eastern Cape, KwaZulu Natal and Western Cape



    $sql="select * from users where network='C' and provice in ('Gauteng','Eastern Cape','KwaZulu Natal','Western Cape')";
        $result=mysqli_query($db,$sql);
        $spTotalCommunity=mysqli_num_rows($result);

    $sql="select * from users where network='N' and provice in ('Gauteng','Eastern Cape','KwaZulu Natal','Western Cape')";
        $result=mysqli_query($db,$sql);
        $spTotalCivilSociety=mysqli_num_rows($result);

// Number of requests made in those designated provinces in Gauteng

    $sql="SELECT * FROM request_by_partner WHERE address LIKE '%soweto%'";
        $result=mysqli_query($db,$sql);
        $sowetoGautengResponses=mysqli_num_rows($result);

    $sql="SELECT * FROM request_by_partner WHERE address LIKE '%roodepoort%'";
        $result=mysqli_query($db,$sql);
        $roodepoortGautengResponses=mysqli_num_rows($result);

    $sql="SELECT * FROM request_by_partner WHERE district in
    ('Johannesburg', 'Joburg Metro','Johannesburg Municipality', 'Joburg', 'Joburg Munucipality',
     'Johanneburg', 'city of johnnesburg', 'City of Joburg')";
        $result=mysqli_query($db,$sql);
        $joburgGautengResponses=mysqli_num_rows($result);

     $totalSPHouseholdsGauteng = $sowetoGautengResponses + $roodepoortGautengResponses + $joburgGautengResponses;


// Number of requests made in those designated provinces in KwaZulu Natal

    $sql="SELECT * FROM request_by_partner WHERE provice='KwaZulu Natal' and district ='eThekwini Metropolitan' or municipality in
    ('eThekwini Metropolitan', 'eThe','eThekwini Metropolitan Municipality')";
        $result=mysqli_query($db,$sql);
        $eThekwiniKZNResponses=mysqli_num_rows($result);


    $sql="SELECT * FROM request_by_partner WHERE provice='KwaZulu Natal' and district in ('iLembe District Municipality')";
        $result=mysqli_query($db,$sql);
        $iLembeKZNResponses=mysqli_num_rows($result);

     $totalSPHouseholdsKZN = $eThekwiniKZNResponses + $iLembeKZNResponses;

// Number of requests made in those designated provinces in Eastern Cape

    $sql="SELECT * FROM request_by_partner WHERE provice='Eastern Cape' and district in
    ('Buffalo City Metropolitan')";
        $result=mysqli_query($db,$sql);
        $buffaloCityECResponses=mysqli_num_rows($result);

    $sql="SELECT * FROM request_by_partner WHERE provice='Eastern Cape' and district in
    ('Nelson Mandela Bay Metropolitan')";
        $result=mysqli_query($db,$sql);
        $mandelaBayECResponses=mysqli_num_rows($result);

    $sql="SELECT * FROM request_by_partner WHERE provice='Eastern Cape' and district in
    ('OR Tambo District Municipality')";
        $result=mysqli_query($db,$sql);
        $oRTamboECResponses=mysqli_num_rows($result);

    $sql="SELECT * FROM request_by_partner WHERE provice='Eastern Cape' and district in
    ('Chris Hani District Municipality')";
        $result=mysqli_query($db,$sql);
        $chrisHaniECResponses=mysqli_num_rows($result);

     $totalSPHouseholdsEC = $buffaloCityECResponses + $mandelaBayECResponses + $oRTamboECResponses + $chrisHaniECResponses;

// Number of requests made in those designated provinces in Western Cape

    $sql="SELECT * FROM request_by_partner WHERE provice='Western Cape' and district in
    ('City of Cape-town', 'City of Cape Town', 'Capetown', 'City of Cape Town Metropolitan')";
        $result=mysqli_query($db,$sql);
        $capeTownWCResponses=mysqli_num_rows($result);

    $totalSPHouseholdsWC = $capeTownWCResponses;

    $spTotalResponses = $totalSPHouseholdsGauteng + $totalSPHouseholdsKZN + $totalSPHouseholdsEC + $totalSPHouseholdsWC;


// Number of active agents in those designated provinces

    $sql="SELECT * FROM users WHERE address LIKE '%soweto%' and u_id in (select distinct u_id from users_orders)";
        $result=mysqli_query($db,$sql);
        $activeSowetoAgents=mysqli_num_rows($result);

    $sql="SELECT * FROM users WHERE address LIKE '%roodepoort%' and u_id in (select distinct u_id from users_orders)";
        $result=mysqli_query($db,$sql);
        $activeRoodepoortAgents=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE provice='Gauteng' and district in
    ('City of Johannesburg Metropolitan Municipality', 'Johannesburg',
    'Joburg Metropolitan Municipality', 'City of Johannesburg') and u_id in (select distinct u_id from users_orders)";
        $result=mysqli_query($db,$sql);
        $activeJoburgGauteng=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE provice='KwaZulu Natal' and district in
    ('Ethekwini metro', 'Thekwini', 'DURBAN', 'Ethekwini', 'eThekwini District') and u_id in (select distinct u_id from users_orders)";
        $result=mysqli_query($db,$sql);
        $activeEthekwiniKZN=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE provice='KwaZulu Natal' and district in
    ('Ilembe', 'iLembe District Municipality') and u_id in (select distinct u_id from users_orders)";
        $result=mysqli_query($db,$sql);
        $activeIlembeKZN=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
    ('Buffalo City Metropolitan', 'Buffalo city Municipality') and u_id in (select distinct u_id from users_orders)";
        $result=mysqli_query($db,$sql);
        $activeBuffaloCityEasternCape=mysqli_num_rows($result);


    $sql="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
    ('Nelson Mandela Bay Metropolitan') and u_id in (select distinct u_id from users_orders)";
        $result=mysqli_query($db,$sql);
        $activeMandelaBayEasternCape=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
    ('O.R.Tambo', 'OR Tambo', 'OR Tambo District Municipality') and u_id in (select distinct u_id from users_orders)";
        $result=mysqli_query($db,$sql);
        $activeORTamboEasternCape=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
    ('Chris Hani', 'Chris Hani District Municipality') and u_id in (select distinct u_id from users_orders)";
        $result=mysqli_query($db,$sql);
        $activeChrisHaniEasternCape=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE district in
    ('Cape District', 'Cape Metropole', 'City of Cape Town Metropole', 'City of Cape Town Metropolitan') and u_id in (select distinct u_id from users_orders)";
        $result=mysqli_query($db,$sql);
        $activeCapeTownWesternCape=mysqli_num_rows($result);

    $AllSPActiveAgents=$activeCapeTownWesternCape + $activeChrisHaniEasternCape + $activeORTamboEasternCape + $activeMandelaBayEasternCape +
            $activeBuffaloCityEasternCape + $activeIlembeKZN + $activeEthekwiniKZN + $activeJoburgGauteng + $activeRoodepoortAgents + $activeSowetoAgents;

// Number of organizations represented by the
    $sql="SELECT DISTINCT (organization_name) as active FROM `users` where provice in ('Gauteng','Eastern Cape','KwaZulu Natal','Western Cape') ";
        $result=mysqli_query($db,$sql);
        $AllOrganizationsRegistered=mysqli_num_rows($result);

// Number of agents in various provinces 'Gauteng'

    $sql="SELECT * FROM users WHERE address LIKE '%soweto%'";
        $result=mysqli_query($db,$sql);
        $totalSowetoAgents=mysqli_num_rows($result);

    $sql="SELECT * FROM users WHERE address LIKE '%roodepoort%'";
        $result=mysqli_query($db,$sql);
        $totalRoodepoortAgents=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE provice='Gauteng' and district in
    ('City of Johannesburg Metropolitan Municipality', 'Johannesburg',
    'Joburg Metropolitan Municipality', 'City of Johannesburg')";
        $result=mysqli_query($db,$sql);
        $totalJoburgGauteng=mysqli_num_rows($result);

    $totalSPAgentsGauteng=  $totalSowetoAgents + $totalRoodepoortAgents + $totalJoburgGauteng;



// Number of agents in various provinces 'KwaZulu Natal'

    $sql="SELECT * FROM `users` WHERE provice='KwaZulu Natal' and district in
    ('Ethekwini metro', 'Thekwini', 'DURBAN', 'Ethekwini', 'eThekwini District')";
        $result=mysqli_query($db,$sql);
        $totalEthekwiniKZN=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE provice='KwaZulu Natal' and district in
    ('Ilembe', 'iLembe District Municipality')";
        $result=mysqli_query($db,$sql);
        $totalIlembeKZN=mysqli_num_rows($result);

    $totalSPAgentsKZN=  $totalEthekwiniKZN +  $totalIlembeKZN;


// Number of agents in various provinces 'Eastern Cape'

    $sql="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
    ('Buffalo City Metropolitan', 'Buffalo city Municipality')";
        $result=mysqli_query($db,$sql);
        $totalBuffaloCityEasternCape=mysqli_num_rows($result);


    $sql="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
    ('Nelson Mandela Bay Metropolitan')";
        $result=mysqli_query($db,$sql);
        $totalMandelaBayEasternCape=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
    ('O.R.Tambo', 'OR Tambo', 'OR Tambo District Municipality')";
        $result=mysqli_query($db,$sql);
        $totalORTamboEasternCape=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
    ('Chris Hani', 'Chris Hani District Municipality')";
        $result=mysqli_query($db,$sql);
        $totalChrisHaniEasternCape=mysqli_num_rows($result);

    $totalSPAgentsEasternCape=  $totalBuffaloCityEasternCape +  $totalMandelaBayEasternCape + $totalORTamboEasternCape + $totalChrisHaniEasternCape;

// Number of agents in various provinces 'Western Cape'

    $sql="SELECT * FROM `users` WHERE district in
    ('Cape District', 'Cape Metropole', 'City of Cape Town Metropole', 'City of Cape Town Metropolitan')";
        $result=mysqli_query($db,$sql);
        $totalCapeTownWesternCape=mysqli_num_rows($result);


    $AllSPRegisteredAgents = $totalSPAgentsGauteng + $totalSPAgentsKZN + $totalSPAgentsEasternCape + $totalCapeTownWesternCape;


    $sql="select * from users_orders where province='Gauteng' ";
        $result=mysqli_query($db,$sql);
        $totalSPGauteng=mysqli_num_rows($result);

    $sql=" select * from users_orders where province='KwaZulu Natal' ";
        $result=mysqli_query($db,$sql);
        $totalSPKZN=mysqli_num_rows($result);

    $sql=" select * from users_orders where province='Eastern Cape' ";
        $result=mysqli_query($db,$sql);
        $totalSPEasternCape=mysqli_num_rows($result);

    $sql=" select * from users_orders where province='Western Cape' ";
        $result=mysqli_query($db,$sql);
        $totalSPWesternCape=mysqli_num_rows($result);

// Received, Processing, Rejected and Closed

    $sql="select * from users_orders where status='in process' and unique_code in
            (select unique_code from request_by_partner where district in
            ('Johannesburg', 'Joburg Metro','Johannesburg Municipality', 'Joburg',
            'Joburg Munucipality','Johanneburg', 'city of johnnesburg', 'City of Joburg',
            'iLembe District Municipality', 'eThekwini Metropolitan', 'Buffalo City Metropolitan',
            'Nelson Mandela Bay Metropolitan', 'OR Tambo District Municipality',
            'Chris Hani District Municipality', 'City of Cape-town', 'City of Cape Town', 'Capetown',
            'City of Cape Town Metropolitan'))";
        $result=mysqli_query($db,$sql);
        $totalSPBeingProcessed=mysqli_num_rows($result);

    $sql="select * from users_orders where status='closed' and unique_code in
            (select unique_code from request_by_partner where district in
            ('Johannesburg', 'Joburg Metro','Johannesburg Municipality', 'Joburg',
            'Joburg Munucipality','Johanneburg', 'city of johnnesburg', 'City of Joburg',
            'iLembe District Municipality', 'eThekwini Metropolitan', 'Buffalo City Metropolitan',
            'Nelson Mandela Bay Metropolitan', 'OR Tambo District Municipality',
            'Chris Hani District Municipality', 'City of Cape-town', 'City of Cape Town', 'Capetown',
            'City of Cape Town Metropolitan'))";
        $result=mysqli_query($db,$sql);
        $totalSPClosed=mysqli_num_rows($result);

    $sql="select * from users_orders where status='rejected' and unique_code in
            (select unique_code from request_by_partner where district in
            ('Johannesburg', 'Joburg Metro','Johannesburg Municipality', 'Joburg',
            'Joburg Munucipality','Johanneburg', 'city of johnnesburg', 'City of Joburg',
            'iLembe District Municipality', 'eThekwini Metropolitan', 'Buffalo City Metropolitan',
            'Nelson Mandela Bay Metropolitan', 'OR Tambo District Municipality',
            'Chris Hani District Municipality', 'City of Cape-town', 'City of Cape Town', 'Capetown',
            'City of Cape Town Metropolitan'))";
        $result=mysqli_query($db,$sql);
        $totalSPRejected=mysqli_num_rows($result);

        $totalSPUnProcessed=$spTotalResponses - $totalSPBeingProcessed - $totalSPClosed - $totalSPRejected;





// Number of requests made in those designated provinces in Gauteng

    $sql="SELECT * FROM users_orders where delivery_address LIKE '%soweto%' and unique_code in (SELECT unique_code from request_medication_01 where chronic_medication = 'Yes')";
        $result=mysqli_query($db,$sql);
        $sowetoGPChronicMedication = mysqli_num_rows($result);

    $sql="SELECT * FROM users_orders where delivery_address LIKE '%roodepoort%' and unique_code in (SELECT unique_code from request_medication_01 where chronic_medication = 'Yes')";
        $result=mysqli_query($db,$sql);
        $roodepoortGPChronicMedication = mysqli_num_rows($result);

    $sql="SELECT * FROM request_by_partner WHERE district in ('Johannesburg', 'Joburg Metro','Johannesburg Municipality', 'Joburg', 'Joburg Munucipality', 'Johanneburg',
    'city of johnnesburg', 'City of Joburg')";
        $result=mysqli_query($db,$sql);
        $joburgGPChronicMedication = mysqli_num_rows($result);

     $totalSPChronicMedicationGauteng = $sowetoGPChronicMedication + $roodepoortGPChronicMedication + $joburgGPChronicMedication;


// Number of requests made in those designated provinces in KwaZulu Natal

    $sql="SELECT * FROM request_by_partner WHERE district in ('eThekwini Metropolitan') or municipality in ('eThekwini Metropolitan', 'eThe','eThekwini Metropolitan Municipality')";
        $result=mysqli_query($db,$sql);
        $eThekwiniKZNChronicMedication=mysqli_num_rows($result);


    $sql="SELECT * FROM request_by_partner WHERE district in ('iLembe District Municipality')";
        $result=mysqli_query($db,$sql);
        $iLembeKZNChronicMedication=mysqli_num_rows($result);

     $totalSPChronicMedicationKZN = $eThekwiniKZNChronicMedication + $iLembeKZNChronicMedication;

// Number of requests made in those designated provinces in Eastern Cape

    $sql="SELECT * FROM request_by_partner WHERE district in ('Buffalo City Metropolitan')";
        $result=mysqli_query($db,$sql);
        $buffaloCityECChronicMedication=mysqli_num_rows($result);

    $sql="SELECT * FROM request_by_partner WHERE district in ('Nelson Mandela Bay Metropolitan')";
        $result=mysqli_query($db,$sql);
        $mandelaBayECChronicMedication=mysqli_num_rows($result);

    $sql="SELECT * FROM request_by_partner WHERE district in ('OR Tambo District Municipality')";
        $result=mysqli_query($db,$sql);
        $oRTamboECChronicMedication=mysqli_num_rows($result);

    $sql="SELECT * FROM request_by_partner WHERE district in ('Chris Hani District Municipality')";
        $result=mysqli_query($db,$sql);
        $chrisHaniECChronicMedication=mysqli_num_rows($result);

     $totalSPChronicMedicationEC = $buffaloCityECChronicMedication + $mandelaBayECChronicMedication + $oRTamboECChronicMedication + $chrisHaniECChronicMedication;

// Number of requests made in those designated provinces in Western Cape

    $sql="SELECT * FROM request_by_partner WHERE district in ('City of Cape-town', 'City of Cape Town', 'Capetown', 'City of Cape Town Metropolitan')";
        $result=mysqli_query($db,$sql);
        $capeTownWCChronicMedication=mysqli_num_rows($result);

    $totalSPChronicMedicationWC = $capeTownWCChronicMedication;

    $spTotalChronicMedication = $totalSPChronicMedicationGauteng + $totalSPChronicMedicationKZN + $totalSPChronicMedicationEC + $totalSPChronicMedicationWC;



?>