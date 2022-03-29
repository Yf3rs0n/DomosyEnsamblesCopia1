<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administrador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ad.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="imagenes/logo.ico">
</head>
<body style= "background-color: #f2f2f2">
<header id="bk" >
        <div class="fixed-top">
          <div class="container-fluid ">
            <nav class="navbar navbar-expand-md fixed-top bg-dark"><!--Para que el menu quede fijo en la parte de arriba ala hora de hacer scroll -->
                <img  class="bi me-3" width="32" height="32" src="imagenes/logo.ico" alt="">
                <a class="d-flex align-items-center text-white text-decoration-none"> Domos y Ensambles</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menures">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"></path>
                    <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"></path>
                    <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"></path>
                  </svg>
                </button><!--Imagen mala-->
                <div class="collapse navbar-collapse justify-content-end" id="menures">
                  <ul class="nav navbar-nav">
                    <li class="nav-item">
                      <a href="../index.html" class="nav-link text-white">Cerrar</a>
                    </li>
                  </ul>
                  <!-- ----------------------- -->
                </div>
             </nav>
          </div>
        </div>
      </header>

      <div class= "contenedor-ad">
      <div class="contenido-ad">
        <div class="cards-ad">
            <div class="card-ad">
                <div class="box-ad">
                    <h3><a class="a-ad" href="../index.php">Personas</a></h3>
                </div>
                <div class="icon-case-ad">
                    <img style="width: 90px; height: 98px;" src="imagenes/1.png" alt="Personas">
                </div>
            </div>
            <div class="card-ad">
                <div class="box-ad">
                    <h3><a class="a-ad" href="../Agenda/index.php">Agendas</a></h3>
                </div>
                <div class="icon-case-ad">
                    <img style="width: 115px; height: 98px;" src="imagenes/Agenda.png" alt="Personas">
                </div>
            </div>
            <div class="card-ad">
                <div class="box-ad">
                    <h3><a class="a-ad" href="#">Usuarios</a></h3>
                </div>
                <div class="icon-case-ad">
                    <img style="width: 100px; height: 94px;" src="imagenes/Usuarios.png" alt="Personas">
                </div>
            </div>
            <div class="card-ad">
                <div class="box-ad">
                    <h3><a class="a-ad" href="#">Contratos</a></h3>
                </div>
                <div class="icon-case-ad">
                    <img style="width: 115px; height: 98px;" src="imagenes/Contrato.png" alt="Personas">
                </div>
            </div>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

    <div class="container mt-5 bg-white shadow border">
        <div class="row mt-3">
            <div class="col-md-1">
                <select class="custom-select my-3" id="inlineFormCustomSelectPref">
                  <option value="1">10</option>
                  <option value="2">20</option>
                  <option value="3">30</option>
                  <option value="4">Todos</option>
                </select>
            </div>
            <div class="col-md-3 my-3">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Agregar
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Agregar persona</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="procesos/insertar.php" method="post" > 
                      <div class="mb-3">
                          <label for="recipient-name"  class="col-form-label">Nombre:</label>
                          <input type="text" class="form-control"  name="nombre">
                      </div>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Apellido:</label>
                        <input type="text" class="form-control" name="apellido">
                      </div>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control" name="num_telefono">
                      </div>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Celular:</label>
                        <input type="text" class="form-control" name="num_celular">
                      </div>
                      <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Direccion:</label>
                        <input type="text" class="form-control"  name="direccion">
                      </div>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <button type="sutmit" class="btn btn-primary">Guardar</button>

                    
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 my-3">
                <form class="form-inline justify-content-end">
                    <label class="mr-3" for="">Buscar:</label><input class="form-control mr-sm-2" type="search" id="busqueda" name="busqueda" aria-label="Search">
                  </form>
            </div>
        </div>
        <!---------------------- Crud --------------------------------->
        <div class="row">
            <div class="col-md-12">
                <div id="datos">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item" aria-current="page">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>
    <script src="js/buscar.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>