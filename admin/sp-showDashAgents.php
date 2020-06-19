<?php
include_once 'header_admin.php';
?>

<?php
include("../connection/connect.php");
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
            <div class="col-md-5 align-self-center">
                <h3 class="text-secondary">Agents Dashboard</h3> </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->

    <div class="row">

        <div class="col-md-6" style="color: #FEAA00">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-user-o f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="sp-doShowSPAgents.php">
                        <h2 style="color: #FEAA00">
                            <?php echo $AllSPRegisteredAgents;?>
                        </h2>
                        <p class="m-b-0" style="color: #FEAA00"># of registered <br>agents
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6" style="color: #0200FF">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-podcast  f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="sp-doShowSPActiveAgents.php">
                        <h2 style="color: #0200FF">
                            <?php echo $AllSPActiveAgents ?>
                        </h2>
                        <p class="m-b-0" style="color: #0200FF"># of active <br>agents currently</p>
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
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Agents Across Provinces:
                <br><br>
              <div class="card-body text-center">
                <a href="sp-doShowSPAgents.php">
                    <h1 class="display-4" style="color: green">
                        <?php echo $AllSPRegisteredAgents;?>
                    </h1>
                </a>
                <span style="color: green"># Total Agents Registered</span>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center">
                <a href="sp-printGautengAgents.php">
                    <h1 class="display-5">
                        <?php echo $totalSPAgentsGauteng;?>
                    </h1>
                    <span># in Gauteng</span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center">
                <a href="sp-printKZNAgents.php">
                    <h1 class="display-5">
                        <?php echo $totalSPAgentsKZN;?>
                    </h1>
                    <span># in KwaZulu Natal</span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                <br>
              <div class="card-body text-center">
                <a href="sp-printEasternCapeAgents.php">
                    <h1 class="display-5" >
                        <?php echo $totalSPAgentsEasternCape;?>
                    </h1>
                    <span># in Eastern Cape</span>
                </a>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                <a href="sp-printWesternCapeAgents.php">
                    <h1 class="display-5">
                        <?php echo $totalCapeTownWesternCape;?>
                    </h1>
                    <span># in Western Cape</span>
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
