<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<title>Cima - sesión</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

	<?php require("menu.php"); ?>

	<main>

	<?php require("user-seccion.php"); ?>

	<?php require("editarUser.php"); ?>

	<?phprequire("msg.php"); ?>
		<div class="container">
			<div class="row center contenedor-invitados">

				<!--   Icon Section   -->
				<div class="user col l12 s12 inv">
					<span class="unbutu">
						<h3 class="unbutu">Daniel Zavala</h3>
					</span>
				</div>
				<div>
					<div class="inv col m6 s12">
						<span>invitado1</span>
					</div>
					<div class="inv col m6 s12">
						<span>invitado1</span>
					</div>
				</div>

				<div class="inv col l3 s12"><span>invitado1</span></div>
				<div class="inv col l3 s12"><span>invitado1</span></div>
				<div class="inv col l3 s12"><span>invitado1</span></div>
				<div class="inv col l3 s12"><span>invitado1</span></div>

				<div class="InvEight">
					<div class="inv col"><span>invitado1</span></div>
					<div class="inv col"><span>invitado1</span></div>
					<div class="inv col"><span>invitado1</span></div>
					<div class="inv col"><span>invitado1</span></div>
					<div class="inv col"><span>invitado1</span></div>
					<div class="inv col"><span>invitado1</span></div>
					<div class="inv col"><span>invitado1</span></div>
					<div class="inv col"><span>invitado1</span></div>
				</div>



				<div class=" col l3 s12 final-invi">
					<span>invitado1</span>

					<span>invitado1</span>

					<span>invitado1</span>

					<span>invitado1</span>
				</div>
				<div class=" col l3 s12 final-invi">
					<span>invitado1</span>

					<span>invitado1</span>

					<span>invitado1</span>

					<span>invitado1</span>
				</div>
				<div class=" col l3 s12 final-invi">
					<span>invitado1</span>

					<span>invitado1</span>

					<span>invitado1</span>

					<span>invitado1</span>
				</div>
				<div class=" col l3 s12 final-invi">
					<span>invitado1</span>

					<span>invitado1</span>

					<span>invitado1</span>

					<span>invitado1</span>
				</div>
			</div>
		</div>
	</main>

<?php require("footer.php"); ?>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>

</html>
