<?php
require_once "../app/conexion.php";
require_once "funciones.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$num_telefono = $_POST['num_telefono'];
$num_celular = $_POST['num_celular'];
$direccion = $_POST['direccion'];

$datos = array(
                $nombre,
                $apellido,
                $num_telefono,
                $num_celular,
                $direccion
            );
$obj = new metodos();
if ($obj->insertarDatos($datos)==1) {
    header("Location:../index.php");
} else {
    echo "Error al insertar datos";
}
?>
