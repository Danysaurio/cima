<!DOCTYPE html>
<nav class="white menugradient" role="navigation">
	<div class="nav-wrapper container">
		<a id="logo-container" href="#" class="brand-logo"><img src="img/logo.png" alt=""></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="#">¿Qué es CIMA? </a></li>
			<li><a href="registro.php">Registrate</a></li>
			<?php
				if(!isset($_SESSION["sesionAbierta"])){
				?>
				<li><a href="#login" class=" modal-trigger">Abrir Sesión</a></li>
				<?php
		    	}else{
		    	?>
					<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
					<?php
		    	}
		    	?>
						<li><a href="#">Contacto</a></li>
						<li class="face">
							<a href="#" class="menu-face"><img src="img/face.png" alt=""></a>
						</li>
		</ul>

		<ul id="nav-mobile" class="side-nav">
			<li><a href="#">Navbar Link</a></li>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="#">¿Qué es CIMA? </a></li>
			<li><a href="registro.php">Registrate</a></li>
			<?php
				if(!isset($_SESSION["sesionAbierta"])){
				?>
				<li><a href="#login" class=" modal-trigger">Abrir Sesión</a></li>
				<?php
		    	}else{
		    	?>
					<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
					<?php
		    	}
		    	?>
						<li><a href="#">Contacto</a></li>
						<li class="face">
							<a href="#"><img src="img/face.png" alt=""></a>
						</li>
		</ul>
		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	</div>
</nav>