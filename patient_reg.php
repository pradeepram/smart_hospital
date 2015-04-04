<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
$firstname = (string) $_GET["fname"];
$phone  = (string) $_GET["ph"];
$DOB  = (string) $_GET["dob"];
$userid = (string) $_GET["userid"];
$patientid = (string) $_GET["patent_id"];
$doctor = (string) $_GET["doctor"];
$department = (string) $_GET["department"];
$test=json_decode(stripslashes($_GET["test"]));
	
	
	 $add = mysql_query("INSERT INTO d_patientreg(first_name,phone,DOB,user_id,patient_id,doctor_name) VALUES('$firstname','$phone','$DOB','$userid','$patientid','$doctor')");
	 if ($doctor == "undefined")
	 {
	 $doc = mysql_query("INSERT INTO t_dr_test(patient_name,test,createdBy) VALUES('$firstname','on','$userid')");
	 $tid = mysql_query("select t_id from t_dr_test where patient_name='$firstname' and DATE(TimeUpdated)=DATE(NOW())");

while ($i = mysql_fetch_array($tid)){
    $result .= $i["t_id"];
    echo $result;
}
	 foreach($test as $d){
   $test_values = mysql_query("INSERT INTO t_dr_lab(t_id,c_id) VALUES('$result','$d')");   
  }	 	
	 }	 
	 else 
	 {
	 	
	 }
	 
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		
		echo json_encode($check_result);				
?>