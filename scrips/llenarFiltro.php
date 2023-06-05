<?php

function filtroDirectores()
{
    include ('../scrips/conexion.php');
    //Consulta de directores
    $directores = "SELECT DISTINCT director FROM Peliculas ORDER BY director ASC;";

    $resultado = $conn->query($directores);

    if ($resultado === false) 
    {
        echo "Error al conectar con la base de datos";
    }
    else
    {
        while ($fila = $resultado->fetch_assoc()) 
        {
            $director = $fila['director'];
            echo '<option value="' . $director . '">' . $director . '</option>';
        }
    } 

}  

function filtroGeneros()
{
    include ('../scrips/conexion.php');
    //Consulta de generos
    $generos = "SELECT DISTINCT genero FROM Peliculas ORDER BY genero ASC;";
    $resultado = $conn->query($generos);
    if ($resultado === false)
    {
        echo "Error al conectar con la base de datos";
    }
    else
    {
        while ($fila = $resultado->fetch_assoc()) 
        {
            $genero = $fila['genero'];
            echo '<option value="' . $genero . '">' . $genero . '</option>';
        }
    }
}