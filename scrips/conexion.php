<?php

try {
    //Conexion con la base de datos
    $conn = mysqli_connect("localhost", "jacobG17", "Hermano1", "peliCRUD");
    if($conn->connect_errno)
    {
        throw new Exception("Fallo al conectar a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error); 
    
    
    
}
} catch (Exception $e) {

    echo $e->getMessage();
    die();
}

echo "Conexión exitosa";
