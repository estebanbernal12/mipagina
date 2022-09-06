<?php

 class clscarta{
private $idcarta;
private $iduser;
private $denominacion;
private $rubro;
private $finicio;
private $obs;

    function __construct($idcarta,$iduser,$denominacion,$rubro,$finicio,$obs){
       
      $this->setidcarta($idcarta);
      $this->setiduser($iduser);
      $this->setdenominacion($denominacion);
      $this->setrubro($rubro);
      $this->setfinicio($finicio);
      $this->setobs($obs);
       
         
     }
     
 function setidcarta($idcarta){
   $this->idcarta=$idcarta;  
 }    
 
 function getidcarta(){
  return $this->idcarta;   
 }
 
 function setiduser($iduser){
    $this->iduser=$iduser; 
 }
 function getiduser(){
   return $this->iduser;  
 }
 
 function setdenominacion($denominacion){
     $this->denominacion=$denominacion;
 }
 
 function getdenominacion(){
     return $this->denominacion;
 }
 
 function setrubro($rubro){
  $this->rubro=$rubro;   
 }
 
 
 function getrubro(){
     return $this->rubro;
 }
 function setfinicio($finicio){
   $this->finicio=$finicio;  
 }
 
 function getfinicio(){
   return $this->finicio;  
 }
 function setobs($obs){
     $this->obs=$obs;
 }
 function getobs(){
     return $this->obs;
 }
}
?>