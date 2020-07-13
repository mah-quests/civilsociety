<?php
include_once 'header_admin.php';
include("../connection/connect.php");
error_reporting(0);
session_start();
?>

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-secondary">Community Members Registered Last Week</h3> </div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        
                       
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Community Members  Registered Users - Last Week</h4>
                             
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Organization Name</th>
                                    <th>Full Names</th>
                                    <th>Phone</th>
									<th>Address</th>
                                    <th>Municipality</th>
                                    <th>Province</th>
									<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                           
											
        <?php
            $sql="SELECT * FROM `users` WHERE network='C' and date(date) BETWEEN SUBDATE(CURDATE(), 7) AND CURDATE()  ";
            $query=mysqli_query($db,$sql);

                if(!mysqli_num_rows($query) > 0 )
                {
                    echo '<td colspan="7">
                            <center>
                                No User-Data!
                            </center>
                        </td>';
                }
                else
                {				
                while($rows=mysqli_fetch_array($query))
                {

                echo ' <tr>
                <td>'.$rows['date'].'</td>
                <td>'.$rows['organization_name'].'</td>
                <td>'.$rows['f_name'].' '.$rows['l_name'].' </td>
                <td>'.$rows['phone'].'</td>
                <td>'.$rows['address'].'</td>
                <td>'.$rows['municipality'].'</td>
                <td>'.$rows['provice'].'</td>
                <td>
                    <a href="delete_users.php?user_del='.$rows['u_id'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10">
                        <i class="fa fa-trash-o" style="font-size:16px"></i>
                    </a> 
                    <a href="doUpdateUser.php?user_upd='.$rows['u_id'].'" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5">
                        <i class="ti-settings"></i>
                    </a>
                </td></tr>';

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
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
			

<?php

include_once 'footer.php';

?>  			
