<?php
include_once 'header_admin.php';
?>

<?php
include("../connection/connect.php");
include("../connection/dataCollection.php");
error_reporting(0);
session_start();

if (empty($_SESSION["adm_id"])) {
  header('location:login.php');
} else {
?>
  <!-- Page wrapper  -->
  <div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h3 class="text-secondary">Communication & Public Awareness Dashboard</h3>
      </div>
    </div>



    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
      <!-- Start Page Content -->

      
    
      <!--total number of people with chronic illnesses -->
        <div class="row" >
            <div class="col-12" >
              <div class="card bg-gradient-x-info">
                <div class="card-content">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                        People with Chronic Illnesses:
                        <br><br>
                      <div class="card-body text-center">
                            <h1 class="display-4" style="color: green">
                                <?php echo $totalChronicPatients;?>
                            </h1>
                            <span style="color: green"># Total Chronic Patients</span>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                        <br><br>
                      <div class="card-body text-center">
                        <a href="showChronicPerProvince.php?id=gauteng">
                            <h1 class="display-5">
                                <?php echo $totalChronicGauteng;?>
                            </h1>
                            <span># in Gauteng</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                        <br><br>
                      <div class="card-body text-center">
                        <a href="showChronicPerProvince.php?id=mpumalanga">
                        <h1 class="display-5">
                            <?php echo $totalChronicMpumalanga; ?>
                        </h1>
                        <span># in Mpumalanga</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                        <br><br>
                      <div class="card-body text-center">
                        <a href="showChronicPerProvince.php?id=limpopo">
                            <h1 class="display-5" >
                                <?php echo $totalChronicLimpopo;?>
                            </h1>
                            <span># in Limpopo</span>
                        </a>
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
                        <a href="showChronicPerProvince.php?id=kzn">
                            <h1 class="display-5">
                                <?php echo $totalChronicKwaZuluNatal; ?>
                            </h1>
                            <span># in Kwazulu-Natal</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                    <br>
                      <div class="card-body text-center">
                        <a href="showChronicPerProvince.php?id=westerncape">
                            <h1 class="display-5">
                                <?php echo $totalChronicWesternCape; ?>
                            </h1>
                            <span># in Western Cape</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                    <br>
                      <div class="card-body text-center">
                        <a href="showChronicPerProvince.php?id=easterncape">
                            <h1 class="display-5">
                                <?php echo $totalChronicEasternCape; ?>
                            </h1>
                            <span># in Eastern Cape</span>
                        </a>
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
                        <a href="showChronicPerProvince.php?id=northerncape">
                            <h1 class="display-5">
                                <?php echo $totalChronicNorthernCape; ?>
                            </h1>
                            <span># in Northern Cape</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                    <br><br>
                      <div class="card-body text-center">
                        <a href="showChronicPerProvince.php?id=freestate">
                            <h1 class="display-5">
                                <?php echo $totalChronicFreeState; ?>
                            </h1>
                            <span># in Free State</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                    <br><br>
                      <div class="card-body text-center">
                        <a href="showChronicPerProvince.php?id=northwest">
                            <h1 class="display-5">
                                <?php echo $totalChronicNorthWest; ?>
                            </h1>
                            <span># in North West</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                    <br><br>
                      <div class="card-body text-center">
                        <a href="showChronicPerProvince.php?id=unallocated">
                            <h1 class="display-5" style="color: red">
                                <?php echo $totalChronicNoProvince; ?>
                            </h1>
                            <span style="color: red"># Unallocated Province</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


    <div class="row">

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

    </div>

      <!-- End PAge Content -->
    <!-- End Container fluid  -->
  </div>

<?php
}

include_once 'footer.php';

?>