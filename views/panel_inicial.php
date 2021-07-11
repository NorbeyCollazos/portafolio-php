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
                        <a class="nav-link">PANEL INICIAL</a>
                    </li>
                </ul>
                <!-- Left links -->

                <div class="d-flex align-items-center">
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

        <!-- Tabs navs -->
        <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab" aria-controls="ex2-tabs-1" aria-selected="true">Tecnologias</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab" aria-controls="ex2-tabs-2" aria-selected="false">Proyectos</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#ex2-tabs-3" role="tab" aria-controls="ex2-tabs-3" aria-selected="false">Imagenes</a>
            </li>
        </ul>
        <!-- Tabs navs -->

        <!-- Tabs content -->
        <div class="tab-content" id="ex2-content">
            <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">


                <a type="button" class="btn btn-outline-secondary btn-rounded" data-mdb-ripple-color="dark" href="agregar_tecnologia.php">
                    Agregar tecnología
                </a>

                <table class="table mt-2 align-middle table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">TÍTULO</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <a class="btn btn-primary btn-rounded btn-sm" href="editar_tecnologia.php">Editar</a>
                                <a class="btn btn-danger btn-rounded btn-sm" href="">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>


            <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">


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
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <a class="btn btn-primary btn-rounded btn-sm" href="editar_proyecto.php">Editar</a>
                                <a class="btn btn-danger btn-rounded btn-sm" href="">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>
            <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">


                <table class="table mt-5 align-middle">
                    <thead>
                        <tr>
                            <th scope="col">IMAGEN</th>
                            <th scope="col">PROYECTO</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="https://mdbootstrap.com/img/new/standard/city/047.jpg" class="img-fluid rounded-circle" style="width: 80px; height: 80px;" />
                            </td>
                            <td></td>
                            <td>
                                <a class="btn btn-primary btn-rounded btn-sm" href="">Editar</a>
                                <a class="btn btn-danger btn-rounded btn-sm" href="">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>
        <!-- Tabs content -->

    </div>




    <?php include('../footer.php'); ?>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>

</body>

</html>