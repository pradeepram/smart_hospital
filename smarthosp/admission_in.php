<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$pid = (string) $_GET["pid"];	
		$amount = (string) $_GET["amount"];		
        $userid = (string) $_GET["userid"];       
        $id = (string) $_GET["id"];  

        
       
		
			$patientid = mysql_query("select p_id from t_dr_test where DATE(admit_date)=DATE(NOW()) and patient_name=substring_index('$pid','- ',1)");
			while($row = mysql_fetch_array($patientid))
{
    $result= "{$row['p_id']}" ;
}
  $select = mysql_query("select p_id from t_admission where p_id='$result' and DATE(CreatedTime)=DATE(NOW())"); 
		$output = mysql_num_rows(@$select);
		if ($output=="0")
		{
	$add = mysql_query("insert into t_admission (p_id,InAmount,CreatedBy,CreatedTime) values('$result','$amount','$userid',NOW())");
		}
		else {
			
		}
	 	 	$check_result = mysql_num_rows(@$add);						
		echo json_encode($check_result);				
?>
