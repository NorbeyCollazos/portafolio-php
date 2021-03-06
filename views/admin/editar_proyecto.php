<?php
require_once('../../models/admin/Administradores.php');
require_once('../../models/admin/Proyectos.php');
require_once('../../models/admin/Tecnologias.php');
require_once('../../models/admin/Imagenes.php');
$ModelAdministradores = new Administradores();
$ModelAdministradores->validateSession();

$ModelProyectos = new Proyectos();
$id = $_GET['id'];
$Proyectos = $ModelProyectos->getById($id);

$ModelTecnologias = new Tecnologias();
$Tecnologias = $ModelTecnologias->get();

$ModelImagenes = new Imagenes();
$Imagenes = $ModelImagenes->get($id);

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


  <div class="container mt-3 mb-3">

  <div class="card p-1 text-center mb-3">
      <h5>EDITAR PROYECTO</h5>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">

        <form action="../../controllers/admin/editar_proyecto.php" method="post" enctype="multipart/form-data">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <input type="hidden" name="id" value="<?php echo $id; ?>" />

          <?php
          if ($Proyectos != null) {
            foreach ($Proyectos as $Proyecto) {
          ?>

              <div class="form-outline mb-4">
                <input type="text" id="form6Example1" class="form-control" name="titulo" value="<?php echo $Proyecto['titulo_proyecto'] ?>" />
                <label class="form-label" for="form6Example1">T??tulo</label>
              </div>

              <div class="mb-4">
                <label class="form-label" for="form4Example3">Descripci??n</label>
                <textarea class="form-control" id="form4Example3" rows="4" id="descripcion" name="descripcion"><?php echo $Proyecto['descripcion'] ?></textarea>

              </div>
              <img src="../../assets/img/proyectos/<?php echo $Proyecto['imagen'] ?>" width="80" height="80" alt="">
              <div class="mb-4">
                <label class="form-label" for="customFile">Imagen</label>
                <input type="file" class="form-control" id="customFile" name="imagen" />
                <input type="hidden" class="form-control" name="nombreimagen" value="<?php echo $Proyecto['imagen'] ?>" />
              </div>


              <!-- Text url -->
              <div class="form-outline mb-4">
                <input type="url" id="form6Example3" class="form-control" name="urlgithub" value="<?php echo $Proyecto['urlgithub'] ?>" />
                <label class="form-label" for="form6Example3">Url GitHub</label>
              </div>

              <!-- Text url -->
              <div class="form-outline mb-4">
                <input type="url" id="form6Example3" class="form-control" name="urldemo" value="<?php echo $Proyecto['urldemo'] ?>" />
                <label class="form-label" for="form6Example3">Url Demo</label>
              </div>

              <!-- Text url -->
              <div class="form-outline mb-4 col-md-6 col-lg-12 col-sm-12">
                <select name="idtecnologias" required class="form-select" aria-label="Default select example">
                  <option value="<?php echo $Proyecto['idtecnologias'] ?>"><?php echo $Proyecto['titulo_tecnologia'] ?></option>
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
                  <option value="<?php echo $Proyecto['prioridad'] ?>">Prioridad actual: <strong><?php echo $Proyecto['prioridad'] ?></strong> </option>
                  <?php
                  foreach ($Prioridades as $Prioridad) {
                  ?>
                    <option value="<?php echo $Prioridad ?>"> <?php echo $Prioridad ?> </option>

                  <?php
                  }
                  ?>
                </select>
              </div>


          <?php
            }
          }
          ?>

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
            <?php
            if ($Imagenes != null) {
              foreach ($Imagenes as $Imagen) {
            ?>
                <tr>
                  <td>
                    <img src="../../assets/img/proyectos/<?php echo $Imagen['urlimagen'] ?> " class="img-fluid rounded-circle" style="width: 80px; height: 80px;" />
                  </td>
                  <td>
                    <a class="btn btn-primary btn-rounded btn-sm" href="editar_imagen.php?id=<?php echo $Imagen['idimagenes'] ?>&idproyectos=<?php echo $id ?>">Editar</a>
                    <button class="btn btn-danger btn-rounded btn-sm" onclick="alertEliminar('../../controllers/admin/eliminar_imagen.php?id=<?php echo $Imagen['idimagenes'] ?>&imagen=<?php echo $Imagen['urlimagen'] ?>&idproyectos=<?php echo $id ?>')">Eliminar</button>
                  </td>
                </tr>
            <?php
              }
            }
            ?>
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

          <form action="../../controllers/admin/agregar_imagen.php" method="POST" enctype="multipart/form-data">

            <label class="form-label" for="customFile">Imagen</label>
            <input type="file" class="form-control" id="customFile" name="imagen" />

            <div class="form-outline mt-4 mb-4">
              <input type="text" id="form6Example1" class="form-control" name="descripcion" />
              <label class="form-label" for="form6Example1">Descripci??n</label>
            </div>
            <input type="hidden" name="idproyectos" value="<?php echo $id ?>" />
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
  <script>
    function alertEliminar(url) {
      var opcion = confirm("??Seguro desea eliminar esta imagen?");
      if (opcion == true) {
        window.location.href = url;
      } else {

      }
    }
  </script>

  <script>
    function paginaEditarImagen(URL) {
      window.open(URL, "ventana1", "width=500,height=550")
    }
  </script>

  <!-- MDB -->
  <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

  <script>
    CKEDITOR.replace('descripcion');
  </script>


</body>

</html>