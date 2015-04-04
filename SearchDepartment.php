<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$depid = (string) $_GET["deptid"];	
		
$my_values = array();
 $my_values1 = array();     

 $add = mysql_query("SELECT department_name,department_description FROM m_doctor_department where department_id='$depid'");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['department_name']}" ;  
    $return2= "{$row['department_description']}" ;  
  $my_values[] = $return1; 
    $my_values1[] = $return2;                                                                 
}



  echo json_encode(array("return1"=>$my_values,"return2"=>$my_values1));
?>

