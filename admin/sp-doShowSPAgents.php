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
            $sql="SELECT * FROM users WHERE address LIKE '%soweto%' ";
            $query=mysqli_query($db,$sql);

            $sql2="SELECT * FROM users WHERE address LIKE '%roodepoort%' ";
            $query2=mysqli_query($db,$sql2);

            $sql3="SELECT * FROM `users` WHERE provice='Gauteng' and district in
                       ('City of Johannesburg Metropolitan Municipality', 'Johannesburg',
                       'Joburg Metropolitan Municipality', 'City of Johannesburg') ";
            $query3=mysqli_query($db,$sql3);

            $sql4="SELECT * FROM `users` WHERE provice='KwaZulu Natal' and district in
                       ('Ethekwini metro', 'Thekwini', 'DURBAN', 'Ethekwini', 'eThekwini District') ";
            $query4=mysqli_query($db,$sql4);

            $sql5="SELECT * FROM `users` WHERE provice='KwaZulu Natal' and district in
                       ('Ilembe', 'iLembe District Municipality') ";
            $query5=mysqli_query($db,$sql5);

            $sql6="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
                       ('Buffalo City Metropolitan', 'Buffalo city Municipality') ";
            $query6=mysqli_query($db,$sql6);

            $sql7="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
                       ('Nelson Mandela Bay Metropolitan') ";
            $query7=mysqli_query($db,$sql7);

            $sql8="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
                       ('O.R.Tambo', 'OR Tambo', 'OR Tambo District Municipality') ";
            $query8=mysqli_query($db,$sql8);

            $sql9="SELECT * FROM `users` WHERE provice='Eastern Cape' and district in
                       ('Chris Hani', 'Chris Hani District Municipality') ";
            $query9=mysqli_query($db,$sql9);

            $sql10="SELECT * FROM `users` WHERE district in
                        ('Cape District', 'Cape Metropole', 'City of Cape Town Metropole',
                        'City of Cape Town Metropolitan') ";
            $query10=mysqli_query($db,$sql10);


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

                    while($rows=mysqli_fetch_array($query2))
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

                    while($rows=mysqli_fetch_array($query3))
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

                    while($rows=mysqli_fetch_array($query4))
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

                    while($rows=mysqli_fetch_array($query5))
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

                    while($rows=mysqli_fetch_array($query6))
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

                    while($rows=mysqli_fetch_array($query7))
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

                    while($rows=mysqli_fetch_array($query8))
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

                    while($rows=mysqli_fetch_array($query9))
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

                    while($rows=mysqli_fetch_array($query10))
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
