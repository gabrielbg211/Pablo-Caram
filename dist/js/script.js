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
    }, 3000); // 4000 milisegundos = 4 segundos
});

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

// Verifica si la página actual es 'Login.php'
if (window.location.pathname === '/Login.php') {
    // Si es 'Login.php', ocultamos el botón y la navegación
    document.getElementById('boton-hamburguesa').style.display = 'none';
    document.getElementById('navegacion').style.display = 'none';
}


// Netlify Config

const { exec } = require('child_process');

exports.handler = async function (event, context) {
  // Obtener la ruta del archivo PHP desde la solicitud HTTP
  const phpFile = event.path.replace(/^\/\.netlify\/functions\/[^/]+/, '');

  return new Promise((resolve, reject) => {
    // Ejecutar el archivo PHP y capturar la salida
    exec(`php ${phpFile}`, (error, stdout, stderr) => {
      if (error) {
        // Manejar errores
        reject({
          statusCode: 500,
          body: JSON.stringify({ error: 'Error al ejecutar el archivo PHP' }),
        });
      } else {
        // Devolver la salida del archivo PHP
        resolve({
          statusCode: 200,
          body: stdout,
        });
      }
    });
  });
};
