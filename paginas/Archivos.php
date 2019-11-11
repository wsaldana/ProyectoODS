<?php
    require("../phpClases/Consulta.php");
    require("../phpClases/Usuario.php");
    require("../phpClases/Propuesta.php");
    $prop=new Propuesta('','','','');
    $cons1=new Consulta(null,null);
    $archivoValido=false;

    if(isset($_FILES['archivo'])){ 
      $ruta ='archivos/'; 
      $nombre = $cons1->generarIDP().'.pdf'; 
      $foto = $_FILES['archivo']['tmp_name']; 
      $nombreFoto = $_FILES['archivo']['name'];
      if($_FILES['archivo']['type']=="application/pdf"){
        $archivoValido=true;
        $subir = move_uploaded_file($foto, $ruta.$nombre); 
      }else{
          $archivoValido=false;
          ?>
            <script>alert("Por favor ingrese un archivo PDF");
            history.back();</script>
          <?php
      }
    }

    if(isset($_POST['btn']) && $archivoValido){
        require('../phpClases/Capturar.php');
        if($_POST['btn']=="ENVIAR"){
          $capt=new Capturar();
          $capt->setPropuesta();
          $capt->setOds();
          $capt->setDescripcion();
          $capt->setProgreso();
          $p=$capt->getPropuesta();
          $o=$capt->getOds();
          $d=$capt->getDescripcion();
          $pr=$capt->getProgreso();
          $prop1=new Propuesta($p,$o,$d,$pr);
          $cons1->setPropuesta($prop1);
          $insertar=$cons1->insertarPropuesta();
          if($insertar){
            ?>
              <script>
                alert("Propuesta guardada");
                history.back();
            </script>
            <?php
          }else{
            ?>
              <script>
                alert("Ocurrio un problema al guardar");
                history.back();
            </script>
            <?php
          }
        }
      }
?>