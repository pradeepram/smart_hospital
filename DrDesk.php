<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patientname = (string) $_GET["p_name"];		
        $userid = (string) $_GET["userid"];       
       

        


	$add = mysql_query("update d_patientreg set doctor=1 where first_name='$patientname' and DATE(TimeCreated)=DATE(NOW())");
	$insert = mysql_query("insert into t_drdesk (p_name,user_id) values ('$patientname','$userid')");

		
	  
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		echo $check_result;
		echo json_encode($check_result);				
?>

