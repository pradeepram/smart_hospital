<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$id = (string) $_GET["id"];		
        



if ($id == "1") {
	 $add = mysql_query("SELECT first_name FROM d_patientreg WHERE doctor=0 and track=0 and DATE(TimeCreated)=DATE(NOW()) ");	 
}
elseif ($id == "2")
{
 $add = mysql_query("SELECT first_name FROM d_patientreg WHERE physician=0 and track=0 and DATE(TimeCreated)=DATE(NOW()) ");
}
elseif ($id == "3")
{
 $add = mysql_query("SELECT firstname as first_name  FROM m_user where roleid='2'");
}
elseif ($id == "4")
{
 $add = mysql_query("SELECT name as first_name FROM m_catogories");
}
elseif ($id == "5")
{
 $add = mysql_query("select concat(t.patient_name,' - ',p.patient_id) as first_name  from t_dr_test t 
left join d_patientreg p on (p.first_name=t.patient_name)
where t.t_id in (select distinct(t_id) from t_dr_lab where test_result=0 and DATE(TimeCreated)=DATE(NOW())) and DATE(TimeUpdated)=DATE(NOW()) group by t.patient_name");
}
elseif ($id == "7")
{
	$add = mysql_query("SELECT concat(t.patient_name,' - ',p.patient_id) as first_name FROM t_dr_test t left join d_patientreg p on (p.first_name=t.patient_name) WHERE pharmacy=1 and Medicine_Collected=0 and DATE(TimeUpdated)=DATE(NOW()) group by t.patient_name");
}
elseif ($id == "8")
{
	$add = mysql_query("SELECT department_name as first_name FROM m_doctor_department where department_id in (SELECT department_id FROM m_user group by department_id) ");
}
elseif ($id == "9")
{
	$add = mysql_query("SELECT firstname as first_name FROM m_user where roleid='2'  and firstname not in (select doctor_name from m_dr_charges)");
}
elseif ($id == "10")
{
	$add = mysql_query("SELECT firstname as first_name FROM `m_user` where roleid=2 ");
}
elseif ($id == "11")
{
	$add = mysql_query("SELECT department_name as first_name FROM m_doctor_department");
}
elseif ($id == "12"){
	$add = mysql_query("select concat(p.first_name,' - ',p.patient_id) as first_name  from t_dr_test t 
left join d_patientreg p on (p.p_id=t.p_id)
where  DATE(t.admit_date)=DATE(NOW()) and t.p_id not in (select p_id from t_admission)");
}
elseif ($id == "13"){
	$add = mysql_query("select concat(first_name,' - ',patient_id) as first_name  from d_patientreg  where p_id in (select p_id from t_admission where outAmount=0 and UpdatedBy=0)");
}
elseif ($id == "14"){
	$add = mysql_query("select concat(first_name,' - ',patient_id) as first_name  from d_patientreg where p_id in (select p_id from t_dr_test where DATE(surgery_date)=DATE(NOW()) and p_id not in (select p_id from t_surgery))");
}
else {
	$add = mysql_query("SELECT first_name FROM d_patientreg WHERE lab=0 and track=0 and DATE(TimeCreated)=DATE(NOW()) ");	
}
$my_values = array();
while($row = mysql_fetch_array($add))
{
    $firstname= "{$row['first_name']}" ;
  $my_values[] = $firstname;                                                                 
} 		
  echo json_encode($my_values);
?>

