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

  <!-- Start your project here-->
  <div class="container mt-2 mb-2">

    <nav class="navbar navbar-light bg-light mb-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Titulo del Proyecto</a>
      </div>
    </nav>


    <div class="row">

      <div class="col-md-6 col-sm-12 col-lg-6 mb-3">
        <div class="bg-image card">

          <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://mdbootstrap.com/img/new/slides/041.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="https://mdbootstrap.com/img/new/slides/042.jpg" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="https://mdbootstrap.com/img/new/slides/043.jpg" class="d-block w-100" alt="..." />
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


          <div class="card-body">
            <a class="btn btn-outline-primary btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button" rel="nofollow" target="_blank"><i class="fab fa-github"></i> GitHub</a>
            <a class="btn btn-outline-success btn-lg m-2" href="descripcion.php" role="button" rel="nofollow" target="_blank"><i class="fas fa-eye"></i> Ver Demo</i></a>


          </div>
        </div>
      </div>


      <div class="col-md-6 col-sm-12 col-lg-6 mb-3">


        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Descripción</h5>
            <div class="row">
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the
              card's content.
            </p>
            
            </div>
          </div>
        </div>

      </div>






    </div>



  </div>
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