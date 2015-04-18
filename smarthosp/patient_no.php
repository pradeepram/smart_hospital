<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$identity = (string) $_GET["identity"];	
		$id = (string) $_GET["id"];		
$my_values = array();
$my_values1 = array();
$dob = array(); 
$test=array(); 
 $track=array();
 $emergency=array();
  $fee=array(); 
   $pid = array();        
if($id=="1")
{
 $add = mysql_query("select first_name,phone,DOB,TimeCreated,track,emergency,(case when date_format(TimeCreated, '%Y-%m-%d') = date_format(curdate(), '%Y-%m-%d') then 1 else 0 end) as Test from d_patientreg where patient_id='$identity' order by TimeCreated desc");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['first_name']}" ;
    $return2= "{$row['phone']}" ;
    $return3= "{$row['DOB']}" ;
    $return4="{$row['Test']}" ;
    $return5="{$row['track']}" ;
    $return6="{$row['emergency']}" ;
  $my_values[] = $return1;
   $my_values1[] = $return2; 
     $dob[] = $return3;
     $test[] = $return4;
      $track[] = $return5;
      $fee[] = $return6;
                                                          
}
}
elseif ($id=="2")
{
$add = mysql_query("select p_id,phone,DOB from d_patientreg where first_name='$identity'  LIMIT 1");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['p_id']}" ;
    $return2= "{$row['phone']}" ;
    $return3= "{$row['DOB']}" ;
  $my_values[] = $return1;
   $my_values1[] = $return2; 
     $dob[] = $return3;
                                                               
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
 		elseif ($id=="5")
{
$add = mysql_query("select p_id,first_name,phone from d_patientreg where patient_id='$identity' LIMIT 1");
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
 		elseif($id=="6")
{
 $add = mysql_query("select p.p_id,p.first_name,p.phone,p.DOB,p.TimeCreated,p.doctor_name,p.track,dr.fee, (case when date_format(p.TimeCreated, '%Y-%m-%d') = date_format(curdate(), '%Y-%m-%d') then 1 else 0 end) as Test from d_patientreg p
left join m_dr_charges dr on (dr.doctor_name=p.doctor_name)
where patient_id='$identity' order by TimeCreated desc");
while($row = mysql_fetch_array($add))
{
    $return1= "{$row['first_name']}" ;
    $return2= "{$row['phone']}" ;
    $return3= "{$row['DOB']}" ;
    $return4="{$row['Test']}" ;
    $return5="{$row['track']}" ;
    $return6="{$row['fee']}";
    $return7="{$row['p_id']}";
  $my_values[] = $return1;
   $my_values1[] = $return2; 
     $dob[] = $return3;
     $test[] = $return4;
      $track[] = $return5;
      $fee[] = $return6;
       $pid[] = $return7;                                                        
}
} 		
  echo json_encode(array("return1"=>$my_values,"return2"=>$my_values1,"return3"=>$dob,"return4"=>$test,"return5"=>$track,"return6"=>$fee,"return7"=>$pid));
?>

