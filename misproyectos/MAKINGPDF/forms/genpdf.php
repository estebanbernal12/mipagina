<?php


  $para = strtoupper($_POST['para']);
  $de = strtoupper($_POST['de']);
  $mensaje=strtoupper($_POST['mensaje']);
  $img=$_POST['imagen'];
 // include("../lib/GENPDF/genpdfhb.php");

  header("location: ../lib/GENPDF/genpdfhb.php?para=".$para."&de=".$de."&img=".$img."&mensaje=".$mensaje);
   die();

?>
