<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patientname = (string) $_GET["p_name"];		
        $userid = (string) $_GET["userid"];       
        $cid =  json_decode(stripslashes($_GET["value"]));	       
                               
         $add1 = mysql_query("select t_id from t_dr_test where patient_name=substring_index('$patientname','- ',1)  and DATE(TimeUpdated)=DATE(NOW())");
         while ($i = mysql_fetch_array($add1)){
    $result .= $i["t_id"];    
	}                   
foreach($cid as $d){
	$add = mysql_query("update  t_dr_lab set test_result=1,paid=1,updatedBy='$userid',updatedTime=NOW() where t_id='$result' and c_id='$d'");
	
}	
		 
	 	 	$check_result = mysql_num_rows(@$add);						
		echo json_encode($check_result);				
?>

