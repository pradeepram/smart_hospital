<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$testid = (string) $_GET["testid"];	
		
$my_values = array();
$my_values1 = array();      

 $add = mysql_query("select child_name,amount from m_lab where c_id='$testid'");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['child_name']}" ;   
     $return2= "{$row['amount']}" ;   
  $my_values[] = $return1;   
  $my_values1[] = $return2;                                                                
}



  echo json_encode(array("return1"=>$my_values,"return2"=>$my_values1));
?>

