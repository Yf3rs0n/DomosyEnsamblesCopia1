<?php
require_once "app/conexion.php";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>editar</title>
</head>
<body >
<h2>Editar</h2>
<form action="procesos/actualizar.php" method="post">
        <input type="text" hidden value="<?php echo $id ?> " name="id_cedula">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
      <input type="text" name="nombre" placeholder="Nombre"  class="form-control"   value="<?php echo $ver[0]?>">
      </div>
      <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Apellido</label>
      <input type="text" name="apellido" placeholder="Apellido"  class="form-control"  value="<?php echo $ver[1]?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefono</label>
      <input type="text" name="num_telefono" placeholder="Telefono"  class="form-control"  value="<?php echo $ver[2]?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Celular</label>
      <input type="text" name="num_celular" placeholder="Celular"  class="form-control" value="<?php echo $ver[3]?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Direccion</label>
      <input type="text" name="direccion" placeholder="Direccion"  class="form-control" value="<?php echo $ver[4]?>">
      </div>
      <div class="mb-3 form-check">
      </div>
      <button type="submit" class="btn btn-primary">Editar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>