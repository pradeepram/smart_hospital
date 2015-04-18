<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");					
        $userid = (string) $_GET["userid"];  
        $id=     (string) $_GET["id"];  
               $add = mysql_query("select firstname as doctor_name from m_user where user_id=(SELECT d_id FROM m_user where user_id='$userid')");
	
	while ($i = mysql_fetch_array($add)){
    $result .= $i["doctor_name"];
    
	}   
        if($id == "1")
        {	
	      $insert = mysql_query("SELECT first_name,patient_id,DATE_FORMAT(TimeCreated,'%H:%i:%s') TIMEONLY,TIMEDIFF(now(),TimeCreated) as Totaltime,'0' as admission FROM d_patientreg 
WHERE doctor_name='$result' and track=0 and doctor=0 and DATE(TimeCreated)=DATE(NOW())

union all

SELECT p.first_name,a.patient_id,DATE_FORMAT(a.appointment_time,'%H:%i:%s') TIMEONLY, 
case
when TIME_TO_SEC(TIMEDIFF(now(),a.appointment_time)) >0
then TIMEDIFF(now(),a.appointment_time)
else '00:00:00'
end as Totaltime,
'1' as admission FROM t_appointment  a
left join d_patientreg p on (p.patient_id=a.patient_id)
where DATE(a.appointment_time)=DATE(NOW()) and a.doctor_name='$result' and attend='0'");
        }
        elseif ($id == "2")
        {        	
	      $insert = mysql_query("SELECT first_name,patient_id,DATE_FORMAT(TimeCreated,'%H:%i:%s') TIMEONLY,TIMEDIFF(now(),waitingTime) as Totaltime FROM d_patientreg WHERE doctor_name='$result' and track=0 and doctor=1 and DATE(TimeCreated)=DATE(NOW())");        	
        }
        elseif ($id == "4")
        {
        	$insert = mysql_query("SELECT d.first_name,d.patient_id,DATE_FORMAT(d.TimeCreated,'%H:%i:%s') TIMEONLY,TIMEDIFF(now(),p.createdTime) as Totaltime FROM d_patientreg d
left join t_payment p on (p.p_id=d.p_id)
WHERE d.doctor_name='$result' and d.track=0 and d.doctor=3 and DATE(d.TimeCreated)=DATE(NOW())");
        }
         elseif ($id == "5")
        {
        	$insert = mysql_query(" select `p_id` as Totaltime, `first_name`,`patient_id`,admission
from
(
select `p_id`, `first_name`,`patient_id`,max(`TimeCreated`),'lab' as admission from
(
select *,'lab' as result from d_patientreg
where p_id in (
    select p_id from t_dr_test where t_id in (
        SELECT distinct(t_id) FROM `t_dr_lab` where test_result=0))
        and date_format(TimeCreated, '%Y-%m-%d') between DATE_FORMAT(now()- interval 30 day,'%Y-%m-%d') and date_format(curdate()-1, '%Y-%m-%d')
    ) as d
    group by
    patient_id
union
select `p_id`, `first_name`,`patient_id`,max(`TimeCreated`),'admission' as admission from
(   
select *,'admission' as result from d_patientreg where p_id in (

select p_id from t_dr_test where DATE(admit_date)<=DATE(NOW()) and p_id not in (SELECT p_id FROM t_admission))
 and date_format(TimeCreated, '%Y-%m-%d') between DATE_FORMAT(now()- interval 30 day,'%Y-%m-%d') and date_format(curdate()-1, '%Y-%m-%d')
  ) as d
group by
patient_id
union 
select `p_id`, `first_name`,`patient_id`,max(`TimeCreated`),'surgery' as admission from
(  
select *,'surgery' as result from d_patientreg 
where p_id in (

select p_id from t_dr_test where DATE(surgery_date)<=DATE(NOW()) and p_id not in (SELECT p_id FROM t_surgery))
 and date_format(TimeCreated, '%Y-%m-%d') between DATE_FORMAT(now()- interval 30 day,'%Y-%m-%d') and date_format(curdate()-1, '%Y-%m-%d')
  ) as d
    group by
    patient_id
    
    
    union 
 select `p_id`, `first_name`,`patient_id`,max(`TimeCreated`),'appointment' as admission from
(  
select *,'appointment' as result from d_patientreg 
where patient_id in 
 (SELECT patient_id FROM `t_appointment` where DATE(appointment_time)<=DATE(NOW()) and app_id not in 
 (select app_id from d_patientreg where app_id IS NOT NULL)) 
 
  and date_format(TimeCreated, '%Y-%m-%d') between DATE_FORMAT(now()- interval 30 day,'%Y-%m-%d') and date_format(curdate()-1, '%Y-%m-%d')
) as d
group by
patient_id
)m
where (`p_id`,`admission`) not in (select `p_id`,`reason` from t_followup where follow=1
or 
(follow=0 and (current_date <`follow_date` or current_date >DATE_FORMAT(now()- interval 30 day,'%Y-%m-%d'))))
union 
SELECT 
pr.`p_id`, 
pr.`first_name`,
pr.`patient_id`,
fp.reason as `admission`
FROM `t_followup` fp
join d_patientreg pr on (pr.`p_id`=fp.`p_id`)
where `follow_date`<= CURRENT_DATE()
and follow =0
and date_format(now(), '%Y-%m-%d') between  DATE_FORMAT(`follow_date`,'%Y-%m-%d') and DATE_FORMAT(`follow_date`+ interval 30 day,'%Y-%m-%d')");
        }
        else 
        {
        	$insert = mysql_query("SELECT first_name,patient_id,DATE_FORMAT(TimeCreated,'%H:%i:%s') TIMEONLY,TIMEDIFF(now(),visitedTime) as Totaltime FROM d_patientreg WHERE doctor_name='$result' and  doctor=2 and DATE(TimeCreated)=DATE(NOW())");
        }
		$my_values = array();
		$my_values1 = array();
		$my_values2 = array();
		$my_values3 = array();
		$my_values4 = array();
while($row = mysql_fetch_array($insert))
{
    $firstname= "{$row['first_name']}" ;
    $patient_id= "{$row['patient_id']}" ;
        $InTime= "{$row['TIMEONLY']}" ;
    $TotalTime= "{$row['Totaltime']}" ;
    $admission="{$row['admission']}" ;
    
  $my_values[] = $firstname;  
  $my_values1[] = $patient_id;  
   $my_values2[] = $InTime;  
  $my_values3[] = $TotalTime; 
     $my_values4[] = $admission;
                                                           
} 
	  
	 	 	
		echo json_encode(array("firstname"=>$my_values,"p_id"=>$my_values1,"TIMEONLY"=>$my_values2,"TotalTime"=>$my_values3,"admission"=>$my_values4));				
?>

