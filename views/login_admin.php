<?php
session_start();

if (!empty($_SESSION["ID"])) {
    $sesion = $_SESSION["ID"];
    if ($sesion != null) {
        header('Location: panel_inicial.php');
    }
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


    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="text-center">
                <img class="img-fluid w-50 p-3" src="../assets/img/logo_ncr_desarrollo.png" alt="logo large">
                <form action="../controllers/Login.php" method="POST">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form1Example1" class="form-control" name="usuario" />
                        <label class="form-label" for="form1Example1">Usuario</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form1Example2" class="form-control" name="contrasena" />
                        <label class="form-label" for="form1Example2">Contraseña</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                </form>
            </div>
        </div>
    </div>




    <?php include('footer.php'); ?>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>

</body>

</html>