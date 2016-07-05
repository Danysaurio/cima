<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<title>Cima</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
	<div id="login" class="modal">
		<div class="modal-content">
			<h3 class="center unbutu loginTitle">Iniciar sesión</h3>
			<form action="">
				<input type="text" placeholder="Nombre de usuario" id="userName">
				<input type="password" placeholder="Contraseña" id="contraseña">
				<button class="btn waves-effect waves-light" type="submit" name="action">Iniciar sesión
				</button>
				<a href="registro.php"> Registrarme</a>
			</form>
		</div>

	</div>


	<nav class="white menugradient" role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="#" class="brand-logo"><img src="img/logo.png" alt=""></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#">Inicio</a></li>
				<li><a href="#">¿Qué es CIMA? </a></li>
				<li><a href="registro.php">Registrate</a></li>
				<li><a href="#login" class=" modal-trigger">Abrir Sesión</a></li>
				<li><a href="#">Contacto</a></li>
				<li class="face">
					<a href="#"><img src="img/face.png" alt=""></a>
				</li>
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="#">Navbar Link</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>

	<!-- slider -->

	<div class="slider ">
		<ul class="slides">
			<li>
				<img src="img/banners/bannerUno.jpg">
				<!-- random image -->
				<div class="caption left-align">
					<img src="img/banners/logo-banner.jpg" alt="" class="logoBanner">
				</div>
			</li>
			<li>
				<img src="img/banners/bannerDos.jpg">
				<!-- random image
				<div class="caption left-align">
					<h3>Tilte</h3>
					<h5 class="light grey-text text-lighten-3"> slogan.</h5>
				</div>
				 -->
			</li>
		</ul>
	</div>

	<section class="Our-section">
		<h2 class="center our-title">¿Qué es CIMA?</h2>
		<div class="container our-box">
			<div class="section">
				<h4 class="center our-title">Conoce nuestra filosofia aquí</h4>

				<!--   Icon Section   -->
				<div class="row">
					<div class="col s12 m3 our-boxText">
						<div class="icon-block">

							<h5 class="our-title"><img src="img/icono_person.png" alt=""> Nosotros</h5>

							<p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
						</div>
					</div>

					<div class="col s12 m3 our-boxText">
						<div class="icon-block">
							<h5 class="our-title"><img src="img/icono_tiro.png" alt=""> Misión</h5>

							<p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
						</div>
					</div>
					<div class="col s12 m3 our-boxText">
						<div class="icon-block">
							<h5 class="our-title"><img src="img/icono_ojo.png" alt=""> Visión</h5>

							<p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
						</div>
					</div>

					<div class="col s12 m3 our-boxText">
						<div class="icon-block">
							<h5 class="our-title"><img src="img/icono_mono.png" alt=""> Valores</h5>

							<p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		<section class="list">
			<article class="container list-container">
				<div class="title-content">

					<h2 class="center our-title"><img src="img/engranes-01.svg" alt="">¿Comó funciona? </h2>
				</div>
				<ol class="pasos-list">
					<li><span>Escoje</span> el Auto Último Modelo que más te guste.</li>
					<li><span>Contacta</span> a uno de nuestros asesores o Registrate aquí.</li>
					<li><span>Firma</span> y envia los documentos necesarios.</li>
					<li><span>Deposita</span> tu única inversión en cualquiera de las cuentas de la comunidad.</li>
					<li><span>Invita</span> a que dos personas más se unan a nuestra comunidad.</li>
					<li><span>Espera</span> a que tu inversión crezca.</li>
					<li><span>Recibe</span> nuestro aviso y tu Auto Completamente Nuevo.</li>
					<p>
						Descarga nuestra presentación en pdf
						<a href="#!" class="pdf-load"> aquí</a>
					</p>
				</ol>

			</article>
		</section>
	</section>




	<footer class="page-footer teal">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Company Bio</h5>
					<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Settings</h5>
					<ul>
						<li><a class="white-text" href="#!">Link 1</a></li>
						<li><a class="white-text" href="#!">Link 2</a></li>
						<li><a class="white-text" href="#!">Link 3</a></li>
						<li><a class="white-text" href="#!">Link 4</a></li>
					</ul>
				</div>
				<div class="col l3 s12">
					<h5 class="white-text">Connect</h5>
					<ul>
						<li><a class="white-text" href="#!">Link 1</a></li>
						<li><a class="white-text" href="#!">Link 2</a></li>
						<li><a class="white-text" href="#!">Link 3</a></li>
						<li><a class="white-text" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
			</div>
		</div>
	</footer>


	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

</body>

</html>