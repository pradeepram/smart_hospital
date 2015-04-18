<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$userid = (string) $_GET["userid"];	
		
$my_values = array();
 $my_values1 = array();     
$my_values2 = array();
 $my_values3 = array();
 $my_values4 = array();
 $my_values5 = array();
 $add = mysql_query("SELECT emailaddress,username,password,firstname,phone,gender FROM m_user where user_id='$userid'");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['emailaddress']}" ;  
    $return2= "{$row['username']}" ;  
      $return3= "{$row['password']}" ;  
    $return4= "{$row['firstname']}" ;  
      $return5= "{$row['phone']}" ;  
    $return6= "{$row['gender']}" ;  
  $my_values[] = $return1; 
    $my_values1[] = $return2;  
    $my_values2[] = $return3; 
    $my_values3[] = $return4;  
    $my_values4[] = $return5; 
    $my_values5[] = $return6;  
                                                                   
}



  echo json_encode(array("return1"=>$my_values,"return2"=>$my_values1,"return3"=>$my_values2,"return4"=>$my_values3,"return5"=>$my_values4,"return6"=>$my_values5));
?>

