<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="regstyle.css">
	</head>
<h1>Register Here</h1>
<body>
	<form method="POST">
		<?php
			include('Conectar.php');
			include("IngresoDB.php");
			include("Capturar.php");
			$conectar=new Conectar();
		?>
		<p>Username:</p>
			<input type="text" name="user">
		<p>Password:</p>
			<input type="text" name="pass">
		<p>Email:</p>
			<input type="text" name="email">
		<br>
			<input type="submit" name="btn" value="REGISTRARSE">	
		</br><br><a href="principal.html">Regresar al Lobby</a></br>

		<?php
			$cap=new Capturar();
			$capuser=$cap->CapturaUsuario('user','pass','email','REGISTRARSE');
			$ing=new IngresoDB($cap->getUser(),$cap->getPass(),$cap->getEmail());
			$ins=$ing->insertar($conectar->getCn());
		?>
	</form>
</body>
</html>