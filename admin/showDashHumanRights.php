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
                <h3 class="text-secondary">Human Rights Dashboard</h3> </div>
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
                Various Violations Across Provinces:
                <br><br>
              <div class="card-body text-center">
                <a href="#list-of-violations">
                  <h1 class="display-4" style="color: green">
                      <?php echo $totalYesViolations;?>
                  </h1>
                  <span style="color: green"># Total Violations Reported</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br><br>
              <div class="card-body text-center">
                <a href="showProvinceViolations.php?id=gauteng">
                  <h1 class="display-5">
                      <?php echo $totalViolationsGauteng;?>
                  </h1>
                  <span># in Gauteng</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br><br>
              <div class="card-body text-center">
                <a href="showProvinceViolations.php?id=freestate">
                  <h1 class="display-5">
                      <?php echo $totalViolationsFreeState;?>
                  </h1>
                  <span># in Free State</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                <br><br>
              <div class="card-body text-center">
                <a href="showProvinceViolations.php?id=northwest">
                  <h1 class="display-5" > 
                      <?php echo $totalViolationsNorthWest;?>                   
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
                <a href="showProvinceViolations.php?id=mpumalanga">
                  <h1 class="display-5"> 
                      <?php echo $totalViolationsMpumalanga;?>                     
                  </h1>
                  <span># in Mpumalanga</span>
                </a>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>               
              <div class="card-body text-center">
                <a href="showProvinceViolations.php?id=limpopo">
                  <h1 class="display-5"> 
                      <?php echo $totalViolationsLimpopo;?>                      
                  </h1>
                  <span># in Limpopo</span>
                </a>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                <a href="showProvinceViolations.php?id=kzn">
                  <h1 class="display-5"> 
                      <?php echo $totalViolationsKwaZuluNatal;?>
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
                <a href="showProvinceViolations.php?id=northerncape">
                  <h1 class="display-5"> 
                      <?php echo $totalViolationsNorthernCape;?>
                  </h1>
                  <span># in Northern Cape</span>
                </a>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <a href="showProvinceViolations.php?id=easterncape">
                  <h1 class="display-5"> 
                      <?php echo $totalViolationsEasternCape;?>                   
                  </h1>
                  <span># in Eastern Cape</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <a href="showProvinceViolations.php?id=westerncape">
                  <h1 class="display-5"> 
                      <?php echo $totalViolationsWesternCape;?>                   
                  </h1>
                  <span># in Western Cape</span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <a href="showProvinceViolations.php?id=unallocated">
                  <h1 class="display-5" style="color: red"> 
                      <?php echo $totalNonSelectedViolation; ?>
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
                   
        <div class="col-md-3" style="color: #27D094">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-square-o f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showUnProcessedViolations.php">
                        <h2 style="color: #27D094">
                            <?php echo $totalUnProcessedViolations;?>
                        </h2>
                        <p class="m-b-0" style="color: #27D094"># of Unprocessed <br>Violations Made
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="col-md-3" style="color: #A5A101">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-spinner fa-spin f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showInProgressViolations.php">
                        <h2 style="color: #A5A101">
                            <?php echo $totalViolationsBeingProcessed;?>
                        </h2>
                        <p class="m-b-0" style="color: #A5A101"># of Violations <br> Being Processed 
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3" style="color: #640AA0">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle"> 
                        <span><i class="fa fa-square f-s-40" aria-hidden="true"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showCompletedViolations.php">
                            <h2 style="color: #640AA0">
                                <?php echo $totalViolationsClosed; ?>
                            </h2>
                            <p class="m-b-0" style="color: #640AA0"># of Violations Requests <br> Processed & Closed
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="color: #FC0E00">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-window-close-o f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="showRejectedViolations.php">
                            <h2 style="color: #FC0E00">
                                <?php echo $totalViolationsRejected;?>
                            </h2>
                            <p class="m-b-0" style="color: #FC0E00"># of Violation Requests <br> Rejected
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
              include 'human_rights_household_responses.php';
            ?>
        </div>
      </div>

      <div class="col-md-12">
        <div class="card">
            <?php 
              include 'household_violation_breakdown.php';
            ?>
        </div>
      </div>      

      <div class="col-md-12">
        <div class="card">
            <?php 
              include 'household_violation_breakdown_two.php';
            ?>
        </div>
      </div>


  <div class="card" id="list-of-violations">
      <div class="card-body">
          <h4 class="card-title">All Violation Recorded</h4>
       
          <div class="table-responsive m-t-40">
              <table id="myTable" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>Date</th>       
                          <th>Reference Number</th>   
                          <th>Address</th>
                          <th>status</th>        
                          <th>Municipality</th>
                          <th>Province</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                                           
<?php
    $sql="SELECT * FROM users_orders where unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes') ";
    $query=mysqli_query($db,$sql);

    if(!mysqli_num_rows($query) > 0 ){
        echo '<td colspan="8"><center>No Violations Recorded!</center></td>';
    } else {        
    while($rows=mysqli_fetch_array($query))
    {
                                    
?>
<?php
echo ' <tr>
           <td>'.$rows['date'].'</td>
           <td>'.$rows['unique_code'].'</td>
      <td>'.$rows['delivery_address'].'</td>';
      ?>
      <?php 
                $status=$rows['status'];
                if($status=="" or $status=="NULL")
            {
            ?>
        <td> 
            <button type="button" class="btn btn-info" style="font-weight:bold;">
                <span class="fa fa fa-circle-o"  aria-hidden="true" >
                   Received
                </button>
        </td>
            <?php 
            }
            if($status=="in process")
            { ?>
        <td> 
            <button type="button" class="btn btn-warning">
                <span class="fa fa-circle-o-notch fa-spin"  aria-hidden="true" ></span>
                    Processing
            </button>
        </td> 
            <?php
            }
            if($status=="closed")
            {
            ?>
        <td> 
            <button type="button" class="btn btn-success" >
                <span  class="fa fa-circle" aria-hidden="true">Delivered</button>
        </td> 
            <?php 
            } 
            ?>
            <?php
            if($status=="rejected")
            {
            ?>
        <td> 
            <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i>Rejected</button>
        </td> 
            <?php 
            } 
            ?>
         <?php                                                  
    echo '<td>'.$rows['municipality'].'</td>';
        echo '<td>'.$rows['province'].'</td>';
    ?>
       <td>
       <a href="delete_orders.php?order_del=<?php echo $rows['o_id'];?>" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
    <?php
    echo '<a href="showViolationDetails.php?user_upd='.$rows['o_id'].'" " class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-settings"></i></a>
      </td>
      </tr>';
  
    } 
}

?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

    <div class="row">
                   
        <div class="col-md-3" style="color: #27D094">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-print f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="printViolationsToday.php">
                        <h2 style="color: #27D094">
                            <?php echo $totalTodayViolations;?>
                        </h2>
                        <p class="m-b-0" style="color: #27D094">Print Violations<br> Today
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
                        <span><i class="fa fa-print f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="printViolationsYesterday.php">
                        <h2 style="color: #FF9149">
                            <?php echo $totalYesterdayViolations;?>
                        </h2>
                        <p class="m-b-0" style="color: #FF9149">Print Violations<br> Yesterday
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
                        <span><i class="fa fa-print f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="printViolationsLastWeek.php">
                        <h2 style="color: #FF4962">
                            <?php echo $totalLastWeekViolations;?>
                        </h2>
                        <p class="m-b-0" style="color: #FF4962">Print Violations<br> past 7 days
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
                        <span><i class="fa fa-print f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="printViolationsAll.php">
                        <h2 style="color: #22A0F2">
                            <?php echo $totalYesViolations;?>
                        </h2>
                        <p class="m-b-0" style="color: #22A0F2">All Registered <br>Violations
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
