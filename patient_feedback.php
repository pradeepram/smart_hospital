<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
		
		
	    $patinet = (string) $_GET["patient"];
	    $doctor = (string) $_GET["doctor"];
		$value1 = (string) $_GET["value1"];
		$value2 = (string) $_GET["value2"];
		$value3 = (string) $_GET["value3"];
		$value4 = (string) $_GET["value4"];
		$value5 = (string) $_GET["value5"];
		$value6 = (string) $_GET["value6"];
		$value7 = (string) $_GET["value7"];
		$experience = (string) $_GET["experience"];			       

	 $add = mysql_query("INSERT INTO t_feedback (Name,Doctor,value1,value2,value3,value4,value5,value6,value7,feedback) VALUES ('$patinet','$doctor','$value1','$value2','$value3','$value4','$value5','$value6','$value7','$experience')");	 
$check_result = mysql_num_rows(@$add);				
		
		echo json_encode($check_result);			
?>

