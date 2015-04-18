<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$id = (string) $_GET["c_id"];	
		
$my_values = array();
      

 $add = mysql_query("select fee,doctor_name from m_dr_charges where c_id='$id'");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['doctor_name']}" ;
      $return2= "{$row['fee']}" ;  
  $my_values[] = $return1; 
   $my_values1[] = $return2;                                                                
}
  echo json_encode(array("return1"=>$my_values,"return2"=>$my_values1));
?>

