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
                    <h3 class="text-secondary">All Registered Agents</h3> </div>

            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Registered users</h4>

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

            $sql="SELECT * FROM users where provice in ('$province', '$province2', '$province3' )";
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