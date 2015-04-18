<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		
		$patient = (string) $_GET["identity"];		
        
		

		
 $add1 = mysql_query("select c_id,child_name ,amount from m_lab where c_id in (select c_id from t_dr_lab where paid=0 and t_id=(select t_id from t_dr_test where p_id=(SELECT p_id FROM d_patientreg where patient_id='$patient' and DATE(TimeCreated)=DATE(NOW()))) ) ");
	

$my_values = array();
$my_values1 = array();
$my_values2 = array();
while($row = mysql_fetch_array($add1))
{
    $childname= "{$row['child_name']}" ;
     $cid= "{$row['c_id']}" ;
     $amount= "{$row['amount']}" ;
  $my_values[] = $childname;   
   $my_values1[] = $cid;    
    $my_values2[] = $amount;                                                              
} 		
  echo json_encode(array("name"=>$my_values,"id"=>$my_values1,"amount"=>$my_values2));
?>

