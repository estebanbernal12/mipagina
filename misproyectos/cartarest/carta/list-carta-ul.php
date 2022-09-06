<script>function ircartacategoria(idc){
    window.location.href='cartas-categoria.php?idcarta='+idc;
}
</script>
<?php 
include("database/dataserver.php");
include("database/clsmaindbcarta.php");

$db=new clsmaindbcarta($server,$user,$pass,$data);
$iduser=1;
?>
<small><?php echo("NRO. DE CARTAS: ".$db->tamcarta($iduser));?></small>
<div class="container">
<ul class="list-Group">
 
 <?php
 
 for($i=1;$i<=$db->tamcarta($iduser);$i++){
    $carta=$db->sacarcarta($i,$iduser); 
 if($carta!=null){
 ?>
  <li class="list-group-item list-group-item-action" onclick=ircartacategoria(<?php  echo($carta->getidcarta());?>)> <?php echo($carta->getidcarta()." - ".$carta->getdenominacion());?></li>
  
  <?php
    }else{
        
    }
  }
  
  ?>
    
</ul>
</div>