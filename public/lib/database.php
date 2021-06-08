
<?php

$dbUser = 'root';
$dbPassword = 'sellado123';
$dbHost = 'localhost';
$dbDatabase = 'employees';



try {
    $dbConnexion = new PDO("mysql:host=${dbHost};dbname=${dbDatabase}", $dbUser, $dbPassword);
    $dbConnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo 'Error en la conexion a la base de datos: ' . $e->getMessage();
}