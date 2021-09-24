<?php
	class conexion{
	public function conectar(){ 
			$root        = 'root';
			$password    = '';
			$host        = 'localhost';
			$dbname      = 'dbdukon';
			return $conexion = new PDO("mysql:host=$host;dbname=$dbname;", $root, $password);
		}
	}
?>
