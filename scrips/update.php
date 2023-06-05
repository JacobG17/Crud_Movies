<?php

include('conexion.php');
// Verificar la conexión
if ($conn->connect_error) 
{
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $rutaTemporal = $_FILES['poster']['tmp_name'];
    $titulo = $_POST['titulo'];
    $fecha = $_POST['fecha'];
    $director = $_POST['director'];
    $genero = $_POST['genero'];
    $reseña = $_POST['reseña'];
    $mostrar = true;

    // Validar y procesar el archivo cargado
    $directorio = "../posters/";
    $directorioDestino = $directorio . basename($_FILES["poster"]["name"]); // Ruta completa del archivo objetivo
    
    if (move_uploaded_file($rutaTemporal, $directorioDestino)) 
    {
        //echo "La imagen se cargó correctamente.";

        // Obtener la ruta relativa de la imagen cargada
        $rutaImagen = $directorioDestino;
        
        $query="Insert into Peliculas (poster, titulo, reseña, director, genero, fecha_de_estreno, mostrar) values ('$rutaImagen','$titulo', '$reseña', '$director', '$genero', '$fecha', $mostrar)";
        
        // Ejecutar la consulta
        if ($conn->query($query) === TRUE) 
        {
            //echo "La ruta de la pelicula se almacenó correctamente en la base de datos.";
        } 
        else 
        {
            echo "Error al almacenar la pelicula en la base de datos: " . $conn->error;
        }

    }
    else
    {
        echo "Ocurrió un error al cargar la imagen.";
    }
}
// Redirigir a otra página
header("Location: ../vistas/newPelicula.php");
exit();
