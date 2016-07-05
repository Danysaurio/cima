<?php
session_start();
?>
	<!DOCTYPE html>
	<html lang="es">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		<title>Cima</title>

		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="galery/css/least.min.css" rel="stylesheet" />
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
	</head>

	<body>
		<?php require("inicioSesion.php"); ?>


			<?php require("menu.php"); ?>


				<!-- slider -->

				<div class="slider ">
					<ul class="slides">
						<li>
							<img src="img/banners/bannerUno.jpg">

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

				<section id="least" class="container">
					<h2 class="center our-title title-sesion">Galería</h2>

					<!-- Least Gallery: Fullscreen Preview -->
					<div class="least-preview"></div>

					<!-- Least Gallery: Thumbnails -->
					<ul class="least-gallery">
						<!-- 1th thumbnail -->
						<li>
							<a href="galery/media/big/01.jpg" data-subtitle="View Picture" data-caption="Now it's possibe to add an URL-Link into caption text - <a href='http://www.google.com' target='_blank'>GOOGLE</a>">
								<img src="galery/media/thumbnails/01.jpg" alt="Alt Image Text" />
							</a>
						</li>
						<li>
							<a href="galery/media/big/01.jpg" data-subtitle="View Picture" data-caption="Now it's possibe to add an URL-Link into caption text - <a href='http://www.google.com' target='_blank'>GOOGLE</a>">
								<img src="galery/media/thumbnails/01.jpg" alt="Alt Image Text" />
							</a>
						</li>
						<li>
							<a href="galery/media/big/01.jpg" data-subtitle="View Picture" data-caption="Now it's possibe to add an URL-Link into caption text - <a href='http://www.google.com' target='_blank'>GOOGLE</a>">
								<img src="galery/media/thumbnails/01.jpg" alt="Alt Image Text" />
							</a>
						</li>
						<li>
							<a href="galery/media/big/01.jpg" data-subtitle="View Picture" data-caption="Now it's possibe to add an URL-Link into caption text - <a href='http://www.google.com' target='_blank'>GOOGLE</a>">
								<img src="galery/media/thumbnails/01.jpg" alt="Alt Image Text" />
							</a>
						</li>
					</ul>

				</section>
				<section class="contacto ">
					<div id="container" class="container-contacto container">
						<h2 class="center our-title">Contacto</h2>
						<!--
				Aquí pondremos los errores (de existir alguno) 
			-->
						<div id="error"></div>

						<!--
				Definimos el método de envío (POST hace que nuestros datos no se puedan ver desde
				el navegador, que es lo más seguro), y la URL a la que enviarlo (post.php)
			-->
						<form id="formulario" name="formulario" method="POST" action="post.php" class="form">
							<!--
					El nombre
				-->
							<p>
								<input type="text" name="nombre" id="nombre" size="30" required placeholder="Nombre">
							</p>
							<!--
					El e-mail
				-->
							<p>
								<input type="email" name="email" id="email" placeholder="Introduce tu e-mail" required>
							</p>

							<p>
								<input type="text" name="asunto" id="asunto" placeholder="Asunto" required>
							</p>
							<!--
					El mensaje
				-->
							<p>
								<textarea id="mensaje" name="mensaje" placeholder="Mensaje" rows="8" required></textarea>
							</p>
							<p class="submit">
								<input type="submit" id="submit" value="Enviar" class="btn waves-effect waves-light btn-contacto">
							</p>
						</form>
						<!--
				Aquí pondremos el mensaje cuando enviemos el mensaje
			-->
						<div class="correcto">
							<i class="material-icons funciono z-depth-2">check</i>
							<p id="correcto"></p>
						</div>
					</div>
					<p class="wats">
						<img src="img/wat-01.svg" alt="">
						<br> (33)2233 1922 ó (33)3749 3861
					</p>
				</section>
				<script src="js/modernizr.js"></script>
				<script src="js/script.js"></script>


				<?php require("footer.php"); ?>

					<!--  Scripts-->
					<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
					<script src="js/materialize.js"></script>
					<script src="galery/js/libs/least/least.min.js"></script>
					<script src="js/init.js"></script>

	</body>

	</html>