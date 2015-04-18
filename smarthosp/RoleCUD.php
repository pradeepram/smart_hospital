
<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$roleid = (string) $_GET["roleid"];
		$rolename = (string) $_GET["rolename"];
		$roledesc = (string) $_GET["roledesc"];
		$id = (string) $_GET["id"];	
		
		
			if($id=="1")
			{
        $add1 = mysql_query("delete from m_roles where roleid='$roleid'");
			}
			elseif ($id=="2")
			{
				 $add1 = mysql_query("update m_roles set rolename='$rolename',role_description='$roledesc' where roleid='$roleid'");
			}
			elseif ($id=="3")
			{
				$select = mysql_query("select rolename from m_roles where rolename='$rolename' and DATE(TimeCreated)=DATE(NOW())"); 
		$output = mysql_num_rows(@$select);
		if ($output=="0")
		{
				 $add1 = mysql_query("insert into m_roles (rolename,role_description) values('$rolename','$roledesc')");
		}
		else {
			
		}
			}
			else 
			{
				
			}
 $check_result = mysql_num_rows(@$add1);
		
		
		
		echo json_encode($check_result);		
?>

