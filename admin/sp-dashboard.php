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
            <div class="col-md-12 align-self-center">
                <h3 class="text-secondary">Overall Solidarity Fund Project Perfomance</h3>
            </div>
        </div>
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <p>Could the Community Agents work in the following areas:<br>
                    - Buffalo City Metro, <br>
                    - Nelson Mandela Bay, <br>
                    - O.R. Tambo District, <br>
                    - Chris Hani District, in <b>Eastern Cape.</b> <br><br><br>

                   - Soweto, <br>
                   - Roodepoort, <br>
                   - Joburg inner city in <b>Gauteng.</b> <br><br><br>


                   - Ilembe and <br>
                   - eThekwini in <b>KwaZulu Natal</b>.<br>
                </p>
            </div>
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
                        <a href="sp-doShowAgents.php">
                        <h2 style="color: #27D094">
                            <?php echo $AllSPRegisteredAgents;?>
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
                        <a href="sp-doShowAllRequests.php">
                        <h2 style="color: #FF9149">
                            <?php echo $spTotalResponses;?>
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
                            <?php echo $AllSPActiveAgents;?>
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
                <a href="#">
                    <h1 class="display-4" style="color: green">
                        <?php echo $spTotalResponses;?>
                    </h1>
                    <span style="color: green"># Total Surveys</span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center">
                <a href="#">
                    <h1 class="display-5">
                        <?php echo $totalSPHouseholdsGauteng;?>
                    </h1>
                    <span># in Gauteng</span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br>
              <div class="card-body text-center">
                <a href="#">
                <h1 class="display-5">
                    <?php echo $totalSPHouseholdsKZN;?>
                </h1>
                <span># in KwaZulu Natal</span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                <br>
              <div class="card-body text-center">
                <a href="#">
                    <h1 class="display-5" >
                        <?php echo $totalSPHouseholdsEC;?>
                    </h1>
                    <span># in Eastern Cape</span>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                <br>
              <div class="card-body text-center">
                <a href="#">
                    <h1 class="display-5">
                        <?php echo $totalSPHouseholdsWC;?>
                    </h1>
                    <span># in Western Cape</span>
                </a>
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
                        <a href="#">
                        <h2 style="color: #27D094">
                            <?php echo $totalSPUnProcessed;?>
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
                        <a href="#">
                        <h2 style="color: #FF9149">
                            <?php echo $totalSPBeingProcessed;?>
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
                        <a href="#">
                            <h2 style="color: #22A0F2">
                                <?php echo $totalSPClosed; ?>
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
                        <a href="#">
                            <h2 style="color: #FF4962">
                                <?php echo $totalSPRejected;?>
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
