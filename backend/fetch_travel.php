<?php


$pdo = new PDO('mysql:host=107.180.50.162;dbname=fairPharmDB','fairPharmDBUser','h%XJQY-)J-E['); 

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="SELECT * FROM travel_info ORDER BY entry_time DESC";

$sqlm=$pdo->prepare($sql);

$sqlm->execute();

$rows=$sqlm->fetchAll();


$output='';


foreach($rows as $key)
		{
		
		$ta = $key['distance']*$key['fare_km'];
		$total = $key['da']+($key['distance']*$key['fare_km']);

	$output.='<tr>
				<td>'.$key['date_of_travel'].'</td>
				<td>'.$key['from_'].'</td>
				<td>'.$key['to_'].'</td>
				<td>'.$key['distance'].'</td>
				<td>'.$key['fare_km'].'</td>
				<td>'.$ta.'</td>
				<td>'.$key['travel_status'].'</td>
				<td>'.$key['da'].'</td>
				<td>'.$total.'</td>
				<td>'.$key['remarks'].'</td>
				</tr>';



		}

echo $output;


?>