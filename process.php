<?php
// Incluye el archivo de conexión
include 'conexion.php';

// Obtiene los datos enviados desde el formulario
$consola = $_POST['consola'];
$precio = $_POST['precio'];
$juegos = $_POST['juegos'];
$pagar = $_POST['pagar'];
$juego = $_POST['juego'];
$frecuencia = $_POST['frecuencia'];
$beneficios = $_POST['beneficios'];
$adicional = $_POST['adicional'];

// Inserta los datos en la tabla de la base de datos
$insertar = "INSERT INTO encuesta (consola, precio, juegos, pagar, juego, frecuencia, beneficios, adicional)
VALUES ('$consola', '$precio', '$juegos', '$pagar', '$juego', '$frecuencia', '$beneficios', '$adicional')";

$resultado = mysqli_query($conexion, $insertar);

if ($resultado) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insertar . "<br>" . mysqli_error($conexion);
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>