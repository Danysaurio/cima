<?php include "conexion.php";
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = $conn->prepare("SELECT nombre,apellido,email,estado,ciudad,rfc,ife FROM usuarios WHERE idUser= :idUser");
			$query->bindParam(':idUser', $_SESSION["id"]);
            $query->execute();
		    $editar = $query->fetchAll(PDO::FETCH_ASSOC);

	if(isset($_POST['guardar'])){
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$email=$_POST['email'];
			$estado=$_POST['estado'];
			$ciudad=$_POST['ciudad'];
			$rfc=$_POST['rfc'];
			$ife=$_POST['ife'];
			$semilla='cima';
			$psw=sha1($_POST['psw'].$semilla);

			$stmt = $conn->prepare("UPDATE usuarios SET nombre = :nombre, apellido = :apellido, email = :email, 
									estado = :estado, ciudad = :ciudad, rfc = :rfc, ife = :ife, contrasena = :contrasena  WHERE idUser = :idUser");
			$stmt->bindParam(':nombre', $nombre);
			$stmt->bindParam(':apellido', $apellido);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':estado', $estado);
			$stmt->bindParam(':ciudad', $ciudad);
			$stmt->bindParam(':rfc', $rfc);
			$stmt->bindParam(':ife', $ife);
			$stmt->bindParam(':contrasena', $psw);
			$stmt->bindParam(':idUser', $_SESSION["id"]);
			$stmt->execute();
			if ($stmt) {
				echo "<script> location.href='userSesion.php';</script>"; 

			}else{
				echo "error al registrar";
			}
	
}else{
	foreach ($editar as $edit) {
		$holder[1]="placeholder=\"".$edit['nombre']."\"";
		$holder[2]="placeholder=\"".$edit['apellido']."\"";
		$holder[3]="placeholder=\"".$edit['email']."\"";
		$holder[4]="placeholder=\"".$edit['estado']."\"";
		$holder[5]="placeholder=\"".$edit['ciudad']."\"";
		$holder[6]="placeholder=\"".$edit['rfc']."\"";
		$holder[7]="placeholder=\"".$edit['ife']."\"";

	}	
}	
?>
<div id="edit" class="modal">
		<div class="modal-content">
			<h3 class="center unbutu loginTitle">Editar datos</h3>
			<form action="#" method="post">
				<input type="text" <?php echo @$holder[1];?> id="nombre" name="nombre">
				<input type="text" <?php echo @$holder[2];?> id="apellido" name="apellido">
				<input type="text" <?php echo @$holder[3];?> id="email" name="email">
				<input type="text" <?php echo @$holder[4];?> id="estado" name="estado">
				<input type="text" <?php echo @$holder[5];?> id="ciudad" name="ciudad">
				<input type="text" <?php echo @$holder[6];?> id="rfc" name="rfc">
				<input type="text" <?php echo @$holder[7];?> id="ife" name="ife">
				<input type="password" placeholder="Contraseña" id="psw" name="psw">
				<button  class="btn waves-effect waves-light" type="submit" name="guardar">Guardar datos
				</button>
				<a href="userSesion.php"> Cancelar</a>
			</form>
		</div>
</div>
