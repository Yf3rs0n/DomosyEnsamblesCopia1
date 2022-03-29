<?php
    $id_cedula = $_GET['id'];

    require_once "../app/conexion.php";
    require_once "funciones.php";

    $obj = new metodos();
    if ($obj->eliminarDatos($id_cedula)==1) {
        header("Location:../index.php");
    }else{
        echo "Error al eliminar";
    }



// $conexion = new mysqli("localhost", "root", "", "domosyensambles");
// //elimanos el registro
// $id = $_GET['id'];
// $sql = "DELETE FROM persona WHERE id_cedula = '$id'";
// $result = mysqli_query($conexion,$sql);
// if($result){
//     echo "Registro eliminado";
    
// }else{
//     echo "Error al eliminar";
// }
?>