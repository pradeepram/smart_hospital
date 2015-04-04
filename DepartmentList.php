<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$id = (string) $_GET["id"];		
        
$add = mysql_query("SELECT department_id,department_name,department_description FROM m_doctor_department");


$my_values = array();
$my_values1 = array();
$my_values2 = array();
while($row = mysql_fetch_array($add))
{
    $dept_id= "{$row['department_id']}" ;
    $name= "{$row['department_name']}" ;
     $desc= "{$row['department_description']}" ;
  $my_values[] = $dept_id;  
  $my_values1[] = $name;    
     $my_values2[] = $desc;                                                             
} 		
  echo json_encode(array("name"=>$my_values1,"id"=>$my_values,"desc"=>$my_values2));
?>

