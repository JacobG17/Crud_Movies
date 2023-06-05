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

document.addEventListener('DOMContentLoaded', function() 
{
  var selectElement = document.getElementById('selectCategoria');

  selectElement.addEventListener('change', function() {
      var selectedValue = selectElement.value;

  });
});

document.addEventListener('DOMContentLoaded', function() {
  var selectElement = document.getElementById('selectCategoria');

  selectElement.addEventListener('change', function() {
    var selectedValue = selectElement.value;

    // Crear una instancia de XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurar la petición
    xhr.open('POST', 'consultaFiltros.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // Enviar la petición con los datos
    xhr.send('selectedValue=' + encodeURIComponent(selectedValue));

    // Manejar la respuesta de la petición
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // La petición se ha completado correctamente
          var response = xhr.responseText;
          // Aquí puedes realizar las acciones necesarias con la respuesta
        } else {
          // Hubo un error en la petición
          console.error('Error en la petición: ' + xhr.status);
        }
      }
    };
  });
});



