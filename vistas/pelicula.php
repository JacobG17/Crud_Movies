<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud-Movies</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="stylesheet" href="../estilos/estiloVistaPelicula.css">
    <script src="../funciones/index.js"></script>
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a4fef512d9.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php include '../componentes/header.php'; ?>
    
    <div class ="peiculainfo">
        <div class="inner-div">
            <div class="poster">
                <img src="../imagenes/imagen1.jpg">
            </div>
            <div class= "titulo">
                <h1>Titulo de la pelicula</h1>
            </div>
            <div class="fecha_estreno">
                <h2>Fecha de estreno</h2>
            </div>
            <div class="director">
                <h2>Director</h2>
            </div>
            <div class="reseña">
                <p>Reseña</p>
            </div>
            <div class="genero">
                <h2>Genero</h2>
            </div>
        </div>
    </div>



</body>

</html>
