
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página confirmación</title>
    <style>
        body {
            background: url('../img/gotas.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
            padding: 5px; /* Agrega relleno si es necesario */
            text-align:left;
        }
        
        .jumbotron {
            max-width: 670px;
            max-height: 420px;
            margin: 20px auto;
            text-align: center;
            background-color: blue;
            border-radius: 120px; 
            padding: 10px;
        }

        img {
            max-width: 120px;
            max-height: 120px;
            height: auto;
            display: block;
            margin: 0px auto;
        }
    </style>
      <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    </br>
<div class="jumbotron">
    <img src="../img/validation.jpg" alt="Icono verificación respuestas enviadas">

    </br>
    <h6 class="display-5 text-success" >Sus respuestas se han registrado correctamente</h6>
    <h4 class="display-5 text-primary"> Muchas gracias por su colaboración</h4>
    <p class="lead text-primary">Si lo desea puede facilitarnos su contacto para informarle de los resultados</p>
    <hr class="my-2">
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="../resultados.php" role="button">Enviar contacto</a>
    </p>
</div>
</body>
</html>



