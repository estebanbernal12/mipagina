<html lang="en">
    
    <head>
    
    
 <title>MI CARTA DIGITAL </title>
   <?php 
   include("CDN/libbootstrap5.php");
   include("libbootstrap4responsive.php");
   ?>

</head>
    <body>

    
  <header>
  <link href="css/inicio.css"
      rel="stylesheet" type="text/css">


<?php
include("menu/navbartop.php");


?>

    <!-- Carousel wrapper -->
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
      </ol>

      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="mb-3">Mi Carta Digital</h1>
                <h5 class="mb-4">Carta Sin Contacto</h5>
                <a class="btn btn-outline-light btn-lg m-2" href="cartacategoria1.php"
                  role="button" rel="nofollow" target="_blank">MI CARTA</a>
                <button class="btn btn-outline-light btn-lg m-2" href="toast.php"
                  target="_blank" role="button">LOGIN</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h2>Carta Online Desde Tu Celular</h2>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="mask" style="
                background: linear-gradient(
                  45deg,
                  rgba(29, 236, 197, 0.7),
                  rgba(91, 14, 214, 0.7) 100%
                );
              ">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h2>AutoAdministrable Desde Cualquier Dispositivo</h2>
                <a class="btn btn-outline-light btn-lg m-2"
                  href="indexcarta.php" target="_blank" role="button">Ver Demo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Inner -->

      <!-- Controls -->
      <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Carousel wrapper -->
  </header>
  
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5">
    <div class="container">
        
      <hr class="my-5" />

      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>POSTEOS</strong></h4>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Tu Titulo</h5>
                <p class="card-text">
                  Tu Descripcion 
               y mas!! </p>
                <a href="#!" class="btn btn-primary">boton </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Titulo 2</h5>
                <p class="card-text">
                  Descripciones 
                </p>
                <a href="#!" class="btn btn-primary">boton</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Titulo 3 </h5>
                <p class="card-text">
                  Descripcion, Mas Texto!! </p>
                <a href="#!" class="btn btn-primary">boton</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

    </div>
  </main>
  <!--Main layout-->

        
        

    </body>
</html>
