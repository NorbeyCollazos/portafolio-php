<?php
require_once('../../models/admin/Administradores.php');
require_once('../../models/admin/Tecnologias.php');
$ModelAdministradores = new Administradores();
$ModelAdministradores->validateSession();

$ModelTecnologias = new Tecnologias();
$Tecnologias = $ModelTecnologias->get();

$Prioridades = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adminisrador</title>
  <!-- MDB icon -->
  <link rel="icon" href="../../assets/img/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../../assets/css/mdb.min.css" />
  <link rel="stylesheet" href="../../assets/css/main.css" />

  <!-- CDN CKEditor -->
  <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

</head>

<body>

  <?php include('../header.php'); ?>




  <div class="container mb-3 mt-3">

    <div class="card p-1 text-center mb-3">
      <h5>AGREGAR PROYECTO</h5>
    </div>

    <form action="../../controllers/admin/agregar_proyecto.php" method="post" enctype="multipart/form-data">
      <!-- 2 column grid layout with text inputs for the first and last names -->

      <div class="form-outline mb-4 col-md-6 col-lg-6 col-sm-12">
        <input type="text" id="form6Example1" class="form-control" name="titulo" />
        <label class="form-label" for="form6Example1">Título</label>
      </div>

      <div class="mb-4 col-md-12 col-lg-10 col-sm-12">
        <label class="form-label" for="form4Example3">Descripción</label>
        <textarea class="form-control" id="form4Example3" rows="4" id="descripcion" name="descripcion"></textarea>

      </div>

      <div class="mb-4 col-md-6 col-lg-6 col-sm-12">
        <label class="form-label" for="customFile">Imagen</label>
        <input type="file" class="form-control" id="customFile" name="imagen" />
      </div>


      <!-- Text url -->
      <div class="form-outline mb-4 col-md-6 col-lg-6 col-sm-12">
        <input type="url" id="form6Example3" class="form-control" name="urlgithub" />
        <label class="form-label" for="form6Example3">Url GitHub</label>
      </div>

      <!-- Text url -->
      <div class="form-outline mb-4 col-md-6 col-lg-6 col-sm-12">
        <input type="url" id="form6Example3" class="form-control" name="urldemo" />
        <label class="form-label" for="form6Example3">Url Demo</label>
      </div>

      <!-- Text url -->
      <div class="form-outline mb-4 col-md-6 col-lg-6 col-sm-12">
        <select name="idtecnologias" required class="form-select" aria-label="Default select example">
          <option>Seleccione la tecnología</option>
          <?php
          if ($Tecnologias != null) {
            foreach ($Tecnologias as $Tecnologia) {

          ?>
              <option value="<?php echo $Tecnologia['idtecnologias'] ?>"><?php echo $Tecnologia['titulo'] ?></option>
          <?php
            }
          }
          ?>
        </select>
      </div>

      <div class="form-outline mb-4 col-md-6 col-lg-6 col-sm-12">
        <select name="prioridad" required class="form-select" aria-label="Default select example">
          <option>Seleccione la prioridad</option>
          <?php
          foreach ($Prioridades as $Prioridad) {
          ?>
            <option value="<?php echo $Prioridad ?>"> <?php echo $Prioridad ?> </option>

          <?php
          }
          ?>
        </select>
      </div>


      <!-- Submit button -->
      <button type="submit" class="btn btn-outline-primary btn-rounded mb-4">Registrar</button>
    </form>

  </div>




  <?php include('../footer.php'); ?>

  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

  <script>
    CKEDITOR.replace('descripcion');
  </script>


</body>

</html>