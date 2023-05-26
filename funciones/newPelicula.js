function agregarImagen() {
    const input = document.getElementById('inputImagen');
    input.click();

    input.addEventListener('change', function() {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imagen = document.createElement('img');
                imagen.src = e.target.result;

                const contenedor = document.querySelector('.poster');
                contenedor.innerHTML = '';
                contenedor.appendChild(imagen);
            }
            reader.readAsDataURL(file);
        }
    });
}
