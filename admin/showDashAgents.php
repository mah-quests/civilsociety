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
                <h3 class="text-secondary">Agents Dashboard</h3> </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
    <div class="row">
                   
        <div class="col-md-6" style="color: #FEAA00">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-user-o f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="doShowAgents.php">
                        <h2 style="color: #FEAA00">
                            <?php echo $AllRegisteredAgents;?>
                        </h2>
                        <p class="m-b-0" style="color: #FEAA00"># of registered <br>agents
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-md-6" style="color: #0200FF">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-podcast  f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="doShowActiveAgents.php">
                        <h2 style="color: #0200FF">
                            <?php echo $AllActiveAgents ?>
                        </h2>
                        <p class="m-b-0" style="color: #0200FF"># of active <br>agents currently</p>
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
                Agents Across Provinces:
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-4" style="color: green">
                    <?php echo $AllRegisteredAgents;?>
                </h1>
                <span style="color: green"># Total Agents Registered</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-5">
                    <?php echo $totalAgentsGauteng;?>
                </h1>
                <span># in Gauteng</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-5">
                    <?php echo $totalAgentsFreeState;?>
                </h1>
                <span># in Free State</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
                <br><br>
              <div class="card-body text-center">
                <h1 class="display-5" > 
                    <?php echo $totalAgentsNorthWest;?>                   
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
                    <?php echo $totalAgentsMpumalanga;?>                     
                </h1>
                <span># in Mpumalanga</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>               
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalAgentsLimpopo;?>                      
                </h1>
                <span># in Limpopo</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalAgentsKZN;?>
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
                    <?php echo $totalAgentsNorthernCape;?>
                </h1>
                <span># in Northern Cape</span>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalAgentsEasternCape;?>                   
                </h1>
                <span># in Eastern Cape</span>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border">
            <br><br>
              <div class="card-body text-center">
                <h1 class="display-5"> 
                    <?php echo $totalAgentsWesternCape;?>                   
                </h1>
                <span># in Western Cape</span>
              </div>
            </div>                                     
          </div>
        </div>
      </div>
    </div>
  </div>



    <div class="row">
                   
        <div class="col-md-4" style="color: #63008D">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-anchor f-s-40 color-green"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="doShowActiveAgentsPartners.php">
                        <h2 style="color: #63008D">
                            <?php echo $totalActiveCovid19Partners; ?> / <?php echo $totalCovid19Partners; ?>
                        </h2>
                        <p class="m-b-0" style="color: #63008D">
                            # of CCC Agents
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4" style="color: #FF0085">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-cubes  f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="doShowActiveAgentsCivilSociety.php">
                        <h2 style="color: #FF0085"> 
                            <?php echo $totalActiveCivilSociety; ?> / <?php echo $totalCivilSociety; ?>
                        </h2>
                        <p class="m-b-0" style="color: #FF0085">
                            # of Civil Society Agents
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4" style="color: #7B9B01">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left meida media-middle">
                        <span><i class="fa fa-shield  f-s-40"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <a href="doShowActiveAgentsCommunity.php">
                        <h2 style="color: #7B9B01"> 
                            <?php echo $totalActiveCommunity; ?> /<?php echo $totalCommunity ?>
                        </h2>
                        <p class="m-b-0" style="color: #7B9B01">
                            # of Community Members
                        </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>


        <div class="row">
            <div class="col-12">
                
               
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Civil Society Active Organizations</h4>
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                       <tr>
                                            <th>#</th>
                                            <th>Organization Name</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                    
        <?php
            $sql="select DISTINCT (organization_name) from users where u_id IN (SELECT DISTINCT u_id FROM users_orders) and network='P' ";
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
                <td>'.$rows[''].' '.$rows[''].' </td>
                <td>'.$rows[''].'</td>
                <td>'.$rows[''].'</td>
                <td>'.$rows[''].'</td>
                <td>'.$rows[''].'</td>
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



        <div class="row">
            <div class="col-12">
                
               
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Covid-19 Front Active Organizations</h4>
                            <div class="table-responsive m-t-40">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                       <tr>
                                            <th>#</th>
                                            <th>Organization Name</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                    
        <?php
            $sql="select DISTINCT (organization_name) from users where u_id IN (SELECT DISTINCT u_id FROM users_orders) and network='N' ";
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
                <td>'.$rows[''].' '.$rows[''].' </td>
                <td>'.$rows[''].'</td>
                <td>'.$rows[''].'</td>
                <td>'.$rows[''].'</td>
                <td>'.$rows[''].'</td>
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

        <!-- End PAge Content -->
        </div>
    <!-- End Container fluid  -->  
    </div>                  

<?php
}

include_once 'footer.php';

?>                  
