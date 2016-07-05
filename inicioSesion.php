<?php include "conexion.php";
	if(isset($_POST['iniciar'])){
		
          @$user=$_POST["userName"];
          $semilla='cima';
		  @$psw=sha1($_POST['contraseña'].$semilla);
        if(!empty($user)){
          if(!empty($psw)){
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->prepare("SELECT idUser FROM usuarios WHERE email= :email AND contrasena= :pass");
			$query->bindParam(':email', $user);
			$query->bindParam(':pass', $psw);
	
            if ($query->execute()) {
				$results = $query->fetch(PDO::FETCH_COLUMN);
				$_SESSION["id"] = $results;
				$_SESSION["sesionAbierta"] = true;	
           
             echo "<script> location.href='userSesion.php';</script>"; 

            }else{$holder[1]="placeholder=\"¡Usuario o Contraseña Incorrectos!\"";}
          }else{$holder[2]="placeholder=\"¡Ingresa la contraseña!\"";}
        }else{$holder[3]="placeholder=\"¡Ingresa el usuario!\"";}
      }else{
      		$holder[3]="placeholder=\"Nombre de usuarios\"";
      		$holder[2]="placeholder=\"Contraseña\"";
      }
?>
	<div id="login" class="modal login">
		<div class="modal-content">
			<h3 class="center unbutu loginTitle">Iniciar sesión</h3>
			<form action="#" method="post">
				<input type="text" <?php echo @$holder[3];?>placeholder="Nombre de usuario" id="userName" name="userName" required>
				<input type="password" <?php echo @$holder[2];?>placeholder="Contraseña" id="contraseña" name="contraseña" required>
				<div class="btn-loginContainer">
					<button class="btn waves-effect waves-light" type="submit" name="iniciar">Iniciar sesión
					</button>
					<br>
					<a href="registro.php"> Registrarme</a>
				</div>
			</form>
		</div>
	</div>