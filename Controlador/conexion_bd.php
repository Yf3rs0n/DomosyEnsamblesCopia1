<?php

class Conectar{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "domosyensambles";


    public function Conexion(){
        $conexion = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        return $conexion;
    }
}


?>
