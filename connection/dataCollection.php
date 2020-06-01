<?php 

// Total number of agents registered on the app
    $sql="select * from users ";
        $result=mysqli_query($db,$sql); 
        $AllRegisteredUser=mysqli_num_rows($result);

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
        $agentsMpumalanga=mysqli_num_rows($result);


    $sql=" select * from users where provice='Mpumlanga' ";
        $result=mysqli_query($db,$sql); 
        $agentsMpumlanga=mysqli_num_rows($result);


    $totalAgentsMpumalanga = $agentsMpumalanga + $agentsMpumlanga;


    $sql=" select * from users where provice='KwaZulu Natal' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsKZN=mysqli_num_rows($result);


    $sql=" select * from users where provice='Limpopo' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsLimpopo=mysqli_num_rows($result);
                                      

    $sql=" select * from users where provice='Western Cape' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsWesternCape=mysqli_num_rows($result);


    $sql=" select * from users where provice='Northern Cape'  ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsNorthernCape=mysqli_num_rows($result);
                                                    

    $sql=" select * from users where provice='Eastern Cape' ";
        $result=mysqli_query($db,$sql); 
        $totalAgentsEasternCape=mysqli_num_rows($result);
                                                   

    $sql=" select * from users where provice='Please Choose' or provice='Select Province' or provice='Choose' ";
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

    $sql="select * from users where network='Select...' or network='Choose' ";
        $result=mysqli_query($db,$sql); 
        $totalNonSelected=mysqli_num_rows($result);        

    $AllRegisteredAgents = $totalCovid19Partners + $totalCivilSociety + $totalCommunity + $totalNonSelected;

// Number of active agents as Covid-Front Agents, Civil Society Agents and Community Member Agents
    $sql="select * from users where u_id IN (SELECT DISTINCT u_id FROM users_orders) and network = 'P' ";
        $result=mysqli_query($db,$sql); 
        $totalActiveCovid19Partners=mysqli_num_rows($result);

    $sql="select * from users where u_id IN (SELECT DISTINCT u_id FROM users_orders) and network = 'C' ";
        $result=mysqli_query($db,$sql); 
        $totalActiveCommunity=mysqli_num_rows($result);

    $sql="select * from users where u_id IN (SELECT DISTINCT u_id FROM users_orders) and network = 'N' ";
        $result=mysqli_query($db,$sql); 
        $totalActiveCivilSociety=mysqli_num_rows($result);


// Received, Processing, Rejected and Closed
    $sql="select * from users_orders where status is null or status=''";
        $result=mysqli_query($db,$sql); 
        $totalUnProcessed=mysqli_num_rows($result);  

    $sql="select * from users_orders where status='in process'";
        $result=mysqli_query($db,$sql); 
        $totalBeingProcessed=mysqli_num_rows($result);

    $sql="select * from users_orders where status='closed'";
        $result=mysqli_query($db,$sql); 
        $totalClosed=mysqli_num_rows($result);

    $sql="select * from users_orders where status='rejected'";
        $result=mysqli_query($db,$sql); 
        $totalRejected=mysqli_num_rows($result);


// Total number of surveys across the country

    $sql="select * from request_by_partner";
        $result=mysqli_query($db,$sql); 
        $totalResponses=mysqli_num_rows($result);    

    $sql="SELECT users.*, users_orders.*, users_orders.municipality as delivery_municipality FROM users INNER JOIN users_orders ON users.u_id=users_orders.u_id where users_orders.unique_code in (SELECT unique_code FROM `request_by_partner`) and users.network='P' ";
        $result=mysqli_query($db,$sql); 
        $totalCCCResponses=mysqli_num_rows($result);    


    $sql="SELECT users.*, users_orders.*, users_orders.municipality as delivery_municipality FROM users INNER JOIN users_orders ON users.u_id=users_orders.u_id where users_orders.unique_code in (SELECT unique_code FROM `request_by_partner`) and users.network='N' ";
        $result=mysqli_query($db,$sql); 
        $totalCivilSocietyResponses=mysqli_num_rows($result);

    $sql="SELECT users.*, users_orders.*, users_orders.municipality as delivery_municipality FROM users INNER JOIN users_orders ON users.u_id=users_orders.u_id where users_orders.unique_code in (SELECT unique_code FROM `request_by_partner`) and users.network='C' ";
        $result=mysqli_query($db,$sql); 
        $totalCommunityResponses=mysqli_num_rows($result);

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

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() and network='P'";
        $result=mysqli_query($db,$sql); 
        $totalTodayPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() and network='N'";
        $result=mysqli_query($db,$sql); 
        $totalTodayCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() and network='C'";
        $result=mysqli_query($db,$sql); 
        $totalTodayComminity=mysqli_num_rows($result); 

    $sql="SELECT distinct u_id from users WHERE u_id in (SELECT u_id FROM `users_orders` WHERE date(date)=curdate()  and status is NULL) and network='P' ";
        $result=mysqli_query($db,$sql); 
        $totalTodayActivePartners=mysqli_num_rows($result); 

    $sql="SELECT distinct u_id from users WHERE u_id in (SELECT u_id FROM `users_orders` WHERE date(date)=curdate() and status is NULL) and network='N' ";
        $result=mysqli_query($db,$sql); 
        $totalTodayActiveCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT distinct u_id from users WHERE u_id in (SELECT u_id FROM `users_orders` WHERE date(date)=curdate() and status is NULL) and network='C' ";
        $result=mysqli_query($db,$sql); 
        $totalTodayActiveComminity=mysqli_num_rows($result); 


    $todayAverage = ($totalTodayPartners + 
                     $totalTodayCivilSociety +
                     $totalTodayComminity ) / 3 ;


// Violations Today
    $sql="SELECT * FROM `request_violations` where any_kind_abuse ='Yes' and  date(date)= CURDATE()";
        $result=mysqli_query($db,$sql); 
        $totalTodayViolations=mysqli_num_rows($result); 

// Violations Yesterday
    $sql="SELECT * FROM `request_violations` where any_kind_abuse ='Yes' and  date(date)= curdate() - interval 1 day";
        $result=mysqli_query($db,$sql); 
        $totalYesterdayViolations=mysqli_num_rows($result); 

// Violations Last Week
    $sql="SELECT * FROM `request_violations` WHERE any_kind_abuse ='Yes' and date(date) BETWEEN SUBDATE(CURDATE(), 7) AND CURDATE()";
        $result=mysqli_query($db,$sql); 
        $totalLastWeekViolations=mysqli_num_rows($result);




// Stats on yesterday  
    $sql="SELECT * FROM `request_by_partner` WHERE date(date) = curdate() - interval 1 day";
        $result=mysqli_query($db,$sql); 
        $totalYesterdayRequests=mysqli_num_rows($result);         

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 1 day and network='P' ";
        $result=mysqli_query($db,$sql); 
        $totalYesterdayPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 1 day and network='N' ";
        $result=mysqli_query($db,$sql); 
        $totalYesterdayCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 1 day and network='C' ";
        $result=mysqli_query($db,$sql); 
        $totalYesterdayComminity=mysqli_num_rows($result); 

    $yesterdayAverage = ($totalYesterdayPartners + 
                     $totalYesterdayCivilSociety +
                     $totalYesterdayComminity ) / 3 ;


// Stats on 2 days before  
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)=curdate() - interval 2 day";
        $result=mysqli_query($db,$sql); 
        $total2DaysRequests=mysqli_num_rows($result);         

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 2 day and network='P' ";
        $result=mysqli_query($db,$sql); 
        $total2DaysPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 2 day and network='N' ";
        $result=mysqli_query($db,$sql); 
        $total2DaysCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 2 day and network='C' ";
        $result=mysqli_query($db,$sql); 
        $total2DaysComminity=mysqli_num_rows($result); 

    $twoDaysAgoAverage = ($total2DaysComminity + 
                     $total2DaysCivilSociety +
                     $total2DaysPartners ) / 3 ;


// Stats on 3 days before 
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)=curdate() - interval 3 day";
        $result=mysqli_query($db,$sql); 
        $total3DaysRequests=mysqli_num_rows($result);         

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 3 day and network='P' ";
        $result=mysqli_query($db,$sql); 
        $total3DaysPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 3 day and network='N' ";
        $result=mysqli_query($db,$sql); 
        $total3DaysCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 3 day and network='C' ";
        $result=mysqli_query($db,$sql); 
        $total3DaysComminity=mysqli_num_rows($result); 


    $threeDaysAgoAverage = ($total3DaysComminity + 
                     $total3DaysCivilSociety +
                     $total3DaysPartners ) / 3 ;

// Stats on 4 days before
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)=curdate() - interval 4 day";
        $result=mysqli_query($db,$sql); 
        $total4DaysRequests=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 4 day and network='P' ";
        $result=mysqli_query($db,$sql); 
        $total4DaysPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 4 day and network='N' ";
        $result=mysqli_query($db,$sql); 
        $total4DaysCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 4 day and network='C' ";
        $result=mysqli_query($db,$sql); 
        $total4DaysComminity=mysqli_num_rows($result); 

    $fourDaysAgoAverage = ($total4DaysComminity + 
                     $total4DaysCivilSociety +
                     $total4DaysPartners ) / 3 ;

// Stats on 5 days before
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)=curdate() - interval 5 day";
        $result=mysqli_query($db,$sql); 
        $total5DaysRequests=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 5 day and network='P' ";
        $result=mysqli_query($db,$sql); 
        $total5DaysPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 5 day and network='N' ";
        $result=mysqli_query($db,$sql); 
        $total5DaysCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 5 day and network='C' ";
        $result=mysqli_query($db,$sql); 
        $total5DaysComminity=mysqli_num_rows($result); 


    $fiveDaysAgoAverage = ($total5DaysComminity + 
                     $total5DaysCivilSociety +
                     $total5DaysPartners ) / 3 ;

// Stats on 6 days before
    $sql="SELECT * FROM `request_by_partner` WHERE date(date)=curdate() - interval 6 day";
        $result=mysqli_query($db,$sql); 
        $total6DaysRequests=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 6 day and network='P' ";
        $result=mysqli_query($db,$sql); 
        $total6DaysPartners=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 6 day and network='N' ";
        $result=mysqli_query($db,$sql); 
        $total6DaysCivilSociety=mysqli_num_rows($result); 

    $sql="SELECT * FROM `users` WHERE date(date)=curdate() - interval 6 day and network='C' ";
        $result=mysqli_query($db,$sql); 
        $total6DaysComminity=mysqli_num_rows($result);

    $sixDaysAgoAverage = ($total6DaysComminity + 
                     $total6DaysCivilSociety +
                     $total6DaysPartners ) / 3 ;

// Checking last week data
    $sql="SELECT * FROM `request_by_partner` WHERE date(date) BETWEEN SUBDATE(CURDATE(), 7) AND CURDATE() ";
        $result=mysqli_query($db,$sql); 
        $totalLastWeekSurveys=mysqli_num_rows($result);

    $sql="SELECT * FROM `users` WHERE network='P' and date(date) BETWEEN SUBDATE(CURDATE(), 7) AND CURDATE() ";
        $result=mysqli_query($db,$sql); 
        $totalLastWeekCCCPartners=mysqli_num_rows($result); 



    $sql="SELECT * FROM `users` WHERE network='N' and date(date) BETWEEN SUBDATE(CURDATE(), 7) AND CURDATE() ";
        $result=mysqli_query($db,$sql); 
        $totalLastWeekCivilSociety=mysqli_num_rows($result); 


    $sql="SELECT * FROM `users` WHERE network='C' and date(date) BETWEEN SUBDATE(CURDATE(), 7) AND CURDATE() ";
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



// Law Enforcement (Unlawful Detention)
    $sql="SELECT * FROM request_violations where lawEnforcementType = 'Unlawful detention' ";
        $result=mysqli_query($db,$sql); 
        $totalLEUnlawfulDetention=mysqli_num_rows($result);

    $sql="SELECT * FROM request_violations where lawEnforcementCond = 'Unlawful detention' ";
        $result=mysqli_query($db,$sql); 
        $totalOldLEUnlawfulDetention=mysqli_num_rows($result);

    $totalAllLEUnlawfulDetention = $totalLEUnlawfulDetention + $totalOldLEUnlawfulDetention;


// Law Enforcement (Assault)
    $sql="SELECT * FROM request_violations where lawEnforcementType = 'Assault' ";
        $result=mysqli_query($db,$sql); 
        $totalLEAssult=mysqli_num_rows($result);

    $sql="SELECT * FROM request_violations where lawEnforcementCond = 'Assault' ";
        $result=mysqli_query($db,$sql); 
        $totalOldLEAssult=mysqli_num_rows($result);

    $totalAllLEAssult = $totalLEAssult + $totalOldLEAssult;


// Law Enforcement (Inhuman Treatment)
    $sql="SELECT * FROM request_violations where lawEnforcementType = 'Inhuman treatment' ";
        $result=mysqli_query($db,$sql); 
        $totalLEInhumanTreatment=mysqli_num_rows($result);

    $sql="SELECT * FROM request_violations where lawEnforcementCond = 'Inhuman treatment' ";
        $result=mysqli_query($db,$sql); 
        $totalOldLELawEnforcement=mysqli_num_rows($result);

    $totalAllLEInhumanTreatment = $totalLEInhumanTreatment + $totalOldLELawEnforcement;


// Law Enforcement Totals
    $sql="SELECT * FROM request_violations where lawEnforcementCond = 'Yes' ";
        $result=mysqli_query($db,$sql); 
        $totalLawEnforcementYes=mysqli_num_rows($result);

    $totalLawEnforcementViolations = $totalAllLEInhumanTreatment + $totalAllLEAssult + $totalAllLEUnlawfulDetention + $totalLawEnforcementYes;


// Community Member Types (Discrimination)
    $sql="SELECT * FROM request_violations where communityMemberType = 'Discrimination' ";
        $result=mysqli_query($db,$sql); 
        $totalCMDiscrimination=mysqli_num_rows($result);

    $sql="SELECT * FROM request_violations where communityMemberCond = 'Discrimination' ";
        $result=mysqli_query($db,$sql); 
        $totalOldCMDiscrimination=mysqli_num_rows($result);

    $totalAllCMDiscrimination = $totalCMDiscrimination + $totalOldCMDiscrimination;


// Community Member (Stigma)
    $sql="SELECT * FROM request_violations where communityMemberType = 'Stigma' ";
        $result=mysqli_query($db,$sql); 
        $totalCMStigma=mysqli_num_rows($result);

    $sql="SELECT * FROM request_violations where communityMemberCond = 'Stigma' ";
        $result=mysqli_query($db,$sql); 
        $totalOldCMStigma=mysqli_num_rows($result);

    $totalAllCMStigma = $totalCMStigma + $totalOldCMStigma;


// Community Member Types (Domestic violence)
    $sql="SELECT * FROM request_violations where communityMemberType = 'Domestic violence' ";
        $result=mysqli_query($db,$sql); 
        $totalCMDomesticViolence=mysqli_num_rows($result);

    $sql="SELECT * FROM request_violations where communityMemberCond = 'Domestic violence' ";
        $result=mysqli_query($db,$sql); 
        $totalOldCMDomesticViolance=mysqli_num_rows($result);

    $totalAllCMDomesticViolance = $totalCMDomesticViolence + $totalOldCMDomesticViolance;        


// Community Member Totals
    $sql="SELECT * FROM request_violations where communityMemberCond = 'Yes' ";
        $result=mysqli_query($db,$sql); 
        $totalDomesticViolanceYes=mysqli_num_rows($result);

    $totalCommunityViolations = $totalAllCMDomesticViolance + $totalAllCMStigma + $totalAllCMDiscrimination + $totalDomesticViolanceYes;


// Health Professional Types (Discrimination)
    $sql="SELECT * FROM request_violations where healthCareType = 'Discrimination' ";
        $result=mysqli_query($db,$sql); 
        $totalHPDiscrimination=mysqli_num_rows($result);

    $totalAllHPDiscrimination = $totalHPDiscrimination;


// Health Professional Types (Disclosure of confidential information)
    $sql="SELECT * FROM request_violations where healthCareType = 'Disclosure of confidential information' ";
        $result=mysqli_query($db,$sql); 
        $totalHPDisclosure=mysqli_num_rows($result);

    $totalAllHPDisclosure = $totalHPDisclosure;


// Health Professional Types (Access to health care)
    $sql="SELECT * FROM request_violations where healthCareType = 'Access to health care' ";
        $result=mysqli_query($db,$sql); 
        $totalHPAccessToHealth=mysqli_num_rows($result);

    $totalAllHPAccessToHealth = $totalHPAccessToHealth;


// Health Professional Types (Access to Sexual and Reproductive health care)
    $sql="SELECT * FROM request_violations where healthCareType = 'Access to sexual and reproductive health' ";
        $result=mysqli_query($db,$sql); 
        $totalHPAccessToSexRepHealth=mysqli_num_rows($result);

    $totalAllHPAccessToSexRepHealth = $totalHPAccessToSexRepHealth;


// Health Professional Totals
    $sql="SELECT * FROM request_violations where healthCareCheck = 'Yes' ";
        $result=mysqli_query($db,$sql); 
        $totalhealthCareYes=mysqli_num_rows($result);

    $totalHealthCareViolations = $totalAllHPAccessToSexRepHealth + $totalAllHPAccessToHealth + $totalAllHPDisclosure + $totalAllHPDiscrimination + $totalhealthCareYes;


// Domestic Types (Assault)
    $sql="SELECT * FROM request_violations where domesticType = 'Assault' ";
        $result=mysqli_query($db,$sql); 
        $totalDVAssult=mysqli_num_rows($result);

    $sql="SELECT * FROM request_violations where domesticCond = 'Assault' ";
        $result=mysqli_query($db,$sql); 
        $totalOldDVAssult=mysqli_num_rows($result);

    $totalAllDVAssult = $totalDVAssult + $totalOldDVAssult;


// Domestic Types (Abuse)
    $sql="SELECT * FROM request_violations where domesticType = 'Abuse' ";
        $result=mysqli_query($db,$sql); 
        $totalDVAbuse=mysqli_num_rows($result);


    $sql="SELECT * FROM request_violations where domesticCond = 'Abuse' ";
        $result=mysqli_query($db,$sql); 
        $totalOldDVAbuse=mysqli_num_rows($result);

    $totalAllDVAbuse = $totalDVAbuse + $totalOldDVAbuse;


// Domestic Types (Discrimination)
    $sql="SELECT * FROM request_violations where domesticType = 'Discrimination' ";
        $result=mysqli_query($db,$sql); 
        $totalDVDiscrimination=mysqli_num_rows($result);


    $sql="SELECT * FROM request_violations where domesticCond = 'Discrimination' ";
        $result=mysqli_query($db,$sql); 
        $totalOldDVDiscrimination=mysqli_num_rows($result);

    $totalAllDVDiscrimination = $totalDVDiscrimination + $totalOldDVDiscrimination;


// Domestic Types Totals

    $sql="SELECT * FROM request_violations where domesticCond = 'Yes' ";
        $result=mysqli_query($db,$sql); 
        $totalDomesticYes=mysqli_num_rows($result);

    $totalGBViolations = $totalAllDVDiscrimination + $totalAllDVAbuse + $totalAllDVAssult + $totalDomesticYes;


// Total Violations
    $totalViolations = $totalGBViolations + $totalHealthCareViolations + $totalCommunityViolations + $totalLawEnforcementViolations;


// Total 'Yes' Violations
    $sql="SELECT * FROM request_violations where any_kind_abuse = 'Yes' ";
        $result=mysqli_query($db,$sql); 
        $totalYesViolations=mysqli_num_rows($result);

// Total 'Un-Specified' Violations
    $sql="SELECT * FROM `request_violations` WHERE `any_kind_abuse`='Yes' and `lawEnforcementCond`='None' and `communityMemberCond`='None' and `domesticCond`='None' and `healthCareCheck`='No' ";
        $result=mysqli_query($db,$sql); 
        $totalUnspecifiedViolations=mysqli_num_rows($result);


// total 'Specified' violations
    $totalSpecifiedViolation = $totalYesViolations - $totalUnspecifiedViolations;

// Violations by province
    $sql="SELECT * from request_by_partner where provice='Gauteng' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes') ";
        $result=mysqli_query($db,$sql); 
        $totalViolationsGauteng=mysqli_num_rows($result);    

    $sql="SELECT * from request_by_partner where provice='Free State' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes') ";
        $result=mysqli_query($db,$sql); 
        $totalViolationsFreeState=mysqli_num_rows($result);  

    $sql="SELECT * from request_by_partner where provice='North West' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes') ";
        $result=mysqli_query($db,$sql); 
        $totalViolationsNorthWest=mysqli_num_rows($result);  

    $sql="SELECT * from request_by_partner where provice='Mpumalanga' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes') ";
        $result=mysqli_query($db,$sql); 
        $violationsMpumalanga=mysqli_num_rows($result);  

    $sql="SELECT * from request_by_partner where provice='Mpumlanga' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes') ";
        $result=mysqli_query($db,$sql); 
        $violationsMpumlanga=mysqli_num_rows($result); 

        
    $totalViolationsMpumalanga = $violationsMpumalanga + $violationsMpumlanga;
         

    $sql="SELECT * from request_by_partner where provice='Limpopo' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes')";
        $result=mysqli_query($db,$sql); 
        $totalViolationsLimpopo=mysqli_num_rows($result);  


    $sql="SELECT * from request_by_partner where provice='KwaZulu Natal' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes')";
        $result=mysqli_query($db,$sql); 
        $totalViolationsKwaZuluNatal=mysqli_num_rows($result);  

    $sql="SELECT * from request_by_partner where provice='Northern Cape' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes')";
        $result=mysqli_query($db,$sql); 
        $totalViolationsNorthernCape=mysqli_num_rows($result); 

    $sql="SELECT * from request_by_partner where provice='Eastern Cape' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes') ";
        $result=mysqli_query($db,$sql); 
        $totalViolationsEasternCape=mysqli_num_rows($result); 

    $sql="SELECT * from request_by_partner where provice='Western Cape' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes')  ";
        $result=mysqli_query($db,$sql); 
        $totalViolationsWesternCape=mysqli_num_rows($result); 

    $sql="SELECT * from request_by_partner where provice='Select Province' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes') ";
        $result=mysqli_query($db,$sql); 
        $NonSelectedViolation=mysqli_num_rows($result); 


    $sql="SELECT * from request_by_partner where provice=' ' and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes') ";
        $result=mysqli_query($db,$sql); 
        $NoSelectedViolation=mysqli_num_rows($result); 

    $totalNonSelectedViolation = $NoSelectedViolation + $NonSelectedViolation;

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