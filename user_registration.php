<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
		$email = (string) $_GET["email"];
		
		
		$password = (string) $_GET["pwd"];
		
$firstname = (string) $_GET["fname"];

$phone  = (string) $_GET["phone"];


$gender = (string) $_GET["gen"];
		$username = (string) $_GET["username"];
		
$role = (string) $_GET["role"];
$department = (string) $_GET["depart"];
$doctor = (string) $_GET["doc"];


		$add = mysql_query("select roleid from m_roles where rolename='$role'");

while ($i = mysql_fetch_array($add)){
    $result .= $i["roleid"];
    echo $result;
}
$add1 = mysql_query("select department_id from m_doctor_department where department_name='$department'");
while ($ii = mysql_fetch_array($add1)){
    $result1 .= $ii["department_id"];
    echo $result1;
}
$add2 = mysql_query("select user_id from m_user where firstname='$doctor'");
while ($iii = mysql_fetch_array($add2)){
    $result2 .= $iii["user_id"];
    echo $result2;
}

	 $add = mysql_query("INSERT INTO m_user(emailaddress,username,password,firstname,phone,Gender,roleid,department_id,d_id) VALUES('$email','$username','$password','$firstname','$phone','$gender','$result','$result1','$result2')");
	 	 	$check_result = mysql_num_rows(@$add);
		
		
		echo $check_result;
		echo json_encode($check_result);		

?>