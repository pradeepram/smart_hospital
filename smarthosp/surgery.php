<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patientname = (string) $_GET["p_name"];		
        $userid = (string) $_GET["userid"];       
        $amount =  (string) $_GET["amount"];  
        $emergency_value = (string) $_GET["emergency_value"];     
                               
         $add1 = mysql_query("select p_id from t_dr_test where patient_name=substring_index('$patientname','- ',1)  and DATE(surgery_date)=DATE(NOW())");
         while ($i = mysql_fetch_array($add1)){
    $result .= $i["p_id"];    
	}                   

	$selects = mysql_query("select p_id from t_surgery where p_id='$result' "); 
		$output1 = mysql_num_rows(@$selects);
		if ($output1=="0")
		{
	$add = mysql_query("insert into t_surgery (p_id,amount,createdBy,createdTime) values ('$result','$amount','$userid',NOW()) ");
	$up=mysql_query("update d_patientreg set patient_status='$emergency_value',updatedTime=NOW() where p_id='$result'");
		}
		else {
			
		}
	
		 
	 	 	$check_result = mysql_num_rows(@$add);						
		echo json_encode($check_result);				
?>

