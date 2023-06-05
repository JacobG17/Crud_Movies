function mostrarImagen() {
    var input = document.getElementById('inputImagen');
    var posterContainer = document.getElementById('posterContainer');

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        var img = document.createElement('img');
        img.src = e.target.result;
        img.alt = 'Poster de la película';

        // Eliminar el contenido anterior del div "poster" si lo hubiera
        posterContainer.innerHTML = '';

        // Agregar la imagen al div "poster"
        posterContainer.appendChild(img);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }