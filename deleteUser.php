<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$user = (string) $_GET["userid"];		
		$id = (string) $_GET["id"];	
		
		
			if($id=="1")
			{
        $add1 = mysql_query("delete from m_user where user_id='$user'");
			}			
			else 
			{
				
			}
  echo json_encode();
?>

