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
                        <a class="nav-link">EDITAR TECNOLOGÍA</a>
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

        <form action="../controllers/editar_tecnologia.php" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->

            <div class="form-outline mb-4 col-md-6 col-lg-6 col-sm-12">
                <input type="text" id="form6Example1" class="form-control" name="titulo" />
                <label class="form-label" for="form6Example1">Título</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4 col-md-6 col-lg-6 col-sm-12">
                <input type="text" id="form6Example3" class="form-control" name="etiqueta" />
                <label class="form-label" for="form6Example3">Etiqueta</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-primary btn-rounded mb-4">Registrar</button>
        </form>

    </div>




    <?php include('../footer.php'); ?>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>

</body>

</html>