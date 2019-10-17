<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/regstyle.css">
	</head>
<h1>Registrate</h1>
<body>
	<form method="POST">
		<?php
			include('../phpClases/Usuario.php');
			include('../phpClases/Propuesta.php');
			require('../phpClases/Consulta.php');
		?>
		<p>Username:</p>
			<input type="text" name="user">
		<p>Password:</p>
			<input type="text" name="pass">
		<p>Email:</p>
			<input type="text" name="email">
		<br>
			<input type="submit" name="btn" value="REGISTRARSE">	
		<br><br><a href="../inicio.php">Regresar al Lobby</a></br>

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