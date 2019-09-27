<?php
  	class Conectar{
  		private $cn;

		public function Conectar(){
			$this->cn=mysql_connect('localhost','root','');
  			mysql_select_db('db_ODS',$this->cn);
		}

		public function getCn(){
			echo "Conectadooo";
			return $this->cn;
		}
	}
?>