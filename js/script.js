document.addEventListener('DOMContentLoaded', function() {
    // Obtener referencia al botón de hamburguesa y al menú de navegación
    const botonHamburguesa = document.querySelector('.boton-hamburguesa');
    const menuNavegacion = document.querySelector('.navegacion');

    // Agregar un evento de clic al botón de hamburguesa
    botonHamburguesa.addEventListener('click', function() {
        // Alternar la clase "abierto" en el botón de hamburguesa y en el menú de navegación
        botonHamburguesa.classList.toggle('abierto');
        menuNavegacion.classList.toggle('abierto');
    });
});


document.addEventListener("DOMContentLoaded", function() {
    // Ocultar el loader y mostrar el contenido principal después de un tiempo
    setTimeout(function() {
        document.getElementById('loader-wrapper').style.opacity = 0; // Aplicar efecto de desvanecimiento
        setTimeout(function() {
            document.getElementById('loader-wrapper').style.display = 'none'; // Ocultar el loader
            document.getElementById('content').style.display = 'block'; // Mostrar el contenido principal
        }, 500); // Retardo para el efecto de desvanecimiento
    }, 5000); // Retardo para mostrar el contenido principal, ajusta según tu preferencia
});
