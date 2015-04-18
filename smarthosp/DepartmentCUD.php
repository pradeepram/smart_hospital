
<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$deptid = (string) $_GET["deptid"];
		$deptname = (string) $_GET["deptname"];
		$deptdesc = (string) $_GET["deptdesc"];
		$id = (string) $_GET["id"];	
		
		
			if($id=="1")
			{
        $add1 = mysql_query("delete from m_doctor_department where department_id='$deptid'");
			}
			elseif ($id=="2")
			{
				 $add1 = mysql_query("update m_doctor_department set department_name='$deptname',department_description='$deptdesc' where department_id='$deptid'");
			}
			elseif ($id=="3")
			{
				$select = mysql_query("select department_name from m_doctor_department where department_name='$deptname' and DATE(CreatedTime)=DATE(NOW())"); 
		$output = mysql_num_rows(@$select);
		if ($output=="0")
		{
				 $add1 = mysql_query("insert into m_doctor_department (department_name,department_description) values('$deptname','$deptdesc')");
		}
		else {
			
		}
			}
			else 
			{
				
			}
 $check_result = mysql_num_rows(@$add1);
		
		
		
		echo json_encode($check_result);		
?>

