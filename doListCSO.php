<?php
include_once 'header_app.php';
?>
<script>
$(document).ready(function () {
    $('#dtOrderExample').DataTable({
        "order": [[ 3, "desc" ]]
    });
    $('.dataTables_length').addClass('bs-select');
    });

</script>
<style>
    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
    bottom: .5em;
    }    
</style>

    <div class="page-wrapper">
        <!-- top Links -->
        <div class="top-links">
            <div class="container">
                <ul class="row links">
                    <li class="col-xs-12 col-sm-4 link-item active">
                        <span>1</span>
                            <a href="doListPartners.php"> Nearest Civil Society Representative
                            </a>
                    </li>
                    <li class="col-xs-12 col-sm-4 link-item">
                        <span>2</span>
                            <a href="doCSOReg.php"> Add A New Civil Society Represantative
                            </a>
                    </li>
                    <li class="col-xs-12 col-sm-4 link-item">
                        <span>3</span>
                            <a href="household_application_form.php">Log A Need Request
                            </a>
                    </li>
                </ul>
            </div>
        </div>
            <section class="inner-page-hero bg-image" data-image-src="images/img/banner-covid-ori.jpg">
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                                <div>
                                    <p><br><br><br><br><br><br></p>
                                    <p><br><br><br><br><br><br></p>
                                    <p><br><br><br><br><br></p>        
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                                <div class="pull-left right-text white-txt">
                                    <h6><a href="#"></a></h6>
                                    <p></p>
                                    <ul class="nav nav-inline">
                                        <li class="nav-item"> <a class="nav-link active" href="#"><i></i></a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="#"><i></i></a> 
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end:Inner page hero -->   

            <div class="breadcrumb">
                <div class="container">
                </div>
            </div>

            <section class="restaurants-page">
                <div class="container">
                    <div class="row">


    <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm">Organization Name</th>
                <th class="th-sm">Full Names</th>
                <th class="th-sm">Phone</th>
                <th class="th-sm">Email</th>
                <th class="th-sm">Home Address</th>
                <th class="th-sm">Municipality</th>
                <th class="th-sm">Province</th>
            </tr>
        </thead>
        <tbody>

        <?php $ress= mysqli_query($db,"select * from users where network='N' order by provice");
                while($rows=mysqli_fetch_array($ress))
                {

            echo '<tr>
                        <td>
                            '.$rows['organization_name'].'
                        </td>                        
                        <td>
                            '.$rows['f_name'].' '.$rows['l_name'].'
                        </td>
                        <td>   
                            '.$rows['phone'].'
                        </td>
                        <td>   
                            '.$rows['email'].'
                        </td>                        
                        <td>
                            '.$rows['address'].'
                        </td>
                        <td>
                        '.$rows['municipality'].'
                        </td>                         
                        <td>
                        '.$rows['provice'].'
                        </td> 
                    </tr>';                   

				}
				?>
        </tbody>
    </table>                                  
                    </div>
                </div>
            </section>

<?php
include_once 'footer.php';
?>