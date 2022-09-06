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

$iduser=$_GET['iduser'];
$idcarta=$_GET['idcarta'];
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
      

     <br/>
     
<small><?php echo("User: ".$iduser);?></small>
<small><?php echo("Carta: ".$idcarta);?> </small>
<?php

include("carta/creacarta-form.php");


?>

      <hr class="my-3" />

    </div>
  </main>

        
        

    </body>
</html>
