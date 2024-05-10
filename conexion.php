<?php 

// Datos de conexión a la base de datos
$servername = "sql109.infinityfree.com";
$username = "if0_36430661";
$password = "uUP7JsuD2ffqw";
$database = "if0_36430661_tiendaD1";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>