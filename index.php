<!DOCTYPE html>
<html>
<head>
	<title>thermometer</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h1>Température</h1>

	<p>
		<?php
			/*$json_url = "data.txt";
			$json = file_get_contents($json_url);*/
			$MaVarAvecContTxt = file_get_contents("data.txt");
			/*ce code est le même que le code au dessus*/
			$objJson = json_decode($MaVarAvecContTxt);
			/*convertir le texte json en object php que je met de dans ma variable*/
			echo "Il fait ".$objJson->temperature."°C avec ".$objJson->humidite."% d'humidité.";
			/*afficher le phrase avec les proprietes de l'object (objJson)*/
			echo "<br>Dernière modification du fichier à " . date ("d/m/Y H:i:s", filemtime("data.txt"));
			/*afficher le date et heure de la derniére modification du fichier data.txt. Avec le "__FILE__" est la date et heure de modification du fichier .html*/

			$baragraph_height = 161 + $objJson->temperature * 4;
			$baragraph_top = 315 - $objJson->temperature * 4;
			/*nous avons pris 20 comme ref. je regarde que ça correspond à 5deg sur l'affichage donc je besoin de multiplier par 4;
			est necessaire diminuer le top pour monter le haut de l'affichage*/
		?>
	</p>

	<div id="thermometer">
		<div id="baragraph" style="height:<?php echo $baragraph_height; ?>px; top:<?php echo $baragraph_top; ?>px;"></div>
	</div>

</body>
</html>