<?php

include("template/cabecera.php");
?>

<div class="jumbotron">
    <h1 class="display-3">Bienvenido <?php echo $nombreUsuario; ?></h1>
    <p class="lead">Vamos a administrar nuestros datos del ProyectoAFySalud desde nuestro sitio web</p>
    <hr class="my-2">
    <p>More info</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="secciones/productos.php" role="button">Obtener Registros</a>
    </p>
</div>

<?php
include("template/pie.php");

?>


          