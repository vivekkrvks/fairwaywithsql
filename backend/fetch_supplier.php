<?php  


session_start();

$pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "SELECT name,location,id FROM stockist_details";

$sqlm = $pdo->prepare($sql);

$sqlm->execute();

$rows = $sqlm->fetchAll();

$output='<option disabled selected value=" ">Name: Location</option>';



foreach ($rows as $key) {
	
	$output.='<option value='.$key['id'].'>'.$key['name'].'  -  '.$key['location'].'</option>';

}


echo $output;






?>                         