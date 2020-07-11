<?php  
	require_once "./modelos/modeloVistas.php";

	class ControladorVistas extends modeloVistas{


		public function obtener_plantilla_controlador(){
			return require_once "vistas/plantilla.php";
			// return require_once "vistas/paginas/home-view.php";
		}
		public function obtener_vistas_controlador(){
			if (isset($_GET['l'])) {
				$ruta=explode("/", $_GET['l']);
				$respuesta=modeloVistas::obtener_vistas_modelo($ruta[0]);
			}
			else{
				// por defecto mostrara la pagina home
				$respuesta="home";
			}
			return $respuesta;
		}

	}
?>