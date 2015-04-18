<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$identity = (string) $_GET["identity"];	
		$id = (string) $_GET["id"];		
$my_values = array();
  
if($id=="1")
{
 $add = mysql_query("select emailaddress  from m_user where emailaddress='$identity'");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['emailaddress']}" ;
   
  $my_values[] = $return1;
 
                                                               
}
}
elseif ($id=="2")
{
$add = mysql_query("select username from m_user where username='$identity'");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['username']}" ;
   
  $my_values[] = $return1;
  
                                                               
}
} 		
elseif ($id=="3")
{
$add = mysql_query("select patient_id as p_id,first_name,DOB,TimeCreated, (case when date_format(TimeCreated, '%Y-%m-%d') = date_format(curdate(), '%Y-%m-%d') then 1 else 0 end) as Test from d_patientreg where phone='$identity' order by TimeCreated desc");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['p_id']}" ;
    $return2= "{$row['first_name']}" ;
    $return3= "{$row['DOB']}" ;
    $return4="{$row['Test']}" ;
  $my_values[] = $return1;
   $my_values1[] = $return2; 
     $dob[] = $return3;
      $test[] = $return4;
                                                               
}
}
elseif ($id=="4")
{
$add = mysql_query("select p_id,first_name,phone from d_patientreg where DOB='$identity' LIMIT 1");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['p_id']}" ;
    $return2= "{$row['first_name']}" ;
    $return3= "{$row['phone']}" ;
  $my_values[] = $return1;
   $my_values1[] = $return2; 
     $dob[] = $return3;
                                                               
}
} 		
  echo json_encode(array("return1"=>$my_values));
?>

