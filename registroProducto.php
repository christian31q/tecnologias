<?php 
include "conexion.php";

// Datos del nuevo producto
$nombre = $_POST["nombre"];
$precio = $_POST["precio"]; // Precio del producto
$talla = $_POST["talla"]; // Talla del producto
$color = $_POST["color"]; // Color del producto
$imagen = $_POST["imagen"]; // Ruta de la imagen del producto

// Consulta SQL de inserción
$sql = "INSERT INTO Producto (nombre, precio, talla, color, imagen)
        VALUES ('$nombre', $precio, '$talla', '$color', '$imagen')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Producto registrado correctamente";
} else {
    echo "Error al registrar el producto: " . $conn->error;
}

$conn->close();
?>