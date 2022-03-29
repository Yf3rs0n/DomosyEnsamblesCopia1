<?php

require_once 'conexion.php';

$salida = "";

if(!empty($_POST['consulta'])) {
    $consulta = filter_var($_POST['consulta']) ;
    $sql = "SELECT * FROM contrato WHERE id_contrato LIKE '%".$consulta."%' OR servicio_instalacion LIKE '%".$consulta."%' OR tipo_pago LIKE '%".$consulta."%' OR detalles_agregados LIKE '%".$consulta."%'";
    $query = $pdo->prepare($sql);
    $query->execute();
}

if($resultado = $query->rowCount() > 0) {
    $salida .= '<table class="table table-bordered text-center">
    <thead class="thead-light">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Servicio_instalacion</th>
        <th scope="col">Tipo_pago</th>
        <th scope="col">Detalles_agregados</th>
        <th scope="col">Usuario_contrato</th>
      </tr>
    </thead>
    <tbody>';

    while($fila = $query->fetch(PDO::FETCH_ASSOC)) {
        $salida.="<tr>
            <td>".$fila['id_contrato']."</td>
            <td>".$fila['servicio_instalacion']."</td>
            <td>".$fila['tipo_pago']."</td>
            <td>".$fila['detalles_agregados']."</td>
            <td>".$fila['usuario_contrato']."</td>
            <td><a href='editar.php?id=".$fila['id_contrato']."' class='btn btn-warning'>Editar</a></td>
            <td>
            <button type='button' class='btn btn-scundary' data-bs-toggle='modal' data-bs-target='#aa".$fila['id_contrato']."' >
              Eliminar
            </button>
            <div class='modal fade' id='aa".$fila['id_contrato']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'  >
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
                    <a href='procesos/eliminar.php?id=".$fila['id_contrato']."' class='btn btn-danger'>Si</a>
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
        <th scope="col">ID</th>
        <th scope="col">Servicio_instalacion</th>
        <th scope="col">Tipo_pago</th>
        <th scope="col">Detalles_agregados</th>
        <th scope="col">Usuario_contrato</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="4" class="text-center">NO HAY DATOS EN ESTA BUSQUEDA</td>
        </tr>
    </tbody></table>';
}
echo $salida;