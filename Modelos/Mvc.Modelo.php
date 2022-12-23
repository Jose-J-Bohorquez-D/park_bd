<?php 

class Mvc_Modelo
{
	public static function redireccion_paginas_mdl($url_mdl)
	{
		if ($url_mdl == "salir" ||
			$url_mdl == "tikets" ||
			$url_mdl == "usuarios" ||
			$url_mdl == "parqueaderos" ) {

			$modulo="Vistas/Paginas/".$url_mdl.".php";

		}elseif ($url_mdl = "index") {

			$modulo="Vistas/Paginas/inicio.php";
			
		}else{

			$modulo="Vistas/Paginas/inicio.php";

		}

		return $modulo;

	}
}

 ?>