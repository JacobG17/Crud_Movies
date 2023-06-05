<?php
include ('../scrips/cargarPeliculas.php');
?>

<div class="grid-container">
    <?php foreach ($posters as $poster): ?>
        <div class="grid-item">
            <img src="<?php echo $poster; ?>" alt="Imagen">
            <div class="overlay">
                <button>Editar</button>
                <button>Eliminar</button>
            </div>
        </div>
    <?php endforeach; ?>
</div>

