<?php
require_once('../models/Proyectos.php');
require_once('../models/Imagenes.php');

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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Portafolio|Norbey Collazos Ramirez</title>
  <!-- MDB icon -->
  <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../assets/css/mdb.min.css" />
  <link rel="stylesheet" href="../assets/css/main.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
    }

    .caja {
      display: flex;
      flex-flow: column wrap;
      justify-content: center;
      align-items: center;
      background: #333944;
    }

    .box {
      width: 450px;
      height: 300px;
      background: #CCC;
      overflow: hidden;
    }

    .box img {
      width: 100%;
      height: auto;
    }

    @supports(object-fit: cover) {
      .box img {
        height: 100%;
        object-fit: cover;
        object-position: center center;
      }
    }
  </style>


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
            <div class="bg-image card">

              <!-- Carousel wrapper -->
              <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                  <?php
                  if ($Imagenes != null) {
                    foreach ($Imagenes as $Imagen) {
                  ?>
                      <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <!--<button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>-->
                  <?php
                    }
                  }
                  ?>
                </div>

                <!-- Inner -->
                <div class="carousel-inner">
                  <!-- Single item -->
                  <?php
                  $pri = true;
                  if ($Imagenes != null) {
                    foreach ($Imagenes as $Imagen) {
                  ?>
                      <div class="carousel-item <?php if ($Imagen === reset($Imagenes)) echo 'active' ?>">
                        <img src="../assets/img/proyectos/<?php echo $Imagen['urlimagen'] ?>" class="d-block img-fluid" alt="..." style="height: 300px; margin-left: auto; margin-right: auto;" />
                        <div class="carousel-caption d-none d-md-block">
                          <!--<h5>First slide label</h5>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>-->
                        </div>

                      </div>
                  <?php
                    }
                  }
                  ?>


                </div>
                <!-- Inner -->

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <!-- Carousel wrapper -->


              <div class="card-body">
                <a class="btn btn-outline-primary btn-lg m-2" href="<?php echo $Proyecto['urlgithub'] ?>" role="button" rel="nofollow" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                <a class="btn btn-outline-success btn-lg m-2" href="<?php echo $Proyecto['urldemo'] ?>" role="button" rel="nofollow" target="_blank"><i class="fas fa-eye"></i> Ver Demo</i></a>


              </div>
            </div>
          </div>


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






        </div>

    <?php
      }
    }
    ?>

  </div>
  <!-- End your project here-->

  <?php include('footer.php'); ?>

  <!-- MDB -->
  <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
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