<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$id = (string) $_GET["id"];		
        
		
		if($id=="1")
		{
$add = mysql_query("SELECT key_name,value1 FROM m_lookup where value2=1 and Key_id=1");


$my_values = array();
$my_values1 = array();

while($row = mysql_fetch_array($add))
{
    $keyname= "{$row['key_name']}" ;
    $value= "{$row['value1']}" ;
   
  $my_values[] = $keyname;  
  $my_values1[] = $value;  
                                                              
} 		
		}
		elseif ($id=="2")
		{
			$add = mysql_query("SELECT key_name,value1 FROM m_lookup where value2=2 and Key_id=1");


$my_values = array();
$my_values1 = array();

while($row = mysql_fetch_array($add))
{
    $keyname= "{$row['key_name']}" ;
    $value= "{$row['value1']}" ;
   
  $my_values[] = $keyname;  
  $my_values1[] = $value;  
  
		}
		}
		else {
			
		}
  echo json_encode(array("name"=>$my_values,"value"=>$my_values1));
?>

