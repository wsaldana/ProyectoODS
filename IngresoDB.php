<?php
	class IngresoDB{
		private $user;
		private $pwd;
		private $email;

		public function IngresoDB($user,$pwd,$email){
			$this->user = $user;
			$this->pwd = $pwd;
			$this->email = $email;
		}

		public function insertar($cn){
			$id='U0';
			$n=mysql_query("SELECT * FROM usuario",$cn);
			$n1=mysql_num_rows($n);
			$id1=$id.$n1;
			$rs=mysql_query("INSERT INTO usuario VALUES('$id1','$this->user','$this->email','$this->pwd')",$cn);
			if($rs){
				return "Registro exitoso.";
			}else{
				return "Ocurrió un error al registrar.";
			}
		}
	}
?>