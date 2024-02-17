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

document.addEventListener('DOMContentLoaded', function() {
    // Bloquear el scroll durante 4 segundos
    document.body.classList.add('body-scroll-lock');
    setTimeout(function() {
        // Desbloquear el scroll después de 4 segundos
        document.body.classList.remove('body-scroll-lock');
    }, 4000); // 4000 milisegundos = 4 segundos
});

