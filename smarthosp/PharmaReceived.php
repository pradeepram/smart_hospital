<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patientname = (string) $_GET["p_name"];		
        $userid = (string) $_GET["userid"];     
        $amt=  (string) $_GET["amount"];                                                
	$add = mysql_query("update  t_dr_test set Medicine_Collected=1,amount='$amt' where patient_name=substring_index('$patientname','-',1) and  DATE(TimeUpdated)=DATE(NOW()) ");		 
	 	 	$check_result = mysql_num_rows(@$add);				
		echo $check_result;
		echo json_encode($check_result);				
?>

