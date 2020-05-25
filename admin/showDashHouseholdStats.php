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
                <h3 class="text-secondary">Overall Perfomance</h3> 
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                   

              <div class="row" >
                <div class="col-12" >
                  <div class="card bg-gradient-x-info">
                    <div class="card-content">
                      <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                            Overview:
                          <div class="card-body text-center">
                            <h1 class="display-7" style="color: green"> 
                                <?php echo $totalResponses;?>
                            </h1>
                            <span style="color: green"># Total Surveys</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalGauteng;?>
                            </h1>
                            <span># in Gauteng</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                          <div class="card-body text-center">
                            <h1 class="display-7">
                                <?php echo $totalFreeState;?>
                            </h1>
                            <span># in Free State</span>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7" > 
                                <?php echo $totalNorthWest;?>                    
                            </h1>
                            <span># in North West</span>
                          </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7"> 
                                <?php echo $totalMpumalanga;?>                     
                            </h1>
                            <span># in Mpumalanga</span>
                          </div>
                        </div> 

                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7"> 
                                <?php echo $totalKZN;?>
                            </h1>
                            <span># in KwaZulu Natal</span>
                          </div>
                        </div>  

                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7">                      
                            </h1>
                            <span></span>
                          </div>
                        </div>   

                        <div class="col-lg-2 col-md-4 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7"> 
                                <?php echo $totalLimpopo;?>                      
                            </h1>
                            <span># in Limpopo</span>
                          </div>
                        </div>  

                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7"> 
                                <?php echo $totalWesternCape;?>                    
                            </h1>
                            <span># in Western Cape</span>
                          </div>
                        </div> 
             

                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7"> 
                                <?php echo $totalNorthernCape;?>
                            </h1>
                            <span># in Northern Cape</span>
                          </div>
                        </div>  
                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7"> 
                                <?php echo $totalEasternCape;?>                    
                            </h1>
                            <span># in Eastern Cape</span>
                          </div>
                        </div> 
                        <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                          <div class="card-body text-center">
                            <h1 class="display-7" style="color: red"> 
                                <?php echo $totalNoProvince;?>
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
            include 'household_people.php';
          ?>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card">
          <h3 class="card-title" align="center">Respondants Sex Distribution</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 140px">Sex</th>
                <th style="width: 180px"># of respondants</th>
                <th>Bar</th>
                <th style="width: 140px">%</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Male
                </td>
                <td>
                  <div>
                    
                    <?php echo $maleRespondants; ?>  
                  </div>
                </td>
                <td>
                  <div class="progress">
                    <div class="progress-bar progress-bar-danger" style="width: <?php echo $malePercentage ?>%"></div>
                  </div>
                </td>                
                <td><span class="badge bg-danger"><?php echo $malePercentage ?> %</span></td>
              </tr>
              <tr>
                <td>
                  Female
                </td>
                <td>
                  <div>
                    <?php echo $femaleRespondants; ?>
                  </div>
                </td>                
                <td>
                  <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" style="width: <?php echo $femalePercentage ?>%"></div>
                  </div>
                </td>
                <td><span class="badge bg-warning"><?php echo $femalePercentage ?>%</span></td>
              </tr>
              <tr>
                <td>  
                  Intersex
                </td>
                <td>
                  <div>
                    <?php echo $intersexRespondants; ?>
                  </div>
                </td>                
                <td>
                  <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-primary" style="width: <?php echo $intersexPercentage ?>%"></div>
                  </div>
                </td>
                <td><span class="badge bg-primary"><?php echo $intersexPercentage ?>%</span></td>
              </tr>
              <tr>
                <td>
                  Other
                </td>
                <td>
                  <div>
                    <?php echo $otherRespondants; ?>
                  </div>
                </td>                
                <td>
                  <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: <?php echo $otherPercentage ?>%"></div>
                  </div>
                </td>
                <td><span class="badge bg-success"><?php echo $otherPercentage ?>%</span></td>
              </tr>
              <tr>
                <td>
                  Non-Selected
                </td>
                <td>
                  <div>
                    <?php echo $nonSelectedRespondants; ?>
                  </div>
                </td>                
                <td>
                  <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-info" style="width: <?php echo $nonSelectedPercentage ?>%"></div>
                  </div>
                </td>
                <td><span class="badge bg-info"><?php echo $nonSelectedPercentage ?>%</span></td>
              </tr>              
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>


    <div class="col-md-12">
      <div class="card">

        <div class="container-fluid" align="center">
          <h5> 
            Household Sex Composition
          </h5>
            <table id="productSizes" class="table">
                <thead>
                    <tr class="d-flex">
                        <th class="col-1"></th>
                        <th class="col-3">Males</th>
                        <th class="col-3">Females</th>
                        <th class="col-3">Intesexuals</th>
                        <th class="col-2">Other</th>
                        <th class="col-1"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="d-flex">
                        <th class="col-1"></th>
                        <td class="col-3">
                          <?php echo $totalNumberOfMales ?>
                        </td>
                        <td class="col-3">
                          <?php echo $totalNumberOfFemales ?>
                        </td>
                        <td class="col-3">
                          <?php echo $totalNumberOfIntersex ?>
                        </td>
                        <td class="col-2">
                          <?php echo $totalNumberOfOther ?>
                        </td>
                        <th class="col-1"></th>
                    </tr>
                </tbody>
            </table>
          </div>

        <div class="container-fluid" align="center">
          <h5> 
            Household Sexuality Composition
          </h5>
            <table id="productSizes" class="table">
                <thead>
                    <tr class="d-flex">
                        <th class="col-3">Heterosexual</th>
                        <th class="col-3">Gay</th>
                        <th class="col-3">Lesbian</th>
                        <th class="col-2">Bisexual</th>
                        <th class="col-2">Other Sexuality</th>
                        <th class="col-2"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="d-flex">
                        <td class="col-3">
                          <?php echo $totalNumberOfHeteroSex ?>
                        </td>
                        <td class="col-3">
                          <?php echo $totalNumberOfGays ?>
                        </td> 
                        <td class="col-3">
                          <?php echo $totalNumberOfLesbians ?>
                        </td>
                        <td class="col-2">
                          <?php echo $totalNumberOfBiSex ?>
                        </td>
                        <td class="col-2">
                          <?php echo $totalNumberOfOtherSexuality ?>
                        </td>
                        <th class="col-2"></th>
                    </tr>
                </tbody>
            </table>
          </div>

        <div class="container-fluid" align="center">
          <h5> 
            Household Gender Composition
          </h5>
            <table id="productSizes" class="table">
                <thead>
                    <tr class="d-flex">
                        <th class="col-1"></th>
                        <th class="col-3">Cisgender</th>
                        <th class="col-3">Transgender</th>
                        <th class="col-3">Gender Nonconfirming/ Non-Binary</th>
                        <th class="col-2">Queer/ Questioning</th>
                        <th class="col-1"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="d-flex">
                        <th class="col-1"></th>
                        <td class="col-3">
                          <?php echo $totalNumberOfCisGender ?>
                        </td>
                        <td class="col-3"> 
                          <?php echo $totalNumberOfTransGender ?>
                        </td>
                        <td class="col-3">
                          <?php echo $totalNumberOfNonConGender ?>
                        </td>
                        <td class="col-2"> 
                          <?php echo $totalNumberOfQueerGender ?>
                        </td>
                        <th class="col-1"></th>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
          <?php 
            include 'age_segmentation_people.php';
            include 'household_types.php';
          ?>
      </div>
    </div>


    <button type="button" onclick="window.location.href = 'showDashHouseholdStatsMore.php';" class="btn btn-primary btn-lg btn-block">
        More Graphical Reports
    </button>


        <!-- End PAge Content -->
        </div>
    <!-- End Container fluid  -->  
    </div>  
</div>  


<?php

}

include_once 'footer.php';

?>					
