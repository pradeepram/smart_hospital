<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");

$patientid  = (string) $_GET["patient_id"];
$emergency = (string) $_GET["emergency"];
$emergency_value  = (string) $_GET["emergency_value"];


$userid = (string) $_GET["userid"];



				
			$add = mysql_query("update d_patientreg set patient_status='$emergency_value',updatedTime=NOW() where patient_id='$patientid' and DATE(TimeCreated)=DATE(NOW())");								
	
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		
		echo json_encode($check_result);				
?>