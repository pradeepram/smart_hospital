<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$pid = (string) $_GET["pid"];	
		$appointment = (string) $_GET["appointment"];		
        $userid = (string) $_GET["userid"];       
       

        
        $select = mysql_query("select patient_id from t_appointment where patient_id='$pid' and DATE(TimeCreated)=DATE(NOW())"); 
		$output = mysql_num_rows(@$select);
		if ($output=="0")
		{
			$doc_name = mysql_query("select firstname from m_user where user_id=(SELECT d_id FROM m_user where user_id='$userid' )");
			while($row = mysql_fetch_array($doc_name))
{
    $firstname= "{$row['firstname']}" ;
}
	$add = mysql_query("insert into t_appointment (patient_id,appointment_time,doctor_name,CreatedBy,TimeCreated) values('$pid','$appointment','$firstname','$userid',NOW())");
		}
		else {
			
		}				 
	 	 	$check_result = mysql_num_rows(@$add);						
		echo json_encode($check_result);				
?>

