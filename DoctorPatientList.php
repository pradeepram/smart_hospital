<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");					
        $userid = (string) $_GET["userid"];  
        
               $add = mysql_query("select firstname as doctor_name from m_user where user_id='$userid'");
	
	while ($i = mysql_fetch_array($add)){
    $result .= $i["doctor_name"];
    
	}   
       
        	$insert = mysql_query("SELECT first_name FROM d_patientreg WHERE doctor_name='$result' and  doctor=1  and DATE(TimeCreated)=DATE(NOW())");
        
		$my_values = array();
while($row = mysql_fetch_array($insert))
{
    $firstname= "{$row['first_name']}" ;
  $my_values[] = $firstname;                                                                 
} 
	  
	 	 	
		echo json_encode(array("firstname"=>$my_values,"docname"=>$result));				
?>

