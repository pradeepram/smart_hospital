<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");					
        $userid = (string) $_GET["userid"];  
        $id=     (string) $_GET["id"];  
               $add = mysql_query("select firstname as doctor_name from m_user where user_id=(SELECT d_id FROM m_user where user_id='$userid')");
	
	while ($i = mysql_fetch_array($add)){
    $result .= $i["doctor_name"];
    
	}   
        if($id == "1")
        {	
	      $insert = mysql_query("SELECT first_name,patient_id,DATE_FORMAT(TimeCreated,'%H:%i:%s') TIMEONLY,TIMEDIFF(now(),TimeCreated) as Totaltime FROM d_patientreg WHERE doctor_name='$result' and track=0 and doctor=0 and DATE(TimeCreated)=DATE(NOW())");
        }
        elseif ($id == "2")
        {        	
	      $insert = mysql_query("SELECT first_name,patient_id,DATE_FORMAT(TimeCreated,'%H:%i:%s') TIMEONLY,TIMEDIFF(now(),TimeCreated) as Totaltime FROM d_patientreg WHERE doctor_name='$result' and track=0 and doctor=1 and DATE(TimeCreated)=DATE(NOW())");        	
        }
        else 
        {
        	$insert = mysql_query("SELECT first_name,patient_id,DATE_FORMAT(TimeCreated,'%H:%i:%s') TIMEONLY,TIMEDIFF(now(),TimeCreated) as Totaltime FROM d_patientreg WHERE doctor_name='$result' and  doctor=2 and DATE(TimeCreated)=DATE(NOW())");
        }
		$my_values = array();
		$my_values1 = array();
		$my_values2 = array();
		$my_values3 = array();
		
while($row = mysql_fetch_array($insert))
{
    $firstname= "{$row['first_name']}" ;
    $patient_id= "{$row['patient_id']}" ;
        $InTime= "{$row['TIMEONLY']}" ;
    $TotalTime= "{$row['Totaltime']}" ;
    
  $my_values[] = $firstname;  
  $my_values1[] = $patient_id;  
   $my_values2[] = $InTime;  
  $my_values3[] = $TotalTime; 
     
                                                           
} 
	  
	 	 	
		echo json_encode(array("firstname"=>$my_values,"p_id"=>$my_values1,"TIMEONLY"=>$my_values2,"TotalTime"=>$my_values3));				
?>

