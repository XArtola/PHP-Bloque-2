<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio15</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

	$str = "manzana pera limón sandía melón";

	$palabras = array();

	$aux = explode(' ', $str);

	for ($i = 0; $i < count($aux); $i++)
		
		$palabras[$aux[$i]] = strlen($aux[$i]);

	print_r($palabras);

	?>

</body>
</html>