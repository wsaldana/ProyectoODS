<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/formulario.css">
<body>

<form action="ejemplo.php" method="get">
  <?php
    include("menu.php");
    require("../phpClases/Consulta.php");
    require("../phpClases/Usuario.php");
    require("../phpClases/Propuesta.php");
    $usuario1=new Usuario("",$us,"");
		$cons=new Consulta($usuario1,new Propuesta("","","",0));
  ?>
<legend class="datos">Datos Usuario</legend>

  <?php
    $nom=$_GET['id'];
    $corr=$_GET['cor'];
  ?>
  <p class="name">Nombre: <?php echo $nom;?></p>
  <p class="gmail">Correo Electronico: <?php echo $corr;?></p>
  
 <legend class="datos2">Datos Propuesta</legend>
  <p class="prop">Ingrese Nombre propuesta: <input class="propuesta" type="text" name="propuesta"></p>
  <p class="ods">ODS <input type="text" name="ods"></p>
  <p class="des">Descripción<input type="text" name="descripcion"></p>
  <p class="pro">Progreso<input type="text" name="progreso"></p>
  <p class="pro">
    <input type="file" name="filFoto"/>
    <input type="submit" name="btn" value="ENVIAR">
  </p>
</form>

</body>
</html>
