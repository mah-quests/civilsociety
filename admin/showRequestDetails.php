
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

?>

<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+800+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
<?php
include 'header_admin.php'
?>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
<div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">Action A Requests</h3> 

</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->
<div class="row">
<div class="col-12">


<div class="card">
<div class="card-body">
<h4 class="card-title">View Requests</h4>

<div class="table-responsive m-t-20">
<table id="myTable" class="table table-bordered table-striped">

<tbody>
<?php
	$sql="SELECT *  FROM users_orders where o_id='".$_GET['user_upd']."'";
	$query=mysqli_query($db,$sql);
	$rows=mysqli_fetch_array($query);

?>

            <tr>
                <td><strong>Reference Number</strong></td>
                <td><center><?php echo $rows['unique_code']; ?></center></td>
            </tr>   
            <tr>
            <td><strong>Household Contact Person's Name & Surname</strong></td>
            <td><center><?php echo $rows['request_first_name'].' '.$rows['request_surname'] ?></center></td>
            </tr>   
            <tr>
                <td><strong>Date and time of the survey</strong></td>
                <td><center><?php echo $rows['date']; ?></center>
                </td>
            </tr>
            <tr>
                <td><strong>Address:</strong></td>
                <td><center><?php echo $rows['delivery_address']; ?></center></td>
            </tr>
            <tr>
                <td><strong>Province</strong></td>
                <td><center><?php echo $rows['province']; ?></center></td>
            </tr>
            <tr>
                <td><strong>Municipality</strong></td>
                <td><center><?php echo $rows['municipality']; ?></center></td>
            </tr>  
            <tr>
                <td><strong>Comments made by agent</strong></td>
                <td><center><?php echo $rows['comments']; ?></center></td>
            </tr>  
            <tr>
                <td><strong>status:</strong></td>
    <?php $status=$rows['status']; 
        if($status=="" or $status=="NULL"){
    ?>
                <td> 
                    <center>
                        <button type="button" class="btn btn-info" style="font-weight:bold;"><span class="fa fa-circle-o"  aria-hidden="true" > 
                            Not Processed
                        </button>
                    </center>
                </td>
    <?php 
    }
        if($status=="in process")
    { ?>
		        <td>   
		            <center>
		                <button type="button" class="btn btn-warning">
		                    <span class="fa fa-circle-o-notch fa-spin"  aria-hidden="true" ></span>
		                        Processing!
		                </button>
		            </center>
		        </td> 
        
    <?php
    }
    
    if($status=="closed")
        {
    ?>
		        <td>  
		            <center>
		                <button type="button" class="btn btn-success" >
		                    <span  class="fa fa-circle" aria-hidden="true">   Completed
		                </button>
		            </center>
		        </td> 
    <?php 
        } 
    ?>
    <?php
        if($status=="rejected")
        {
    ?>
                                                            
		        <td>  
		            <center>
		                <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i> Rejected
		                </button> 
		            </center>
		        </td> 
            </tr>
        <?php 
        } 

    $sql="SELECT remark.*, users_orders.* FROM remark INNER JOIN users_orders ON remark.frm_id=users_orders.o_id where o_id='".$_GET['user_upd']."' order by remark.remarkDate desc";
    $query=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($query);

?>

            <tr>
                <td><strong>Streamhead Remarks and Updates</strong></td>
                <td><center><?php echo $row['remark']; ?></center></td>
            </tr>

            <tr>
                <td><strong>Last Updated</strong></td>
                <td><center><?php echo $row['remarkDate']; ?></center></td>
            </tr>            

<?php 


    $sql="SELECT * FROM  users_orders where o_id='".$_GET['user_upd']."'";
    $query=mysqli_query($db,$sql);
    $rows=mysqli_fetch_array($query);

?>

				</tbody>
			</table>
			</div>

        <div align="center">
<?php if($_SESSION["adm_id"] == "6"){ ?>
            <a href="javascript:void(0);" onClick="popUpWindow('updateRequestDetails.php?newform_id=<?php echo htmlentities($rows['o_id']);?>');" title="Update Request Details">
                <button type="button" class="btn btn-danger">
                    Update Request Details
                </button>
            </a>
<?php } ?>

            <a href="javascript:void(0);" onClick="popUpWindow('viewRequestDetails.php?newform_id=<?php echo htmlentities($rows['o_id']);?>');" title="View Full Request Details">
                <button type="button" class="btn btn-primary">
                    View Full Request Details
                </button>
            </a>

            <a href="javascript:void(0);" onClick="popUpWindow('doUpdateRequest.php?form_id=<?php echo htmlentities($rows['o_id']);?>');" title="Take Action on request">
                <button type="button" class="btn btn-primary">
                    Take Action
                </button>
            </a>

            <a onclick="window.location.href = 'showInProgressRequests.php';">
                <button type="button" class="btn btn-secondary">
                    Back
                </button>
            </a>            

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