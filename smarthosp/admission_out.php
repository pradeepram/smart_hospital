<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$pid = (string) $_GET["pid"];	
		$amount = (string) $_GET["amount"];		
        $userid = (string) $_GET["userid"];    
        $emergency_value = (string) $_GET["emergency_value"];   
        $id = (string) $_GET["id"];  

        
       
		
			$patientid = mysql_query("select p_id from t_dr_test where patient_name=substring_index('$pid','- ',1) and  p_id in (select p_id from t_admission where outAmount=0)");
			while($row = mysql_fetch_array($patientid))
{
    $result= "{$row['p_id']}" ;
}
  $select = mysql_query("select p_id from t_admission where p_id='$result' and DATE(UpdatedTime)=DATE(NOW())"); 
		$output = mysql_num_rows(@$select);
		if ($output=="0")
		{
	$add = mysql_query("update t_admission set outAmount='$amount',UpdatedBy='$userid',UpdatedTime=NOW() where outAmount=0 and UpdatedBy=0 and p_id='$result'");
	$up=mysql_query("update d_patientreg set patient_status='$emergency_value',updatedTime=NOW() where p_id='$result'");
		}
		else {
			
		}
	 	 	$check_result = mysql_num_rows(@$add);						
		echo json_encode($check_result);				
?>
