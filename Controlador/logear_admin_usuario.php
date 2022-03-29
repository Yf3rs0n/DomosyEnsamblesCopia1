<?php 

$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

$conexion = mysqli_connect("localhost","root","","domosyensambles") or die("problemas en la conexion");

$usuario = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo = '$correo' and contraseña = '$contraseña' and rol_usu ='1'");

$admin = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo = '$correo' and contraseña = '$contraseña' and rol_usu ='2'");



if (mysqli_num_rows($admin) > 0) {
	$fila = mysqli_fetch_row($admin);
	session_start();
	$_SESSION['correo']=$correo;
    header('location:Administrador/index.php');

}elseif (mysqli_num_rows($usuario) > 0) {
	$fila = mysqli_fetch_row($usuario);
	session_start();
	$_SESSION['correo']=$correo;
    header('location:../Vista/index_usuarios.html');

}else{
	echo '<script> 
	alert("Error al ingresar contraseña incorrecta");
	window.history.go(-1);
	 </script>';
}


?>