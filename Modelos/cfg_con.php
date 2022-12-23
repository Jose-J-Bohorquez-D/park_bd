<?php 

class Conexion_BD
{
	public static function conectar_bd()
	{
		$con = new PDO('mysql:host=localhost;dbname=parking_bd', "root", "");
		return $con;
	}
}


#$test_conexion = new Conexion_BD; $test_conexion->conectarbd(); var_dump($test_conexion); print_r($test_conexion);
 ?>