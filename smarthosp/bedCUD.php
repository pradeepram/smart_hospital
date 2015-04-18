<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$bed = (string) $_GET["bed"];
		$bedid = (string) $_GET["bedid"];
		$userid = (string) $_GET["userid"];
		$id = (string) $_GET["id"];	
		
		$select = mysql_query("select Bed from m_bed where Bed='$bed' and DATE(CreatedTime)=DATE(NOW())"); 
		$output = mysql_num_rows(@$select);
		if ($output=="0")
		{
			if($id=="1")
			{
        $add1 = mysql_query("delete from m_bed where bed_id='$userid'");
			}
			elseif ($id=="2")
			{
				 $add1 = mysql_query("update m_bed set Bed='$bed' where Bed_id='$bedid'");
			}
			elseif ($id=="3")
			{
				
				 $add1 = mysql_query("insert into m_bed (Bed,CreatedBy,CreatedTime) values('$bed','$userid',NOW())");
		
			}
			else 
			{
				
			}
		}
		else {
			
		}
			$check_result = mysql_num_rows(@$add1);
		
		
		
		echo json_encode($check_result);			
?>

