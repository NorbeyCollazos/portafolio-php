<?php
require_once('../../models/admin/Administradores.php');
require_once('../../models/admin/Tecnologias.php');
require_once('../../models/admin/Proyectos.php');
$ModelAdministradores = new Administradores();
$ModelAdministradores->validateSession();

$ModelTecnologias = new Tecnologias();
$Tecnologias = $ModelTecnologias->get();

$ModelProyectos = new Proyectos();
$Proyectos = $ModelProyectos->get();

if($_GET){
    $identab = $_GET['identab'];
}

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

        <div class="card p-1 text-center">
            <h5>PANEL INICIAL</h5>
        </div>

        <!-- Tabs navs -->
        <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link <?php if($identab == 'proyectos') echo ''; else echo 'active'?>" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab" aria-controls="ex2-tabs-1" aria-selected="true">Tecnologias</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link <?php if($identab == 'proyectos') echo 'active' ?>" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab" aria-controls="ex2-tabs-2" aria-selected="false">Proyectos</a>
            </li>
        </ul>
        <!-- Tabs navs -->

        <!-- Tabs content -->
        <div class="tab-content" id="ex2-content">

            <div class="tab-pane fade <?php if($identab == 'proyectos') echo ''; else echo 'show active'?>" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">


                <a type="button" class="btn btn-outline-secondary btn-rounded" data-mdb-ripple-color="dark" href="agregar_tecnologia.php">
                    Agregar tecnología
                </a>

                <table class="table mt-2 align-middle table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">TÍTULO</th>
                            <th scope="col">ETIQUETA</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if ($Tecnologias != null) {
                            foreach ($Tecnologias as $Tecnologia) {
                        ?>

                                <tr>
                                    <td scope="row"><?php echo $Tecnologia['idtecnologias'] ?></td>
                                    <td><?php echo $Tecnologia['titulo'] ?></td>
                                    <td><?php echo $Tecnologia['etiqueta'] ?></td>
                                    <td>
                                        <a class="btn btn-primary btn-rounded btn-sm" href="editar_tecnologia.php?id=<?php echo $Tecnologia['idtecnologias'] ?>">Editar</a>
                                        <button onclick="alertEliminar('../../controllers/admin/eliminar_tecnologia.php?id=<?php echo $Tecnologia['idtecnologias'] ?>');" class="btn btn-danger btn-rounded btn-sm">Eliminar</button>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>


            </div>


            <div class="tab-pane fade <?php if($identab == 'proyectos') echo 'show active' ?>" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">


                <a type="button" class="btn btn-outline-secondary btn-rounded" data-mdb-ripple-color="dark" href="agregar_proyecto.php">
                    Agregar proyecto
                </a>

                <table class="table mt-2 align-middle table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">TÍTULO</th>
                            <th scope="col">TECNOLOGÍA</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($Proyectos != null) {
                            foreach ($Proyectos as $Proyecto) {
                        ?>
                                <tr>
                                    <td><?php echo $Proyecto['titulo_proyecto'] ?></td>
                                    <td>
                                        <?php echo $Proyecto['titulo_tecnologia'] ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-rounded btn-sm" href="editar_proyecto.php?id=<?php echo $Proyecto['idproyectos'] ?>">Editar</a>
                                        <button onclick="alertEliminar('../../controllers/admin/eliminar_proyecto.php?id=<?php echo $Proyecto['idproyectos'] ?>&imagen=<?php echo $Proyecto['imagen'] ?>')" class="btn btn-danger btn-rounded btn-sm">Eliminar</button>
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
        <!-- Tabs content -->

    </div>




    <?php include('../footer.php'); ?>

    <!-- End your project here-->

    <script>
        function alertEliminar(url) {
            var opcion = confirm("¿Seguro desea eliminar este registro?");
            if (opcion == true) {
                window.location.href = url;
            } else {

            }
        }
    </script>

    <!-- MDB -->
    <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

</body>

</html>