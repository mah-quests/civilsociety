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
                <h3 class="text-secondary">Call Center Agents</h3> </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->

    <div class="row">

         <div class="col-md-6" style="color: #717077">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-address-card-o f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="doShowAllRequests.php">
                        <h2 style="color: #717077">
                            <?php echo $totalResponses;?>
                        </h2>
                        <p class="m-b-0" style="color: #717077"># of requests <br>made</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="color: green">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-list-ul f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showUnProcessedRequests.php">
                        <h2 style="color: green">
                            <?php echo $totalUnProcessed;?>
                        </h2>
                        <p class="m-b-0" style="color: green"># of of Unprocessed <br> Requests</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="color: #BF8F00">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-check-square-o  f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="#work-breakdown">
                        <h2 style="color: #BF8F00">
                            <?php echo $totalResponses - $totalUnProcessed;?>
                        </h2>
                        <p class="m-b-0" style="color: #BF8F00"># of of In-Progress, <br> Resolved or Rejected </p>
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
                Surveys across provinces:
                <br><br>
              <div class="card-body text-center">
                <a href="doShowAllRequests.php">
                    <h1 class="display-4" style="color: green">
                        <?php echo $totalResponses;?>
                    </h1>
                    <span style="color: green"># Total Surveys</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br><br>
              <div class="card-body text-center">
                <a href="showProvinceRequests.php?id=gauteng">
                    <h1 class="display-5">
                        <?php echo $totalGauteng;?>
                    </h1>
                    <span># in Gauteng</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br><br>
              <div class="card-body text-center">
                <a href="showProvinceRequests.php?id=freestate">
                <h1 class="display-5">
                    <?php echo $totalFreeState;?>
                </h1>
                <span># in Free State</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                <br><br>
              <div class="card-body text-center">
                <a href="showProvinceRequests.php?id=northwest">
                    <h1 class="display-5" >
                        <?php echo $totalNorthWest;?>
                    </h1>
                    <span># in North West</span>
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
                <a href="showProvinceRequests.php?id=mpumalanga">
                    <h1 class="display-5">
                        <?php echo $totalMpumalanga;?>
                    </h1>
                    <span># in Mpumalanga</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                <a href="showProvinceRequests.php?id=limpopo">
                    <h1 class="display-5">
                        <?php echo $totalLimpopo;?>
                    </h1>
                    <span># in Limpopo</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                <a href="showProvinceRequests.php?id=kzn">
                    <h1 class="display-5">
                        <?php echo $totalKZN;?>
                    </h1>
                    <span># in KwaZulu Natal</span>
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
                <a href="showProvinceRequests.php?id=northerncape">
                    <h1 class="display-5">
                        <?php echo $totalNorthernCape;?>
                    </h1>
                    <span># in Northern Cape</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <a href="showProvinceRequests.php?id=easterncape">
                    <h1 class="display-5">
                        <?php echo $totalEasternCape;?>
                    </h1>
                    <span># in Eastern Cape</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <a href="showProvinceRequests.php?id=westerncape">
                    <h1 class="display-5">
                        <?php echo $totalWesternCape;?>
                    </h1>
                    <span># in Western Cape</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <a href="showProvinceRequests.php?id=unallocated">
                    <h1 class="display-5" style="color: red">
                        <?php echo $totalNoProvince; ?>
                    </h1>
                    <span style="color: red"># Unallocated</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

        <div class="col-md-3" style="color: red">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-calendar-times-o f-s-60 color-red"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showUnProcessedRequests.php">
                        <h2 style="color: red">
                            <?php echo $totalAfterMonth;?>
                        </h2>
                        <p class="m-b-0" style="color: red"># Unprocessed Requests <b><br>Up To More<br> Than A Month </b>
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

         <div class="col-md-3" style="color: orange">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-calendar-plus-o f-s-60" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showInProgressRequests.php">
                        <h2 style="color: orange">
                            <?php echo $totalThirdWeekToMonth;?>
                        </h2>
                        <p class="m-b-0" style="color: orange"># Unprocessed Requests <br><b>Up To Three Weeks Ago </b>
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="color: #F0C300">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-calendar-minus-o f-s-60" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showCompletedRequests.php">
                            <h2 style="color: #F0C300">
                                <?php echo $totalOneWeekToThree; ?>
                            </h2>
                            <p class="m-b-0" style="color: #F0C300"># Unprocessed Requests<br><b> Made Up To<br> Last Weeks </b>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="color: #514C00">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-calendar f-s-60"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showRejectedRequests.php">
                            <h2 style="color: #514C00">
                                <?php echo $totalThreeDaysToWeek;?>
                            </h2>
                            <p class="m-b-0" style="color: #514C00"># Unprocessed Requests <br><b>Made Up To <br>3 days ago </b>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

     </div>


    <div class="col-md-12">
      <div class="card">
          <?php
            include 'household_progress_chart.php';
          ?>
      </div>
    </div>


  <div class="row" id="work-breakdown">

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

              <div class="row" style="color: #FF9149">
                <div class="col-12" >
                  <div class="card bg-gradient-x-info">
                    <div class="card-content">
                      <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                            In Progress:
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalBeingProcessed;?>
                            </h1>
                            <span># Total Households</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalGautengProgress;?>
                            </h1>
                            <span># in Gauteng</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalFreeStateProgress;?>
                            </h1>
                            <span># in Free State</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7" >
                                <?php echo $totalNorthWestProgress;?>
                            </h1>
                            <span># in North West</span>
                          </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalMpumalangaProgress;?>
                            </h1>
                            <span># in Mpumalanga</span>
                          </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalKZNCProgress;?>
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
                                <?php echo $totalLimpopoProgress;?>
                            </h1>
                            <span># in Limpopo</span>
                          </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalWesternCapeProgress;?>
                            </h1>
                            <span># in Western Cape</span>
                          </div>
                        </div>


                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalNorthernCapeProgress;?>
                            </h1>
                            <span># in Northern Cape</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalEasternCapeProgress;?>
                            </h1>
                            <span># in Eastern Cape</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7" >
                                <?php echo $totalNoProvinceProgress;?>
                            </h1>
                            <span># No Selected Province</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row" style="color: #22A0F2">
                <div class="col-12" >
                  <div class="card bg-gradient-x-info">
                    <div class="card-content">
                      <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                            Processed or Rejected:
                          <div class="card-body text-center">
                            <h1 class="display-7" >
                                <?php echo $totalClosed + $totalRejected;?>
                            </h1>
                            <span># Total Households</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalGautengRejCls;?>
                            </h1>
                            <span># in Gauteng</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalFreeStateRejCls;?>
                            </h1>
                            <span># in Free State</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7" >
                                <?php echo $totalNorthWestRejCls;?>
                            </h1>
                            <span># in North West</span>
                          </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalMpumalangaRejCls;?>
                            </h1>
                            <span># in Mpumalanga</span>
                          </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalKZNCRejCls;?>
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
                                <?php echo $totalLimpopoRejCls;?>
                            </h1>
                            <span># in Limpopo</span>
                          </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalWesternCapeRejCls;?>
                            </h1>
                            <span># in Western Cape</span>
                          </div>
                        </div>


                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalNorthernCapeRejCls;?>
                            </h1>
                            <span># in Northern Cape</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalEasternCapeRejCls;?>
                            </h1>
                            <span># in Eastern Cape</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7" >
                                <?php echo $totalNoProvinceRejCls;?>
                            </h1>
                            <span># No Selected Province</span>
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
    </div>

<?php
}

include_once 'footer.php';

?>
