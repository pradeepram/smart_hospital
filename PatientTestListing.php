<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patient = (string) $_GET["patient"];	
			$test = (string) $_GET["test"];	
			
        $add1 = mysql_query("select m_id from master where name='$test'");
while ($i = mysql_fetch_array($add1)){
    $result .= $i["m_id"];
   

 $add = mysql_query("select * from m_lab where m_id in 
(SELECT m_id FROM m_dr_test where m_id ='$result' and patient_name = '$patient')
and c_id not in (select c_id from m_dr_lab where t_id in (SELECT t_id FROM m_dr_test where m_id = '$result' and patient_name = '$patient'))
 ");
}

$my_values = array();
$my_values1 = array();
while($row = mysql_fetch_array($add))
{
    $childname= "{$row['child_name']}" ;
    $m_id= "{$row['c_id']}" ;
  $my_values[] = $childname;
   $my_values1[] = $m_id;   
                                                               
} 		
  echo json_encode(array("childname"=>$my_values,"mid"=>$my_values1));
?>

