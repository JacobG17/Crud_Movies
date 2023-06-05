<?php
include ('../scrips/cargarPeliculas.php');
?>

<div class="grid-container">
    <?php foreach ($posters as $poster): ?>
        <div class="grid-item">
            <img src="<?php echo $poster; ?>" alt="Imagen">
            <div class="overlay">
                <a href="updatePelicula.php">
                    <button class="editar-button" onclick="obtenerDatos(this)">Editar</button>
                </a>
                <button>Eliminar</button>
            </div>
        </div>
    <?php endforeach; ?>
</div>

