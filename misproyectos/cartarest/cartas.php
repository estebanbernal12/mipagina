<html lang="en">
    
    <head>
    
    
 <title>MI DULCE TENTACION - EL CARRIL </title>
   <?php 
   include("CDN/libbootstrap5.php");
   include("libbootstrap4responsive.php");
   ?>

<script>
function ircartascarga(idu,idc){
window.location.href='cartas-carga.php?iduser='+idu+'&&idcarta='+idc;
}
</script>
</head>
    <body>

    
  <header>


<?php
include("menu/navbartop.php");


?>
       
        
  </header>
  
  
  

  <main class="mt-4">
    <div class="container-fluid">
     <br/>   
      <hr class="my-3" />
      <div class="d-flex justify-content-center">
        <h4>Mis Cartas</>  
      </div>
      <hr class="my-3"/>
      
  <button class="btn btn-outline-ligth" name="btncreanuevacarta" onclick="ircartascarga(<?php echo(1);?>,<?php echo(2);?>)">Crear Nueva Carta</button>
     <br/>
<?php
//include("carta/creacarta-form.php");


include("carta/list-carta-ul.php");


?>

      <hr class="my-3" />

    </div>
  </main>

        
        

    </body>
</html>
