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
                    <h3 class="text-secondary">
                        Active Agents
                    </h3> 
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
                                <h4 class="card-title">All Active Agents</h4>
                             
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
                                </tr>
                            </thead>
                            <tbody>
                                           
											
        <?php
            $sql="select * from users where u_id IN (SELECT DISTINCT u_id FROM users_orders)";
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
                <td>'.$rows['f_name'].' '.$rows['l_name'].'</td>
                <td>'.$rows['phone'].'</td>
                <td>'.$rows['address'].'</td>
                <td>'.$rows['municipality'].'</td>
                <td>'.$rows['provice'].'</td>
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

    <div class="row">
        <div class="col-md-4" style="color: #238AE6">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-file-pdf-o f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="printActiveAgents.php">
                        <h2 style="color: #238AE6">
                        </h2>
                        <p class="m-b-0" style="color: #238AE6">Print List of Active Agents and household requests
                        </p>
                        </a>
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
