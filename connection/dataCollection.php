<?php 

// Total number of agents registered on the app
    $sql="select * from users ";
        $result=mysqli_query($db,$sql); 
        $AllRegisteredAgents=mysqli_num_rows($result);

    $sql="select * from users where u_id IN (SELECT DISTINCT u_id FROM users_orders)";
        $result=mysqli_query($db,$sql); 
        $AllActiveAgents=mysqli_num_rows($result);
 

    $sql="SELECT DISTINCT (organization_name) as active FROM `users`";
        $result=mysqli_query($db,$sql); 
        $AllOrganizationsRegistered=mysqli_num_rows($result);

    $sql="select * from users where provice='Gauteng' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsGauteng=mysqli_num_rows($result);


    $sql="select * from users where provice='Free State' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsFreeState=mysqli_num_rows($result);


    $sql="select * from users where provice='North West' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsNorthWest=mysqli_num_rows($result);


    $sql=" select * from users where provice='Mpumalanga' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsMpumalanga=mysqli_num_rows($result);


    $sql=" select * from users where provice='KwaZulu Natal' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsKZN=mysqli_num_rows($result);
          

    $sql=" select * from users where provice='Limpopo' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsLimpopo=mysqli_num_rows($result);
                                      

    $sql=" select * from users where provice='Western Cape' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsWesternCape=mysqli_num_rows($result);


    $sql=" select * from users where provice='Northern Cape' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsNorthernCape=mysqli_num_rows($result);
                                                    

    $sql=" select * from users where provice='Eastern Cape' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsEasternCape=mysqli_num_rows($result);
                                                   

    $sql=" select * from users where provice='Choose' ";
        $result=mysqli_query($db,$sql); 
        $totalUnlocated=mysqli_num_rows($result);                                                    

// Number of partners in a group

    $sql="select * from users where network='P'";
        $result=mysqli_query($db,$sql); 
        $totalCovid19Partners=mysqli_num_rows($result);

    $sql="select * from users where network='C'";
        $result=mysqli_query($db,$sql); 
        $totalCommunity=mysqli_num_rows($result);

    $sql="select * from users where network='N'";
        $result=mysqli_query($db,$sql); 
        $totalCivilSociety=mysqli_num_rows($result);


    $sql="select * from users where u_id IN (SELECT DISTINCT u_id FROM users_orders) and network = 'P' ";
        $result=mysqli_query($db,$sql); 
        $totalActiveCovid19Partners=mysqli_num_rows($result);

    $sql="select * from users where u_id IN (SELECT DISTINCT u_id FROM users_orders) and network = 'C' ";
        $result=mysqli_query($db,$sql); 
        $totalActiveCommunity=mysqli_num_rows($result);

    $sql="select * from users where u_id IN (SELECT DISTINCT u_id FROM users_orders) and network = 'N' ";
        $result=mysqli_query($db,$sql); 
        $totalActiveCivilSociety=mysqli_num_rows($result);

// Total number of surveys across the country

    $sql="select * from request_by_partner";
        $result=mysqli_query($db,$sql); 
        $totalResponses=mysqli_num_rows($result);    


    $sql="select * from request_by_partner where provice='Gauteng' ";
        $result=mysqli_query($db,$sql); 
        $totalGauteng=mysqli_num_rows($result);


    $sql="select * from request_by_partner where provice='Free State' ";
        $result=mysqli_query($db,$sql); 
        $totalFreeState=mysqli_num_rows($result);


    $sql="select * from request_by_partner where provice='North West' ";
        $result=mysqli_query($db,$sql); 
        $totalNorthWest=mysqli_num_rows($result);


    $sql=" select * from request_by_partner where provice='Mpumalanga' or provice='Mpumlanga' ";
        $result=mysqli_query($db,$sql); 
        $totalMpumalanga=mysqli_num_rows($result);


    $sql=" select * from request_by_partner where provice='KwaZulu Natal' ";
        $result=mysqli_query($db,$sql); 
        $totalKZN=mysqli_num_rows($result);
          

    $sql=" select * from request_by_partner where provice='Limpopo' ";
        $result=mysqli_query($db,$sql); 
        $totalLimpopo=mysqli_num_rows($result);
                                      

    $sql=" select * from request_by_partner where provice='Western Cape' ";
        $result=mysqli_query($db,$sql); 
        $totalWesternCape=mysqli_num_rows($result);


    $sql=" select * from request_by_partner where provice='Northern Cape' ";
        $result=mysqli_query($db,$sql); 
        $totalNorthernCape=mysqli_num_rows($result);
                                                    

    $sql=" select * from request_by_partner where provice='Eastern Cape' ";
        $result=mysqli_query($db,$sql); 
        $totalEasternCape=mysqli_num_rows($result);


    $sql=" select * from request_by_partner where provice='Choose' or provice='Select Province' or provice='' ";
        $result=mysqli_query($db,$sql); 
        $totalNoProvince=mysqli_num_rows($result);        
                                                    
// Stats on today  
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)= CURDATE()";
        $result=mysqli_query($db,$sql); 
        $totalTodayRequests=mysqli_num_rows($result);         

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() and network='P' ";
        $result=mysqli_query($db,$sql); 
        $totalTodayPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() and network='N' ";
        $result=mysqli_query($db,$sql); 
        $totalTodayCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() and network='C' ";
        $result=mysqli_query($db,$sql); 
        $totalTodayComminity=mysqli_num_rows($result); 


// Stats on yesterday  
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)=curdate()-1";
        $result=mysqli_query($db,$sql); 
        $totalYesterdayRequests=mysqli_num_rows($result);         

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-1 and network='P' ";
        $result=mysqli_query($db,$sql); 
        $totalYesterdayPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-1 and network='N' ";
        $result=mysqli_query($db,$sql); 
        $totalYesterdayCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-1 and network='C' ";
        $result=mysqli_query($db,$sql); 
        $totalYesterdayComminity=mysqli_num_rows($result); 


// Stats on 2 days before  
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)=curdate()-2";
        $result=mysqli_query($db,$sql); 
        $total2DaysRequests=mysqli_num_rows($result);         

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-2 and network='P' ";
        $result=mysqli_query($db,$sql); 
        $total2DaysPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-2 and network='N' ";
        $result=mysqli_query($db,$sql); 
        $total2DaysCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-2 and network='C' ";
        $result=mysqli_query($db,$sql); 
        $total2DaysComminity=mysqli_num_rows($result); 


// Stats on 3 days before 
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)=curdate()-3";
        $result=mysqli_query($db,$sql); 
        $total3DaysRequests=mysqli_num_rows($result);         

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-3 and network='P' ";
        $result=mysqli_query($db,$sql); 
        $total3DaysPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-3 and network='N' ";
        $result=mysqli_query($db,$sql); 
        $total3DaysCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-3 and network='C' ";
        $result=mysqli_query($db,$sql); 
        $total3DaysComminity=mysqli_num_rows($result); 

// Stats on 4 days before
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)=curdate()-4";
        $result=mysqli_query($db,$sql); 
        $total4DaysRequests=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-4 and network='P' ";
        $result=mysqli_query($db,$sql); 
        $total4DaysPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-4 and network='N' ";
        $result=mysqli_query($db,$sql); 
        $total4DaysCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-4 and network='C' ";
        $result=mysqli_query($db,$sql); 
        $total4DaysComminity=mysqli_num_rows($result); 

// Stats on 5 days before
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)=curdate()-5";
        $result=mysqli_query($db,$sql); 
        $total5DaysRequests=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-5 and network='P' ";
        $result=mysqli_query($db,$sql); 
        $total5DaysPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-5 and network='N' ";
        $result=mysqli_query($db,$sql); 
        $total5DaysCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-5 and network='C' ";
        $result=mysqli_query($db,$sql); 
        $total5DaysComminity=mysqli_num_rows($result); 

// Stats on 6 days before
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)=curdate()-6";
        $result=mysqli_query($db,$sql); 
        $total6DaysRequests=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-6 and network='P' ";
        $result=mysqli_query($db,$sql); 
        $total6DaysPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-6 and network='N' ";
        $result=mysqli_query($db,$sql); 
        $total6DaysCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate()-6 and network='C' ";
        $result=mysqli_query($db,$sql); 
        $total6DaysComminity=mysqli_num_rows($result);


// Checking last week data
    $sql="SELECT * FROM `request_by_partner` WHERE date(date) < curdate() and date(date) > curdate() - 7 ORDER BY `req_id` DESC ";
        $result=mysqli_query($db,$sql); 
        $totalLastWeekSurveys=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE network='P' and date(date) < curdate() and date(date) > curdate() - 7 ";
        $result=mysqli_query($db,$sql); 
        $totalLastWeekCCCPartners=mysqli_num_rows($result); 



    $sql="SELECT * FROM `users` WHERE network='N' and date(date) < curdate() and date(date) > curdate() - 7 ";
        $result=mysqli_query($db,$sql); 
        $totalLastWeekCivilSociety=mysqli_num_rows($result); 


    $sql="SELECT * FROM `users` WHERE network='C' and date(date) < curdate() and date(date) > curdate() - 7 ";
        $result=mysqli_query($db,$sql); 
        $totalLastWeekCommunity=mysqli_num_rows($result); 

// Checking number of female respondants 
    $sql=" SELECT * FROM `request_by_partner` WHERE sex='Female'";
        $result=mysqli_query($db,$sql); 
        $femaleRespondants=mysqli_num_rows($result);
        $femalePercentage = round (($femaleRespondants / $totalResponses) * 100);

// Checking number of male respondants                         
    $sql=" SELECT * FROM `request_by_partner` WHERE sex='Male'";
        $result=mysqli_query($db,$sql); 
        $maleRespondants=mysqli_num_rows($result);
        $malePercentage = round (($maleRespondants / $totalResponses) * 100);

// Checking number of intersex respondants                         
    $sql=" SELECT * FROM `request_by_partner` WHERE sex='Intersex'";
        $result=mysqli_query($db,$sql); 
        $intersexRespondants=mysqli_num_rows($result);
        $intersexPercentage = round (($intersexRespondants / $totalResponses) * 100);

// Checking number of other respondants                         
    $sql=" SELECT * FROM `request_by_partner` WHERE sex='Other'";
        $result=mysqli_query($db,$sql); 
        $otherRespondants=mysqli_num_rows($result);
        $otherPercentage = round (($otherRespondants / $totalResponses) * 100);

// Checking number of male respondants                         
    $sql=" SELECT * FROM `request_by_partner` WHERE sex='Choose'";
        $result=mysqli_query($db,$sql); 
        $nonSelectedRespondants=mysqli_num_rows($result);
        $nonSelectedPercentage = round (($nonSelectedRespondants / $totalResponses) * 100);


    $sql="SELECT sum(people_in_house) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfPeople=$data['totalNum'];

// Checking number of males in the households 
    $sql="SELECT sum(males_in_house) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfMales=$data['totalNum'];

// Checking number of females in the households 
    $sql="SELECT sum(females_in_house) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfFemales=$data['totalNum'];


// Checking number of Gays in the households 
    $sql="SELECT sum(gay_in_house) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfGays=$data['totalNum'];


// Checking number of Lesbians in the households 
    $sql="SELECT sum(lesbian_in_house) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfLesbians=$data['totalNum'];


    $totalNumberOfIntersex = $totalNumberOfGays + $totalNumberOfLesbians;

// Checking number of Other respondants                         
    $sql="SELECT sum(lgbt_in_house) as totalNum FROM request_people where not lgbt_in_house='Choose...'";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfOther=$data['totalNum'];


// Checking number of hetero-sexual respondants                         
    $sql="SELECT sum(num_hetero_sex) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfHeteroSex=$data['totalNum'];


// Checking number of homo-sexual respondants                         
    $sql="SELECT sum(num_homo_sex) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfHomoSex=$data['totalNum'];


// Checking number of bi-sexual respondants                         
    $sql="SELECT sum(num_bi_sex) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfBiSex=$data['totalNum'];


    $sql="SELECT sum(num_other_sexuality) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfOtherSexuality=$data['totalNum'];


// Checking number of Cis Gender respondants                         
    $sql="SELECT sum(num_cis_gender) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfCisGender=$data['totalNum'];    


// Checking number of Trans Gender respondants                         
    $sql="SELECT sum(num_trans_gender) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfTransGender=$data['totalNum'];    


// Checking number of Non-confirm Gender respondants                         
    $sql="SELECT sum(num_nonconfirm_gender) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfNonConGender=$data['totalNum'];    
    

// Checking number of homo sexual respondants                         
    $sql="SELECT sum(num_queer_gender) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfQueerGender=$data['totalNum']; 


// Checking number of Formal (Townhouse)                          
    $sql="SELECT * FROM request_people where settlement='Formal (Townhouse)'";
        $result=mysqli_query($db,$sql);         
        $totalNumberOfTownHouses=mysqli_num_rows($result);


// Checking number of Rural (Village)                          
    $sql="SELECT * FROM request_people where settlement='Rural (Village)'";
        $result=mysqli_query($db,$sql);         
        $totalNumberOfVillage=mysqli_num_rows($result);


// Checking number of Formal (Backgroun Dwellers)
    $sql="SELECT * FROM request_people where settlement='Formal (Background Dwellers)'";
        $result=mysqli_query($db,$sql);         
        $totalNumberOfBackDwellers=mysqli_num_rows($result);


// Checking number of Urban (Flats)
    $sql="SELECT * FROM request_people where settlement='Urban (Flats)'";
        $result=mysqli_query($db,$sql);         
        $totalNumberOfFlats=mysqli_num_rows($result);


// Checking number of Informal Settlement
    $sql="SELECT * FROM request_people where settlement='Informal Settlement'";
        $result=mysqli_query($db,$sql);         
        $totalNumberOfInformal=mysqli_num_rows($result);


// Checking number of Non Selected
    $sql="SELECT * FROM request_people where settlement='Choose...'";
        $result=mysqli_query($db,$sql);         
        $totalNumberOfNonSelected=mysqli_num_rows($result);


// Checking number of Traditional
    $sql="SELECT * FROM request_people where settlement='Traditional'";
        $result=mysqli_query($db,$sql);         
        $totalNumberOfTraditional=mysqli_num_rows($result);


// Checking number of RDP
    $sql="SELECT * FROM request_people where settlement='RDP'";
        $result=mysqli_query($db,$sql);         
        $totalNumberOfRDP=mysqli_num_rows($result);


// Checking number of Farm Dwellers
    $sql="SELECT * FROM request_people where settlement='Farm Dwellers'";
        $result=mysqli_query($db,$sql);         
        $totalNumberOfFarm=mysqli_num_rows($result);


// Checking number of Hostel Dwellers
    $sql="SELECT * FROM request_people where settlement='Hostel'";
        $result=mysqli_query($db,$sql);         
        $totalNumberOfHostels=mysqli_num_rows($result);


    $sql="SELECT sum(people_in_house) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfPeople=$data['totalNum'];

// Checking number of males in the households 
    $sql="SELECT sum(males_in_house) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfMales=$data['totalNum'];

// Checking number of females in the households 
    $sql="SELECT sum(females_in_house) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfFemales=$data['totalNum'];


// Checking number of Gays in the households 
    $sql="SELECT sum(gay_in_house) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfGays=$data['totalNum'];


// Checking number of Lesbians in the households 
    $sql="SELECT sum(lesbian_in_house) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfLesbians=$data['totalNum'];


    $totalNumberOfIntersex = $totalNumberOfGays + $totalNumberOfLesbians;

// Checking number of Other respondants                         
    $sql="SELECT sum(lgbt_in_house) as totalNum FROM request_people where not lgbt_in_house='Choose...' ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfOther=$data['totalNum'];


// Checking number of hetero-sexual respondants                         
    $sql="SELECT sum(num_hetero_sex) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfHeteroSex=$data['totalNum'];


// Checking number of homo-sexual respondants                         
    $sql="SELECT sum(num_homo_sex) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfHomoSex=$data['totalNum'];


// Checking number of bi-sexual respondants                         
    $sql="SELECT sum(num_bi_sex) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfBiSex=$data['totalNum'];

// Checking number of other sexualities respondants    
    $sql="SELECT sum(num_other_sexuality) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfOtherSexuality=$data['totalNum'];

// Checking number of Cis Gender respondants                         
    $sql="SELECT sum(num_cis_gender) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfCisGender=$data['totalNum'];    


// Checking number of Trans Gender respondants                         
    $sql="SELECT sum(num_trans_gender) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfTransGender=$data['totalNum'];    


// Checking number of Non-confirm Gender respondants                         
    $sql="SELECT sum(num_nonconfirm_gender) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfNonConGender=$data['totalNum'];    
    

// Checking number of homo sexual respondants                         
    $sql="SELECT sum(num_queer_gender) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalNumberOfQueerGender=$data['totalNum']; 


// Checking number of homo sexual respondants                         
    $sql="SELECT * FROM request_people where settlement='' ";
        $result=mysqli_query($db,$sql);         
        $rws=mysqli_num_rows($result);
        $totalNumberOfQueerGender=$data['totalNum']; 


    $sql="SELECT sum(age0_2) as totalNum FROM request_people";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalAges0_13=$data['totalNum'];

// Checking number of males in the households 
    $sql="SELECT sum(age13_18) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalAges14_18=$data['totalNum'];

// Checking number of females in the households 
    $sql="SELECT sum(age19_59) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalAges19_35=$data['totalNum'];


// Checking number of Gays in the households 
    $sql="SELECT sum(age36_59) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalAges36_59=$data['totalNum'];


// Checking number of Lesbians in the households 
    $sql="SELECT sum(age60plus) as totalNum FROM request_people ";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalAges60Plus=$data['totalNum'];                        
 

// Checking number of people employed households 
    $sql="SELECT sum(number_people_employed) as totalNum FROM request_employment_stats";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalPeopleEmployed=$data['totalNum']; 


// Checking number of people lost employment households 
    $sql="SELECT sum(`employment_lost`) as totalNum FROM request_employment_stats";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalPeopleLostEmployment=$data['totalNum']; 


// Checking number of people on social grant households 
    $sql="SELECT sum(`social_grants`) as totalNum FROM request_employment_stats";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalPeopleSocialGrants=$data['totalNum']; 


// Checking number of people who still receives income 
    $sql="SELECT * FROM request_employment_stats where `still_receiving_income`='Yes' ";
        $result=mysqli_query($db,$sql); 
        $totalReceivingIncome=mysqli_num_rows($result);


// Checking number of people who lost income
    $sql="SELECT * FROM request_employment_stats where `still_receiving_income`='No' ";
        $result=mysqli_query($db,$sql); 
        $totalNotReceivingIncome=mysqli_num_rows($result);


// Percentages of people receiving income
    $employedWithIncome = round (($totalReceivingIncome / $totalPeopleEmployed) * 100);


// Percentages of people not receiving income
    $employedWithOutIncome = round (($totalNotReceivingIncome / $totalPeopleEmployed) * 100);


// Checking number of people who still receives income 
    $sql="SELECT * FROM request_violations WHERE any_kind_abuse='Yes' ";
        $result=mysqli_query($db,$sql); 
        $totalViolations=mysqli_num_rows($result);


// Checking number of people who encountered law enforcement violation 
    $sql="SELECT * FROM request_violations where not lawEnforcementCond='Choose...' and not lawEnforcementCond='None'";
        $result=mysqli_query($db,$sql); 
        $totalLawEnforcementViolations=mysqli_num_rows($result);


// Checking number of people who encountered community member violation 
    $sql="SELECT * FROM request_violations where not communityMemberCond='Choose...' and not communityMemberCond='None'";
        $result=mysqli_query($db,$sql); 
        $totalCommunityViolations=mysqli_num_rows($result);


// Checking number of people who encountered health professionals violation 
    $sql="SELECT * FROM request_violations where not healthCareCheck='Choose...' and not healthCareCheck='No'";
        $result=mysqli_query($db,$sql); 
        $totalHealthCareViolations=mysqli_num_rows($result);


// Checking number of people who encountered Gender based violation
    $sql="SELECT * FROM request_violations where not  domesticCond='Choose...' and not domesticCond='None'";
        $result=mysqli_query($db,$sql); 
        $totalGBViolations=mysqli_num_rows($result);


// Checking number of people with disabilities
    $sql="SELECT * FROM `request_disability` where number_disabled='Yes'";
        $result=mysqli_query($db,$sql); 
        $totalPeopleWithDisabilities=mysqli_num_rows($result);


// Checking number of people with kids living with disabilities
    $sql="SELECT * FROM `request_disability` where number_disabled_child='Yes'";
        $result=mysqli_query($db,$sql); 
        $totalChildrenWithDisabilities=mysqli_num_rows($result);


// Checking number of people with adults living with disabilities
    $sql="SELECT * FROM `request_disability` where number_disabled_adult='Yes'";
        $result=mysqli_query($db,$sql); 
        $totalAdultsWithDisabilities=mysqli_num_rows($result);

        $actualDisabilities=$totalAdultsWithDisabilities + $totalChildrenWithDisabilities;

// Checking number of people with disabilities
    $sql="SELECT * FROM request_disability where physical_disability='Yes'";
        $result=mysqli_query($db,$sql); 
        $totalPhysicalDisabilities=mysqli_num_rows($result);


// Checking number of people with kids living with disabilities
    $sql="SELECT * FROM request_disability where psyco_social_disability='Yes'";
        $result=mysqli_query($db,$sql); 
        $totalPsycoDisabilities=mysqli_num_rows($result);


// Checking number of people with adults living with disabilities
    $sql="SELECT * FROM request_disability where other_disability='Yes'";
        $result=mysqli_query($db,$sql); 
        $totalOtherDisabilities=mysqli_num_rows($result);


// Checking number of people with chronic medication
    $sql="SELECT * FROM request_medication_01 where chronic_medication = 'Yes'";
        $result=mysqli_query($db,$sql); 
        $totalChronicPatients=mysqli_num_rows($result);


// Checking number of people on social grants
    $sql="SELECT sum(no_pregnant_people) as totalNum FROM request_medication_01";
        $result=mysqli_query($db,$sql);         
        $data=mysqli_fetch_assoc($result);
        $totalPeoplePregnant=$data['totalNum']; 


// Checking number of people with chronic medication
    $sql="SELECT * FROM request_medication_02 where essential_services_worker = 'Yes'";
        $result=mysqli_query($db,$sql); 
        $totalFrontLineWorkers=mysqli_num_rows($result);


// Checking number of people with health care
    $sql="SELECT * FROM request_medication_02 where healthCareCondition = 'Yes'";
        $result=mysqli_query($db,$sql); 
        $totalHealthCareWorkers=mysqli_num_rows($result);


// Checking number of people with disaster management
    $sql="SELECT * FROM request_medication_02 where disasterCondition = 'Yes'";
        $result=mysqli_query($db,$sql); 
        $totalDisasterWorkers=mysqli_num_rows($result);


// Checking number of people with retail
    $sql="SELECT * FROM request_medication_02 where retailCondition = 'Yes'";
        $result=mysqli_query($db,$sql); 
        $totalRetailWorkers=mysqli_num_rows($result);


// Checking number of people with retail
    $sql="SELECT * FROM request_medication_02 where emegencyCondition = 'Yes'";
        $result=mysqli_query($db,$sql); 
        $totalEmegencyWorkers=mysqli_num_rows($result);


// Checking number of people with retail
    $sql="SELECT * FROM request_medication_02 where transportCondition = 'Yes'";
        $result=mysqli_query($db,$sql); 
        $totalTransportWorkers=mysqli_num_rows($result);

    ?>