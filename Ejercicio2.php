<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio2</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

	$filas = 7;
	$columnas = 3;

	$codigo = "<table border = 1>";

	for ($i = 0; $i <= $filas; $i++) { 

		$codigo.="<tr>";

		for ($j = 0; $j <= $columnas ; $j++)
			$codigo.="<td></td>";

		$codigo.="</tr>";	
	}

	$codigo.="</table>";
	echo "$codigo";
	?>

</body>
</html>