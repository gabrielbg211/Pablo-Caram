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


    // Después de que se haya cargado completamente el documento HTML
    document.addEventListener("DOMContentLoaded", function() {
        // Bloquear el desplazamiento de la página
        document.body.style.overflow = "hidden";
        
        // Simular una carga de 3 segundos (puedes cambiar esto según sea necesario)
        setTimeout(function() {
            // Desbloquear el desplazamiento de la página
            document.body.style.overflow = "";
            // Ocultar la pantalla de carga
            document.getElementById("loader-wrapper").style.display = "none";
        }, 3000); // 3000 milisegundos = 3 segundos
    });

    