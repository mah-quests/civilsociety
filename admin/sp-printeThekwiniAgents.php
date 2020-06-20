<?php
include_once 'header_admin.php';
include("../connection/connect.php");
include("../connection/dataCollection.php");
error_reporting(0);
session_start();
?>
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Print Covid-19 Front Agents in Eastern Cape</h3> </div>

</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">

         <div class="card">
            <div class="card-body">
                <h4 class="card-title">Agents in KwaZulu Natal</h4>
                <h6 class="card-subtitle"> eThekwini</h6>

                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID Number</th>
                                <th>Full Names</th>
                                <th>Phone</th>
                                <th>Altenate Number</th>
                                <th>Sex</th>
                                <th>Race</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Municipality</th>
                                <th>District</th>
                                <th>Province</th>
                                <th>Network</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>ID Number</th>
                                <th>Full Names</th>
                                <th>Phone</th>
                                <th>Altenate Number</th>
                                <th>Sex</th>
                                <th>Race</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Municipality</th>
                                <th>District</th>
                                <th>Province</th>
                                <th>Network</th>
                            </tr>
                        </tfoot>
                        <tbody>


                                <?php
                                $sql="SELECT * FROM `users` WHERE provice='KwaZulu Natal' and district in
                                          ('Ethekwini metro', 'Thekwini', 'DURBAN', 'Ethekwini', 'eThekwini District')";
                                $query=mysqli_query($db,$sql);


                                    if(!mysqli_num_rows($query) > 0 )
                                        {
                                            echo '<td colspan="11"><center>No Agents Registered!</center></td>';
                                        }
                                    else
                                        {
                                        while($rows=mysqli_fetch_array($query))
                                            {

                                            $mql="SELECT * FROM res_category where c_id='".$rows['c_id']."'";
                                                $res=mysqli_query($db,$mql);
                                                $row=mysqli_fetch_array($res);

                                                echo ' <tr><td>'.$row['organization_structure'].'</td>
                                                            <td>'.$rows['username'].'</td>
                                                            <td>'.$rows['f_name'].' '.$rows['l_name'].'</td>
                                                            <td>'.$rows['phone'].'</td>
                                                            <td>'.$rows['alt_number'].'</td>
                                                            <td>'.$rows['sex'].'</td>
                                                            <td>'.$rows['race'].'</td>
                                                            <td>'.$rows['age'].'</td>
                                                            <td>'.$rows['address'].'</td>
                                                            <td>'.$rows['municipality'].'</td>
                                                            <td>'.$rows['district'].'</td>
                                                            <td>'.$rows['provice'].'</td>
                                                            <td>'.$rows['network'].'</td>
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
            <!-- footer -->
            <footer class="footer">
                © 2020 Thusa Sechaba Web Application. Developed by
            <a target="_blank" href="https://mahquests.co.za"> M • A • H Quests Enterprises
            </a> </footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>