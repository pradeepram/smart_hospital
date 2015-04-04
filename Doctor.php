<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patientname = (string) $_GET["p_name"];				
        $userid = (string) $_GET["userid"];  
        $tests =  (string) $_GET["test"];      
		$admission = (string) $_GET["admission"];				
        $admitdate=  (string) $_GET["admitdate"];
        $surgery = (string) $_GET["surgery"];				
        $surgerydate=  (string) $_GET["surgerydate"];        
        $pharmacy=  (string) $_GET["phar"];
       $child =  json_decode(stripslashes($_GET["child"]));
      
$doctor = mysql_query("INSERT INTO t_dr_test(doctor_name,patient_name,test,admission,admit_date,surgery,surgery_date,pharmacy,createdBy) VALUES('$userid','$patientname','$tests','$admission','$admitdate','$surgery','$surgerydate','$pharmacy','$userid') ");

$tid = mysql_query("select t_id from t_dr_test where doctor_name='$userid' and patient_name='$patientname' and DATE(TimeUpdated)=DATE(NOW())");

while ($i = mysql_fetch_array($tid)){
    $result .= $i["t_id"];
    echo $result;
}

if ($tests == "on") {	
foreach($child as $d){
   $test_values = mysql_query("INSERT INTO t_dr_lab(t_id,c_id) VALUES('$result','$d')");   
  }	 	  
} 

$update = mysql_query("update  d_patientreg set doctor='2'  where first_name='$patientname' and DATE(TimeCreated)=DATE(NOW())");
	 	 	$check_result = mysql_num_rows(@$test_values);
		
		
		echo $check_result;
		echo json_encode($check_result);	
			
?>

