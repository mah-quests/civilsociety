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
        <center>
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h3 class="text-secondary">
                        Household Requests : <i>Food / Clothing / Mask / Sanatizer </i>
                    </h3> 
                </div>
            </div>
        </center>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->

    <div class="row">
                   
        <div class="col-md-4" style="color: red">
            <div class="card p-20">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-bolt f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showHighAlertHouseHolds.php">
                        <h2 style="color: red">
                            <?php echo $highAlertFoodRules;?>
                        </h2>
                        <p class="m-b-0" style="color: red">High Alerts
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="col-md-4" style="color: #FF9149">
            <div class="card p-20">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-exclamation f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showMedAlertHouseHolds.php">
                        <h2 style="color: #FF9149">
                            <?php echo $medAlertFoodRules;?>
                        </h2>
                        <p class="m-b-0" style="color: #FF9149">Medium Alerts</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4" style="color: blue">
            <div class="card p-20">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-moon-o f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showLowAlertHouseHolds.php">
                        <h2 style="color: blue">
                            <?php echo $lowAlertFoodRules;?>
                        </h2>
                        <p class="m-b-0" style="color: blue">Low Alerts</p>
                        </a>
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
            <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Household Distributions:
              <div class="card-body text-center">
                <a href="showHighAlertHouseHolds.php">
                    <h1 class="display-7" style="color: green"> 
                        <?php echo $highAlertFoodRules;?>
                    </h1>
                    <span style="color: green"># High Alert Households</span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
              <div class="card-body text-center">
                <h1 class="display-7">
                    <?php echo $gautengFoodRule01;?>
                </h1>
                <span># in Gauteng</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
              <div class="card-body text-center">
                <h1 class="display-7">
                    <?php echo $freeStateCapeFoodRule01;?>
                </h1>
                <span># in Free State</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
              <div class="card-body text-center">
                <h1 class="display-7" > 
                    <?php echo $northWestFoodRule01;?>                    
                </h1>
                <span># in North West</span>
              </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
              <div class="card-body text-center">
                <h1 class="display-7"> 
                    <?php echo $MpumalangaFoodRule01;?>                     
                </h1>
                <span># in Mpumalanga</span>
              </div>
            </div> 

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
              <div class="card-body text-center">
                <h1 class="display-7"> 
                    <?php echo $kwazuluNatalFoodRule01;?>
                </h1>
                <span># in KwaZulu Natal</span>
              </div>
            </div>  

            <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
              <div class="card-body text-center">
                <h1 class="display-7">                      
                </h1>
                <span></span>
              </div>
            </div>   

            <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
              <div class="card-body text-center">
                <h1 class="display-7"> 
                    <?php echo $limpopoFoodRule01;?>                      
                </h1>
                <span># in Limpopo</span>
              </div>
            </div>  

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
              <div class="card-body text-center">
                <h1 class="display-7"> 
                    <?php echo $westernCapeFoodRule01;?>                    
                </h1>
                <span># in Western Cape</span>
              </div>
            </div> 
 

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
              <div class="card-body text-center">
                <h1 class="display-7"> 
                    <?php echo $northernCapeFoodRule01;?>
                </h1>
                <span># in Northern Cape</span>
              </div>
            </div>  
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
              <div class="card-body text-center">
                <h1 class="display-7"> 
                    <?php echo $easternCapeFoodRule01;?>                    
                </h1>
                <span># in Eastern Cape</span>
              </div>
            </div> 
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
              <div class="card-body text-center">
                <h1 class="display-7" style="color: red"> 
                    <?php echo $noProvinceFoodRule01;?>
                </h1>
                <span style="color: red"># Unallocated</span>
              </div>
            </div>                                    
          </div>
        </div>
      </div>
    </div>
  </div>

<br><br>

        <center>
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h3 class="text-secondary">
                        Household Requests : <i>Shelter</i>
                    </h3> 
                </div>
            </div>
        </center>


    <div class="row">
                   
        <div class="col-md-4" style="color: red">
            <div class="card p-20">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-female f-s-40"></i></span>
                        <span><i class="fa fa-male f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showHighAlertGBV.php">
                        <h2 style="color: red">
                            <?php echo $totalAllDVAbuse;?>
                        </h2>
                        <p class="m-b-0" style="color: red">
                            Gender Based Violance
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="col-md-4" style="color: red">
            <div class="card p-20">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-venus-mars f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showHighAlertLGBTQ.php">
                        <h2 style="color: red">
                            <?php echo $totalCommunityViolations;?>
                        </h2>
                        <p class="m-b-0" style="color: red">
                            LGBTQ+ Community Violations
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4" style="color: red">
            <div class="card p-20">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-ambulance f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showHighAlertSymptoms.php">
                        <h2 style="color: red">
                            <?php echo $hiAlertCOVIDSymptoms;?>
                        </h2>
                        <p class="m-b-0" style="color: red">
                            People with COVID-19 Symptoms
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br><br>

        <center>
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h3 class="text-secondary">
                        Household Requests : <i>Medical Attention</i>
                    </h3> 
                </div>
            </div>
        </center>


    <div class="row">
                   
        <div class="col-md-4" style="color: red">
            <div class="card p-20">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-heartbeat f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showHighAlertMedicalAttention.php">
                        <h2 style="color: red">
                            <?php echo $hiAlertMedication;?>
                        </h2>
                        <p class="m-b-0" style="color: red">High Alerts
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="col-md-4" style="color: #FF9149">
            <div class="card p-20">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-stethoscope f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showMedAlertMedicalAttention.php">
                        <h2 style="color: #FF9149">
                            <?php echo $mediumAlertSymptomsAndFrontLine;?>
                        </h2>
                        <p class="m-b-0" style="color: #FF9149">Medium Alerts</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4" style="color: blue">
            <div class="card p-20">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-medkit f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="#.php">
                        <h2 style="color: blue">
                            <?php echo $null;?>
                        </h2>
                        <p class="m-b-0" style="color: blue">Low Alerts</p>
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
