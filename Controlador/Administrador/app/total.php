<?php

require_once 'conexion.php';

$salida = "";
$sql = "SELECT * FROM persona";
$query = $pdo->prepare($sql);
$query->execute();


if($resultado = $query->rowCount() > 0) {
    $salida .='<table class="table table-bordered text-center">
    <thead class="thead-light">
      <tr>
        <th scope="col">Documento</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Celular</th>
        <th scope="col">Direccion</th>
      </tr>
    </thead>
    <tbody>';

    while($fila = $query->fetch(PDO::FETCH_ASSOC)) {
        $salida.="<tr>
                <td>".$fila['id_cedula']."</td>
                <td>".$fila['nombre']."</td>
                <td>".$fila['apellido']."</td>
                <td>".$fila['num_telefono']."</td>
                <td>".$fila['num_celular']."</td>
                <td>".$fila['direccion']."</td>
                <td><a href='editar.php?id=".$fila['id_cedula']."' class='btn btn-warning'>Editar</a></td>
                <td>
                <button type='button' class='btn btn-scundary' data-bs-toggle='modal' data-bs-target='#aa".$fila['id_cedula']."' >
                  Eliminar
                </button>
                <div class='modal fade' id='aa".$fila['id_cedula']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'  >
                  <div class='modal-dialog'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                      </div>
                      <div class='modal-body'>
                        ...
                      </div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>No</button>
                        <a href='procesos/eliminar.php?id=".$fila['id_cedula']."' class='btn btn-danger'>Si</a>
                      </div>
                    </div>
                  </div>
                </div>

                </td>
            </tr>";
    }

    $salida.="</tbody></table>";

} else {
    $salida .= '<table class="table table-bordered text-center">
      <thead class="thead-light">
        <tr>
          <th scope="col">Documento</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Telefono</th>
          <th scope="col">Celular</th>
          <th scope="col">Direccion</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td colspan="4" class="text-center">NO HAY DATOS EN ESTA TABLA</td>
        </tr>
      </tbody></table>';
}
echo $salida;
?>