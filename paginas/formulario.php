<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/formulario.css">
<body>

<form method="GET">
  <?php
    include("menu.php");
  ?>
<legend class="datos">Datos Usuario</legend>

  <?php
    $nom=$_GET['id'];
    $corr=$_GET['cor'];
  ?>
  <p class="name">Nombre: <?php echo $nom;?></p>
  <p class="gmail">Correo Electronico: <?php echo $corr;?></p>
  
  </form>
  <form method="POST" action="Archivos.php" enctype="multipart/form-data">
    <legend class="datos2">Datos Propuesta</legend>
    <p class="prop">Ingrese Nombre propuesta: <input class="propuesta" type="text" name="propuesta"></p>
    <p class="ods">ODS 
      <select name="ods">
        <option value="pobreza">Pobreza</option>
        <option value="hambre">Hambre</option>
        <option value="salud">Salud</option>
        <option value="educacion">Educacion</option>
        <option value="igualdad">Igualdad</option>
        <option value="saneamiento">Saneamiento</option>
        <option value="energia">Energias</option>
        <option value="crecimiento">Crecimiento</option>
        <option value="infraestructura">Infraestructura</option>
        <option value="desigualdades">Desiguadades</option>
        <option value="asentamientos">Asentamientos</option>
        <option value="produccion">Produccion</option>
        <option value="clima">Clima</option>
        <option value="conservar">Conservacion</option>
        <option value="proteger">Proteger</option>
        <option value="promover">Promover</option>
        <option value="fortalecer">Fortalecer</option>
      </select>
    </p>
    <p class="des">Descripción<input type="text" name="descripcion"></p>
    <p class="pro">Progreso<input type="text" name="progreso"></p>
    <p class="pro">
      <input type="file" name="archivo"/>
      <input type="submit" name="btn" value="ENVIAR">
    </p>
</form>

</body>
</html>
