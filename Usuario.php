<?php
// Juan Marroquin 19845
class Usuario{
	private $nombre = "";
	private $correo = "";
	private $contrasena = "";
	// constructor usuario
	function __construct($nombre,$correo ,$contrasena){
		$this->nombre = $nombre;
		$this->correo = $correo;
		$this->contrasena = $contrasena;
	}
	// getters y setters de nombre
	function setNombre($Nombre) {
		$this->nombre = $nombre;
	}
	public function getNombre() {
		return $nombre;
	}
	// getters y setters de correo
	function setCorreo($correo) {
		$this->correo = $correo;
	}
	public function getCorreo() {
		return $correo;
	}
	// getters y setters de contrasena
	function setContrasena($contrasena) {
		$this->contrasena = $contrasena;
	}
	public function getContrasena() {
		return $contrasena;
	}
}
?>