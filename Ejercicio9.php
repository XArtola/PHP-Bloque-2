<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio9</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	/*Creación del array*/
	$a =array();
	/*Primeros 4 números positivos al azar*/
	for ($i=0; $i <4 ; $i++) { 
		$a[$i]  = random_int(0, 100);
	}
	/*Último número negativo al azar*/
	$a[4] = random_int(-100, -1);

	function calculaArea ($lado){

		try {

			if($lado < 0)

				throw new Exception ("El lado no puede ser ".$lado. " por ser negativo");

			else
				return "El area del cuadrado con lado ".$lado. " es ". pow($lado, 2);

		} catch (Error $e) {
			echo $e->getMessage(), "\n";
		}
	}

	foreach ($a as $valor) {
		echo calculaArea($valor)."<br>";
	}
	?>

</body>
</html>