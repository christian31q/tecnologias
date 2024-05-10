<?php
// Conexión a la base de datos
include "conexion.php";


$sql = "SELECT * FROM productos";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        
        echo "Nombre: " . $row["nombre"]. "<br>";
    }
} else {
    echo "0 results";
}

// Cerrar la conexión

$conn->close();

?>