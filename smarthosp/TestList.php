<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$test = (string) $_GET["test"];	
		$patient = (string) $_GET["patient"];		
        
		$add = mysql_query("select m_id from master where name='$test'");
		while ($i = mysql_fetch_array($add)){
    $result .= $i["m_id"];
  
		}
if($result==4)
{
	$add1 = mysql_query("select d_id as c_id,MedicineName as child_name,m_id from d_pharma");
}
	else 
	{	
 $add1 = mysql_query("select c_id,child_name,m_id from m_lab 
 where m_id='$result' and c_id not in (SELECT c_id FROM m_dr_test where patient_name='$patient' and m_id='$result' and DATE(TimeUpdated)=DATE(NOW()) )");
	}

$my_values = array();
$my_values1 = array();
$my_values2 = array();
while($row = mysql_fetch_array($add1))
{
    $firstname= "{$row['child_name']}" ;
     $cid= "{$row['c_id']}" ;
     $mid= "{$row['m_id']}" ;
  $my_values[] = $firstname;   
   $my_values1[] = $cid;    
    $my_values2[] = $mid;                                                              
} 		
  echo json_encode(array("name"=>$my_values,"id"=>$my_values1,"mid"=>$my_values2));
?>

