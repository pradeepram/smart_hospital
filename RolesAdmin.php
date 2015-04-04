<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
			header("Content-type: text/plain");

	
		
		$add = mysql_query("SELECT roleid,rolename,role_description FROM m_roles ");
		
		$my_values = array();
	$my_values1 = array();
	$my_values2 = array();
while($row = mysql_fetch_array($add))
{
    $rolename= "{$row['rolename']}" ;
    $roleid="{$row['roleid']}" ;
    $role_desc="{$row['role_description']}" ;
  $my_values[] = $rolename;
    $my_values1[] = $roleid;   
       $my_values2[] = $role_desc;                            
} 		

	
  echo json_encode(array("rolename"=>$my_values,"roleid"=>$my_values1,"role_desc"=>$my_values2));
		
?>