<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		
        




	 $add = mysql_query("SELECT name,value FROM m_feedback");	 

$my_values = array();
$my_values1 = array();
while($row = mysql_fetch_array($add))
{
    $name= "{$row['name']}" ;
    $value= "{$row['value']}" ;
  $my_values[] = $name;  
   $my_values1[] = $value;                                                               
} 		
  echo json_encode(array("id"=>$my_values,"value"=>$my_values1));
?>

