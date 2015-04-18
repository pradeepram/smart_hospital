<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$drname = (string) $_GET["drname"];
		$fee = (string) $_GET["fee"];
		$userid = (string) $_GET["userid"];
		$id = (string) $_GET["id"];	
		
		$select = mysql_query("select fee from m_dr_charges where doctor_name='$drname' and DATE(CreatedTime)=DATE(NOW())"); 
		$output = mysql_num_rows(@$select);
		if ($output=="0")
		{
			if($id=="1")
			{
        $add1 = mysql_query("delete from m_dr_charges where c_id='$userid'");
			}
			elseif ($id=="2")
			{
				 $add1 = mysql_query("update m_dr_charges set fee='$fee',UpdatedBy='$userid',UpdatedTime=NOW() where c_id='$drname'");
			}
			elseif ($id=="3")
			{
				
				 $add1 = mysql_query("insert into m_dr_charges (doctor_name,fee,CreatedBy,CreatedTime) values('$drname','$fee','$userid',NOW())");
		
			}
			else 
			{
				
			}
		}
		else
		{
			
		}
			$check_result = mysql_num_rows(@$add1);
		
		
		
		echo json_encode($check_result);			
?>

