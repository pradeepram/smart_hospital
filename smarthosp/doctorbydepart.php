<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");									
$department = (string) $_GET["depart"];



$add1 = mysql_query("select department_id from m_doctor_department where department_name='$department'");
while ($ii = mysql_fetch_array($add1)){
    $result1 .= $ii["department_id"]; 
}

	 $add = mysql_query("SELECT firstname FROM m_user where department_id='$result1' and roleid='2'");	 	 	
		$my_values = array();
while($row = mysql_fetch_array($add))
{
    $firstname= "{$row['firstname']}" ;
  $my_values[] = $firstname;                                                                 
} 		
  echo json_encode($my_values);	

?>