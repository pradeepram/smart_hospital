<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$id = (string) $_GET["id"];		
        
$add = mysql_query("SELECT child_name as name,c_id,amount  FROM m_lab where m_id=1");


$my_values = array();
$my_values1 = array();
$my_values2 = array();
while($row = mysql_fetch_array($add))
{
    $firstname= "{$row['name']}" ;
    $mid= "{$row['c_id']}" ;
     $amount= "{$row['amount']}" ;
  $my_values[] = $firstname;  
  $my_values1[] = $mid;  
     $my_values2[] = $amount;                                                               
} 		
  echo json_encode(array("name"=>$my_values,"id"=>$my_values1,"amount"=>$my_values2));
?>

