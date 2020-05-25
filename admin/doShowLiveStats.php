<?php
include_once 'header_admin.php';
include("../connection/connect.php");
include("../connection/dataCollection.php");
error_reporting(0);
session_start();
?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-secondary">
                        Live Stats
                    </h3> 
                </div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        
                       
                        <div class="card">

<div align="center">
    <h2>
        Today's Stats
    </h2>
</div>


    <div class="row">
                   
        <div class="col-md-3" style="color: #D9AA20">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-pencil-square-o f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showTodayRequests.php">
                        <h2 style="color: #D9AA20">
                            <?php echo $totalTodayRequests;?>
                        </h2>
                        <p class="m-b-0" style="color: #D9AA20"># of household<br>requests
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="col-md-3" style="color: #30B8E4">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-globe f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showTodayCCCAgents.php">
                        <h2 style="color: #30B8E4">
                            <?php echo $totalTodayPartners;?>
                        </h2>
                        <p class="m-b-0" style="color: #30B8E4"># of CCC <br>Agents Registered</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3" style="color: #880120">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-university f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showTodayCivilSocietyAgents.php">
                        <h2 style="color: #880120">
                            <?php echo $totalTodayCivilSociety;?>
                        </h2>
                        <p class="m-b-0" style="color: #880120"># of Civil Society <br>Agents Registered</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3" style="color: #4B5776">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle"> 
                        <span><i class="fa fa-hospital-o f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showTodayCommunityAgents.php">
                        <h2 style="color: #4B5776">
                            <?php echo $totalTodayComminity; ?>
                        </h2>
                        <p class="m-b-0" style="color: #4B5776"># of Community Members Registered</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
      <div class="card">
          <?php 
            include 'stats_graphs.php';
          ?>
      </div>
    </div>

<div align="center">
    <h4>
        Last Week Stats
    </h4>
</div>

    <div class="row">
                   
        <div class="col-md-3" style="color: #D9AA20">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-pencil-square-o f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showLastWeekRequests.php">
                        <h2 style="color: #D9AA20">
                            <?php echo $totalLastWeekSurveys;?>
                        </h2>
                        <p class="m-b-0" style="color: #D9AA20"># of household<br>requests
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="col-md-3" style="color: #30B8E4">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-globe f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showLastWeekCCCAgents.php">
                        <h2 style="color: #30B8E4">
                            <?php echo $totalLastWeekCCCPartners;?>
                        </h2>
                        <p class="m-b-0" style="color: #30B8E4"># of CCC <br>Agents Registered</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3" style="color: #880120">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-university f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showLastWeekCivilSocietyAgents.php">
                        <h2 style="color: #880120">
                            <?php echo $totalLastWeekCivilSociety;?>
                        </h2>
                        <p class="m-b-0" style="color: #880120"># of Civil Society <br>Agents Registered</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3" style="color: #4B5776">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle"> 
                        <span><i class="fa fa-hospital-o f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showLastWeekCommunityAgents.php">
                        <h2 style="color: #4B5776">
                            <?php echo $totalLastWeekCommunity; ?>
                        </h2>
                        <p class="m-b-0" style="color: #4B5776"># of Community Members Registered</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>                            

                      
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
			

<?php

include_once 'footer.php';

?>  			