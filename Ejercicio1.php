<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio1</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

	$naturales =[0,1,2,3,4,5,6,7,8,9];
	$factoriales = [1,1,1,1,1,1,1,1,1,1];

	for ($i = 0; $i < count($naturales); $i = $i + 1) { 

		for ($j = 1; $j <= $naturales[$i] ; $j = $j + 1)
			$factoriales[$i] *= $j;

	}

	print_r($factoriales)
	?>

</body>
</html>