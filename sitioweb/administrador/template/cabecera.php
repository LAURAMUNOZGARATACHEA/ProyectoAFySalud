

<?php
session_start();
if( !isset($_SESSION['usuario']) ){
   header("Location:../index.php");
}else{
    if($_SESSION['usuario']=="ok"){
        $nombreUsuario=$_SESSION["nombreUsuario"];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>

  <?php $url="http://".$_SERVER['HTTP_HOST']."/sitioweb";?>
   <nav class="navbar navbar-expand navbar-light bg-light">
       <div class="nav navbar-nav">
           <a class="nav-item nav-link active" href="#">Administrador del sitio web <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
           <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/secciones/registros.php">Registros</a>
           <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/cerrar.php">Cerrar Sesión</a>
           <a class="nav-item nav-link" href="<?php echo $url; ?>">Ver sitio web</a>
       </div>
   </nav>
 

    <div class="container">
    <br/>
    <div class="row">