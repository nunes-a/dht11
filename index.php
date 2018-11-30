<!DOCTYPE html>
<html>
<head>
	<title>thermometer</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h1>Température</h1>

	<?php
		$json_url = "data.txt";
		$json = file_get_contents($json_url);
		$data = json_decode($json);

		$baragraph_height = 161 + $data->temperature * 4;
		$baragraph_top = 315 - $data->temperature * 4;
	?>

	<p> il fait <?php echo $data->temperature; ?> °C avec <?php echo $data->humidite; ?>% d'humidité. Le 30/11/2018</p>

	<div id="thermometer">
		<div id="baragraph" style="height:<?php echo $baragraph_height; ?>px; top:<?php echo $baragraph_top; ?>px;"></div>
	</div>

</body>
</html>