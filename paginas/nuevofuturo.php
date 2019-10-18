<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<h1>Login</h1>
	<body>
	<form method="POST">
		<p>Username:</p>
			<input type="text" name="user">
		<p>Password:</p>
			<input type="text" name="user_pass">	
			<br>
		<input type="submit" name="btn" value="LOGIN">
					
		<p>Registrate aqui:</p><a href="registro.php">Registro</a>
		<br><br>
		<a href="quienes.html">Quienes Somos</a>
		<?php
			require("../phpClases/Consulta.php");
			require("../phpClases/Usuario.php");
			require("../phpClases/Propuesta.php");
			if(isset($_POST['btn'])){
				if($_POST['btn']=="LOGIN"){
					$us=$_POST['user'];
					$pas=$_POST['user_pass'];

					$usuario1=new Usuario("",$us,"");
					$cons=new Consulta($usuario1,new Propuesta("","","",0));
					
					$usuario=$cons->seleccionarUsuario();
					if($usuario->getContrasena()){
						if($usuario->getContrasena()==$pas){
							//entrar
							?>
							<script>
								alert("Ingreso correcto...");
								location.href="Formulario.php";
							</script>
							<?php
						}else{
							?>
							<script>
								alert("Contraseña incorrecta...");
							</script>
							<?php
						}
					}else{
						?>
							<script>
								alert("No se ha encontrado el usuario...");
							</script>
						<?php
					}
				}
			}
		?>
	</form>
	</body>
</html>
