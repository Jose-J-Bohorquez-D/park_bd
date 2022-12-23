<?php 

require_once("cfg_con.php");

class Usuarios_Modelo extends Conexion_BD
{

	public static function mostrar_todos_los_usuarios_mdl($tablaMdl)
	{
		$stmt=Conexion_BD::conectar_bd()->prepare("SELECT * FROM $tablaMdl");
		#return ($stmt->execute()) ? "lectura de datos exitosa" : "imposible leer datos" ;
		return ($stmt->execute()) ? $stmt->fetchAll() : "imposible leer datos" ;
	}


	public function valida_ingreso_usuario_ctlr($datos_mdl)
	{
		$stmt=Conexion_BD::conectarbd()->prepare("SELECT * FROM usuarios");
		($stmt->execute()) ? $stmt->fetchAll() : "paila";
	}
}

 ?>