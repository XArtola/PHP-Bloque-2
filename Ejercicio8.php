<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio8</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

	function comprobar (){

		try {
			if (!file_exists('config.php'))
				throw new exception("config.php no se ha encontrado");
			
		} catch (Error $e) {
			echo $e->getMessage(), "\n";
		}
	}

	comprobar();

	?>

</body>
</html>