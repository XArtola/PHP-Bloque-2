<!DOCTYPE html>
<html>

<head>
	<title>Ejercicio1</title>
	<meta charset="utf-8">
</head>

<body>

	<?php

	$naturales = array();
	$factoriales = array();

	for ($i = 0; $i < 10; $i++) {

		array_push($naturales, $i);
		array_push($factoriales, factorial($i));
	}


	function factorial($numero)
	{
		$aux = 1;
		for ($j = 1; $j <= $numero; $j++)
			$aux *= $j;

		return $aux;
	}
	print_r($factoriales);
	?>

</body>

</html>