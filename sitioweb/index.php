  <?php
  session_start();
  include("template/cabecera.php"); ?>
   <!DOCTYPE html>
<html lang="en">
<head>
 <style> .text-justify {
  text-align: justify;
}

.text-justify::after {
  content: "";
  display: inline-block;
  width: 8%; /* Ensures the last line is fully justified */
}
</style>
<body>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </br>
    <div class="jumbotron">
</br>
        <h1 class="display-4 text-primary">Bienvenida al</h1>
        <h2 class="display-5 text-primary">Proyecto ACTIVIDAD FÍSICA Y SALUD en la mujer</h2>
        <hr class="my-2">
        <p class= "text-justify"> Este proyecto se enmarca en la elaboración de un Trabajo Fin del Máster (TFM) de Ingeniería Informática de la EINA de la Universidad de Zaragoza. 
         Su objetivo es evaluar el estado de la práctica de Actividad Física en la mujer española y analizar su efecto preventivo en el cáncer de mama.</p>

        <p class="text-justify"> Se ha elaborado un cuestionario para la recogida de datos con los que extraer información y conocimiento científico. Si usted es una mujer mayor de edad, puede colaborar rellenado el cuestionario y así contribuir al conocimiento que esperamos adquirir en este proyecto. 
        Sólo le pedimos que sus respuestas sean lo más ajustadas a la realidad.</p>
        <br/>
        <h4 class="display-7"> PARTICIPE!! AGRADECEMOS SU COLABORACIÓN </h4>
</br>
        <p class="lead">
            <a class="btn btn-info btn btn-lg" href="cuestionario.php" role="button">Acceso al Cuestionario</a>
        </p>
    </div>
</body>
    <?php
  include("template/pie.php"); ?>
