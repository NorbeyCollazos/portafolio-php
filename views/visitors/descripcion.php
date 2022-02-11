<?php
require_once('../../models/admin/Proyectos.php');
require_once('../../models/admin/Imagenes.php');

$id = $_GET['id'];

$ModelProyectos = new Proyectos();
$Proyectos = $ModelProyectos->getById($id);

$ModelImagenes = new Imagenes();
$Imagenes = $ModelImagenes->getByIdProyecto($id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Portafolio|Norbey Collazos Ramirez</title>
  <!-- MDB icon -->
  <link rel="icon" href="../../assets/img/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../../assets/css/mdb.min.css" />
  <link rel="stylesheet" href="../../assets/css/main.css" />


  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

  <!--librerias para la galeria de imagenes con el ligbox-->
  <script src="../../assets/js/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />


  <link rel="stylesheet" href="../../assets/css/estilos_descripcion.css" />


</head>

<body>

  <!-- Start your project here-->
  <div class="container mt-2 mb-2">

    <?php
    if ($Proyectos != null) {
      foreach ($Proyectos as $Proyecto) {
    ?>
        <div class="card mt-5 mb-3 px-3 text-center">
          <h3><strong><?php echo $Proyecto['titulo_proyecto'] ?></strong></h3>
        </div>


        <div class="row">

          <div class="col-md-6 col-sm-12 col-lg-6 mb-3">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Descripción</h5>
                <div class="row">
                  <p class="card-text">
                    <?php echo $Proyecto['descripcion'] ?>
                  </p>

                </div>
              </div>
            </div>

          </div>

          <div class="col-md-6 col-sm-12 col-lg-6 mb-3">
            <div class="bg-image card content-imagenes">

              <div class="card-body">

                <a class="btn btn-outline-primary btn-lg m-2" href="<?php echo $Proyecto['urlgithub'] ?>" role="button" rel="nofollow" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                <a class="btn btn-outline-success btn-lg m-2" href="<?php echo $Proyecto['urldemo'] ?>" role="button" rel="nofollow" target="_blank"><i class="fas fa-eye"></i> Ver Demo</i></a>

                <div class="lightbox">
                  <div class="row">
                    <?php
                    if ($Imagenes != null) {
                      foreach ($Imagenes as $Imagen) {
                    ?>

                        <div class="galeria col-md-12 col-sm-12 col-lg-12 mt-3">
                          <a href="../../assets/img/proyectos/<?php echo $Imagen['urlimagen'] ?>" class="fancybox" data-fancybox="gallery1">
                            <img class="" src="../../assets/img/proyectos/<?php echo $Imagen['urlimagen'] ?>" alt="">
                          </a>

                        </div>


                    <?php
                      }
                    }
                    ?>

                  </div>
                </div>

              </div>

            </div>
          </div>

        </div>

    <?php
      }
    }
    ?>

  </div>
  <!-- End your project here-->

  <?php include('../footer.php'); ?>

  <!-- MDB -->
  <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
  <script>
    setTimeout(() => {
      const tl = gsap.timeline();
      tl.to("#logo", {
        duration: .5,
        x: 0,
        ease: 'expo'
      });
      tl.to("#ncr", {
        duration: .5,
        x: 0,
        ease: 'expo'
      });
      tl.to("#desarrollo", {
        duration: .5,
        scale: 1,
        opacity: 1,
        ease: 'expo'
      }, '-=.1');
      tl.to("#norbey", {
        duration: .5,
        y: 0,
        opacity: 1,
        ease: 'expo'
      })
      //tl.to("#dos", { delay: 3, duration: .5, y: '-100%', opacity: 0,  ease: 'expo' })
      //tl.to("#uno", { duration: .75, x: '-100%', opacity: 0, ease: 'expo' }, '-=.3');

    }, 100)
  </script>
</body>

</html>