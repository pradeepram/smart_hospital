<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbconfig.php');
		
		header("Content-type: text/plain");
	
		$patient = (string) $_GET["patient"];		
        

 $add = mysql_query("SELECT p.d_id,p.MedicineName,p.price,t.quantity,t.quantity*p.price as total FROM d_pharma p left Join test t on (t.d_id=p.d_id) where t.patient_name='$patient'");

$add1 = mysql_query("SELECT sum(t.quantity*p.price) as grandtotal FROM d_pharma p left Join test t on (t.d_id=p.d_id) where t.patient_name='$patient'");

$my_values = array();
$medicine = array();
$price = array();
$qty = array();
$total = array();
$grtot = array();
while($row = mysql_fetch_array($add))
{
    $id= "{$row['d_id']}" ;
    $medicinename= "{$row['MedicineName']}" ;
      $prices= "{$row['price']}" ;
      $qt= "{$row['quantity']}" ;
    $tot= "{$row['total']}" ;
  $my_values[] = $id;
   $medicine[] = $medicinename; 
   $price[]=$prices;
   $qty[]=$qt;
   $total[]=$tot;  
                                                               
} 	
while($row1 = mysql_fetch_array($add1))
{
    $grandtotal= "{$row1['grandtotal']}" ;    
   $grtot[]=$grandtotal;  
                                                               
} 	
  echo json_encode(array("id"=>$my_values,"medicinename"=>$medicine,"price"=>$price,"quantity"=>$qty,"tot"=>$total,"grtot"=>$grtot));
?>

