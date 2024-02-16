document.addEventListener('DOMContentLoaded', function () {
    // Obtener referencia al botón de hamburguesa y al menú de navegación
    const botonHamburguesa = document.querySelector('.boton-hamburguesa');
    const menuNavegacion = document.querySelector('.navegacion');

    // Agregar un evento de clic al botón de hamburguesa
    botonHamburguesa.addEventListener('click', function () {
        // Alternar la clase "abierto" en el botón de hamburguesa y en el menú de navegación
        botonHamburguesa.classList.toggle('abierto');
        menuNavegacion.classList.toggle('abierto');
    });
});


document.addEventListener("DOMContentLoaded", function() {
  setTimeout(function(){
    document.getElementById('loader-wrapper').style.opacity = 0;
    setTimeout(function(){
      document.getElementById('loader-wrapper').style.display = 'none';
      document.getElementById('content').style.display = 'block';
    }, 5000);
  }, 5000);
});
