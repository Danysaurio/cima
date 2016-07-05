
<?php include "conexion.php";
if (isset($_POST['btn-registrar'])) {
	$idUser=uniqid();
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$email=$_POST['email'];
	$estado=$_POST['estado'];
	$ciudad=$_POST['ciudad'];
	$invUser=$_POST['invUser'];
	$rfc=$_POST['rfc'];
	$ife=$_POST['ife'];
	$semilla='cima';
	$psw=sha1($_POST['psw'].$semilla);
	$fechaR=date("Y-m-d");

	if (!empty($email)) {
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = $conn->prepare("SELECT email FROM usuarios WHERE email= :email");
		$query->bindParam(':email', $email);
		$query->execute();
		$exisE = $query->fetch(PDO::FETCH_COLUMN);
		
		if ($exisE) {
		$holder[2]="placeholder=\"¡El correo electrónico existe en otra cuenta!\"";
		$error=true;
		}

	}else{
		$holder[2]="placeholder=\"¡Ingresa correo electrónico!\"";
		$error=true;	
	}

	if (!empty($ife)) {
		$query = $conn->prepare("SELECT ife FROM usuarios WHERE ife= :ife");
		$query->bindParam(':ife', $ife);
		$query->execute();
		$exisI= $query->fetch(PDO::FETCH_COLUMN);
		
		if ($exisI) {
		$holder[5]="placeholder=\"¡El No. IFE ya existe en otra cuenta!\"";
		$error=true;
		}

	}else{
		$holder[5]="placeholder=\"¡Ingresa El No. IFE!\"";
		$error=true;
	}

	if (!empty($rfc)) {
		$query = $conn->prepare("SELECT rfc FROM usuarios WHERE rfc= :rfc");
		$query->bindParam(':rfc', $rfc);
		$query->execute();
		$exisR= $query->fetch(PDO::FETCH_COLUMN);
		
		if ($exisR) {
		$holder[9]="placeholder=\"¡El R.F.C. ya existe en otra cuenta!\"";
		$error=true;
		}

	}else{
		$holder[9]="placeholder=\"¡Ingresa El R.F.C.!\"";
		$error=true;
	}

	if(!@$error){
		$stmt = $conn->prepare("INSERT INTO usuarios (idUser, nombre, apellido, email, estado, ciudad, idUi, rfc, ife, fechaRegistro, contrasena) 
							   VALUES (:idUser, :nombre, :apellido, :email, :estado, :ciudad, :idUi, :rfc, :ife, :dateR, :contrasena)");
		$stmt->bindParam(':idUser', $idUser);
		$stmt->bindParam(':nombre', $nombre);
		$stmt->bindParam(':apellido', $apellido);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':estado', $estado);
		$stmt->bindParam(':ciudad', $ciudad);
		$stmt->bindParam(':idUi', $invUser);
		$stmt->bindParam(':rfc', $rfc);
		$stmt->bindParam(':ife', $ife);
		$stmt->bindParam(':dateR', $fechaR);
		$stmt->bindParam(':contrasena', $psw);
		$stmt->execute();
		if ($stmt) {
			echo "se registro exitosamente";
		}else{
			echo "error al registrar";
		}
		$holder[1]="placeholder=\"Nombre\"";
		$holder[2]="placeholder=\"Correo Electrónico\"";
		$holder[3]="placeholder=\"Estado\"";
		$holder[4]="placeholder=\"Usuario que te invito\"";
		$holder[5]="placeholder=\"No. IFE\"";
		$holder[6]="placeholder=\"Apellido\"";
		$holder[7]="placeholder=\"Contraseña\"";
		$holder[8]="placeholder=\"Ciudad\"";
		$holder[9]="placeholder=\"R.F.C.\"";
	}
}else{
	$holder[1]="placeholder=\"Nombre\"";
	$holder[2]="placeholder=\"Correo Electrónico\"";
	$holder[3]="placeholder=\"Estado\"";
	$holder[4]="placeholder=\"Usuario que te invito\"";
	$holder[5]="placeholder=\"No. IFE\"";
	$holder[6]="placeholder=\"Apellido\"";
	$holder[7]="placeholder=\"Contraseña\"";
	$holder[8]="placeholder=\"Ciudad\"";
	$holder[9]="placeholder=\"R.F.C.\"";
		
}	
?>



<div class="container">
		<div class="section">

			<!--   Icon Section   -->
			<h1 class="tilte center"></h1>
			<form action="#" method="post">
				<div class="row">
					<div class="col s12 m6">
						<input type="text" <?php echo @$holder[1];?> name="nombre" id="nombre">
						<input type="email" <?php echo @$holder[2];?> name="email" id="email">
						<input type="text" <?php echo @$holder[3];?> name="estado" id="estado">
						<input type="text" <?php echo @$holder[4];?> name="invUser" id="invUser">
						<input type="number" <?php echo @$holder[5];?> name="ife" id="ife">
					</div>
					<div class="col s12 m6">
						<input type="text" <?php echo @$holder[6];?> name="apellido" id="apellido">
						<input type="password" <?php echo @$holder[7];?> name="psw" id="psw">
						<input type="text" <?php echo @$holder[8];?> name="ciudad" id="ciudad">
						<input type="text" <?php echo @$holder[9];?> name="rfc" id="rfc">
						<button class="btn waves-effect waves-light" type="submit" name="btn-registrar">Registro
							<i class="material-icons right">send</i>
						</button>
					</div>

				</div>
			</form>

		</div>
</div>