document.addEventListener("DOMContentLoaded", function() {
    const btnReiniciar = document.getElementById("btnReiniciar");
    const selectDirector = document.getElementById("selectDirector");
    const selectCategoria = document.getElementById("selectCategoria");
  
    btnReiniciar.addEventListener("click", function() {
      selectDirector.value = "Director";
      selectCategoria.value = "Categoria";
    });
  });
  
document.addEventListener("DOMContentLoaded", function() {
  const toggleButton = document.getElementById('Menu');
  const menu = document.getElementById('despliegueMenu');

  toggleButton.addEventListener('click', function() {
      if (menu.style.display === 'none') {
          menu.style.display = 'block';
        } else {
          menu.style.display = 'none';
        }
  });

});


