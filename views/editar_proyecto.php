<?php
require_once('../models/Administradores.php');
$ModelAdministradores = new Administradores();
$ModelAdministradores->validateSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adminisrador</title>
  <!-- MDB icon -->
  <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../assets/css/mdb.min.css" />
  <link rel="stylesheet" href="../assets/css/main.css" />

  <!-- CDN CKEditor -->
  <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2" href="../index.php">
        <img src="../assets/img/logo_ncr_desarrollo.png" height="50" alt="" loading="lazy" style="margin-top: -1px;" />
      </a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link">EDITAR PROYECTO</a>
          </li>
        </ul>
        <!-- Left links -->

        <div class="d-flex align-items-center">
          <a href="panel_inicial.php" class="btn btn-link px-3 me-2">
            <i class="fas fa-home"></i> Inicio
          </a>
          <a class="btn btn-link px-3" href="../controllers/Salir.php">
            Cerrar sesión <i class="fas fa-sign-out-alt"></i></a>
        </div>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->


  <div class="container mt-3 mb-3">

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">

        <form action="../controllers/agregar_proyecto.php" method="post">
          <!-- 2 column grid layout with text inputs for the first and last names -->

          <div class="form-outline mb-4">
            <input type="text" id="form6Example1" class="form-control" name="titulo" />
            <label class="form-label" for="form6Example1">Título</label>
          </div>

          <div class="mb-4">
            <label class="form-label" for="form4Example3">Descripción</label>
            <textarea class="form-control" id="form4Example3" rows="4" id="descripcion" name="descripcion"></textarea>

          </div>

          <div class="mb-4">
            <label class="form-label" for="customFile">Imagen</label>
            <input type="file" class="form-control" id="customFile" />
          </div>


          <!-- Text url -->
          <div class="form-outline mb-4">
            <input type="url" id="form6Example3" class="form-control" name="urlgithub" />
            <label class="form-label" for="form6Example3">Url GitHub</label>
          </div>

          <!-- Text url -->
          <div class="form-outline mb-4">
            <input type="url" id="form6Example3" class="form-control" name="urldemo" />
            <label class="form-label" for="form6Example3">Url Demo</label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-outline-primary btn-rounded mb-4">Editar</button>
        </form>

      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">

        <div class="text-center">
          <h5 class="text-center">Imagenes</h5>

          <button type="button" class="btn btn-outline-secondary btn-rounded" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
            Registrar imagen
          </button>
        </div>


        <table class="table mt-5 align-middle border">
          <thead>
            <tr>
              <th scope="col">IMAGEN</th>
              <th scope="col">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="https://mdbootstrap.com/img/new/standard/city/047.jpg" class="img-fluid rounded-circle" style="width: 80px; height: 80px;" />
              </td>
              <td>
                <a class="btn btn-primary btn-rounded btn-sm" href="">Editar</a>
                <a class="btn btn-danger btn-rounded btn-sm" href="">Eliminar</a>
              </td>
            </tr>
          </tbody>
        </table>

      </div>

    </div>



  </div>



  <!-- Modal registrar imagen-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar imagen</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="../controllers/agregar_imagen.php" method="POST">

            <label class="form-label" for="customFile">Imagen</label>
            <input type="file" class="form-control" id="customFile" name="imagen" />

            <div class="form-outline mt-4 mb-4">
              <input type="text" id="form6Example1" class="form-control" name="descripcion" />
              <label class="form-label" for="form6Example1">Descripción</label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary btn-rounded" data-mdb-dismiss="modal">
            Cerrar
          </button>
          <button type="submit" class="btn btn-outline-primary btn-rounded">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>




  <?php include('../footer.php'); ?>

  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="../assets/js/mdb.min.js"></script>

  <script>
    CKEDITOR.replace('descripcion');
  </script>


</body>

</html>