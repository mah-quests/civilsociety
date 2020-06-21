<?php
include_once 'header_admin.php';
?>

<?php
include("../connection/connect.php");
include("../connection/dataCollection.php");

error_reporting(0);
session_start();

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
                        include 'household_health.php';
                      ?>
                  </div>
                </div>


            <button type="button" onclick="window.location.href = 'showDashRequestsOverview.php';" class="btn btn-secondary btn-lg btn-block">
                Back
            </button>

        <!-- End PAge Content -->
        </div>
    <!-- End Container fluid  -->  
    </div>  
</div>  


<?php

include_once 'footer.php';

?>					
