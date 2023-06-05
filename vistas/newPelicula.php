<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud-Movwies</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="stylesheet" href="../estilos/estiloVistaPelicula.css">
    <link rel="stylesheet" href="../estilos/estilosnewPelicula.css">
    <script src="../funciones/newPelicula.js"></script>
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a4fef512d9.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php include '../componentes/header.php'; ?>
   
    <form action="../scrips/insert.php" method="post" enctype="multipart/form-data">
        <div class="peliculainfo">
            <div class="inner-div">
                <div class="poster" id="posterContainer">
                    <span>Agregue el poster de la pelicula</span>
                </div>
                <div class="titulo">
                    <input type="text" name="titulo" placeholder="Título de la película">
                </div>
                <div class="fecha-input">
                    <label for="fecha">Fecha de estreno:</label>
                    <input type="date" id="fecha" name="fecha">
                </div>
                <div class="director">
                    <input type="text" name="director" placeholder="Nombre del director">
                </div>
                <div class="genero">
                    <input type="text" name="genero" placeholder="Género">
                </div>
                <div class="reseña">
                    <textarea name="reseña" placeholder="Reseña"></textarea>
                </div>
                <div class="agregar">
                    <input type="submit" name="submit" value="Agregar"/>
                </div>
                <div class = "agregar_poster">
                    <input type="file" name="poster" id="inputImagen" onchange="mostrarImagen()"/>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
