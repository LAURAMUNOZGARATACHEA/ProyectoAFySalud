<?php
include("template/cabecera.php");
?>
<?php
$host="localhost";
$db="lauradb";
$usuario="laura";
$contrasenia="lauratfm2024";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db",$usuario,$contrasenia);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}
catch(Exception $ex){
    echo $ex->getMessage();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['ecorreo'])) {
        $userEmail = $_POST['ecorreo'];
        // Verificar si el correo electrónico ya existe en la base de datos
        $checkQueryEmail = $pdo->prepare("SELECT id FROM contactos WHERE correo_electronico = :email");
        $checkQueryEmail->bindValue(':email', $userEmail, PDO::PARAM_STR);
        $checkQueryEmail->execute();
        if ($checkQueryEmail->rowCount() > 0) {
            $mensaje1 = "El correo electrónico ya está registrado.";
        } else {
            // Si el correo electrónico no existe, se inserta en la base de datos
            $insertQueryEmail = $pdo->prepare("INSERT INTO contactos (correo_electronico, fecha_envio) VALUES (:email, NOW())");
            $insertQueryEmail->bindValue(':email', $userEmail, PDO::PARAM_STR);
            $insertQueryEmail->execute();

            $mensaje1 = "Se ha registrado el correo electrónico correctamente.";
        }
    }

    if (!empty($_POST['myphone'])) {
        $userPhone = $_POST['myphone'];

        // Verificar si el número de teléfono ya existe en la base de datos
        $checkQueryPhone = $pdo->prepare("SELECT id FROM contactos WHERE telefono = :phone");
        $checkQueryPhone->bindValue(':phone', $userPhone, PDO::PARAM_STR);
        $checkQueryPhone->execute();

        if ($checkQueryPhone->rowCount() > 0) {
            $mensaje2 = "El número de teléfono ya está registrado.";
        } else {
            // Si el número de teléfono no existe, se inserta en la base de datos
            $insertQueryPhone = $pdo->prepare("INSERT INTO contactos (telefono, fecha_envio) VALUES (:phone, NOW())");
            $insertQueryPhone->bindValue(':phone', $userPhone, PDO::PARAM_STR);
            $insertQueryPhone->execute();

            $mensaje2 = "Se ha registrado el número de teléfono correctamente.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <style>
        /* Estilo para el botón con clase btn btn-primary */
        .btn-primary-container {
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <br/><br/>
                        <h2 class="text-primary">GRACIAS POR SU PARTICIPACIÓN E INTERÉS</h2>
                        <p class="lead">Estamos trabajando en la elaboración de resultados. Si nos indica una forma de contacto, nos ponderemos en contacto con usted para ofrecerle información sobre el acceso al análisis de los resultados.</p>
                        <hr class="my-2">
                    </div>
                </div>
                <br/> <br/> <br/> <br/>
                <!-- Botón de Información de Resultados -->
                <a href="https://qwclhc-laura-mu0oz0garatachea.shinyapps.io/AFySaludOptimizedv2/">
                <button type="button" class="btn btn-info btn-lg">INFORMACIÓN DE RESULTADOS</button>
                </a>
            </div>
            <div class="col-md-1"> </div>
            <!-- Columna derecha para tarjetas de contacto -->
            <div class="col-md-4">
                <!-- Tarjeta para el correo electrónico -->
      </br></br>
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">
                        Introduzca aquí una dirección de correo
                    </div>
                    <div class="card-body">
                        <?php if(isset($mensaje1)): ?>
                            <div class="alert alert-success" role="alert">
                                <strong><?php echo $mensaje1; ?></strong>
                            </div>
                        <?php endif; ?>
                        <form method="POST">
                            <div class="form-group">
                                <label>Correo electrónico</label>
                                <input type="email" class="form-control" name="ecorreo" placeholder="Escriba su correo">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </form>
                    </div>
                </div>
                  </br>      
                <!-- Tarjeta para el teléfono -->
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">
                      O si no dispone de correo electrónico, introduzca un número de teléfono
                    </div>
                    <div class="card-body">
                        <?php if(isset($mensaje2)): ?>
                            <div class="alert alert-success" role="alert">
                                <strong><?php echo $mensaje2; ?></strong>
                            </div>
                        <?php endif; ?>
                        <form method="POST">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="tel" class="form-control" name="myphone" placeholder="Escriba su teléfono">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-info">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



<?php
 include("administrador/config/bd.php");
 