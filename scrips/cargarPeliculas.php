<?php

include '../scrips/conexion.php';

// Verificar la conexión
if ($conn->connect_error) 
{
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

$obtenerPoster = "SELECT poster FROM Peliculas;";        

$posters = array();

$resultado = $conn->query($obtenerPoster);

if ($resultado !== false) 
{
    
    if (isset($resultado)) {
        // Iterar a través de los resultados y agregar cada fila al array
        while ($fila = $resultado->fetch_assoc()) 
        {
            $posters[] = $fila['poster'];
        }
    }
} 
else 
{
    echo "Error al obtener los posters desde la BD " . $conn->error;
}

