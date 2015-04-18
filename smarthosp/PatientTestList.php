<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patient = (string) $_GET["patient"];		
        

 $add = mysql_query("select t.c_id,c.child_name from t_dr_lab t left join m_lab c on (c.c_id=t.c_id) where test_result=0 and t_id=(select t_id from t_dr_test where patient_name=substring_index('$patient','-',1) and DATE(TimeUpdated)=DATE(NOW()))");


$my_values = array();
$my_values1 = array();

while($row = mysql_fetch_array($add))
{
    $childname= "{$row['child_name']}" ;
    $c_id= "{$row['c_id']}" ;
    
  $my_values[] = $childname;
   $my_values1[] = $c_id;  
    
                                                               
} 		
  echo json_encode(array("childname"=>$my_values,"cid"=>$my_values1));
?>

