<?php
include_once 'header_admin.php';
?>

<?php
include("../connection/connect.php");
include("../connection/sp-dataCollection.php");
include("../connection/dataCollection.php");
error_reporting(0);
session_start();

if (empty($_SESSION["adm_id"])) {
    header('location:login.php');
} else {
?>
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-secondary"> Chronic Medication Stats Dashboard</h3>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->

            <!--< class="row">

              <!--  <div class="col-md-6" style="color: #FEAA00">
                    <div class="card p-30">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-user-o f-s-40 color-green"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <a href="sp-doShowSPAgents.php">
                                    <h2 style="color: #FEAA00">
                                        <?php echo $AllSPRegisteredAgents; ?>
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
                                <a href="sp-doShowSPActiveAgents.php">
                                    <h2 style="color: #0200FF">
                                        <?php echo $AllSPActiveAgents ?>
                                    </h2>
                                    <p class="m-b-0" style="color: #0200FF"># of active <br>agents currently</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card bg-gradient-x-info">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                    Agents Across Provinces:
                                    <br><br>
                                    <div class="card-body text-center">
                                        <a href="sp-doShowSPAgents.php">
                                            <h1 class="display-4" style="color: green">
                                                <?php echo $AllSPRegisteredAgents; ?>
                                            </h1>
                                        </a>
                                        <span style="color: green"># Total Agents Registered</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                    <br>
                                    <div class="card-body text-center">
                                        <a href="sp-printGautengAgents.php">
                                            <h1 class="display-5">
                                                <?php echo $totalSPAgentsGauteng; ?>
                                            </h1>
                                            <span># in Gauteng</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                    <br>
                                    <div class="card-body text-center">
                                        <a href="sp-printKZNAgents.php">
                                            <h1 class="display-5">
                                                <?php echo $totalSPAgentsKZN; ?>
                                            </h1>
                                            <span># in KwaZulu Natal</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                                    <br>
                                    <div class="card-body text-center">
                                        <a href="sp-printEasternCapeAgents.php">
                                            <h1 class="display-5">
                                                <?php echo $totalSPAgentsEasternCape; ?>
                                            </h1>
                                            <span># in Eastern Cape</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                                    <br>
                                    <div class="card-body text-center">
                                        <a href="sp-printWesternCapeAgents.php">
                                            <h1 class="display-5">
                                                <?php echo $totalCapeTownWesternCape; ?>
                                            </h1>
                                            <span># in Western Cape</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

    
            <div class="row" style="color: #22A0F2">
                <div class="col-12">
                    <div class="card bg-gradient-x-info">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                     In Gauteng:
                                    <br><br>
                                    <div class="card-body text-center" style="color: #22A0F2">
                                        <a href="sp-printGautengAgents.php">
                                            <h1 class="display-4" style="color: #22A0F2">
                                                <?php echo $gautengTTotal; ?>
                                            </h1>
                                        </a>
                                        <span style="color: #22A0F2">#  In Gauteng</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                    <br>
                                    <div class="card-body text-center">
                                        <a href="sp-printBuffaloCityAgents.php">
                                            <h1 class="display-5" style="color: #22A0F2">
                                                <?php echo $ekurhuleni; ?>
                                            </h1>
                                            <span style="color: #22A0F2"># in Ekurhuleni</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                    <br>
                                    <div class="card-body text-center" style="color: #22A0F2">
                                        <a href="sp-printMandelaBayAgents.php">
                                            <h1 class="display-5" style="color: #22A0F2">
                                                <?php echo $centurion; ?>
                                            </h1>
                                            <span style="color: #22A0F2"># in Centurion</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                                    <br>
                                    <div class="card-body text-center" style="color: #22A0F2">
                                        <a href="sp-printORTamboAgents.php">
                                            <h1 class="display-5" style="color: #22A0F2">
                                                <?php echo $joburg; ?>
                                            </h1>
                                            <span style="color: #22A0F2"># in City of Joburg</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                                    <br>
                                    <div class="card-body text-center" style="color: #22A0F2">
                                        <a href="sp-printChrisHaniAgents.php">
                                            <h1 class="display-5" style="color: #22A0F2">
                                                <?php echo $RestWestcity; ?>
                                            </h1>
                                            <span style="color: #22A0F2"># in Rest West City Local Municipality</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">

                                    <br><br>
                                    <div class="card-body text-center" style="color: #22A0F2">
                                        <a href="sp-printGautengAgents.php">
                                            <h1 class="display-4" style="color: #22A0F2">
                                                <?php //echo $gautengTTotal; 
                                                ?>
                                            </h1>
                                        </a>
                                        <span style="color: #22A0F2"></span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                                    <br>
                                    <div class="card-body text-center" style="color: #22A0F2">
                                        <a href="sp-printChrisHaniAgents.php">
                                            <h1 class="display-5" style="color: #22A0F2">
                                                <?php echo $klipspruit; ?>
                                            </h1>
                                            <span style="color: #22A0F2"># in Klipspruit</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                                    <br>
                                    <div class="card-body text-center" style="color: #22A0F2">
                                        <a href="sp-printChrisHaniAgents.php">
                                            <h1 class="display-5" style="color: #22A0F2">
                                                <?php echo $boksburg; ?>
                                            </h1>
                                            <span style="color: #22A0F2"># in Boksburg</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="color: orange">
                <div class="col-12">
                    <div class="card bg-gradient-x-info">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                      In Free State:
                                    <br><br>
                                    <div class="card-body text-center" style="color: orange">
                                        <a href="sp-printGautengAgents.php">
                                            <h1 class="display-4" style="color: orange">
                                                <?php echo $freestateTotal; ?>
                                            </h1>
                                        </a>
                                        <span style="color: orange"># Total In Free State</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                    <br>
                                    <div class="card-body text-center">
                                        <a href="sp-printSowetoAgents.php">
                                            <h1 class="display-5" style="color: orange">
                                                <?php echo $matjhabeng; ?>
                                            </h1>
                                            <span style="color: orange"># in Matjhabeng</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                    <br>
                                    <div class="card-body text-center" style="color: orange">
                                        <a href="sp-printRooderpoortAgents.php">
                                            <h1 class="display-5" style="color: orange">
                                                <?php echo $dihlabeng; ?>
                                            </h1>
                                            <span style="color: orange"># in Dihlabeng</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                                    <br>
                                    <div class="card-body text-center" style="color: orange">
                                        <a href="sp-printJoburgAgents.php">
                                            <h1 class="display-5" style="color: orange">
                                                <?php echo $tswelopele; ?>
                                            </h1>
                                            <span style="color: orange"># in Tswelopele</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                                    <br>
                                    <div class="card-body text-center" style="color: orange">
                                        <a href="sp-printJoburgAgents.php">
                                            <h1 class="display-5" style="color: orange">
                                                <?php echo $metsimaholo; ?>
                                            </h1>
                                            <span style="color: orange"># in Metsimaholo</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">

                                    <br><br>
                                    <div class="card-body text-center" style="color: orange">
                                        <a href="sp-printGautengAgents.php">
                                            <h1 class="display-4" style="color: orange">
                                                <?php //echo $totalSPAgentsGauteng; 
                                                ?>
                                            </h1>
                                        </a>
                                        <span style="color: orange"></span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border">
                                    <br>
                                    <div class="card-body text-center" style="color: orange">
                                        <a href="sp-printJoburgAgents.php">
                                            <h1 class="display-5" style="color: orange">
                                                <?php echo $masilonyana; ?>
                                            </h1>
                                            <span style="color: orange"># in Masilonyana</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" style="color: #132053">
                <div class="col-12">
                    <div class="card bg-gradient-x-info">
                        <div class="card-content">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                      In KwaZulu Natal
                                    <br><br>
                                    <div class="card-body text-center" style="color: #132053">
                                        <a href="sp-printGautengAgents.php">
                                            <h1 class="display-4" style="color: #132053">
                                                <?php echo $kznTotal; ?>
                                            </h1>
                                        </a>
                                        <span style="color: #132053"># Total In KwaZulu Natal</span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                    <br>
                                    <div class="card-body text-center">
                                        <a href="sp-printiLembeAgents.php">
                                            <h1 class="display-5" style="color: #132053">
                                                <?php echo $umhlabuyalingana; ?>
                                            </h1>
                                            <span style="color: #132053"># in Umhlabuyalingana</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                    <br>
                                    <div class="card-body text-center">
                                        <a href="sp-printiLembeAgents.php">
                                            <h1 class="display-5" style="color: #132053">
                                                <?php echo $nongoma; ?>
                                            </h1>
                                            <span style="color: #132053"># in Nongoma</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                    <br>
                                    <div class="card-body text-center">
                                        <a href="sp-printiLembeAgents.php">
                                            <h1 class="display-5" style="color: #132053">
                                                <?php echo $alfred; ?>
                                            </h1>
                                            <span style="color: #132053"># in alfred Duma</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">

                                    <br><br>
                                    <div class="card-body text-center" style="color: #132053">
                                        <a href="sp-printGautengAgents.php">
                                            <h1 class="display-4" style="color: #132053">
                                                <?php //echo $kznTotal ; 
                                                ?>
                                            </h1>
                                        </a>
                                        <span style="color: #132053"></span>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                    <br>
                                    <div class="card-body text-center">
                                        <a href="sp-printiLembeAgents.php">
                                            <h1 class="display-5" style="color: #132053">
                                                <?php echo $okhahlamba; ?>
                                            </h1>
                                            <span style="color: #132053"># in okhahlamba</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        


        <div class="row" style="color: red">
            <div class="col-12">
                <div class="card bg-gradient-x-info">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                  In Western Cape:
                                <br><br>
                                <div class="card-body text-center" style="color: red">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-4" style="color: red">
                                            <?php echo $totalWesternCapeC; ?>
                                        </h1>
                                    </a>
                                    <span style="color: red"># Total In Western Cape</span>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: red">
                                            <?php echo $capeTown; ?>
                                        </h1>
                                        <span style="color: red"># in Cape Town City</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: red">
                                            <?php echo $drakenstein; ?>
                                        </h1>
                                        <span style="color: red"># in Drakenstein</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: red">
                                            <?php echo $mossel; ?>
                                        </h1>
                                        <span style="color: red"># in Mossel Bay</span>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <!-- End PAge Content -->
        </div>

        <div class="row" style="color: #22A0F2;">
            <div class="col-12">
                <div class="card bg-gradient-x-info">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                  In Eestern Cape:
                                <br><br>
                                <div class="card-body text-center" style="color: grey">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-4" style="color: #22A0F2">
                                            <?php echo $easternCapeTotal; ?>
                                        </h1>
                                    </a>
                                    <span style="color: #22A0F2"># Total In Eestern Cape</span>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: #22A0F2">
                                            <?php echo $buffalo; ?>
                                        </h1>
                                        <span style="color: #22A0F2"># in Buffalo Municipality</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: #22A0F2">
                                            <?php echo $nyandeni; ?>
                                        </h1>
                                        <span style="color: #22A0F2"># in nyandeni</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: #22A0F2">
                                            <?php echo $kingSabata; ?>
                                        </h1>
                                        <span style="color: #22A0F2"># in king sabata dalindyebo local municipality</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: #22A0F2">
                                            <?php echo $sakhisizwe; ?>
                                        </h1>
                                        <span style="color: #22A0F2"># in Sakhisizwe</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="color: #132053;">
            <div class="col-12">
                <div class="card bg-gradient-x-info">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                  In Norther Cape:
                                <br><br>
                                <div class="card-body text-center" style="color: grey">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-4" style="color: #132053">
                                            <?php echo $Dawid; ?>
                                        </h1>
                                    </a>
                                    <span style="color: #132053"># Total In Norther Cape</span>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: #132053">
                                            <?php echo $Dawid; ?>
                                        </h1>
                                        <span style="color: #132053"># in Dawid Kruiper</span>
                                    </a>
                                </div>
                            </div>
  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="color: orange;">
            <div class="col-12">
                <div class="card bg-gradient-x-info">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                  In Limpopo:
                                <br><br>
                                <div class="card-body text-center" style="color: grey">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-4" style="color: orange">
                                            <?php echo $limpopoTotal; ?>
                                        </h1>
                                    </a>
                                    <span style="color: orange"># Tota In Limpopo</span>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: orange">
                                            <?php echo $tzaneen; ?>
                                        </h1>
                                        <span style="color: orange"># in Tzaneen</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: orange">
                                            <?php echo $kgapane; ?>
                                        </h1>
                                        <span style="color: orange"># in Kgapane Municipality</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: orange">
                                            <?php echo $thulamela; ?>
                                        </h1>
                                        <span style="color: orange"># in Thulamela</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: orange">
                                            <?php echo $mopani; ?>
                                        </h1>
                                        <span style="color: orange"># in Mopani</span>
                                    </a>
                                </div>
                            </div>
  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="color: green;">
            <div class="col-12">
                <div class="card bg-gradient-x-info">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                  In Mpumalanga:
                                <br><br>
                                <div class="card-body text-center" style="color: grey">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-4" style="color: green">
                                            <?php echo $mkhondo; ?>
                                        </h1>
                                    </a>
                                    <span style="color: green"># Total In Mpumalanga</span>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: green">
                                            <?php echo $mkhondo; ?>
                                        </h1>
                                        <span style="color: green"># in Mkhondo</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="color: blue;">
            <div class="col-12">
                <div class="card bg-gradient-x-info">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                  In North West
                                <br><br>
                                <div class="card-body text-center" style="color: grey">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-4" style="color: blue">
                                            <?php echo $mkhondo; ?>
                                        </h1>
                                    </a>
                                    <span style="color: blue"># Total In North West</span>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: blue">
                                            <?php echo $mkhondo; ?>
                                        </h1>
                                        <span style="color:blue"># in Mkhondo</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: blue">
                                            <?php echo $rustenburg; ?>
                                        </h1>
                                        <span style="color: blue"># in Rustenburg</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 card-gradient-md-border border-right-info border-right-lighten-3">
                                <br>
                                <div class="card-body text-center">
                                    <a href="sp-printWesternCapeAgents.php">
                                        <h1 class="display-5" style="color: blue">
                                            <?php echo $matlosana; ?>
                                        </h1>
                                        <span style="color: blue"># in Matlosana</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Container fluid  -->
    </div>

    </div>
    </div>

<?php
}

include_once 'footer.php';

?>