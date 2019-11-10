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
		?>
		<div class="loginbox">
			<img src="imagenes/2.png" class="avatar">
			<h1>Registrate</h1>
			<p>Username:</p>
				<input type="text" name="user">
			<p>Password:</p>
				<input type="text" name="pass">
			<p>Email:</p>
				<input type="text" name="email">
			<br>
				<input type="submit" name="btn" value="REGISTRARSE">	
			<br><br><a href="../inicio.php">Regresar al Lobby</a></br>
		</div>
		<?php
			if(isset($_POST['btn'])){
				if($_POST['btn']=="REGISTRARSE"){
					$user=new Usuario($_POST['user'],$_POST['email'],$_POST['pass']);
					echo $user->getNombre();
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