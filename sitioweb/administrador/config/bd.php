
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
?>