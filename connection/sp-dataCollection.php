<?php

// Number of agents at the identified provinces: Gauteng, Eastern Cape, KwaZulu Natal and Western Cape
    $sql="select * from users where network='P' and provice in ('Gauteng','Eastern Cape','KwaZulu Natal','Western Cape')";
        $result=mysqli_query($db,$sql);
        $spTotalCovid19Partners=mysqli_num_rows($result);

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


?>