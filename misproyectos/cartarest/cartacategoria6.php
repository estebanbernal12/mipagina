<html lang="en">
    
    <head>
    
    
 <title>MI CARTA DIGITAL - CATEGORIA - SANDWICHES</title>
   <?php 
   include("CDN/libbootstrap5.php");
   include("libbootstrap4responsive.php");
  
   include("carta/modal-promo.php");
   ?>
   

</head>
    <body>

          <!--Main Navigation-->
  <header>
  <link href="css/carta-categoria.css"
      rel="stylesheet" type="text/css">


<?php
include("carta/headermarca.php");
?>

</header>




      


<form method="post" action="subcategoria-post.php">
  <!--Main layout-->
  <main class="mt-2">
      
    <div class="container-fluid">

    <a  data-toggle="modal" href="#modalpromo" role="button" class="btn btn-dark">PROMO DEL DIA</a>

        <button id="btncarta" name="btncarta" class="btn btn-ligth">Carta</button>
        
        
        
        
        <div class="text-center p-2" style="background: rgba(0,0,0,0);">SANDWICHES
            
        </div>
    
     <hr class="my-2" />
     
     
      <!--Section: Content-->
      
      <section >
        <div class="row">
           <?php 
           include("carta/subcategoria6-ul1.php");
           ?>
          
        </div>
      </section>
      <!--Section: Content-->
      
     
      
      
      
      
      </div>
  </main>
  <!--Main layout-->
</form>


    </body>
</html>
