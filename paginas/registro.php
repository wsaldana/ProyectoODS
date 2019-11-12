<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
	</head>
<body style="background-image: url('imagenes/5.jpg');">
	<form method="POST">
		<?php
			include('../phpClases/Usuario.php');
			include('../phpClases/Propuesta.php');
			require('../phpClases/Consulta.php');
			require("../phpClases/Capturar.php");
		?>
		<div class="loginbox">
			<img src="imagenes/2.png" class="avatar">
			<h1>Registrate</h1>
			<p>Username:</p>
				<input type="text" name="usuario" required>
			<p>Password:</p>
				<input type="text" name="password" required minlength=5>
			<p>Email:</p>
				<input type="email" name="correo" required multiple>
			<br><br><br>
				<input type="submit" name="btn" value="REGISTRARSE">	
			<br><a href="../inicio.php">Regresar al Lobby</a><br>
		</div>
		<?php
			if(isset($_POST['btn'])){
				echo "simon";
				$capt=new Capturar();
				if($_POST['btn']=="REGISTRARSE"){
					echo "tambien";
					$capt->setUsuario();
					$capt->setCorreo();
					$capt->setPassword();
					$us=$capt->getUsuario();
					$cor=$capt->getCorreo();
					$pass=$capt->getPassword();
					$user=new Usuario($us,$cor,$pass);
					$consulta=new Consulta($user,new Propuesta("","","",0));
					$insertar=$consulta->insertarUsuario();
					if($insertar){
						?>
							<script>
								alert("Registro exitoso...");
							</script>
						<?php
					}else{
						?>
							<script>
								alert("Ocurrio un error al registrar...");
							</script>
						<?php
					}
				}
			}
			
		?>
	</form>
</body>
</html>