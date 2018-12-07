<?php
/*
if(isset($_POST['temperature'])){
	if (!file_put_contents("temperature.txt", $_POST['temperature']))
	echo "erreur";
}
else
	echo "erreur";
*/

if(isset($_POST["temperature"])){
	$temperature = $_POST["temperature"];
	$filename_temperature = "data.json";

	$op = file_put_contents($filename_temperature, $temperature);
	if(!$op){
		echo "store error";
	}
}
else{ 
	"data error";
}
?>