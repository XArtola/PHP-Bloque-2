<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio6</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

	$a = array (
		"Enero" => ["Mikel","Ainara","Xabi"],
		"Febrero" => ["Irati","Ibai"],
		"Marzo" => ["Haizea"],
		"Abril" => ["Marta","Markel","Marcos"],
		"Mayo" => ["Nahia","Garazi"],
		"Junio" => ["Ane","Noa"],
		"Julio" => ["Oihan"],
		"Agosto" => ["Rakel","Karla","Jon"],
		"Septiembre" => ["Maialen","June","Julen"],
		"Octubre" => ["Nerea","Unai","Naroa"],
		"Noviembre" => ["Ana"],
		"Diciembre" => ["Gorka","Andoni"]
	);

	function nuevoNombre ($array, $mes, $nombre){

		array_push($array[$mes], $nombre);

		print_r($array);

		$cnt = 0;

		foreach ($array as $x) {
			$cnt+=count($x);
		}

		return $cnt;

	}

	$resultado = nuevoNombre($a, 'Noviembre','Gorka');

	$codigo =  "<br> $resultado";

	/*Tabla*/
	
	foreach ($a as $mes => $nombres) {
		echo "<h2 style='color:blue'>".$mes."</h2><ol>";
		foreach ($nombres as $persona) {
			echo "<li>".$persona."</li>";
		}
		echo "</ol>";
	}	

	

?>

<table>

	<tr></tr>

</table>

</body>
</html>