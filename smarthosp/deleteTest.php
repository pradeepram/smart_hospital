<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$test = (string) $_GET["testid"];
		$amount = (string) $_GET["amount"];
		$tstid = (string) $_GET["tstid"];
		$id = (string) $_GET["id"];	
		$scan=(string) $_GET["scan"];	
		
		
			if($id=="1")
			{
        $add1 = mysql_query("delete from m_lab where c_id='$test'");
			}
			elseif ($id=="2")
			{
				 $add1 = mysql_query("update m_lab set child_name='$test',amount='$amount' where c_id='$tstid'");
			}
			elseif ($id=="3")
			{
				$select = mysql_query("select child_name from m_lab where child_name='$test' and DATE(TimeCreated)=DATE(NOW())"); 
		$output = mysql_num_rows(@$select);
		if ($output=="0")
		{
				 $add1 = mysql_query("insert into m_lab (child_name,m_id,amount,scan) values('$test','1','$amount','$scan')");
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

