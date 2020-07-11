<?php  
	class ModeloVistas{
		protected static function obtener_vistas_modelo($vistas){
			$listaBlanca=["leo","login"];
			if (in_array($vistas, $listaBlanca)) {
				if (is_file("./vistas/paginas/".$vistas."-view.php")) {
					$contenido="./vistas/paginas/".$vistas."-view.php";
				}
				else{$contenido="404";}
			}
			// lista blanca de paginas que no tienen estilo INCorporado (barras de navegacion,footer...)
			elseif ($vistas=="About"||$vistas=="Asist") {
				// $contenido="login";
				$contenido=$vistas;
			}
			elseif ($vistas=="home"||$vistas=="index") {
				// $contenido="login";
				$contenido="home";
			}
			else{$contenido="404";}
			return $contenido;
		}
	}
?>