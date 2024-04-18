<?php
// Crea una conexión a la base de datos
$conection = mysqli_connect("localhost", "root", "", "encuesta");

// Verifica la conexión
if (!$conection) {
    echo "Error: No se pudo conectar a la base de datos.";
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>