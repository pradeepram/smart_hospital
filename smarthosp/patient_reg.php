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
$vip = (string) $_GET["vip"];
$department = (string) $_GET["department"];
$gender = (string) $_GET["gender"];
$emergency = (string) $_GET["emergency"];
$emergency_value = (string) $_GET["emergency_value"];
$test=json_decode(stripslashes($_GET["test"]));



$select = mysql_query("select patient_id from d_patientreg where patient_id='$patientid' and track=0 and DATE(TimeCreated)=DATE(NOW())"); 
		$output = mysql_num_rows(@$select);
		if ($output=="0")
		{
		 
			if ($doctor=="undefined")
		{
			
			$add = mysql_query("INSERT INTO d_patientreg(first_name,phone,DOB,gender,user_id,patient_id,doctor_name,vip,emergency,patient_status,updatedTime,TimeCreated) VALUES('$firstname','$phone','$DOB','$gender','$userid','$patientid',NULL,'$vip','$emergency','$emergency_value',NOW(),NOW())");
		}
		else {
			$doctor1=$doctor;
			$add = mysql_query("INSERT INTO d_patientreg(first_name,phone,DOB,gender,user_id,patient_id,doctor_name,vip,emergency,patient_status,updatedTime,TimeCreated) VALUES('$firstname','$phone','$DOB','$gender','$userid','$patientid','$doctor','$vip','$emergency','$emergency_value',NOW(),NOW())");
		}
	 $details = mysql_query("select p_id from d_patientreg where patient_id='$patientid' and track=0 and DATE(TimeCreated)=DATE(NOW())");
		while ($i = mysql_fetch_array($details)){
    $results .= $i["p_id"];
   
}
	 if ($doctor == "undefined")
	 {
	 $doc = mysql_query("INSERT INTO t_dr_test(p_id,patient_name,test,admit_date,surgery_date,createdBy,TimeUpdated) VALUES('$results','$firstname','on',NULL,NULL,'$userid',NOW())");
	 $tid = mysql_query("select t_id from t_dr_test where patient_name='$firstname' and DATE(TimeUpdated)=DATE(NOW())");

while ($i = mysql_fetch_array($tid)){
    $result .= $i["t_id"];
   
}
	 foreach($test as $d){
   $test_values = mysql_query("INSERT INTO t_dr_lab(t_id,c_id,createdBy,TimeCreated) VALUES('$result','$d','$userid',NOW())");   
  }	 	
	 }	 
	 else 
	 {
	 	
	 }
		}
		else 
		{
			
		} 
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		
		echo json_encode($check_result);				
?>