<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio3</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

	$a = array ( );

	for ($i = 0; $i <= 19; $i++) { 

		$a[$i] = rand (0 , 300);
	}

	print_r($a);

	sort($a);

	echo "<h1 style='color:blue'>".$a[0]."</h1>";

	echo "<h1 style='color:green'>".$a[count($a)-1]."</h1>";

	echo "<h1 style='color:red'> Suma: ".array_sum($a)." Media: ".array_sum($a)/count($a)."</h1>";

	print_r($a);
	?>

</body>
</html>