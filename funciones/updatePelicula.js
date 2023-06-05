function obtenerDatos(button)
{
    var contenedor = button.parentNode.parentNode.parentNode;
    var imagen = contenedor.querySelector('img');
    var nombreImagen = imagen.getAttribute('src');
    
    console.log(nombreImagen);

}