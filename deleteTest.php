<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$test = (string) $_GET["testid"];
		$tstid = (string) $_GET["tstid"];
		$id = (string) $_GET["id"];	
		
		
			if($id=="1")
			{
        $add1 = mysql_query("delete from m_lab where c_id='$test'");
			}
			elseif ($id=="2")
			{
				 $add1 = mysql_query("update m_lab set child_name='$test' where c_id='$tstid'");
			}
			elseif ($id=="3")
			{
				 $add1 = mysql_query("insert into m_lab (child_name,m_id) values('$test','1')");
			}
			else 
			{
				
			}
  echo json_encode();
?>

