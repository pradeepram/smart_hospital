<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
$pid = (string) $_GET["pid"];
$patientid  = (string) $_GET["patientid"];
$reason = (string) $_GET["reason"];
$followdate  = (string) $_GET["followdate"];
$remarks = (string) $_GET["remarks"];
$track  = (string) $_GET["track"];

$userid = (string) $_GET["userid"];



$selects = mysql_query("select p_id from t_followup where p_id='$pid' and reason='$reason' and DATE(createdTime)=DATE(NOW())"); 
		$output1 = mysql_num_rows(@$selects);
		if ($output1=="0")
		{
		
			
			$add = mysql_query("INSERT INTO t_followup(p_id,patient_id,follow_date,reason,remarks,follow,createdBy,createdTime) VALUES('$pid','$patientid',str_to_date('$followdate','%Y/%m/%d'),'$reason','$remarks','$track','$userid',NOW())");
				
		
	
	
		}
		else 
		{
				
		} 
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		
		echo json_encode($check_result);				
?>