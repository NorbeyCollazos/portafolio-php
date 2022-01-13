<?php
require_once('../../models/admin/Administradores.php');
require_once('../../models/admin/Imagenes.php');
$ModelAdministradores = new Administradores();
$ModelAdministradores->validateSession();

$ModelImagenes = new Imagenes();
$id = $_GET['id'];
$idproyectos = $_GET['idproyectos'];
$Imagenes = $ModelImagenes->getById($id);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar imagen</title>
    <!-- MDB icon -->
    <link rel="icon" href="../../assets/img/favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../assets/css/mdb.min.css" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
</head>

<body>

    <?php include('../header.php'); ?>

    <div class="container p-3">

        <div class="card p-1 text-center mb-3">
            <h5>EDITAR IMAGEN</h5>
        </div>

        <form action="../../controllers/admin/editar_imagen.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <input type="hidden" name="idproyectos" value="<?php echo $idproyectos ?>" />

            <?php
            if ($Imagenes != null) {
                foreach ($Imagenes as $Imagen) {
            ?>

                    <img width="80" height="80" src="../../assets/img/proyectos/<?php echo $Imagen['urlimagen'] ?>" alt="">
                    <br>
                    <label class="form-label" for="customFile">Imagen</label>
                    <input type="file" class="form-control" id="customFile" name="imagen" />
                    <input type="hidden" class="form-control" name="nombreimagen" value="<?php echo $Imagen['urlimagen'] ?>" />

                    <div class="form-outline mt-4 mb-4">
                        <input type="text" id="form6Example1" class="form-control" name="descripcion" value="<?php echo $Imagen['descripcion'] ?>" />
                        <label class="form-label" for="form6Example1">Descripción</label>
                    </div>

            <?php
                }
            }
            ?>
            <button type="submit" class="btn btn-outline-primary btn-rounded">Editar</button>
        </form>

    </div>

    <?php include('../footer.php'); ?>


    <!-- MDB -->
    <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

</body>

</html>