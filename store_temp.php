<?php
	// paramètres
	$filename_temperature = "data.json";
	// récupération des données json
	$data_json = file_get_contents("php://input");
	// verification du json
	$data = json_decode($data_json);
	if (!$data){
		http_response_code(415);
		exit();
	}
	else if (!$data->temperature || !$data->humidite){
		http_response_code(400);
		exit();
	}
	// écriture des données
	$op = file_put_contents($filename_temperature, $data_json);
	// vérification de l'écriture des donées
	if(!$op){
		http_response_code(500);
		exit();
	}
?>