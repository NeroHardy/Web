<?php  

class MvcControlador{

	#LLAMADA A LA PLANTILLA

	public function plantilla(){

		include "View/template.php";
	}

	#INTERACCION DEL USUARIO
	public function enlacesPaginasController()
	{
		if(isset($_GET["action"]))
		{

		$enlacesController = $_GET["action"];

		}

		else
		{

		$enlacesController = "index";
			
		}

		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

		include $respuesta;

	}
}

?>