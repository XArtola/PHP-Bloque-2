<!DOCTYPE html>
<html>

<head>
	<title>Ejercicio5</title>
	<meta charset="utf-8">
</head>

<body>

	<?php

	$an = 2020;

	$a = array(
		"Enero" => "",
		"Febrero" => "",
		"Marzo" => "",
		"Abril" => "",
		"Mayo" => "",
		"Junio" => "",
		"Julio" => "",
		"Agosto" => "",
		"Septiembre" => "",
		"Octubre" => "",
		"Noviembre" => "",
		"Diciembre" => ""
	);

	$i=1;
	foreach($a as $clave => $valor){

		$a[$clave] = cal_days_in_month(CAL_GREGORIAN, $i, $an);
		$i++;
	}
	
	print_r($a);
	?>

</body>

</html>