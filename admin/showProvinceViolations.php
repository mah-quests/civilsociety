<?php
include_once 'header_admin.php';
include("../connection/connect.php");
error_reporting(0);
session_start();
?>


        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-secondary">Household with Human Rights Violations</h3> 
                </div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        
                       
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Household Violations By Province</h4>
                 
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

    $input = $_GET['id'];

    if ($input == "gauteng"){
        $province = "Gauteng";
        $province2 = "Gauteng";
        $province3 = "Gauteng";
    }elseif ($input == "freestate"){
        $province = "Free State";
        $province2 = "Free State";
        $province3 = "Free State";
    }elseif ($input == "northwest"){
        $province = "North West";
        $province2 = "North West";
        $province3 = "North West";
    }elseif ($input == "mpumalanga"){
        $province = "Mpumalanga";
        $province2 = "Mpumlanga";
        $province3 = "Mpumlanga";
    }elseif ($input == "limpopo"){
        $province = "Limpopo";
        $province2 = "Limpopo";
        $province3 = "Limpopo";
    } elseif ($input == "kzn"){
        $province = "Kwazulu Natal";
        $province2 = "Kwazulu Natal";
        $province3 = "Kwazulu Natal";
    } elseif ($input == "easterncape"){
        $province = "Eastern Cape";
        $province2 = "Eastern Cape";
        $province3 = "Eastern Cape";
    } elseif ($input == "westerncape"){
        $province = "Western Cape";
        $province2 = "Western Cape";
        $province3 = "Western Cape";
    } elseif ($input == "northerncape"){
        $province = "Northern Cape";
        $province2 = "Northern Cape";
        $province3 = "Northern Cape";
    } elseif ($input == "unallocated"){
        $province = "Select Province";
        $province2 = " ";
        $province3 = NULL;
    } 



    $sql="SELECT * FROM users_orders  where province in ('$province', '$province2', '$province3' ) and unique_code in (SELECT unique_code FROM request_violations where any_kind_abuse = 'Yes')";
    $query=mysqli_query($db,$sql);

    if(!mysqli_num_rows($query) > 0 ){
        echo '<td colspan="8"><center>No Violations-Data!</center></td>';
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
                <span  class="fa fa-circle" aria-hidden="true"> Processed</button>
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
			 <a href="deleteRequestDetails.php?order_del=<?php echo $rows['o_id'];?>" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
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


			         </div>
                </div>
            </div>
        </div>
			
			
<?php

include_once 'footer.php';

?>  
