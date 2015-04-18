<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
			header("Content-type: text/plain");

	
		
		$add = mysql_query("SELECT u.user_id,u.emailaddress,u.username,u.firstname,u.phone,u.gender,d.department_name,r.rolename FROM m_user u
left join m_roles r on (r.roleid=u.roleid)
left join m_doctor_department d on(d.department_id=u.department_id)");
		
		$my_values = array();
	$my_values1 = array();
	$my_values2 = array();
	$my_values3 = array();
	$my_values4 = array();
	$my_values5 = array();
	$my_values6 = array();
	$my_values7 = array();
while($row = mysql_fetch_array($add))
{
    $email= "{$row['emailaddress']}" ;
    $uname="{$row['username']}" ;
    $fname="{$row['firstname']}" ;
    $phone= "{$row['phone']}" ;
    $gender="{$row['gender']}" ;
    $dept_name="{$row['department_name']}" ;
    $rolename="{$row['rolename']}" ;
    $userid="{$row['user_id']}" ;
  $my_values[] = $email;
    $my_values1[] = $uname;   
       $my_values2[] = $fname;    
 $my_values3[] = $phone;
    $my_values4[] = $gender;   
       $my_values5[] = $dept_name; 
       $my_values6[] = $rolename; 
       $my_values7[] = $userid; 
       
       
} 		

	
  echo json_encode(array("email"=>$my_values,"uname"=>$my_values1,"fname"=>$my_values2,"phone"=>$my_values3,"gender"=>$my_values4,"dept_name"=>$my_values5,"rolename"=>$my_values6,"userid"=>$my_values7));
		
?>