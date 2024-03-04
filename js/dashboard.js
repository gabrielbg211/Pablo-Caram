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


function search() {
  // Obtener el valor del campo de entrada
  var input = document.getElementById('searchInput');
  var filter = input.value.toUpperCase();
  
  // Obtener los elementos a buscar dentro del menú
  var menuItems = document.getElementsByClassName('menu-item');

  // Iterar sobre los elementos y mostrar u ocultar según la búsqueda
  for (var i = 0; i < menuItems.length; i++) {
      var menuItem = menuItems[i];
      var text = menuItem.textContent || menuItem.innerText;
      if (text.toUpperCase().indexOf(filter) > -1) {
          menuItem.style.display = "";
      } else {
          menuItem.style.display = "none";
      }
  }
}

function showSection(sectionId) {
    console.log("Se ha seleccionado la sección:", sectionId);

    // Ocultar todas las secciones de contenido
    var sections = document.querySelectorAll('.d-content');
    sections.forEach(function(section) {
        section.style.display = 'none';
    });

    // Mostrar la sección seleccionada
    var selectedSection = document.getElementById(sectionId);
    if (selectedSection) {
        selectedSection.style.display = 'block';
    }

    // Quitar la clase 'bold' de todos los títulos de sección
    var sectionTitles = document.querySelectorAll('.menu-option');
    sectionTitles.forEach(function(title) {
        title.classList.remove('bold');
    });

    // Agregar la clase 'bold' al título de la sección seleccionada
    var selectedTitle = document.getElementById(sectionId + '-title');
    if (selectedTitle) {
        selectedTitle.classList.add('bold');
    }
}

// Al cargar la página, ejecutar la función para mostrar la sección 'inicio' por defecto
window.onload = function() {
    showSection('inicio');
};

// JavaScript
document.addEventListener("DOMContentLoaded", function() {
    const rowsPerPage = 4; // Número de filas por página
    let currentPage = 1; // Página actual, iniciando en la primera

    const rows = document.querySelectorAll('.colored-rows'); // Todas las filas a paginar
    const numPages = Math.ceil(rows.length / rowsPerPage); // Número total de páginas

    // Función para mostrar las filas correspondientes a la página actual
    function showPage(page) {
        const startIndex = (page - 1) * rowsPerPage; // Índice de inicio de las filas en esta página
        const endIndex = startIndex + rowsPerPage; // Índice de fin de las filas en esta página

        rows.forEach((row, index) => {
            if (index >= startIndex && index < endIndex) {
                row.style.display = 'table-row'; // Mostrar fila si está en el rango de la página actual
            } else {
                row.style.display = 'none'; // Ocultar fila si está fuera del rango de la página actual
            }
        });
    }

    // Función para actualizar la visibilidad de los botones de paginación
    function updatePaginationButtons() {
        const prevButton = document.getElementById('prevPage');
        const nextButton = document.getElementById('nextPage');

        if (currentPage === 1) {
            prevButton.style.display = 'none'; // Ocultar el botón "Anterior" en la primera página
        } else {
            prevButton.style.display = 'block'; // Mostrar el botón "Anterior" si no estamos en la primera página
        }

        if (currentPage === numPages) {
            nextButton.style.display = 'none'; // Ocultar el botón "Siguiente" en la última página
        } else {
            nextButton.style.display = 'block'; // Mostrar el botón "Siguiente" si no estamos en la última página
        }
    }

    // Control de evento para el botón "Siguiente"
    document.getElementById('nextPage').addEventListener('click', function() {
        if (currentPage < numPages) {
            currentPage++; // Ir a la siguiente página si no estamos en la última
            showPage(currentPage); // Mostrar las filas de la nueva página
            updatePaginationButtons(); // Actualizar visibilidad de botones de paginación
        }
    });

    // Control de evento para el botón "Anterior"
    document.getElementById('prevPage').addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--; // Ir a la página anterior si no estamos en la primera
            showPage(currentPage); // Mostrar las filas de la nueva página
            updatePaginationButtons(); // Actualizar visibilidad de botones de paginación
        }
    });

    // Mostrar la primera página al cargar la página
    showPage(currentPage);
    updatePaginationButtons(); // Actualizar visibilidad de botones de paginación al cargar la página
});

const fourthButton = document.querySelector('.fourth-button');
const playIcon = fourthButton.querySelector('.icon-tabler-player-play');
const pauseIcon = fourthButton.querySelector('.icon-tabler-player-pause');

let isPlaying = false;

// Función para el cuarto botón
fourthButton.addEventListener('click', () => {
    if (isPlaying) {
        playIcon.style.display = 'block';
        pauseIcon.style.display = 'none';
    } else {
        playIcon.style.display = 'none';
        pauseIcon.style.display = 'block';
    }
    
    isPlaying = !isPlaying;
});

const fifthButton = document.querySelector('.fifth-button');

// Función para el quinto botón
fifthButton.addEventListener('mousedown', () => {
    fifthButton.children[0].style.display = 'none';
    fifthButton.children[1].style.display = 'block';
});

fifthButton.addEventListener('mouseup', () => {
    fifthButton.children[0].style.display = 'block';
    fifthButton.children[1].style.display = 'none';
});

const sixthButton = document.querySelector('.sixth-button');
let count = 0;

sixthButton.addEventListener('click', () => {
    count++;
    if (count === 1) {
        // Cambiar al segundo ícono
        sixthButton.children[0].style.display = 'none';
        sixthButton.children[1].style.display = 'block';
    } else if (count === 2) {
        // Cambiar al tercer ícono
        sixthButton.children[0].style.display = 'none';
        sixthButton.children[1].style.display = 'none';
        sixthButton.children[2].style.display = 'block';
    } else {
        // Volver al primer ícono y reiniciar el contador
        count = 0;
        sixthButton.children[0].style.display = 'block';
        sixthButton.children[1].style.display = 'none';
        sixthButton.children[2].style.display = 'none';
    }
});

// Luego puedes continuar con los otros botones
const firstButton = document.querySelector('.first-button');
const secondButton = document.querySelector('.second-button');
const thirdButton = document.querySelector('.third-button');


// Función para el primer botón
firstButton.addEventListener('click', (event) => {
    event.preventDefault();
    firstButton.style.display = 'none';
    secondButton.style.display = 'block';
});

// Función para el segundo botón
secondButton.addEventListener('click', (event) => {
    event.preventDefault();
    firstButton.style.display = 'block';
    secondButton.style.display = 'none';
});

// Función para el tercer botón
thirdButton.addEventListener('mousedown', () => {
    thirdButton.children[0].style.display = 'none';
    thirdButton.children[1].style.display = 'block';
});

thirdButton.addEventListener('mouseup', () => {
    thirdButton.children[0].style.display = 'block';
    thirdButton.children[1].style.display = 'none';
});

const iconButtons = document.querySelectorAll('.icon-button');

iconButtons.forEach(button => {
    button.addEventListener('mousedown', () => {
        button.style.transform = 'scale(0.9)';
    });

    button.addEventListener('mouseup', () => {
        button.style.transform = 'scale(1)';
    });
});