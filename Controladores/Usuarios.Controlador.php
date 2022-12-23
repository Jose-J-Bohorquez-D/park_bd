<?php 


class Usuarios_Controlador
{

	public function mostrar_todos_los_usuarios_ctlr()
	{
		$rta_consulta=Usuarios_Modelo::mostrar_todos_los_usuarios_mdl("usuarios");
		var_dump($rta_consulta);
	}


	public function valida_ingreso_usuario_ctlr()
	{
		if (isset($_POST['usr_ing'])) {
			if (!empty($_POST['usr_ing'])) {
				$datos_form_ing_ctlr=array(
					"usu_ingresado"=>$_POST["usr_ing"],
					"pwd_ingresada"=>$_POST["pwd_ing"]
				);
				$rta_consulta=Usuarios_Modelo::mostrar_todos_los_usuarios_mdl($datos_form_ing_ctlr);
				var_dump($rta_consulta);
			}
		}
	}
}


 ?>