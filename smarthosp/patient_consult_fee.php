<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
$pid = (string) $_GET["pid"];
$docfee  = (string) $_GET["docfee"];
$extracharge  = (string) $_GET["extracharge"];
$userid = (string) $_GET["userid"];
$test=json_decode(stripslashes($_GET["test"]));


$selects = mysql_query("select p_id from t_payment where p_id='$pid' and DATE(createdTime)=DATE(NOW())"); 
		$output1 = mysql_num_rows(@$selects);
		if ($output1=="0")
		{
		if ($extracharge=="undefined")
		{
			
			$add = mysql_query("INSERT INTO t_payment(p_id,doctor_fee,extra_charges,createdBy,createdTime) VALUES('$pid','$docfee',NULL,'$userid',NOW())");
		}
		else {
			
			$add = mysql_query("INSERT INTO t_payment(p_id,doctor_fee,extra_charges,createdBy,createdTime) VALUES('$pid','$docfee','$extracharge','$userid',NOW())");
		}
	
	$add1 = mysql_query("update d_patientreg set doctor=3 where p_id='$pid' ");
	 
	 $tid = mysql_query("select t_id from t_dr_test where p_id='$pid' and DATE(TimeUpdated)=DATE(NOW())");

while ($i = mysql_fetch_array($tid)){
    $result .= $i["t_id"];
   
}
	 foreach($test as $d){
   $test_values = mysql_query("update t_dr_lab set paid=0,updatedBy='$userid',updatedTime=NOW() where t_id='$result' and c_id='$d'");   
  }	 	
	
		}
		else 
		{
				
		} 
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		
		echo json_encode($check_result);				
?>