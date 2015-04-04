
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
				 $add1 = mysql_query("insert into m_roles (rolename,role_description) values('$rolename','$roledesc')");
			}
			else 
			{
				
			}
  echo json_encode();
?>

