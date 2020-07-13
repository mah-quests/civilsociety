<?php
include_once 'header_admin.php';
?>

<?php
include("../connection/connect.php");
include("../connection/dataCollection.php");
include("../connection/sp-dataCollection.php");
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
            <div class="col-md-12 align-self-center">
                <h3 class="text-secondary"><i>Comms... telling a story</i></h3>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->


  <div class="row" >
    <div class="col-12" >
      <div class="card bg-gradient-x-info">
        <div class="card-content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Household Surverys:
                <br><br>
              <div class="card-body text-center">
                    <h1 class="display-5" style="color: green">
                        <?php echo $totalSPResponses;?>
                    </h1>
                    <span style="color: green"># Total Surveys</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center">
                    <h1 class="display-5">
                        <?php echo $totalSPGauteng;?>
                    </h1>
                    <span># in Gauteng</span>
                
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center">
                
                <h1 class="display-5">
                    <?php echo $totalSPKZN;?>
                </h1>
                <span># in KwaZulu Natal</span>
                
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                <br>
              <div class="card-body text-center">
                
                    <h1 class="display-5" >
                        <?php echo $totalSPEasternCape;?>
                    </h1>
                    <span># in Eastern Cape</span>
                
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                <br>
              <div class="card-body text-center">
                
                    <h1 class="display-5">
                        <?php echo $totalSPWesternCape;?>
                    </h1>
                    <span># in Western Cape</span>
                
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
                Agents Across Provinces:
                <br><br>
              <div class="card-body text-center">
                
                    <h1 class="display-5" style="color: green">
                        <i><?php echo $AllSPRegisteredAgents;?></i>
                    </h1>
                
                <span style="color: green"># Total Agents Registered</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center">
                
                    <h1 class="display-5">
                        <i><?php echo $totalSPAgentsGauteng;?></i>
                    </h1>
                    <span># in Gauteng</span>
                
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center">
                
                    <h1 class="display-5">
                        <i><?php echo $totalSPAgentsKZN;?></i>
                    </h1>
                    <span># in KwaZulu Natal</span>
                
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                <br>
              <div class="card-body text-center">
                
                    <h1 class="display-5" >
                        <i><?php echo $totalSPAgentsEasternCape;?></i>
                    </h1>
                    <span># in Eastern Cape</span>
                
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                
                    <h1 class="display-5">
                        <i><?php echo $totalCapeTownWesternCape;?></i>
                    </h1>
                    <span># in Western Cape</span>
                
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
                        
                        <h2 style="color: #27D094">
                            <i><?php echo $totalSPUnProcessed;?></i>
                        </h2>
                        <p class="m-b-0" style="color: #27D094"># of Unprocessed <br>Requests Made
                        </p>
                        
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
                        
                        <h2 style="color: #FF9149">
                            <i><?php echo $totalSPBeingProcessed;?></i>
                        </h2>
                        <p class="m-b-0" style="color: #FF9149"># of Requests <br> Being Processed
                        </p>
                        
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
                        
                            <h2 style="color: #22A0F2">
                                <i><?php echo $totalSPClosed; ?></i>
                            </h2>
                            <p class="m-b-0" style="color: #22A0F2"># of Requests <br> Processed & Closed
                            </p>
                        
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
                        
                            <h2 style="color: #FF4962">
                                <i><?php echo $totalSPRejected;?></i>
                            </h2>
                            <p class="m-b-0" style="color: #FF4962"># of Requests <br> Rejected
                            </p>
                        
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
                People with Chronic Illnesses:
                <br><br>
              <div class="card-body text-center">

                    <h1 class="display-5" style="color: green">
                        <i><?php echo $spTotalChronicMedication;?></i>
                    </h1>

                <span style="color: green"># Total On Chronic Medication</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center">

                    <h1 class="display-5">
                        <i><?php echo $totalSPChronicMedicationGauteng;?></i>
                    </h1>
                    <span># in Gauteng</span>

              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center">

                    <h1 class="display-5">
                        <i><?php echo $totalSPChronicMedicationKZN;?></i>
                    </h1>
                    <span># in KwaZulu Natal</span>

              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                <br>
              <div class="card-body text-center">

                    <h1 class="display-5" >
                        <i><?php echo $totalSPChronicMedicationEC;?></i>
                    </h1>
                    <span># in Eastern Cape</span>

              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">

                    <h1 class="display-5">
                        <i><?php echo $totalSPChronicMedicationWC;?></i>
                    </h1>
                    <span># in Western Cape</span>

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
