<?php 

   // process form
   $link = mysql_connect("localhost", "root");
   mysql_select_db("mydb",$db); 
   $sql = "SELECT * FROM Nombre WHERE id = $id". 
   $sql = "UPDATE Nombre SET Descirpcion ='$descripcion'
   , ODS='$ODS',"."costo='$costo', progreso='$progreso' WHERE id=$id";
   $result = mysql_query($sql); 
?>
