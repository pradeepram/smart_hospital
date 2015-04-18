<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$roleid = (string) $_GET["roleid"];	
		
$my_values = array();
 $my_values1 = array();     

 $add = mysql_query("SELECT rolename,role_description FROM m_roles where roleid='$roleid'");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['rolename']}" ;  
    $return2= "{$row['role_description']}" ;  
  $my_values[] = $return1; 
    $my_values1[] = $return2;                                                                 
}



  echo json_encode(array("return1"=>$my_values,"return2"=>$my_values1));
?>

