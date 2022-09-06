<html lang="">
<head>
    

 <?php
  include ("CDN/libbootstrap5.php");
 
 include("libbootstrap4responsive.php");
 
 include("carta/modal-promo.php");
 
 ?>
 <title>MI CARTA DIGITAL</title>


</head>
<body>
    <header>
        <link href="css/carta-categoria.css"
      rel="stylesheet" type="text/css">

      <?php
 include("carta/headermarca.php");
 include("btnwhatsapp.php");
 ?>
    </header>
    
    
 <main class="mt-2">  
<div class="container-fluid w-100">
    <a href="#modalpromo" role="button" data-toggle="modal" class="btn btn-dark">PROMO DEL DIA</a>
   
    
  <hr class="my-2" />
   <div class="d-flex justify-content-center"> 
    <h5>CARTA DIGITAL DEMO</h5>
    </div>
    <hr class="my-2" />

<!--Section: Content-->
      <section>
       
 
        <div class="row">
          <div class="col w-100">

           <?php 
          include("carta/cartalistcategoria-ul.php");
           ?>
          </div>
        </div>
      </section>
      <!--Section: Content-->
<br/>
<br/>
</div>

</main>

 

 
 
 
 <br/>
 <br/>
 
</body>

</html>