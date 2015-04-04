
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
		$username = (string) $_GET["username"];
		$userid = (string) $_GET["userids"];	
			$id = (string) $_GET["id"];
		
			if($id=="1")
			{
        $add1 = mysql_query("delete from m_doctor_department where department_id='$userid'");
			}
			elseif ($id=="2")
			{
				 $add1 = mysql_query("update m_user set emailaddress='$email',username='$username',password='$password',firstname='$firstname',phone='$phone' where user_id='$userid'");
			}
		
			else 
			{
				
			}
  echo json_encode();
?>

