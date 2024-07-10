<?php include("../template/cabecera.php");?>

<?php   
    include("../config/bd.php");
$sentenciaSQL=$conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros =$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
print_r($listaLibros);
?>

<div class="col-md-3">
<?php
foreach($listaLibros as $libro){?>
<div class="card">
    <img class="card-img-top" src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/final_open_graph_L0PRwHT.width-1600.format-webp.webp" alt="">
    <div class="card-body">
        <h4 class="card-title">Tecnología</h4>
        <p class="card-text">Text</p>
        <a name="" id="" class="btn btn-primary" href="#" role="button">Ver más</a>
    </div>
</div>

<?php } ?>





<?php include("../template/pie.php");?>







