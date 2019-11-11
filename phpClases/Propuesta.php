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
		$this->ods = $ods;
		$this->descripcion = $descripcion;
		$this->progreso = $progreso;
	}
	// getters y setters de nombre
	function setNombre($Nombre) {
		$this->nombre = $nombre;
	}
	public function getNombre() {
		return $this->nombre;
	}
	// getters y setters de ods
	function setOds($ods) {
		$this->correo = $ods;
	}
	public function getOds() {
		return $this->ods;
	}
	// getters y setters de descripcion
	function setDescripcion($descripcion) {
		$this->contrasena = $descripcion;
	}
	public function getDescripcion() {
		return $this->descripcion;
	}
	//getters y setters de progreso
	function setProgreso($progreso) {
		$this->progreso = $progreso;
	}
	public function getProgreso() {
		return $this->progreso;
	}
}
?>
