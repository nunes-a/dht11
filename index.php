<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Température</h1>

	<?php
		$json_url = data.txt;
		$json = file_get_contents(json_url);
		$data = json_decode($json, TRUE);
		print_r($data);
	?>
	<p>Il fait </p>

	<img src="imgs/thermometer.jpg">
</body>
</html>