<?php
require_once "conexion.php";
$obj=new conectar();
$conexion=$obj->conexion();
$id=$_GET['id'];
$sql="SELECT nombre,apellido,num_telefono,num_celular,direccion from persona where id_cedula='$id'";
$result=mysqli_query($conexion,$sql);
$ver=mysqli_fetch_row($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
</head>
<body>
<h2>Editar</h2>
<form action="procesos/actualizar.php" method="post">
    <input type="text" hidden value="<?php echo $id ?> " name="id_cedula">
	<input type="text" name="nombre" placeholder="Nombre" value="<?php echo $ver[0]?>">
	<input type="text" name="apellido" placeholder="Apellido" value="<?php echo $ver[1]?>">
	<input type="text" name="num_telefono" placeholder="Telefono" value="<?php echo $ver[2]?>">
	<input type="text" name="num_celular" placeholder="Celular" value="<?php echo $ver[3]?>">
	<input type="text" name="direccion" placeholder="Direccion" value="<?php echo $ver[4]?>">
	<input type="submit" value="Editar">
</form>
</body>
</html>