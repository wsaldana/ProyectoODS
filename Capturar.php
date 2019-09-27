<?php
	class Capturar{
		private $user;
		private $pass;
		private $email;

		public function Capturar(){
			$this->user='';
			$this->pass='';
			$this->email='';
			echo "Se ha llamado constructor sin parametros";
		}

		public function CapturaUsuario($txtuser,$txtpass,$txtemail,$btnValue){
			if(isset($_POST['btn'])){
				if($_POST['btn']==$btnValue){
					$this->user=$_POST[$txtuser];
					$this->pass=$_POST[$txtpass];
					$this->email=$_POST[$txtemail];
					echo "Se ha llamado constructor con parametros";
				}
			}
		}

		public function setUser($user){
			$this->user=$user;
		}public function getUser(){
			return $this->user;
		}

		public function setPass($pass){
			$this->pass=$pass;
		}public function getPass(){
			return $this->pass;
		}

		public function setEmail($email){
			$this->email=$email;
		}public function getEmail(){
			return $this->email;
		}
	}
?>