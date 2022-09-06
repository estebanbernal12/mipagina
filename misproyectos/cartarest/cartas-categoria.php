<html lang="en">
    
    <head>
    
    
 <title>MI DULCE TENTACION - EL CARRIL </title>
   <?php 
   include("CDN/libbootstrap5.php");
   include("libbootstrap4responsive.php");
   ?>

</head>
    <body>

    
  <header>


<?php
include("menu/navbartop.php");
$idcarta=$_GET['idcarta'];

?>
       
        
  </header>
  
  

  <main class="mt-4">
    <div class="container-fluid">
     <br/>   
      <hr class="my-3" />
      <div class="d-flex justify-content-center">
        <h4><?php echo("Carta id: ".$idcarta."  ");?>Categorias</h4>  
      </div>
      <hr class="my-3"/>
      
  <button class="btn btn-outline-ligth" name="btncreanuevacategoria">Crear Nueva Categoria</button>
     <br/>
<?php
//include("carta/creacarta-form.php");


include("carta/list-carta-categoria-ul.php");


?>

      <hr class="my-3" />

    </div>
  </main>

        
        

    </body>
</html>
