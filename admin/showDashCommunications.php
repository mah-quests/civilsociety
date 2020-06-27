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
      <div class="col-md-12 align-self-center">
        <h3 class="text-secondary">Communication & Public Awareness Dashboard</h3>
      </div>
    </div>

    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
      <!-- Start Page Content -->

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


      <div class="row">


        <div class="col-md-7">
          <div class="card">
            <?php
            include 'household_whatsapp_comms.php';
            ?>
          </div>
        </div>



        <div class="col-md-5">
          <div class="card" style="width: 500px; height: 540px;">
            <div class="table-responsive m-t-40">
              <table id="myTable" class="table table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>#</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $sql = "select * from request_by_partner where unique_code in (SELECT unique_code FROM request_medication_02 WHERE whatsappp_subscribe='Yes') ";

                  $query = mysqli_query($db, $sql);

                  if (!mysqli_num_rows($query) > 0) {
                    echo '<td colspan="7">
                            <center>
                                No User-Data!
                            </center>
                        </td>';
                  } else {
                    while ($rows = mysqli_fetch_array($query)) {


                      echo ' <tr>
                            <td>' . $rows['firstname'] . ' ' . $rows['lastname'] . ' </td>
                            <td>' . $rows['phone'] . '</td>
                            </tr>';
                    }
                  }

                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-4" style="color: #006600">
          <div class="card p-30">
            <div class="media">
              <div class="media-left meida media-middle">
                <span><i class="fa fa-bell-o f-s-40 color-green"></i></span>
              </div>
              <div class="media-body media-text-right">
                <a href="#">
                  <h2 style="color: #006600">
                    <?php echo $totalEnoughCOVIDInfo; ?>
                  </h2>
                  <p class="m-b-0" style="color: #006600"># of people with <br>enough COVID-19 info
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4" style="color: #FF0100">
          <div class="card p-30">
            <div class="media">
              <div class="media-left meida media-middle">
                <span><i class="fa fa-bell-slash-o f-s-40 color-green"></i></span>
              </div>
              <div class="media-body media-text-right">
                <a href="#">
                  <h2 style="color: #FF0100">
                    <?php echo $totalNotEnoughCOVIDInfo; ?>
                  </h2>
                  <p class="m-b-0" style="color: #FF0100"># of people with NOT<br>enough COVID-19 info
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4" style="color: #3366CC">
          <div class="card p-30">
            <div class="media">
              <div class="media-left meida media-middle">
                <span><i class="fa fa-print f-s-90"></i></span>
              </div>
              <div class="media-body media-text-right">
                <a href="printWhatsAppContactList.php">
                  <p class="m-b-0" style="color: #3366CC">
                    <br><br>
                    Download and Print List of People Wishing WhatsApp Contact
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="row">
        <div class="col-12">
          <div class="card bg-gradient-x-info">
            <div class="card-content">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                  Infomation Distribution In Provinces:
                  <br><br>
                  <div class="card-body text-center">
                    <h1 class="display-4" style="color: green">
                      <?php echo $totalEnoughCOVIDInfo; ?>
                    </h1>
                    <span style="color: green"># Total Household Responded 'Yes'</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                  <br><br>
                  <div class="card-body text-center">
                    <h1 class="display-5">
                      <?php echo $totalCOVIDInfoGauteng; ?>
                    </h1>
                    <span># in Gauteng</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                  <br><br>
                  <div class="card-body text-center">
                    <h1 class="display-5">
                      <?php echo $totalCOVIDInfoFreeState; ?>
                    </h1>
                    <span># in Free State</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                  <br><br>
                  <div class="card-body text-center">
                    <h1 class="display-5">
                      <?php echo $totalCOVIDInfoNorthWest; ?>
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
                      <?php echo $totalCOVIDInfoMpumalanga; ?>
                    </h1>
                    <span># in Mpumalanga</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                  <br>
                  <div class="card-body text-center">
                    <h1 class="display-5">
                      <?php echo $totalCOVIDInfoLimpopo; ?>
                    </h1>
                    <span># in Limpopo</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                  <br>
                  <div class="card-body text-center">
                    <h1 class="display-5">
                      <?php echo $totalCOVIDInfoKwaZuluNatal; ?>
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
                      <?php echo $totalCOVIDInfoNorthernCape; ?>
                    </h1>
                    <span># in Northern Cape</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                  <br><br>
                  <div class="card-body text-center">
                    <h1 class="display-5">
                      <?php echo $totalCOVIDInfoEasternCape; ?>
                    </h1>
                    <span># in Eastern Cape</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                  <br><br>
                  <div class="card-body text-center">
                    <h1 class="display-5">
                      <?php echo $totalCOVIDInfoWesternCape; ?>
                    </h1>
                    <span># in Western Cape</span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                  <br><br>
                  <div class="card-body text-center">
                    <h1 class="display-5" style="color: red">
                      <?php echo $totalCOVIDInfoNoProvince; ?>
                    </h1>
                    <span style="color: red"># Unallocated</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--total number of people with chronic illnesses -->
      <div class="card bg-gradient-x-info">
        <div class="card-content">
          <h4>People with Chronic Illnesses <?php echo $totalChronicPatients; ?></h4>
          <div class="row">
            <div class="col-md-3" style="color: #27D094">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <span><h2>GP</h2></span>
                  </div>
                  <div class="media-body media-text-right">
                    <a href="showChronicPerProvince.php?id=gauteng">
                      <h2 style="color: #27D094">
                        <?php echo $totalChronicGauteng; ?>
                      </h2>
                      <p class="m-b-0" style="color: #27D094"># in <br>Gauteng
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
                    <h2>MP</h2>
                  </div>
                  <div class="media-body media-text-right">
                    <a href="showChronicPerProvince.php?id=mpumalanga">
                      <h2 style="color: #FF9149">
                        <?php echo $totalChronicMpumalanga; ?>
                      </h2>
                      <p class="m-b-0" style="color: #FF9149"># in <br>Mpumalanga</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" style="color: #FF4962">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <h2>LP</h2>
                  </div>
                  <div class="media-body media-text-right">
                    <a href="showChronicPerProvince.php?id=limpopo">
                      <h2 style="color: #FF4962">
                        <?php echo $totalChronicLimpopo; ?>
                      </h2>
                      <p class="m-b-0" style="color: #FF4962"># in <br>Limpopo</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" style="color: #22A0F2">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <h2>NL</h2>
                  </div>
                  <div class="media-body media-text-right">
                    <a href="showChronicPerProvince.php?id=kzn">
                      <h2 style="color: #22A0F2">
                        <?php echo $totalChronicKwaZuluNatal; ?>
                      </h2>
                      <p class="m-b-0" style="color: #22A0F2"># in <br>Kwazulu-Natal</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3" style="color: #FF9149">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <h2>WC</h2>
                  </div>
                  <div class="media-body media-text-right">
                    <a href="showChronicPerProvince.php?id=westerncape">
                      <h2 style="color: #FF9149">
                        <?php echo $totalChronicWesternCape; ?>
                      </h2>
                      <p class="m-b-0" style="color: #FF9149"># in <br>Western Cape</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" style="color: #27D094">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <h2>EC</h2>
                  </div>
                  <div class="media-body media-text-right">
                    <a href="showChronicPerProvince.php?id=easterncape">
                      <h2 style="color: #27D094">
                        <?php echo $totalChronicEasternCape; ?>
                      </h2>
                      <p class="m-b-0" style="color: #27D094"># In <br>Eastern Cape
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
                    <h2>NC</h2>
                  </div>
                  <div class="media-body media-text-right">
                    <a href="showChronicPerProvince.php?id=northerncape">
                      <h2 style="color: #22A0F2">
                        <?php echo $totalChronicNorthernCape; ?>
                      </h2>
                      <p class="m-b-0" style="color: #22A0F2"># in <br>Northern Cape</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" style="color: #FF4962">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <h2>FS</h2>
                  </div>
                  <div class="media-body media-text-right">
                    <a href="showChronicPerProvince.php?id=freestate">
                      <h2 style="color: #FF4962">
                        <?php echo $totalChronicFreeState; ?>
                      </h2>
                      <p class="m-b-0" style="color: #FF4962"># In <br>Free State</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3" style="color: #22A0F2">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <h2>NW</h2>
                  </div>
                  <div class="media-body media-text-right">
                    <a href="showChronicPerProvince.php?id=northwest">
                      <h2 style="color: #22A0F2">
                        <?php echo $totalChronicNorthWest; ?>
                      </h2>
                      <p class="m-b-0" style="color: #22A0F2"># in <br>North West</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3" style="color: #22A0F2">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <h2>-</h2>
                  </div>
                  <div class="media-body media-text-right">
                    <a href="showChronicPerProvince.php?id=unallocated">
                      <h2 style="color: #22A0F2">
                        <?php echo $totalChronicNoProvince; ?>
                      </h2>
                      <p class="m-b-0" style="color: #22A0F2"># in <br>Unallocated Province</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <?php
            include 'household_infomation_breakdown.php';
            ?>
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