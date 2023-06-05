<?php

function filtroDirectores()
{
    include ('../scrips/conexion.php');
    //Consulta de directores
    $directores = "SELECT director FROM Peliculas;";

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
    $generos = "SELECT genero FROM Peliculas;";
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