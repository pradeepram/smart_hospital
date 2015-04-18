<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patientname = (string) $_GET["p_name"];		
        $userid = (string) $_GET["userid"];       
        $admission = (string) $_GET["admission"];  

        $select = mysql_query("select p_id from d_patientreg where patient_id='$patientname' and doctor=1 and DATE(TimeCreated)=DATE(NOW())"); 
		$output = mysql_num_rows(@$select);
		if ($output=="0")
		{
        
       if($admission=="0") 

       {
	$add = mysql_query("update d_patientreg set doctor=1,waitingTime=NOW() where patient_id='$patientname' and track=0 and DATE(TimeCreated)=DATE(NOW())");
	
       }
       elseif ($admission=="1")
       {
       	$doc_name = mysql_query("select firstname from m_user where user_id=(SELECT d_id FROM `m_user` where user_id='$userid' )");

       	while($row = mysql_fetch_array($doc_name))
{
    $docname= "{$row['firstname']}" ;
}
$pat=mysql_query("select first_name,phone,DOB,Gender from d_patientreg where patient_id='$patientname'");
       	while($row1 = mysql_fetch_array($pat))
{
    $firstname= "{$row1['first_name']}" ;
    $phone= "{$row1['phone']}" ;
    $dob= "{$row1['DOB']}" ;
    $gender= "{$row1['Gender']}" ;
}
       $aapointmentid=mysql_query("select app_id from t_appointment where patient_id='$patientname' and DATE(appointment_time)=DATE(NOW())");
       	while($rows = mysql_fetch_array($aapointmentid))
{
    $appid= "{$rows['app_id']}" ;
   
}

       	$add = mysql_query("insert into d_patientreg (first_name,phone,DOB,Gender,doctor,doctor_name,patient_id,app_id,user_id,TimeCreated,waitingTime) values('$firstname','$phone','$dob','$gender',1,'$docname','$patientname','$appid','$userid',NOW(),NOW())");
	
	$insert = mysql_query("update  t_appointment set attend=1,updatedBy='$userid',updatedTime=NOW() where patient_id='$patientname' and DATE(appointment_time)=DATE(NOW())");
       }
		
		}
		else {
			
		}
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		
		echo json_encode($check_result);				
?>

