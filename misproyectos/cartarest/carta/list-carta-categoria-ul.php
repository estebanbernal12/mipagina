<script>function irsubcategoria(idcat){
    window.location.href='cartas-subcategoria.php?idcategoria='+idcat;
}
</script>
<?php 
include("database/dataserver.php");
include("database/clsmaindbcarta.php");

$db=new clsmaindbcarta($server,$user,$pass,$data);
$iduser=1;
$carta=$db->sacarcarta($idcarta,$iduser);
?>
<small><?php echo("NRO. DE CATEGORIAS: ".$db->tamcategoria($iduser));?></small>
<div class="container">
<ul class="list-Group">
 
 <?php
 
 for($i=1;$i<=$db->tamcategoria($idcarta);$i++){
    $categoria=$db->sacarcategoria($i,$idcarta); 
 if($categoria!=null){
 ?>
  <li class="list-group-item list-group-item-action" onclick=ircategoria(<?php  echo($carta->getidcarta());?>)> <?php echo($categoria->getidcategoria()." - ".$categoria->getdenomcategoria());?></li>
  
  <?php
    }else{
        
    }
  }
  
  ?>
    
</ul>
</div>