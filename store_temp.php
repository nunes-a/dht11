<?php
if(isset($_POST['temperature'])){
	file_put_contents("temperature.txt", $_POST['temperature']);
}


/*
$fichier = fopen('temperature.txt', 'w+');
$texte = $_POST["temperature"];
fwrite ($fichier, $texte);
fclose ($fichier);
*/

echo $_POST["temperature"];
?>