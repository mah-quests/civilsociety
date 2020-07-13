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
                        Active Admin Logins
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
                                <h4 class="card-title">All Admin Logins - Past 7 days</h4>

                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped">
                            <thead>
                               <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Admin Login</th>
                                    <th>IP Address</th>
                                </tr>
                            </thead>
                            <tbody>


        <?php
            $sql="select * from admin_login_details where login_date BETWEEN SUBDATE(CURDATE(), 7) AND CURDATE()";
            $query=mysqli_query($db,$sql);

                if(!mysqli_num_rows($query) > 0 )
                {
                    echo '<td colspan="7">
                            <center>
                                No Admin-Login-Data!
                            </center>
                        </td>';
                }
                else
                {
                while($rows=mysqli_fetch_array($query))
                {

        echo ' <tr>
                <td>'.$rows['login_num'].'</td>
                <td>'.$rows['login_date'].'</td>
                <td>'.$rows['username'].'</td>
                <td>'.$rows['ip_address'].'</td>
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
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->


<?php

include_once 'footer.php';

?>
