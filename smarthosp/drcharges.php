<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$id = (string) $_GET["id"];		
        
$add = mysql_query("SELECT c_id,doctor_name,fee FROM m_dr_charges ");


$my_values = array();
$my_values1 = array();
$my_values2 = array();
while($row = mysql_fetch_array($add))
{
    $docname= "{$row['doctor_name']}" ;
    $fee= "{$row['fee']}" ;
     $id= "{$row['c_id']}" ;
  $my_values[] = $docname;  
  $my_values1[] = $fee; 
   $my_values2[] = $id;                                                                 
} 		
  echo json_encode(array("docname"=>$my_values,"fee"=>$my_values1,"id"=>$my_values2));
?>

