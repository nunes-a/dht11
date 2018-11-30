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
	?>

	<p> il fait <?php echo $data->temperature; ?> °C avec <?php echo $data->humidite; ?>% d'humidité. Le 30/11/2018</p>

	<div id="thermometer">
	<div id="bargraph"></div>

</body>
</html>