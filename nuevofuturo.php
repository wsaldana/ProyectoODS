<!DOCTYPE html>
    <html>
    <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <body style="background-image: url('imagenes/5.jpg');">
        <div class="loginbox">
        <img src="imagenes/2.png" class="avatar">
            <h1>
            <form method="POST">
                <p>Username</p>
                <input type="text" name="user" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="user_pass" placeholder="Enter Password">
                <input type="submit" name="btn" value="Login">
                
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
            </h1>
        </div>
    </body>
    </head>
    </html> 