<?php

$pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="SELECT name FROM stockist_details";

$sqlm=$pdo->prepare($sql);

$sqlm->execute();

$rows=$sqlm->fetchAll();


$output='';

foreach($rows as $key)
		{

			$output.=$key['name'].",";

		}

echo $output;


?>