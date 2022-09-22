<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: *");

require 'connect.php';
require 'index.php';

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata))
{
	$request = json_decode($postdata);

	//print_r($request);

	//initialisation
	$nom = $request->nom;
	$prenom = $request->prenom;
	$email = $request->email;
 

	//requet

	$sql = "INSERT INTO 'etudients'(
		'nom',
		'prenom',
		'email'
		) VALUES
		('{$nom}',
		'{$prenom}',
		'{$email}')
	";

	if(mysqli_query($con,$sql))
	{
		http_response_code(201);
	}
	else
	{
		http_response_code(422);
	}
}
?>