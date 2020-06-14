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
                <h3 class="text-secondary">Overall Perfomance (cont)</h3> 
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">


                <div class="col-md-12">
                  <div class="card">
                      <?php 
                        include 'household_employment.php';
                      ?>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="card">

                    <div class="row">
                        <div class="col-md-3" style="color: #3366CC">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="fa fa-television f-s-40 color-green"></i></span>
                                    </div>
                                    <div class="media-body media-text-right">
                                        <h2 style="color: #3366CC">
                                            <?php echo $totalPeopleEmployed ?>
                                        </h2>
                                        <p class="m-b-0" style="color: #3366CC"># of people still employed
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                         <div class="col-md-3" style="color: #119618">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="fa fa-credit-card  f-s-40" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="media-body media-text-right">
                                        <h2 style="color: #119618">
                                            <?php echo $totalReceivingIncome;?>
                                        </h2>
                                        <p class="m-b-0" style="color: #119618"># still receving their income monthly
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3" style="color: #DC3912">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle">
                                        <span><i class="fa fa-frown-o f-s-40"></i></span>
                                    </div>
                                    <div class="media-body media-text-right">
                                        <h2 style="color: #DC3912">
                                            <?php echo $totalPeopleLostEmployment ?>
                                        </h2>
                                        <p class="m-b-0" style="color: #DC3912"># of people who lost their jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3" style="color: #990199">
                            <div class="card p-30">
                                <div class="media">
                                    <div class="media-left meida media-middle"> 
                                        <span><i class="fa fa-child f-s-40" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="media-body media-text-right">
                                        <h2 style="color: #990199">
                                            <?php echo $totalPeopleSocialGrants ?>
                                        </h2>
                                        <p class="m-b-0" style="color: #990199"># of people who are on social grants</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
                </div>


                <div class="col-md-12">
                  <div class="card">
                      <?php 
                        include 'people_with_disabilities.php';
                      ?>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="card">
                      <?php 
                        include 'human_rights_household_responses.php';
                      ?>
                  </div>
                </div>


            <button type="button" onclick="window.location.href = 'showDashRequestsOverviewHealth.php';" class="btn btn-primary btn-lg btn-block">
                Health Summary
            </button>

            <button type="button" onclick="window.location.href = 'showDashRequestsOverview.php';" class="btn btn-secondary btn-lg btn-block">
                Back
            </button>

        <!-- End PAge Content -->
        </div>
    <!-- End Container fluid  -->  
    </div>  
</div>  


<?php

}

include_once 'footer.php';

?>					
