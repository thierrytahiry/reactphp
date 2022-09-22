<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");

require 'connect.php';



error_reporting(E_ERROR);
$etudients = [];
$sql = "SELECT * FROM etudients";

if($result = mysqli_query($con,$sql))
	{
		$cr = 0;
		while ($row = mysqli_fetch_assoc($result)) {
			$etudients[$cr]['id']= $row['id'];
			$etudients[$cr]['nom'] = $row['nom'];
			$etudients[$cr]['prenom'] = $row['prenom'];
			$etudients[$cr]['email'] = $row['email'];
			$cr++;
		}

		//print_r($etudients);

		echo json_decode($etudients);
	}
	else{
		http_response_code(404);
	}
	?>
