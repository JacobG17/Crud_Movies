<?php
include('../scrips/conexion.php');

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener el valor enviado desde JavaScript
$selectedValue = $_POST['selectedValue'];

// Consulta para obtener los posters
$filtroDirectores = "SELECT poster FROM Peliculas WHERE director = '$selectedValue';";
$resultado = $conn->query($filtroDirectores);

if ($resultado) {
    // Crear un array para almacenar los posters
    $posters = array();

    // Recorrer los resultados y agregar los posters al array
    while ($fila = $resultado->fetch_assoc()) {
        $posters[] = $fila['poster'];
    }

    
} else {
    // Error en la consulta
    echo "Error al obtener los posters desde la BD: " . $conn->error;
}

$conn->close();
?>
