<?php
require_once('../../models/admin/Administradores.php');
require_once('../../models/admin/Tecnologias.php');
$ModelAdministradores = new Administradores();
$ModelAdministradores->validateSession();

$ModelTecnologias = new Tecnologias();
$id = $_GET['id'];
$Tecnologias = $ModelTecnologias->getById($id);

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
</head>

<body>

    <?php include('../header.php'); ?>


    <div class="container mt-3 mb-3">

        <div class="card p-1 text-center mb-3">
            <h5>EDITAR TECNOLOGÍA</h5>
        </div>

        <form action="../../controllers/admin/editar_tecnologia.php" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->

            <input type="hidden" name="id" value="<?php echo $id ?>" />

            <?php if ($Tecnologias != null) {
                foreach ($Tecnologias as $Tecnologia) {
            ?>

                    <div class="form-outline mb-4 col-md-6 col-lg-6 col-sm-12">
                        <input type="text" id="form6Example1" class="form-control" name="titulo" value="<?php echo $Tecnologia['titulo'] ?>" />
                        <label class="form-label" for="form6Example1">Título</label>
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4 col-md-6 col-lg-6 col-sm-12">
                        <input type="text" id="form6Example3" class="form-control" name="etiqueta" value="<?php echo $Tecnologia['etiqueta'] ?>" />
                        <label class="form-label" for="form6Example3">Etiqueta</label>
                    </div>

                    <div class="form-outline mb-4 col-md-6 col-lg-6 col-sm-12">
                        <select name="prioridad" required class="form-select" aria-label="Default select example">
                            <option value="<?php echo $Tecnologia['prioridad'] ?>">Prioridad actual: <?php echo $Tecnologia['prioridad'] ?></option>
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




    <?php include('../footer.php'); ?>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

</body>

</html>