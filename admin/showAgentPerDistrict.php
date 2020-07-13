<?php
include_once 'header_admin.php';
include("../connection/connect.php");
error_reporting(0);
session_start();
?>

<?php
    $input = $_GET['district'];

    if ($input == "coj"){
        $district = "City of Johannesburg Metropolitan Municipality";
    }elseif ($input == "cot"){
        $district = "City of Tshwane Metropolitan Municipality";
    }elseif ($input == "ekurhuleni"){
        $district = "Ekurhuleni Metropolitan Municipality";
    }elseif ($≈≈ == "sedibeng"){
        $district = "Sedibeng District Municipality";
    }elseif ($input == "westrand"){
        $district = "West Rand District Municipality";
    } elseif ($input == "nongauteng"){

    } elseif ($input == "mangaung"){
        $district = "Mangaung Metropolitan";
    } elseif ($input == "feziledabi"){
        $district = "Fezile Dabi District";
    } elseif ($input == "lejweleputswa"){
        $district = "Lejweleputswa District";
    } elseif ($input == "mofutsanyana"){
        $district = "Thabo Mofutsanyana District";
    } elseif ($input == "xhariep"){
        $district = "Xhariep District";
    } elseif ($input == "nonfreestate"){

    } elseif ($input == "bojanala"){
        $district = "Bojanala Platinum";
    } elseif ($input == "molema"){
        $district = "Ngaka Modiri Molema";
    } elseif ($input == "mompati"){
        $district = "Dr Ruth Segomotsi Mompati";
    } elseif ($input == "kaunda"){
        $district = "Dr Kenneth Kaunda";
    } elseif ($input == "nonnorthwest"){

    } elseif ($input == "sibande"){
        $district = "Gert Sibande";
    } elseif ($input == "nkangala"){
        $district = "Nkangala";
    } elseif ($input == "ehlanzeni"){
        $district = "Ehlanzeni";
    } elseif ($input == "nonmpumalanga"){

    } elseif ($input == "capricorn"){
      $district = "Capricorn District Municipality";
    } elseif ($input == "mopani"){
      $district = "Mopani District Municipality";
    } elseif ($input == "sekhukhune"){
      $district = "Sekhukhune District Municipality";
    } elseif ($input == "vhembe"){
      $district = "Vhembe District Municipality";
    } elseif ($input == "nonlimpopo"){

    } elseif ($input == "amajuba"){
      $district = "Amajuba District Municipality";
    } elseif ($input == "gwala"){
      $district = "Harry Gwala District Municipality";
    } elseif ($input == "ilembe"){
      $district = "iLembe District Municipality";
    } elseif ($input == "cetshwayo"){
      $district = "King Cetshwayo District Municipality";
    } elseif ($input == "ugu"){
      $district = "Ugu District Municipality";
    } elseif ($input == "umgungundlovu"){
      $district = "uMgungundlovu District Municipality";
    } elseif ($input == "umkhanyakude"){
      $district = "uMkhanyakude District Municipality";
    } elseif ($input == "umzinyathi"){
      $district = "uMzinyathi District Municipality";
    } elseif ($input == "uthukela"){
      $district = "uThukela District Municipality";
    } elseif ($input == "zululand"){
      $district = "Zululand District Municipality";
    } elseif ($input == "ethekwini"){
      $district = "eThekwini Metropolitan";
    } elseif ($input == "lejweleputswa"){
      $district = "Lejweleputswa District";
    } elseif ($input == "nonkzn"){

    } elseif ($input == "francesbaard"){
      $district = "Frances Baard District Municipality";
    } elseif ($input == "gaetsewe"){
      $district = "John Taolo Gaetsewe District Municipality";
    } elseif ($input == "namakwa"){
      $district = "Namakwa District Municipality";
    } elseif ($input == "pixley"){
      $district = "Pixley ka Seme District Municipality";
    } elseif ($input == "mgcawu"){
      $district = "ZF Mgcawu District Municipality";
    } elseif ($input == "nonnotherncape"){

    } elseif ($input == "alfrednzo"){
      $district = "Alfred Nzo District Municipality";
    } elseif ($input == "amathole"){
      $district = "Amathole District Municipality";
    } elseif ($input == "chrishani"){
      $district = "Chris Hani District Municipality";
    } elseif ($input == "joegqabi"){
      $district = "Joe Gqabi District Municipality";
    } elseif ($input == "ort"){
      $district = "OR Tambo District Municipality";
    } elseif ($input == "sbaartman"){
      $district = "Sarah Baartman District Municipality";
    } elseif ($input == "nelsonmandela"){
      $district = "Nelson Mandela Bay Metropolitan";
    } elseif ($input == "buffalocity"){
      $district = "Buffalo City Metropolitan";
    } elseif ($input == "noneasterncape"){

    } elseif ($input == "winelands"){
      $district = "Cape Winelands District Municipality";
    } elseif ($input == "karoo"){
      $district = "Central Karoo District Municipality";
    } elseif ($input == "gardenroute"){
      $district = "Garden Route District Municipality";
    } elseif ($input == "overberg"){
      $district = "Overberg District Municipality";
    } elseif ($input == "westcoast"){
      $district = "West Coast District Municipality";
    } elseif ($input == "capetown"){
      $district = "City of Cape Town Metropolitan";
    } elseif ($input == "nonwesterncape"){

    }

?>
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <?php if ($input == 'nongauteng') { ?>
                    <h3 class="text-secondary">All Registered Agents in non-valid Gauteng districts </h3> </div>
                    <?php } else if ($input == 'nonfreestate') { ?>
                    <h3 class="text-secondary">All Registered Agents in non-valid Free State districts  </h3> </div>
                    <?php } else if ($input == 'nonnorthwest') { ?>
                    <h3 class="text-secondary">All Registered Agents in non-valid North West districts  </h3> </div>
                    <?php } else if ($input == 'nonmpumalanga') { ?>
                    <h3 class="text-secondary">All Registered Agents in non-valid Mpumalanga districts  </h3> </div>
                    <?php } else if ($input == 'nonlimpopo') { ?>
                    <h3 class="text-secondary">All Registered Agents in non-valid Limpopo districts  </h3> </div>
                    <?php } else if ($input == 'nonkzn') { ?>
                    <h3 class="text-secondary">All Registered Agents in non-valid KwaZulu Natal districts  </h3> </div>
                    <?php } else if ($input == 'nonnotherncape') { ?>
                    <h3 class="text-secondary">All Registered Agents in non-valid Northern Cape districts  </h3> </div>
                    <?php } else if ($input == 'noneasterncape') { ?>
                    <h3 class="text-secondary">All Registered Agents in non-valid Eastern Cape districts  </h3> </div>
                    <?php } else if ($input == 'nonwesterncape') { ?>
                    <h3 class="text-secondary">All Registered Agents in non-valid Western Cape districts  </h3> </div>
                    <?php }
                    else { ?>
                    <h3 class="text-secondary">All Registered Agents in <?php echo $district ?> </h3> </div>
                    <?php } ?>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">



                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>

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


        if ($input == 'nongauteng'){
            $sql="select * from users where provice='Gauteng' and district not in ('City of Johannesburg Metropolitan Municipality', 'City of Tshwane Metropolitan Municipality',
                  'Ekurhuleni Metropolitan Municipality' , 'Sedibeng District Municipality' ,'West Rand District Municipality' ) ";
            $query=mysqli_query($db,$sql);
        } else if ($input == 'nonfreestate'){
           $sql="select * from users where provice='Free State' and district not in ('Mangaung Metropolitan', 'Fezile Dabi District', 'Lejweleputswa District' ,
                 'Thabo Mofutsanyana District' ,'Xhariep District' ) ";
           $query=mysqli_query($db,$sql);
        } else if ($input == 'nonnorthwest'){
           $sql="select * from users where provice='North West' and district not in ('Bojanala Platinum', 'Ngaka Modiri Molema', 'Dr Ruth Segomotsi Mompati' , 'Dr Kenneth Kaunda' ) ";
           $query=mysqli_query($db,$sql);
        } else if ($input == 'nonmpumalanga'){
           $sql="select * from users where provice like '%Mpum%langa' and district not in ('Gert Sibande', 'Nkangala', 'Ehlanzeni' )";
           $query=mysqli_query($db,$sql);
        } else if ($input == 'nonlimpopo'){
           $sql="select * from users where provice='Limpopo' and district not in ('Capricorn District Municipality', 'Mopani District Municipality',
                 'Sekhukhune District Municipality' , 'Vhembe District Municipality', 'Waterberg District Municipality' ) ";
           $query=mysqli_query($db,$sql);
        } else if ($input == 'nonkzn'){
           $sql="select * from users where provice='KwaZulu Natal' and district not in ('Amajuba District Municipality', 'Harry Gwala District Municipality', 'iLembe District Municipality',
                 'King Cetshwayo District Municipality' , 'Ugu District Municipality', 'uMgungundlovu District Municipality', 'uMkhanyakude District Municipality', 'uMzinyathi District Municipality',
                  'uThukela District Municipality', 'Zululand District Municipality', 'eThekwini Metropolitan') ";
           $query=mysqli_query($db,$sql);
        } else if ($input == 'nonnotherncape'){
           $sql="select * from users where provice='Northern Cape' and district not in ('Frances Baard District Municipality', 'John Taolo Gaetsewe District Municipality', 'Namakwa District Municipality',
                 'Pixley ka Seme District Municipality' , 'ZF Mgcawu District Municipality')  ";
           $query=mysqli_query($db,$sql);
        } else if ($input == 'noneasterncape'){
           $sql="select * from users where provice='Eastern Cape' and district not in ('Alfred Nzo District Municipality', 'Amathole District Municipality', 'Chris Hani District Municipality',
                 'Joe Gqabi District Municipality' , 'OR Tambo District Municipality', 'Sarah Baartman District Municipality', 'Nelson Mandela Bay Metropolitan', 'Buffalo City Metropolitan') ";
           $query=mysqli_query($db,$sql);
        } else if ($input == 'nonwesterncape'){
           $sql="select * from users where provice='Western Cape' and district not in ('Cape Winelands District Municipality', 'Central Karoo District Municipality', 'Garden Route District Municipality',
                 'Overberg District Municipality' , 'West Coast District Municipality', 'City of Cape Town Metropolitan' ) ";
           $query=mysqli_query($db,$sql);
        }
        else {
            $sql="SELECT * FROM users  where district='$district' ";
            $query=mysqli_query($db,$sql);
        }



                if(!mysqli_num_rows($query) > 0 )
                {
                    echo '<td colspan="7">
                            <center>
                                No Agents-Data!
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
