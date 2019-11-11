<?php
  	class Capturar{
          //Atributos de clase
          private $usuario;
          private $correo;
          private $password;
          private $propuesta;
          private $ods;
          private $descripcion;
          private $progreso;
          private $boton;
          private $archivo;

        //Constructor de la clase
		public function Capturar(){
        }

        //getters
		public function getUsuario(){
            return $this->usuario;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getPropuesta(){
            return $this->propuesta;
        }
        public function getOds(){
            return $this->ods;
        }
        public function getDescripcion(){
            return $this->descripcion;
        }
        public function getProgreso(){
            return $this->progreso;
        }
        public function getBoton(){
            return $this->boton;
        }
        public function getArchivo(){
            return $this->archivo;
        }

        //setters-----------------------------------------------------
        public function setUsuario(){
            $this->usuario = $_POST['usuario'];
        }
        public function setCorreo(){
            $this->correo = $_POST['correo'];
        }
        public function setPassword(){
            $this->password  = $_POST['password'];
        }
        public function setPropuesta(){
            $this->propuesta = $_POST['propuesta'];
        }
        public function setOds(){
            $this->ods = $_POST['ods'] = $_POST['ods'];
        }
        public function setDescripcion(){
            $this->descripcion = $_POST['descripcion'];
        }
        public function setProgreso(){
            $this->progreso = $_POST['progreso'];
        }
        public function setBoton(){
            $this->boton = $_POST['btn'];
        }
        public function setArchivo(){
            $this->archivo = $_POST['archivo'];
        }
    }
?>