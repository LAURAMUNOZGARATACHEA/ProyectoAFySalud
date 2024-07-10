<?php
include("template/cabecera.php");
?>


<?php

if ($_POST){
  if( $_POST['ecorreo'] == null){
    echo "No se ha enviado una dirección de correo electrónico";
  }
  else{
    $userEmail= $_POST['ecorreo'];
    $mensaje1 ="Su correo se ha enviado correctamente";
    $mensaje2 = "En cuanto dispongamos de los resultados le contactaremos";
    echo $mensaje1. "<br/>";
    echo $mensaje2;
    unset($_POST);
    //header('Location:index.php');
    exit;
  }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css" >
    <style>
    /* Estilo para el botón con clase btn btn-primary */
    .btn-primary-container {
      display: flex;
      justify-content: flex-end;
    }
    .text-justify {
  text-align: justify;
}

.text-justify::after {
  content: "";
  display: inline-block;
  width: 8%; /* Ensures the last line is fully justified */
}

     </style>
  </head>
  <body>
      
   
   <br/><br/>
  
   <div class="col-md-10">
     <div class="jumbotron jumbotron-fluid">
      <div class="container">
      </br>
        <h3 class="text-info">LEA AQUÍ LOS TERMINOS DE PROTECCIÓN DE LOS DATOS DE LA ENCUESTA</h3>
        <hr class="my-2">
      </div>
     </div>
   </div>
   <div class="col-md-10">
  <div class="jumbotron jumbotron-fluid ">
    <div class="container">

      <h3 class="text-primary">Tratamiento de la información </h3>
      <p class="text-primary text-justify"> 1º) Se trata de un <strong> cuestionario totalmente anónimo </strong>, no incluye datos que permitan identificarle y sus <strong> respuestas serán confidenciales </strong>. </p>
      <p class="text-primary text-justify"> 2º) A diferencia de otros formularios, las respuestas no se envían ni alojan en ningún proveedor de servicios, sino en un <strong> servidor propio custodiado, gestionado y con uso exclusivo por parte de las investigadoras </strong> </p>

      <p class="text-primary text-justify">En relación con esta encuesta, Ud. puede ejercer sus derechos en materia de privacidad directamente si lo desea, dirigirse al investigador principal (<a href="mailto:nayuso@unizar.es" style="color: blue;">ayuso@unizar.es</a>), o al Delegado/a de Protección de Datos de la Universidad de Zaragoza (<a href="mailto:dpd@unizar.es" style="color: blue;">dpd@unizar.es</a>) o, finalmente, en reclamación, a la Agencia Española de Protección de Datos (<a href="https://www.aepd.es/" style="color: blue;">www.aepd.es</a>) </p>
      <p class="text-primary text-justify">En <a href="https://protecciondatos.unizar.es/" style="color: blue;">proteccion.de.datos.unizar</a> podrá encontrar amplia información respecto de este tratamiento y de su política de protección de datos, así como formularios para el ejercicio de sus derechos.</p>
      <p class="text-info text-justify">Si usted es una <strong> mujer mayor de edad </strong>, puede colaborar rellenando el cuestionario y así contribuir al conocimiento que esperamos adquirir en este proyecto.</p>
      <h5 class="text-primary text-justify">MUCHAS GRACIAS DE ANTEMANO POR COLABORAR CON ESTA INVESTIGACIÓN </h5>
    </div>
  </div>
</div>


   
   
   
<?php
include("template/pie.php");
?>

