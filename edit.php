<?php 
require 'connect.php';


$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($php))
{
	$request = json_decode($postdata);

	$id = $_GET['id'];
	$nom = $request->nom;
	$prenom = $request->prenom;
	$email = $request->email;


	$sql = "UPDATE 'etudients' SET 'nom'='$nom', 'prenom' = '$prenom', 'email' = '$email' WHERE 'id' = '{$id}' LIMIT 1";

	if (mysqli_query($con, $sql)) {
		http_response_code(204);
	}
	else
	{
		return http_response_code(422);
	}
}