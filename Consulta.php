<?php
class Consulta{
	private $usuario;
	private $propuesta;
	
	/*constructor con parametros*/
	public function Consulta($usuario, $propuesta){
			$this->usuario = $usuario;
			$this->propuesta = $propuesta;
			
		}
	/*constructor sin parametros*/
	public function Consulta(){
			
		}
		
	public function generarIDU(){	
		$id='U0';
			$n=mysql_query("SELECT * FROM usuario",$cn);
			$n1=mysql_num_rows($n);
			$id1=$id.$n1;
			
			return $id1;
	}
	
	public function generarIDP(){	
		$id='U0';
			$n=mysql_query("SELECT * FROM propuesta",$cn);
			$n1=mysql_num_rows($n);
			$id1=$id.$n1;
			
			return $id1;
	}
	public function insertarUsuario(){
		$rs=mysql_query("INSERT INTO usuario VALUES(generarIDU(),$usuario->getNombre(),$usuario->getCorreo(),$usuario->getContrasena())",Conectar->getCn());
	}
	public function insertarPropuesta(){
		$rs=mysql_query("INSERT INTO usuario VALUES(generarIDP,$usuario->getNombre(),$usuario->getCorreo(),$usuario->getContrasena())",Conectar->getCn());
	}
	public function seleccionarUsuario(){
		$rs=mysql_query("SELECT * FROM usuario WHERE correo='".$usuario->getCorreo()."'",Conectar->getCn());
		$result=mysql_fetch_array($rs);
		$usuario1=new Usuario();
		$usuario1->setNombre($result[1]);
		$usuario1->setCorreo($result[2]);
		$usuario1->setContraseña($result[3]);
		return $usuario1;
	}
	
	public function seleccionarPropuesta(){
		$rs=mysql_query("SELECT * FROM propuestas WHERE nombre='".$propuesta->getNombre()."'",Conectar->getCn());
		$result=mysql_fetch_array($rs);
		$propuesta1=new Propuesta();
		$propuesta1->setNombre($result[1]);
		$propuesta1->setODS($result[2]);
		$propuesta1->setDescripcion($result[3]);
		$propuesta1->setProgreso($result[4]);
		return $propuesta1;
	}
	
	public function modificarPropuesta(){
		$rs=mysql_query("UPDATE propuesta SET nombre='"$propuesta->getNombre"', ods='"$propuesta->getODS"', detalles='"$propuesta->getDescripcion"', progreso="$propuesta->getProgreso"",Conectar->getCn());
	}
	public function modificarUsuario(){
		$rs=mysql_query("UPDATE usuario SET nombre='"$nombre->getNombre"','"$correo->getCorreo"','"$contrasena->getContrasena"'");
	}
	
	
}
?>
