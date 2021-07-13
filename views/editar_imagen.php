<?php
require_once('../models/Administradores.php');
require_once('../models/Imagenes.php');
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
    <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../assets/css/mdb.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
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

    <div class="container p-3">

        <h3 class="">Editar Imagen</h3>

        <form action="../controllers/editar_imagen.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <input type="hidden" name="idproyectos" value="<?php echo $idproyectos ?>" />

            <?php
            if ($Imagenes != null) {
                foreach ($Imagenes as $Imagen) {
            ?>

                    <img width="80" height="80" src="../assets/img/proyectos/<?php echo $Imagen['urlimagen'] ?>" alt="">
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
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>

</body>

</html>