<?php
include_once 'header_admin.php';
?>

<?php
include("../connection/connect.php");
include("../connection/dataCollection.php");
error_reporting(0);
session_start();

if(empty($_SESSION["adm_id"]))
{
    header('location:login.php');
}
else
{
?>
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-secondary">Communication & Public Awareness Dashboard</h3> </div>
        </div>



        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->


    <div class="col-md-7">
      <div class="card">
          <?php 
            include 'household_whatsapp_comms.php';
          ?>
      </div>
    </div>


        <div class="col-md-5">
            <div class="card"  style="width: 500px; height: 540px;">
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-striped">
                        <thead>
                           <tr>
                                <th>Name</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                                                                    
        <?php
            $sql="select * from request_by_partner where unique_code in (SELECT unique_code FROM request_medication_02 WHERE whatsappp_subscribe='Yes') ";
            
            $query=mysqli_query($db,$sql);

                if(!mysqli_num_rows($query) > 0 )
                {
                    echo '<td colspan="7">
                            <center>
                                No User-Data!
                            </center>
                        </td>';
                } else {               
                    while($rows=mysqli_fetch_array($query)) {
                        

                    echo ' <tr>
                            <td>'.$rows['firstname'].' '.$rows['lastname'].' </td>
                            <td>'.$rows['phone'].'</td>
                            </tr>';

                    }   
                }

            ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


    <div class="row">
        <div class="col-md-4" style="color: #006600">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-bell-o f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="#">
                        <h2 style="color: #006600">
                            <?php echo $totalEnoughCOVIDInfo;?>
                        </h2>
                        <p class="m-b-0" style="color: #006600"># of people with <br>enough COVID-19 info
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4" style="color: #FF0100">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-bell-slash-o f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="#">
                        <h2 style="color: #FF0100">
                            <?php echo $totalNotEnoughCOVIDInfo;?>
                        </h2>
                        <p class="m-b-0" style="color: #FF0100"># of people with NOT<br>enough COVID-19 info
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4" style="color: #3366CC">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-print f-s-90"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="printWhatsAppContactList.php">
                        <p class="m-b-0" style="color: #3366CC">
                        <br><br>
                            Download and Print List of People Wishing WhatsApp Contact 
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>


  <div class="row" >
    <div class="col-12" >
      <div class="card bg-gradient-x-info">
        <div class="card-content">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                Infomation Distribution In Provinces:
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-4" style="color: green">
                    <?php echo $totalEnoughCOVIDInfo;?>
                </h1>
                <span style="color: green"># Total Household Responded 'Yes'</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-5">
                    <?php echo $totalCOVIDInfoGauteng;?>
                </h1>
                <span># in Gauteng</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-5">
                    <?php echo $totalCOVIDInfoFreeState;?>
                </h1>
                <span># in Free State</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-5" > 
                    <?php echo $totalCOVIDInfoNorthWest;?>                   
                </h1>
                <span># in North West</span>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                <h1 class="display-5">                    
                </h1>
                <span></span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalCOVIDInfoMpumalanga;?>                     
                </h1>
                <span># in Mpumalanga</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>               
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalCOVIDInfoLimpopo;?>                      
                </h1>
                <span># in Limpopo</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalCOVIDInfoKwaZuluNatal;?>
                </h1>
                <span># in KwaZulu Natal</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5" style="color: red">                   
                </h1>
                <span style="color: red"></span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalCOVIDInfoNorthernCape;?>
                </h1>
                <span># in Northern Cape</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalCOVIDInfoEasternCape;?>                   
                </h1>
                <span># in Eastern Cape</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalCOVIDInfoWesternCape;?>                   
                </h1>
                <span># in Western Cape</span>
              </div>
            </div> 
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5" style="color: red"> 
                    <?php echo $totalNonSelectedCOVIDInfo; ?>                    
                </h1>
                <span style="color: red"># Unallocated</span>
              </div>
            </div>                                                
          </div>
        </div>
      </div>
    </div>
  </div>



    <div class="col-md-12">
      <div class="card">
          <?php 
            include 'household_infomation_breakdown.php';
          ?>
      </div>
    </div>


        <!-- End PAge Content -->
        </div>
    <!-- End Container fluid  -->  
    </div>                  

<?php
}

include_once 'footer.php';

?>                  