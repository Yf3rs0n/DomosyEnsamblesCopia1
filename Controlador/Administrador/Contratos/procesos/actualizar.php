<?php
require_once "../app/conexion.php";
require_once "funciones.php";

$id = $_POST['id_cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$num_telefono = $_POST['num_telefono'];
$num_celular = $_POST['num_celular'];
$direccion = $_POST['direccion'];


$datos = array(
                $id,
                $nombre,
                $apellido,
                $num_telefono,
                $num_celular,
                $direccion,
            );
$obj = new metodos();
if ($obj->actualizarDatos($datos)==1) {
    //script para redireccionar
    echo "<script>
            alert('Datos actualizados correctamente');
            window.location.href='../index.php';
        </script>";
}else{
    echo "Error al actualizar";
} 
?>