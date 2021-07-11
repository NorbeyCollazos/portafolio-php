<?php

if ($_GET) {
  $id = $_GET['id'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Portafolio|Norbey Collazos Ramirez</title>
  <!-- MDB icon -->
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="assets/css/mdb.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>


</head>

<body>
  <header class="p-5 text-center bg-image">

    <img class="img-fluid w-50 p-3" id="logo" src="assets/img/logo_blanco.png" alt="logo large">
    <div class="d-flex justify-content-center align-items-center h-100 sobreponer" style="z-index: 100;">
      <div class="text-white">
        <h1 class="mb-3" id="ncr">NCR <span id="desarrollo">Desarrollo</span></h1>
        <h5 class="mb-4" id="norbey">Norbey Collazos Ramirez</h5>

        <a class="btn btn-outline-light btn-lg m-2 btn-floating" href="https://github.com/NorbeyCollazos" role="button" rel="nofollow" target="_blank" id="norbey"><i class="fab fa-github"></i></a>
        <a class="btn btn-outline-light btn-lg m-2 btn-floating" href="https://www.linkedin.com/in/norbey-collazos-ramirez-753b961a6/" target="_blank" role="button" id="norbey"><i class="fab fa-linkedin-in"></i></a>
        <a class="btn btn-outline-light btn-lg m-2 btn-floating" href="https://www.facebook.com/NCR-Desarrollo-108963674277697" target="_blank" role="button" id="norbey"><i class="fab fa-facebook"></i></a>
      </div>
    </div>

    <video autoplay="" loop="" muted="">
      <source src="assets/src/videohead.mp4">
    </video>


  </header>

  <!-- Start your project here-->

  <div class="container mt-5">



    <?php
    for ($x = 0; $x < 3; $x++) {
    ?>
      <div class="accordion mb-2" id="accordionExample">
        <div class="accordion-item" id="#<?php echo $x ?>">
          <h2 class="accordion-header" id="heading<?php echo $x ?>">
            <button class="accordion-button" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapse<?php echo $x ?>" aria-expanded="true" aria-controls="collapse<?php echo $x ?>">
              <h3 class="text-dark"> <strong>Titulo de </strong> </h3>
            </button>
          </h2>
          <div id="collapse<?php echo $x ?>" class="accordion-collapse collapse <?php if ($id == $x) echo 'show' ?>" aria-labelledby="heading<?php echo $x ?>" data-mdb-parent="#accordionExample">
            <div class="accordion-body">


              <div class="row">



                <?php
                for ($i = 0; $i < 5; $i++) {

                ?>

                  <div class="col-md-6 col-sm-12 col-lg-4 mb-3" id="portafolio">

                    <div class="bg-image card hover-shadow" style=" height: 300px;">

                      <img src="https://ncrdesarrollo.com/img/proyectos/app-colombia-recicla/logo.png" class="img-fluid w-100 " alt="Sample" />
                      <div class="mask" style="background-color: rgba(0, 0, 0, 0.9);">
                        <h5 class="text-light d-flex justify-content-center align-items-center h-100  m-3 text-center">Titulo del proyecto que puede ser bastante largo y otro mas a ver que tal queda</h5>
                        <div class="d-flex justify-content-center align-items-center h-100 botones_proyect">
                          <a class="btn btn-outline-light btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button" rel="nofollow" target="_blank"><i class="fab fa-github"></i> GitHub</a>
                          <a class="btn btn-outline-light btn-lg m-2" href="descripcion.php" role="button" rel="nofollow" target="_blank"> Ver más</i></a>
                        </div>
                      </div>
                    </div>
                    </button>
                  </div>

                <?php
                }
                ?>



                




              </div>


            </div>
          </div>
        </div>

      </div>

    <?php
    }
    ?>




  </div>

  <?php include('footer.php'); ?>

  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
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