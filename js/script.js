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

const botonHamburguesa = document.getElementById('boton-hamburguesa');
const navegacion = document.getElementById('navegacion');
const body = document.body;

botonHamburguesa.addEventListener('click', () => {
    // Alternar la clase 'abierto' al hacer clic en el botón de hamburguesa
    navegacion.classList.toggle('abierto');
    // Agregar o eliminar la clase 'body-scroll-lock' al body
    body.classList.toggle('body-scroll-lock');
});


document.addEventListener("DOMContentLoaded", function() {
    const loaderVideo = document.getElementById('loader-video');
    const loaderWrapper = document.getElementById('loader-wrapper');
    const content = document.getElementById('contenido');

    loaderVideo.addEventListener('ended', function() {
        loaderWrapper.style.opacity = 0; // Aplicar efecto de desvanecimiento
        setTimeout(function() {
            loaderWrapper.style.display = 'none'; // Ocultar el loader
            content.style.display = 'block'; // Mostrar el contenido principal
        }, 1000); // Retardo para el efecto de desvanecimiento
    });

    // Si el video no se carga correctamente, mostrar el contenido después de 5 segundos
    setTimeout(function() {
        loaderWrapper.style.opacity = 0; // Aplicar efecto de desvanecimiento
        setTimeout(function() {
            loaderWrapper.style.display = 'none'; // Ocultar el loader
            content.style.display = 'block'; // Mostrar el contenido principal
        }, 1000); // Retardo para el efecto de desvanecimiento
    }, 2800); // Esperar 3 segundos antes de mostrar el contenido
});

document.addEventListener('DOMContentLoaded', function() {
    // Bloquear el scroll durante 4 segundos
    document.body.classList.add('body-scroll-lock');
    setTimeout(function() {
        // Desbloquear el scroll después de 4 segundos
        document.body.classList.remove('body-scroll-lock');
    }, 2800); // 4000 milisegundos = 4 segundos
});

// Obtener la página actual
const currentPage = window.location.pathname;

// Verificar si la página actual es el login
if (currentPage === "/Login.php") {
    // Ocultar el botón de hamburguesa
    const botonHamburguesa = document.getElementById("boton-hamburguesa");
    botonHamburguesa.style.display = "none";
    
    // Ocultar la navegación
    const navegacion = document.getElementById("navegacion");
    navegacion.style.display = "none";
}

// Login

const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

document.querySelector('.sign-up-form').addEventListener('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    fetch('source/registro.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // Si el registro es exitoso, mostrar un mensaje y redirigir al index.php
        alert(data.message);
        window.location.href = 'index.php';
      } else {
        // Si hay un error, mostrar el mensaje de error
        alert(data.message);
      }
    })
    .catch(error => console.error('Error:', error));
  });