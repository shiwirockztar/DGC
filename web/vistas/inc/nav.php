	<div class="yan">
	<button class="karma" onclick="myFunction()" style="color: transparent; background-color: transparent; border-color: transparent; cursor: default;"></button>
	</div>		

	

	<script>
		function myFunction() {
			var element = document.body;
			element.classList.toggle("white-mode");
		}
	</script>


	<nav>
		<a id="inicio" href="<?php echo SERVERURL; ?>home">INICIO</a>
	<ul><li><a href="">Promociones</a></li>
		<li><a class="juegos" href="">Juegos</a></li>
		<li><a href="">Pack</a></li>
		<li><a href="">Novedades</a></li>
		<li><a href="<?php echo SERVERURL; ?>login">Registro</a></li>
	</ul>																							
	</nav>