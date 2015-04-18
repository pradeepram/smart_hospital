<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$id = (string) $_GET["bed_id"];	
		
$my_values = array();
  $my_values1[] = array();     

 $add = mysql_query("select Bed,Bed_id from m_bed where Bed_id='$id'");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['Bed_id']}" ;
      $return2= "{$row['Bed']}" ;  
  $my_values[] = $return1; 
   $my_values1[] = $return2;                                                                
}
  echo json_encode(array("bedid"=>$my_values,"bed"=>$my_values1));
?>

