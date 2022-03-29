<?php
class metodos{
    public function mostrarDatos($sql){
        $c=new Conectar();
        $conexion=$c->conexion();

        $result=mysqli_query($conexion,$sql);

        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function insertarDatos($datos){
        $c=new Conectar();
        $conexion=$c->Conexion();

        $sql="INSERT INTO persona (nombre,apellido,num_telefono,num_celular,direccion) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";

        return $result=mysqli_query($conexion,$sql);
    }

    public function actualizarDatos($datos){
        $c=new Conectar();
        $conexion=$c->conexion();

        $sql="UPDATE persona set nombre='$datos[1]', apellido='$datos[2]', num_telefono='$datos[3]', num_celular='$datos[4]', direccion='$datos[5]' where id_cedula='$datos[0]'";
        return $result=mysqli_query($conexion,$sql);
    }
    public function eliminarDatos($id_cedula){
        $c=new Conectar();
        $conexion=$c->conexion();

        $sql="DELETE FROM persona WHERE id_cedula = '$id_cedula'";
        return $result=mysqli_query($conexion,$sql);
    }
}
?>
