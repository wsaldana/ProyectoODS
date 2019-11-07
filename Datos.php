<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/regstyle.css">
		<meta charset="ISO-8859-1"/>
	<body style="background-image: url('imagenes/3.jpg');">
		<table>
			<tr>
				<FORM method="POST"> 
		<fieldset> 
			<input type=hidden name=ie value=UTF-8 /> 
			<input type=hidden name=oe value=UTF-8 /> 
					<select name="txtods">
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
							
			<input type="submit"  id="x" name="btn" VALUE="BUSCAR" />
			<?php
				include('../phpClases/Conectar.php');
				$con=new Conectar();
				$cn1=$con->getCn();
				if(isset($_POST['btn'])){
					if($_POST['btn']=="BUSCAR"){
						$ods=$_POST['txtods'];
						$rs=mysql_query("SELECT * FROM propuesta WHERE ods='$ods'",$cn1);
						$n=mysql_num_rows($rs);
						while($a=mysql_fetch_array($rs)){
							?>
								<fieldset>
									<legend><?php echo $a[1]; ?></legend>
									ODS: <p><?php echo $a[2]; ?></p>
									DETALLES: <p><?php echo $a[3]; ?></p>
									PROGRESO: <p><div class="w3-light-grey">
									<div class="w3-blue" style="height:24px;width:<?php echo $a[4]; ?></p>"></div>
									</div></p>
								</fieldset>
								<br>
							<?php
						}
					}
				}
				
			?>
			</font> 
		</fieldset> 
		</FORM>
			</tr>
			<tr>
				<td align="center"><a href=""><img src="http://desarrollohumano.org.gt/wp-content/uploads/2016/04/4-EducaciondeCalidad.jpg"></td>
				<td align="center"><a href=""><img src="http://desarrollohumano.org.gt/wp-content/uploads/2016/04/14-VidaSubmarina.jpg"></td>
				<td align="center"><a href=""><img src="https://desarrollohumano.org.gt/wp-content/uploads/2016/04/1-FindelaPobreza.jpg"></td>
		</table>
	</body>	
</html>
