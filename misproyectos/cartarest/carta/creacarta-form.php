

<form method="post" action="cartaaction.php">
   
  <div class="form-group">
      <label class="form-label">ID user</label>
      <input class="form-control" value="<?php echo($iduser);?>" name="txtiduser"/>
  </div> 
   
    
 <div class="form-group mb-4">
     
 <label class="form-label">Denominacion</label>
      
  <input type="text" class="form-control"  name="txtdenominacion"/>    
 
  </div>
 <div class="form-group mb-4">
     <label class="form-label">Rubro</label>
     <input type="text" class="form-control" name="txtrubro"/>
    
 </div>
 <div class="form-group mb-4">
     <label class="form-label">Fecha Inicio</label>
     <input class="form-control" type="date" name="txtfinicio" value="<?php echo date("Y-m-d"); ?>"/>
 </div>
 
 <div class="form-group mb-4">
     <label class="form-label">Observacion</label>
     <input class="form-control" type="text" name="txtobs"/>
 </div>
 
 
 <button class="btn btn-success" name="btncreacarta">Crear Carta</button>
 
 
 
 
</form>