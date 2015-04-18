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
        $device=  (string) $_GET["device"];        
        $deviceid=  (string) $_GET["deviceid"];
       $child =  json_decode(stripslashes($_GET["child"]));
        $dischargedate=  (string) $_GET["dischargedate"];
      
       
       $select = mysql_query("select t_id from t_dr_test where patient_name='$patientname' and DATE(TimeUpdated)=DATE(NOW())"); 
		$output = mysql_num_rows(@$select);
		if ($output=="0")
		{
		 $details = mysql_query("select p_id from d_patientreg where first_name='$patientname' and track=0 and DATE(TimeCreated)=DATE(NOW())");
		while ($i = mysql_fetch_array($details)){
    $results .= $i["p_id"];
   
}
$doctor = mysql_query("INSERT INTO t_dr_test(p_id,patient_name,test,admission,admit_date,discharge_date,surgery,surgery_date,device,device_id,pharmacy,createdBy,TimeUpdated) VALUES('$results','$patientname','$tests','$admission',str_to_date('$admitdate','%m/%d/%Y'),str_to_date('$dischargedate','%m/%d/%Y'),'$surgery',str_to_date('$surgerydate','%m/%d/%Y'),'$device','$deviceid','$pharmacy','$userid',NOW()) ");

$tid = mysql_query("select t_id from t_dr_test where createdBy='$userid' and patient_name='$patientname' and DATE(TimeUpdated)=DATE(NOW())");

while ($i = mysql_fetch_array($tid)){
    $result .= $i["t_id"];
    echo $result;
}

if ($tests == "on") {	
foreach($child as $d){
   $test_values = mysql_query("INSERT INTO t_dr_lab(t_id,c_id,createdBy,TimeCreated) VALUES('$result','$d','$userid',NOW())");   
  }	 	  
} 

$update = mysql_query("update  d_patientreg set doctor='2',visitedTime=NOW()  where first_name='$patientname' and DATE(TimeCreated)=DATE(NOW())");
		}
		else {
			
		}
	 	 	$check_result = mysql_num_rows(@$select);
		
		
		
		echo json_encode($check_result);	
			
?>

