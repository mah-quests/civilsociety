<?php
include_once 'header_admin.php';
?>

<?php
include("../connection/connect.php");
include("../connection/dataCollection.php");
error_reporting(0);
session_start();
if(empty($_SESSION["adm_id"]))
{
    header('location:login.php');
}
else
{
?>
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-secondary">Overall Perfomance</h3> </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->

    <div class="row">
                   
        <div class="col-md-3" style="color: #27D094">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-street-view f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="doShowAgents.php">
                        <h2 style="color: #27D094">
                            <?php echo $AllRegisteredAgents;?>
                        </h2>
                        <p class="m-b-0" style="color: #27D094"># of registered <br>agents
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="col-md-3" style="color: #FF9149">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-comments-o f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showAllRequests.php">
                        <h2 style="color: #FF9149">
                            <?php echo $totalResponses;?>
                        </h2>
                        <p class="m-b-0" style="color: #FF9149"># of requests <br>made</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3" style="color: #FF4962">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-user-md  f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="doShowActiveAgents.php">
                        <h2 style="color: #FF4962">
                            <?php echo $AllActiveAgents;?>
                        </h2>
                        <p class="m-b-0" style="color: #FF4962"># of active <br>agents currently</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3" style="color: #22A0F2">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle"> 
                        <span><i class="fa fa-building-o f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2 style="color: #22A0F2">
                            <?php echo $AllOrganizationsRegistered; ?>
                        </h2>
                        <p class="m-b-0" style="color: #22A0F2"># of active <br>organizations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <div class="row" >
    <div class="col-12" >
      <div class="card bg-gradient-x-info">
        <div class="card-content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Surveys across provinces:
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-4" style="color: green">
                    <?php echo $totalResponses;?>
                </h1>
                <span style="color: green"># Total Surveys</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-5">
                    <?php echo $totalGauteng;?>
                </h1>
                <span># in Gauteng</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-5">
                    <?php echo $totalFreeState;?>
                </h1>
                <span># in Free State</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-5" > 
                    <?php echo $totalNorthWest;?>                   
                </h1>
                <span># in North West</span>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                <h1 class="display-5">                    
                </h1>
                <span></span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalMpumalanga;?>                     
                </h1>
                <span># in Mpumalanga</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>               
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalLimpopo;?>                      
                </h1>
                <span># in Limpopo</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalKZN;?>
                </h1>
                <span># in KwaZulu Natal</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5" style="color: red">                   
                </h1>
                <span style="color: red"></span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalNorthernCape;?>
                </h1>
                <span># in Northern Cape</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalEasternCape;?>                   
                </h1>
                <span># in Eastern Cape</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalWesternCape;?>                   
                </h1>
                <span># in Western Cape</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5" style="color: red"> 
                    <?php echo $totalNoProvince; ?>                    
                </h1>
                <span style="color: red"># Unallocated</span>
              </div>
            </div>                                    
          </div>
        </div>
      </div>
    </div>
  </div>



    <div class="row">
                   
        <div class="col-md-3" style="color: #27D094">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-circle-o f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showUnProcessedRequests.php">
                        <h2 style="color: #27D094">
                            <?php echo $totalUnProcessed;?>
                        </h2>
                        <p class="m-b-0" style="color: #27D094"># of Unprocessed <br>Requests Made
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="col-md-3" style="color: #FF9149">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-circle-o-notch fa-spin f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showInProgressRequests.php">
                        <h2 style="color: #FF9149">
                            <?php echo $totalBeingProcessed;?>
                        </h2>
                        <p class="m-b-0" style="color: #FF9149"># of Requests <br> Being Processed 
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3" style="color: #22A0F2">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle"> 
                        <span><i class="fa fa-circle f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showCompletedRequests.php">
                            <h2 style="color: #22A0F2">
                                <?php echo $totalClosed; ?>
                            </h2>
                            <p class="m-b-0" style="color: #22A0F2"># of Requests <br> Processed & Closed
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="color: #FF4962">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-times f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showRejectedRequests.php">
                            <h2 style="color: #FF4962">
                                <?php echo $totalRejected;?>
                            </h2>
                            <p class="m-b-0" style="color: #FF4962"># of Requests <br> Rejected
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


        <!-- End PAge Content -->
        </div>
    <!-- End Container fluid  -->  
    </div>                  

<?php
}

include_once 'footer.php';

?>                  
