<?php
class Login {
    private $email;
    private $password;

    function _construct($email, $password) {
        $this->username = $email;
        $this->password = $password;
    }

    function verificar($email, $password){
        $rs=mysqli_query("SELECT * FROM usuario",Conectar->getCn());
        $a=mysqli_fetch_array($rs);
        while($a[2]=$email){
            $rs2=mysqli_query("SELECT password FROM usuario WHERE correo='".$email."'",Conectar->getCn());
            if($password==$rs){
                return true;
            }
        }
    }
}
?>