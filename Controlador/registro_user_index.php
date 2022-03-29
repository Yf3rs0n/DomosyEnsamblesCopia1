<?php 

$conexion = mysqli_connect("localhost","root","","domosyensambles") or die("problemas en la conexion");

    $id_cedula=$_POST['id_cedula'];
	$nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
	$num_telefono=$_POST['num_telefono'];
	$num_celular=$_POST['num_celular'];
    $direccion=$_POST['direccion'];
	$correo=$_POST['correo'];
	$contraseña=$_POST['contraseña'];


$inserpersona= "INSERT INTO persona(id_cedula,nombre,apellido,num_telefono,num_celular,direccion) VALUES('$id_cedula','$nombre','$apellido','$num_telefono','$num_celular','$direccion')";


// $verificar_gmail = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo = '$correo'");

// if (mysqli_num_rows($verificar_gmail) > 0) {
// 	echo '<script> 
// 	      alert("Ya se encuentra registrado este correo");
// 	      window.history.go(-1);
//       	</script>';
// 	exit();   
//  }

$resultado = mysqli_query($conexion,$inserpersona);

if($resultado == 1){	
	$inserusuario= "INSERT INTO usuario(correo,contraseña,tipo_usu) VALUES('$correo','$contraseña','1')";

	$resultado2 =mysqli_query($conexion,$inserusuario);
	if($resultado2 == 1){
		echo '<script> 
		      alert("Registro exitoso");
		      window.history.go(-1);
	       </script>';
	}
}else{
	echo '<script> 
	      alert("Error al registrar");
	      window.history.go(-1);
	   	</script>';
}
?>

