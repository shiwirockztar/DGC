<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo COMPANY;?></title>
	<?php 
	// include "./vistas/inc/Link.php"; 
	?>
</head>
<body>
	<?php 

		require_once "./controladores/controladorVistas.php";
		$IV = new ControladorVistas();
		$vista=$IV->obtener_vistas_controlador();
		// lista blanca para mostrar sin INCorporados
		if ($vista=="home" || $vista=="404" || $vista=="About") {
			require_once "./vistas/paginas/".$vista."-view.php";
		} 	
		else{ 

	?>
	 <?php 
	 Include "./vistas/inc/header.php";
	 Include "./vistas/inc/nav.php";
	 ?>


	<section><?php include  $vista; ?></section>

	<aside></aside>

	 <?php 
	 Include "./vistas/inc/footer.php";
	 }
	 ?>


	
</body>
</html>