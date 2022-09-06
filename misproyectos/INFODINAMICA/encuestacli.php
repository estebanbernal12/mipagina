<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>INFO DINAMICA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900|Lato:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


 <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>




<link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">



</head>
<header>
    <script>
        $(function(){
                $('#iddivnombre').css('display','block');
                $('#idivp1').css('display','none');
                $('#idivp2').css('display','none');
                $('#idivp3').css('display','none');
                $('#iddivconfirmacion').css('display','none');
                 $('#idbtnsig').css('display','block');
            
            
            
        $('#idbtnsig').on('click' ,function(event ){
          
          let indpreg=$('#inputindpreg').val();
          let nombre=$('#inputnombre').val();
          
         
        if(nombre!=''){
         
         if(indpreg!='0'){
         
          //si esta checked 
          let checked=false;
          for(let i=1;i<=3;i++){
            if($('#idradio'+indpreg+i).is(':checked')){
              checked=true;    
            }
          }
          
         
         
          if(indpreg!='3'){
         
         
          if(checked==true){
         $('#iddivnombre').css('display','none');
           $('#idivp1').css('display','none');
           $('#idivp2').css('display','none'); 
           $('#idivp3').css('display','none');

             //block la sig preg
              $('#idivp'+(parseFloat(indpreg)+1)).css('display','block');
             
             //incrementa indpreg
            $('#inputindpreg').val(parseFloat($('#inputindpreg').val())+1);
            
          }else{
              
              alert('Seleccione Una Opcion!!');
              
          }
            
            
          }else{
              
              
             if(checked==true) {
               $('#iddivnombre').css('display','none');
               $('#idivp1').css('display','none');
               $('#idivp2').css('display','none'); 
               $('#idivp3').css('display','none');
               $('#iddivconfirmacion').css('display','block');
               $('#idbtnsig').css('display','none');
               $('#idlabelconfirmacion').html('Encuesta Finalizada!! Que Tengas Un Buen Dia '+$('#inputnombre').val()+' !!');    
             }else{
                alert('Seleccione Una Opcion!!');  
             }
              
               
          }
            
        
            
        }else{
            
               $('#iddivnombre').css('display','none');
               $('#idivp1').css('display','block');
               $('#idivp2').css('display','none'); 
               $('#idivp3').css('display','none');
               $('#iddivconfirmacion').css('display','none');
               $('#idbtnsig').css('display','block');
             $('#inputindpreg').val(parseFloat($('#inputindpreg').val())+1);

        }
            
             
        }else{ //fin if nombre!=''
          
          alert('Ingrese Apellido y Nombre!!');  
        }    
            
            
            
            
            
          
            
        });    
            
        })
    </script>
</header>

<body>


  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="index.php">INFO DINAMICA</a>
      </div>
      <div class="navbar-collapse collapse navbar-right">
        <ul class="nav navbar-nav">
         
          
          <li><a href="index.php">INICIO</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">NOTICIAS<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Locales</a></li>
              <li><a href="#">Nacionales</a></li>
              <li><a href="#">Internacionales</a></li>
            </ul>
            
          </li>
          
          
          
          
  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Encuesta<b class="caret"></b></a>
        
           
     
            <ul class="dropdown-menu">
              <li><a href="encuestacli.php">Multiple Choise</a>
              
              </li>
       
            </ul>
       
      </li>
       
          
          
          
          
          
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
  
  
  
  
  
            <br/>
            <br/>
            <br/>
            <br/>
 
 
    <div class="container" style="height: 450px;">
        
   

      <div class="row">
           <div class="col-lg-4 col-md-6 mb-4">
         
          </div>

          <div class="col-lg-4 col-md-12 mb-4">
              
              
              
            <!-- <small><b> Hoy es <?php  echo date("d-m-Y") ;?></b></small> -->
             <h3 class="text-center"><b>MULTIPLE CHOISE</b></h3>
            
            
            <div id="iddivnombre">
                <div class="form-group">
                    <input id="inputnombre"class="form-control" placeholder="Ingrese Apellido y Nombre"/>
                </div>
            </div>
            
            
      <div class="card" id="idivp1">  
       <h5 class="card-header bg-danger">¿ Que Seccion Le Gusta Mas  ?
       </h5>
       <div class="card-body">
       <div class="form-check">
       <input class="form-check-input" type="radio" name="exampleRadios" id="idradio11" value="option1">
        <label class="form-check-label" for="idradio11">
        Deportes
       </label>
       </div>
       <div class="form-check">
       <input class="form-check-input" type="radio" name="exampleRadios" id="idradio12" value="option2">
       <label class="form-check-label" for="idradio12">
        Policiales
       </label>
       </div>
       <div class="form-check">
       <input class="form-check-input" type="radio" name="exampleRadios" id="idradio13" value="option3" >
       <label class="form-check-label" for="idradio13">
       Farandula
      </label>
       </div>
        </div>
     
     </div>
          
          
          
          
          
          
         <div id="idivp2">  
       <h5 class="card-header bg-danger">¿ Que Edad Tenes ?
       </h5>
       <div class="card-body">
       <div class="form-check">
       <input class="form-check-input" type="radio" name="exampleRadios" id="idradio21" value="option1">
        <label class="form-check-label" for="idradio21">
        Entre 10 y 20
       </label>
       </div>
       <div class="form-check">
       <input class="form-check-input" type="radio" name="exampleRadios" id="idradio22" value="option2">
       <label class="form-check-label" for="idradio22">
        Entre 21 y 30
       </label>
       </div>
       <div class="form-check">
       <input class="form-check-input" type="radio" name="exampleRadios" id="idradio23" value="option3" >
       <label class="form-check-label" for="idradio23">
       30 en adelante
      </label>
       </div>
     </div>
     
     </div>
     
     
     
     
      <div id="idivp3">  
       <h5 class="card-header bg-danger"> Califica Nuestra Pagina  
       </h5>
       <div class="card-body">
       <div class="form-check">
       <input class="form-check-input" type="radio" name="exampleRadios" id="idradio31" value="option1">
        <label class="form-check-label" for="idradio31">
        Mala
       </label>
       </div>
       <div class="form-check">
       <input class="form-check-input" type="radio" name="exampleRadios" id="idradio32" value="option2">
       <label class="form-check-label" for="idradio32">
        Buena
       </label>
       </div>
       <div class="form-check">
       <input class="form-check-input" type="radio" name="exampleRadios" id="idradio33" value="option3" >
       <label class="form-check-label" for="idradio33">
       Muy Buena
      </label>
       </div>
     </div>
     
     </div>
     
     
     
     <div id="iddivconfirmacion">
         <label id="idlabelconfirmacion" class="text-success"></label>
         
     </div>
     
     
     
     
     
     
     
           <input type="hidden" id="inputindpreg" value="0"/>
          <button id="idbtnsig" class="btn btn-primary w-100">Siguiente</button>
          
        
           
      </div>
          
          
          
          
          
         <div class="col-lg-4 col-md-6 mb-4">
           
          </div>
        
        
            
          
        
       
      </div>
      <!-- /row -->
      <br/>
     <br/>
     
    </div>
    <!-- /container -->
  
  
  
  



  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Esteban Bernal</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/solid-bootstrap-business-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created by <a href="https:///">Eunoia</a>
      </div>
    </div>
  </div>
  <!-- / copyrights -->

<br/>
<br/>
 <br/>
<!--
  <script src="lib/prettyphoto/js/prettyphoto.js"></script>
  
  <script src="lib/isotope/isotope.min.js"></script>
  
  
  <script src="lib/hover/hoverdir.js"></script>
  
 
  <script src="lib/hover/hoverex.min.js"></script>

 
  <script src="js/main.js"></script> -->

</body>
</html>
