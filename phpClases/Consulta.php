<?php
class Consulta{
	private $usuario;
	private $propuesta;
	private $con;
	
	/*constructor con parametros*/
	public function Consulta($usuario, $propuesta){
			$this->usuario = $usuario;
			$this->propuesta = $propuesta;
			include("../phpClases/Conectar.php");	
			$conexion=new Conectar();
			$this->con=$conexion->getCn();
		}
		
	public function generarIDU(){	
		$id='U0';
			$n=mysql_query("SELECT * FROM usuario",$this->con);
			$n1=mysql_num_rows($n);
			$id1=$id.$n1;
			
			return $id1;
	}
	
	public function generarIDP(){	
		$id='U0';
			$n=mysql_query("SELECT * FROM propuesta",$this->con);
			$n1=mysql_num_rows($n);
			$id1=$id.$n1;
			
			return $id1;
	}
	public function insertarUsuario(){
		$nom=$this->usuario->getNombre();
		$cor=$this->usuario->getCorreo();
		$cont=$this->usuario->getContrasena();
		$id=$this->generarIDU();
		$rs=mysql_query("INSERT INTO usuario VALUES('$id','$nom','$cor','$cont')",$this->con);
		return $rs;
	}
	public function insertarPropuesta(){
		$nom=$this->propuesta->getNombre();
		$ods=$this->propuesta->getOds();
		$des=$this->propuesta->getDescripcion();
		$pro=$this->propueta->getProgreso();
		$id=$this->generarIDP();
		$rs=mysql_query("INSERT INTO usuario VALUES('$id','$nom','$ods','$des','$pro')",$this->con);
		return $rs;
	}
	public function seleccionarUsuario(){
		$cor=$this->usuario->getCorreo();
		$rs=mysql_query("SELECT * FROM usuario WHERE correo='".$cor."'",$this->con);
		$result=mysql_fetch_array($rs);
		$usuario1=new Usuario("","","");
		$usuario1->setNombre($result[1]);
		$usuario1->setCorreo($result[2]);
		$usuario1->setContrasena($result[3]);
		return $usuario1;
	}
	/*
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
	*/
	
}
?>
