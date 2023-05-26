<?php

// Habilitar la visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["poster"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['poster']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
        // Credenciales MySQL
        $servername = 'localhost';
        $username = 'jacobG17';
        $password = 'Hermano1';
        $database = 'peliCRUD';
        
        // Crear conexión con la base de datos
        $conn = new mysqli($servername, $username, $password, $database);
        
        // Verificar la conexión
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Preparar la consulta con sentencias preparadas
        $query = "INSERT into Peliculas (poster, nombre, reseña, director, genero, fecha_de_estreno, mostrar) VALUES (?, ?, ?, ?, ?, ?, 1)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssss", $imgContenido, $_POST['titulo'], $_POST['reseña'], $_POST['director'], $_POST['genero'], $_POST['fecha']);
        
        // Ejecutar la consulta
        if($stmt->execute()){
            echo "Archivo Subido Correctamente.";
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        }
        
        // Cerrar la conexión
        $stmt->close();
        $conn->close();
    }else{
        echo "Por favor seleccione una imagen válida.";
    }
}
?>
