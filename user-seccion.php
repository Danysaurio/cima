<?php
include "conexion.php";
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->prepare("SELECT * FROM usuarios WHERE idUser= :idUser");
			$query->bindParam(':idUser', $_SESSION["id"]);
            $query->execute();
			$results = $query->fetchAll(PDO::FETCH_ASSOC);

?>				
<section class="container">
			<div class="tilte-container center">
				<h2 class="title unbutu title-sesion">Tu Perfil</h2>
			</div>
			<div class="miPErfil z-depth-2">
				<a href="#edit" class="waves-effect waves-light btn editar modal-trigger"><i class="material-icons left">mode_edit</i>Editar</a>
				<div class="row ">
					<div class="col m3 s12">
						<img src="img/user.svg" alt=""  class="userImg">
					</div>
					<div class="col m9 s12 datos ">
						<?php foreach ($results as $user ) {?>			
						<h4><?php echo $user['nombre'].' '.$user['apellido'];?></h4>
						<span class="miMail"><?php echo $user['email'];?></span>
						<br>
						<br>

							<span class="invitoPor">Tu codigo:</span>
							
							<span class="miMail"><?php echo $user['idUser'];?></span>

						<br>
						<h5 class="invito">
							<span class="invitoPor">Invitado por:</span>
							<br>
							<?php
								$query = $conn->prepare("SELECT nombre,apellido FROM usuarios WHERE idUser= :idUi");
								$query->bindParam(':idUi', $user['idUi']);
					            $query->execute();
								$results = $query->fetchAll(PDO::FETCH_ASSOC);
								foreach ($results as $invitador) {								
							?>	
							<span class="invitador"><?php echo $invitador['nombre'].' '.$invitador['apellido'];?></span>
							<?php
								}
							?>
						</h5>
						<?php
							}
						?>		
					</div>
				</div>
			</div>
</section>