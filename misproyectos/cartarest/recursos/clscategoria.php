<?php

class clscategoria{
    private $idcategoria;
    private $idcarta;
    private $descripcion;
    private $tipo;
    
    
    function __construct($idcategoria,$idcarta,$descripcion,$tipo){
     $this->setidcategoria($idcategoria);
     $this->setidcarta($idcarta);
     $this->setdescripcion($descripcion);
     $this->settipo($tipo);
     
    }
    
   function setidcategoria($idcategoria){
       $this->idcategoria=$idcategoria;
   }
   function getidcategoria(){
       return $this->idcategoria;
   }
   
   
   
    function setidcarta($idcarta){
       $this->idcarta=$idcarta;
   }
   function getidcarta(){
       return $this->idcarta;
   }
  
  
  
   function setdescripcion($descripcion){
       $this->descripcion=$descripcion;
   }
   function getdescripcion(){
       return $this->descripcion;
   } 
   
   
    function settipo($tipo){
       $this->tipo=$tipo;
   }
   function gettipo(){
       return $this->tipo;
   }
   
    
}
?>
