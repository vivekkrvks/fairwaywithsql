<?php  


session_start();


$pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "SELECT id,name,packing,selling_price,mrp FROM medicine_details";

$sqlm = $pdo->prepare($sql);

$sqlm->execute();

$rows = $sqlm->fetchAll();

// $output='<option disabled selected value=" " id="cli">Medicine name </option>';

$output = '';

foreach ($rows as $key) {
	
	$output.='<option value='.$key['id'].'  '.' id="'.$key['mrp'].'">'.$key['name'].'  -  '.$key['packing']."&emsp;(Selling Price :  ".$key['selling_price'].')</option>';
}


echo $output;






?>                         