<!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
    </head>
    <body style="background-image: url('imagenes/5.jpg');">
        <div class="loginbox">
            <img src="imagenes/2.png" class="avatar">
            
            <form method="POST">
                <h1>
                <p>E-Mail</p>
                <input type="text" name="usuario" placeholder="Correo electronico">
                <p>Password</p>
                <input type="password" name="password" placeholder="Contraseña">
                <input type="submit" name="btn" value="LOGIN">
                <input type="submit" name="btn" value="REGISTRO">
                </h1>
                <?php
			    require("../phpClases/Consulta.php");
			    require("../phpClases/Usuario.php");
                require("../phpClases/Propuesta.php");
                require("../phpClases/Capturar.php");
			    if(isset($_POST['btn'])){
                    $capt=new Capturar();
				    if($_POST['btn']=="LOGIN"){
                        $capt->setUsuario();
                        $capt->setPassword();
					    $us=$capt->getUsuario();
					    $pas=$capt->getPassword();

					    $usuario1=new Usuario("",$us,"");
					    $cons=new Consulta($usuario1,new Propuesta("","","",0));
					
					    $usuario=$cons->seleccionarUsuario();
                        if($usuario->getContrasena()){
                            if($usuario->getContrasena()==$pas){
                                //entrar
                                ?>
                                <script>
                                    alert("Ingreso correcto...");
                                    location.href="Formulario.php?id=<?php echo $usuario->getNombre();?>&cor=<?php echo $usuario->getCorreo();?>";
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
				        }else if($_POST['btn']=="REGISTRO"){
                            ?>
                                <script>
                                    location.href="registro.php"
                                </script>
                            <?php
                        }
			        }
		            ?>
            </form>
        </div>
    </body>
    </head>
    </html> 