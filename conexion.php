<?php

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = ''; // Cambia si tu servidor tiene contraseña
$DB_NAME = 'registro_videojuegos';
$DB_PORT = 3306; // Cambia si usas otro puerto


// Crear conexión MySQLi
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);


// Establecer conjunto de caracteres
if (! $conn->set_charset('utf8mb4')) {
// No detener la ejecución, pero registrar o mostrar el error según tu entorno
error_log('Error al establecer charset utf8mb4: ' . $conn->error);
}


// Comprobar conexión
if ($conn->connect_errno) {
die('Error de conexión a la base de datos. Código: ' . $conn->connect_errno);
}
?>