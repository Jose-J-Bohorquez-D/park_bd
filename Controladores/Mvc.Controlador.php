<?php 

class Mvc_Controlador
{

	public function llamado_a_la_plantilla_ctlr()
	{
		require_once("Vistas/Plantilla.php");
	}


	public function redireccion_paginas_ctlr()
	{
		if (isset($_GET['act'])) {

			if (!empty($_GET['act'])) {

				$url_ctlr=$_GET['act'];

			}

		}else{

			$url_ctlr="index";

		}

		$rta_redireccion=Mvc_Modelo::redireccion_paginas_mdl($url_ctlr);
		
		#var_dump($rta_redireccion);

		include_once($rta_redireccion);

	}


}

 ?>