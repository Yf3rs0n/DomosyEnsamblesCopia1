<?php 

include "conexion.php";

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
	$construccion=$_POST['construccion'];
	$presupuesto=$_POST['presupuesto'];
	$ciudad=$_POST['ciudad'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$mensaje=$_POST['mensaje'];


$insertar = "INSERT INTO contratacion(nombre,apellido,correo,construccion,presupuesto,ciudad,direccion,telefono,mensaje) VALUES('$nombre','$apellido','$correo','$construccion','$presupuesto','$ciudad','$direccion','$telefono','$mensaje')";


$resultado = mysqli_query($conexion,$insertar);

if ($resultado) {
	echo '<script> alert("se ingreso correctamente");
	      header("location:contrato.html");
         </script>';
         
	}else{
		echo "hay problemas en la insercion de registros";
	}

	mysqli_close($conexion);

 ?>



