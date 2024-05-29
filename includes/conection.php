<?php
$host = "localhost"; 
$username = "adminbasic"; 
$password = "A1b2C3?"; 
$dbname = "onepagenaruto"; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Establecer el modo de error de PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}

?>