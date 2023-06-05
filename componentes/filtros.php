<?php 
    include ('../scrips/llenarFiltro.php');
?>
<div class="barra_filtros">
    <div class="ver">
        <a href="index.php" class="linea-debajo">Ver todo</a>
    </div>
    <div class="iconoFiltro">
        <i class="fa-solid fa-filter fa-2xl"></i>
        <p>Filtros</p>
    </div>
    <div class="filtroDirector">
        <select id="selectDirector" class="selectbox" >
            <option value="Director">Director</option>
            <?php  
                filtroDirectores();
            ?>
        </select>   
        <div class="iconSelect">
            <i class="fa-solid fa-angle-down fa-xl"></i>
        </div>
    </div>  
    <div class="filtroCategoria">
        <select id="selectCategoria" class="selectbox" >
            <option value="Categoria" Selected>Categoria</option>
            <?php  
                filtroGeneros();
            ?>
        </select>   
        <div class="iconSelect">
            <i class="fa-solid fa-angle-down fa-xl"></i>
        </div>
    </div>
    <div class="reiniciarFiltros">
        <button id="btnReiniciar" class="btnReiniciar">
            <i class="fa-solid fa-xmark"></i>  
            <span>REINICIAR</span>
        </button>
    </div>     
</div>