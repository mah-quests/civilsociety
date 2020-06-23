<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
$unique_code=mysqli_query($db,"select unique_code FROM users_orders where o_id = '".$_GET['order_del']."'");

	mysqli_query($db,"DELETE FROM users_orders WHERE unique_code = '$unique_code' ");
	mysqli_query($db,"DELETE FROM request_violations WHERE unique_code = '$unique_code' ");	
	mysqli_query($db,"DELETE FROM request_priority_03 WHERE unique_code = '$unique_code' ");
	mysqli_query($db,"DELETE FROM request_priority_02 WHERE unique_code = '$unique_code' ");
	mysqli_query($db,"DELETE FROM request_priority_01 WHERE unique_code = '$unique_code' ");
	mysqli_query($db,"DELETE FROM request_people WHERE unique_code = '$unique_code' ");
	mysqli_query($db,"DELETE FROM request_medication_02 WHERE unique_code = '$unique_code' ");
	mysqli_query($db,"DELETE FROM request_medication_01 WHERE unique_code = '$unique_code' ");
	mysqli_query($db,"DELETE FROM request_info_language WHERE unique_code = '$unique_code' ");			
	mysqli_query($db,"DELETE FROM request_employment_stats WHERE unique_code = '$unique_code' ");
	mysqli_query($db,"DELETE FROM request_disability WHERE unique_code = '$unique_code' ");
	mysqli_query($db,"DELETE FROM request_covid_media_info WHERE unique_code = '$unique_code' ");	
	mysqli_query($db,"DELETE FROM request_by_partner WHERE unique_code = '$unique_code' ");
			
header("location:doShowAllRequests.php");  

?>
