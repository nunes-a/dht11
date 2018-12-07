<?php
if(isset($_POST['temperature'])){
	/*test pour garantir */

	if (!file_put_contents("temperature.txt", $_POST['temperature']))
	/*ce code va ecrire le valeur que nous avons ecrit dans le input avec le name "temperature" dans le fichier "temperature.txt"*/
		echo "erreur";
}
else
	echo "erreur";

?>