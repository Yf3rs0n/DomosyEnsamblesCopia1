<?php
$host = 'localhost';
$user = 'root';
$db = 'domosyensambles';
$pass = '';

    try {
        $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo 'ERROR: '.$e->getMessage();
    }
    
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
    