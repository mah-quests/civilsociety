<?php
include_once 'header_admin.php';
include("../connection/connect.php");
error_reporting(0);
session_start();
?>


        <div class="page-wrapper">
            <!-- Bread crumb -->
                <center>            
                    <div class="row page-titles">
                            <div class="col-md-12 align-self-center" align="center">
                                <h3 class="text-secondary">
                                    High Alert Medical Attention
                                </h3> 
                            </div>
                    </div>
                </center>            
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">

  <div class="card" id="list-of-violations">
      <div class="card-body">
          <h4 class="card-title">People showing possible symptoms of COVID-19 (cough, fever and shortness of breath combination) and are part of frontline services</h4>
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
    $sql="SELECT * from users_orders where unique_code in (SELECT unique_code FROM request_medication_02 WHERE essential_services_worker='Yes' or healthCareCondition='Yes' or emegencyCondition='Yes' and (highTempCond='Yes' and dryCoughCond='Yes') or (shortBreathConditionCond='Yes')) ";
    $query=mysqli_query($db,$sql);

    if(!mysqli_num_rows($query) > 0 ){
        echo '<td colspan="8"><center>No Households Recorded!</center></td>';
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
    echo '<a href="showRequestDetails.php?user_upd='.$rows['o_id'].'" " class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-settings"></i></a>
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


  <div class="card" id="list-of-violations">
      <div class="card-body">
          <h4 class="card-title">People on Chronic Medication</h4>
          <div class="table-responsive m-t-40">
              <table id="myTable2" class="table table-bordered table-striped">
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
    $sql="SELECT * from users_orders where unique_code in (SELECT unique_code FROM `request_medication_01` WHERE `chronic_medication`='Yes') ";
    $query=mysqli_query($db,$sql);

    if(!mysqli_num_rows($query) > 0 ){
        echo '<td colspan="8"><center>No Households Recorded!</center></td>';
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
    echo '<a href="showRequestDetails.php?user_upd='.$rows['o_id'].'" " class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-settings"></i></a>
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

            </div>
        </div>
            
            
<?php

include_once 'footer.php';

?>  
