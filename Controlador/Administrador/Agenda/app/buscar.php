<?php

require_once 'conexion.php';

$salida = "";

if(!empty($_POST['consulta'])) {
    $consulta = filter_var($_POST['consulta']) ;
    $sql = "SELECT * FROM visita WHERE id_visita LIKE '%".$consulta."%' OR disp_fecha LIKE '%".$consulta."%' OR disp_hora LIKE '%".$consulta."%' OR departamento LIKE '%".$consulta."%' OR ciudad LIKE '%".$consulta."%' OR visita_usuario LIKE '%".$consulta."%'";
    $query = $pdo->prepare($sql);
    $query->execute();
}

if($resultado = $query->rowCount() > 0) {
    $salida .= '<table class="table table-bordered text-center">
    <thead class="thead-light">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Disp_fecha</th>
        <th scope="col">Disp_hora</th>
        <th scope="col">Departamento</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Visita_usuario</th>
      </tr>
    </thead>
    <tbody>';

    while($fila = $query->fetch(PDO::FETCH_ASSOC)) {
        $salida.="<tr>
            <td>".$fila['id_visita']."</td>
            <td>".$fila['disp_fecha']."</td>
            <td>".$fila['disp_hora']."</td>
            <td>".$fila['departamento']."</td>
            <td>".$fila['ciudad']."</td>
            <td>".$fila['visita_usuario']."</td>
            <td><a href='editar.php?id=".$fila['id_visita']."' class='btn btn-warning'>Editar</a></td>
            <td>
            <button type='button' class='btn btn-scundary' data-bs-toggle='modal' data-bs-target='#aa".$fila['id_visita']."' >
              Eliminar
            </button>
            <div class='modal fade' id='aa".$fila['id_visita']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'  >
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
                    <a href='procesos/eliminar.php?id=".$fila['id_visita']."' class='btn btn-danger'>Si</a>
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
        <th scope="col">Disp_fecha</th>
        <th scope="col">Disp_hora</th>
        <th scope="col">Departamento</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Visita_usuario</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="4" class="text-center">NO HAY DATOS EN ESTA BUSQUEDA</td>
        </tr>
    </tbody></table>';
}
echo $salida;