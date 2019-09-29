<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio7</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

	function potencia ($base, $exponente = 2){

		return pow($base, $exponente);
	}

	
	$resultado = potencia(2,4);
	echo "$resultado";

	?>

</body>
</html>