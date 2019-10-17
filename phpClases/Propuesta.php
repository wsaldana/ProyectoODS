<?php
// Carlos Raxtum #19721
class Propuesta{
	private $nombre = "";
	private $ods = "";
	private $descripcion = "";
	private $progreso= 0;
	// constructor usuario
	function __construct($nombre,$ods,$descripcion,$progreso){
		$this->nombre = $nombre;
		$this->correo = $ods;
		$this->contrasena = $descripcion;
		$this->progreso = $progreso;
	}
	// getters y setters de nombre
	function setNombre($Nombre) {
		$this->nombre = $nombre;
	}
	public function getNombre() {
		return $nombre;
	}
	// getters y setters de ods
	function setOds($ods) {
		$this->correo = $ods;
	}
	public function getOds() {
		return $ods;
	}
	// getters y setters de descripcion
	function setDescripcion($descripcion) {
		$this->contrasena = $descripcion;
	}
	public function getDescripcion() {
		return $descripcion;
	}
	//getters y setters de progreso
	function setProgreso($progreso) {
		$this->progreso = $progreso;
	}
	public function getProgreso() {
		return $progreso;
	}
}
?>
