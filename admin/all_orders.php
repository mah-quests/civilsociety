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
                    <h3 class="text-secondary">List of all household surveys</h3> 
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
                    <h4 class="card-title">All Partner Requests</h4>
                 
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>       
                                    <th>Username</th>		
									<th>Address</th>
									<th>status</th>				 
                                    <th>Reg-Date</th>
									<th>Action</th>
									 
                                </tr>
                            </thead>
                            <tbody>
                                           
<?php
    $sql="SELECT users.*, users_orders.* FROM users INNER JOIN users_orders ON users.u_id=users_orders.u_id order by users_orders.date desc";
    $query=mysqli_query($db,$sql);

    if(!mysqli_num_rows($query) > 0 ){
        echo '<td colspan="8"><center>No Orders-Data!</center></td>';
    } else {				
    while($rows=mysqli_fetch_array($query))
    {
																		
?>
<?php
echo ' <tr>
           <td>'.$rows['date'].'</td>
           <td>'.$rows['username'].'</td>
			<td>'.$rows['address'].'</td>';
			?>
			<?php 
                $status=$rows['status'];
                if($status=="" or $status=="NULL")
            {
            ?>
        <td> 
            <button type="button" class="btn btn-info" style="font-weight:bold;">
                <span class="fa fa-bars"  aria-hidden="true" >Dispatch</button>
        </td>
            <?php 
            }
            if($status=="in process")
            { ?>
        <td> 
            <button type="button" class="btn btn-warning">
                <span class="fa fa-cog fa-spin"  aria-hidden="true" ></span>On a Way!
            </button>
        </td> 
            <?php
            }
            if($status=="closed")
            {
            ?>
        <td> 
            <button type="button" class="btn btn-success" >
                <span  class="fa fa-check-circle" aria-hidden="true">Delivered</button>
        </td> 
            <?php 
            } 
            ?>
            <?php
            if($status=="rejected")
            {
            ?>
        <td> 
            <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i>cancelled</button>
        </td> 
            <?php 
            } 
            ?>
    	   <?php																									
		echo '<td>'.$rows['date'].'</td>';
		?>
			 <td>
			 <a href="delete_orders.php?order_del=<?php echo $rows['o_id'];?>" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
		<?php
		echo '<a href="view_order.php?user_upd='.$rows['o_id'].'" " class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="ti-settings"></i></a>
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
