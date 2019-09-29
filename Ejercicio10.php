<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio10</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	class Persona {
		// Declaración de las propiedades
		private $nombre = '';
		private $apellido = '';
		private $dni = '';

		public function __construct($nombre, $apellido, $dni) {

			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->dni = $dni;
		}

		// Declaración de los métodos get y set
		public function getNombre() {
			echo $this->nombre;
		}

		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}

		public function getApellido() {
			echo $this->apellido;
		}

		public function setApellido($apellido) {
			$this->apellido = $apellido;
		}

		public function getDni() {
			echo $this->dni;
		}

		public function setDni($dni) {
			$this->dni = $dni;
		}

		public function mostrarDatos() {
			echo "Persona: ". $this->nombre." ".$this->apellido;
		}
	}

	class User extends Persona {
		private $puntos = 0;
		// Declaración de los métodos get y set
		public function getPuntos() {
			echo $this->puntos;
		}

		public function setPuntos($puntos) {
			$this->puntos = $puntos;
		}
		public function mostrarDatos() {
			echo "User: ". $this->nombre." ".$this->apellido;
		}

		public function comprobarPuntos() {

			if ($this->puntos >= 100)
				echo "Has ganado el juego!!";
		}
	}

	?>

</body>
</html>