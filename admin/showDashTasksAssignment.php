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
            <div class="col-md-12 align-self-center">
                <h3 class="text-secondary">Task Assignments After Call Center Agent Verifications</h3> </div>
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


      <div class="card bg-gradient-x-info">
        <div class="card-content">
            <div class="row">

                <div class="col-md-3" style="color: #FEAA00">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-cutlery f-s-40 color-green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="showRequestsInProgress.php?id=food">
                                <h2 style="color: #FEAA00">
                                    <?php echo $totalAccessToFoodRequest;?>
                                </h2>
                                <p class="m-b-0" style="color: #FEAA00"># household with <br>Access To Food Need
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="color: #FEAA00">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-wrench f-s-40 color-green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="showRequestsInProgress.php?id=jobs">
                                <h2 style="color: #FEAA00">
                                    <?php echo $totalAccessJob;?>
                                </h2>
                                <p class="m-b-0" style="color: #FEAA00"># household with <br>Access To Jobs
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="color: #FEAA00">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-lightbulb-o f-s-40 color-green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="showRequestsInProgress.php?id=electricity">
                                <h2 style="color: #FEAA00">
                                    <?php echo $totalAccessToElectricity;?>
                                </h2>
                                <p class="m-b-0" style="color: #FEAA00"># household with <br>Access To Electricity
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="color: #FEAA00">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-medkit f-s-40 color-green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="showRequestsInProgress.php?id=medic">
                                <h2 style="color: #FEAA00">
                                    <?php echo $totalAccessToMedication;?>
                                </h2>
                                <p class="m-b-0" style="color: #FEAA00"># household with <br>Medical Needs
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="color: #FEAA00">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-id-badge f-s-40 color-green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="showRequestsInProgress.php?id=identitydoc">
                                <h2 style="color: #FEAA00">
                                    <?php echo $totalAccessIDDocuments;?>
                                </h2>
                                <p class="m-b-0" style="color: #FEAA00"># household with <br>Identification Card
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="color: #FEAA00">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-bed f-s-40 color-green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="showRequestsInProgress.php?id=blankets">
                                <h2 style="color: #FEAA00">
                                    <?php echo $totalAccessClothingBlankets;?>
                                </h2>
                                <p class="m-b-0" style="color: #FEAA00"># with Access To Blankets & Clothes
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="color: #FEAA00">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-internet-explorer f-s-40 color-green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="showRequestsInProgress.php?id=internet">
                                <h2 style="color: #FEAA00">
                                    <?php echo $totalAccessDataInternet;?>
                                </h2>
                                <p class="m-b-0" style="color: #FEAA00"># with Access To Internet
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

        <!--
                <div class="col-md-3" style="color: #0200FF">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-podcast  f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="#">
                                <h2 style="color: #0200FF">
                                    <?php  ?>
                                </h2>
                                <p class="m-b-0" style="color: #0200FF"># of </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

-->
            </div>
        </div>
    </div>

    <div class="col-md-12">
      <div class="card">
          <?php
            include 'progress_streams_need.php';
          ?>
      </div>
    </div>


<div class="row">

                <div class="col-md-6" style="color: #27D094">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-share-square-o f-s-40 color-green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="showRequestsStream.php?id=mobilization">
                                <h2 style="color: #27D094">
                                    <?php echo $totalAssignedSocialMobalization;?>
                                </h2>
                                <p class="m-b-0" style="color: #27D094"># of Requests Assigned <br>To Social Mobalization
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-md-6" style="color: #FF9149">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-users f-s-40" aria-hidden="true"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="showRequestsStream.php?id=humanright">
                                <h2 style="color: #FF9149">
                                    <?php echo $totalAssignedHumanRights;?>
                                </h2>
                                <p class="m-b-0" style="color: #FF9149"># of Requests Assigned <br>To Human Rights
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" style="color: #22A0F2">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-gavel f-s-40" aria-hidden="true"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="showRequestsStream.php?id=advocacy">
                                    <h2 style="color: #22A0F2">
                                        <?php echo $totalAssignedAdvocacy; ?>
                                    </h2>
                                    <p class="m-b-0" style="color: #22A0F2"># of Requests Assigned <br>To Advocacy
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" style="color: #FF4962">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-headphones f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="showRequestsStream.php?id=comms">
                                    <h2 style="color: #FF4962">
                                        <?php echo $totalAssignedComms;?>
                                    </h2>
                                    <p class="m-b-0" style="color: #FF4962"># of Requests Assigned <br>To Communications & Media
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
