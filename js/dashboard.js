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

    // Mostrar la primera página al cargar la página
    showPage(currentPage);

    // Control de evento para el botón "Siguiente"
    document.getElementById('nextPage').addEventListener('click', function() {
        if (currentPage < numPages) {
            currentPage++; // Ir a la siguiente página si no estamos en la última
            showPage(currentPage); // Mostrar las filas de la nueva página
        }
    });

    // Control de evento para el botón "Anterior"
    document.getElementById('prevPage').addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--; // Ir a la página anterior si no estamos en la primera
            showPage(currentPage); // Mostrar las filas de la nueva página
        }
    });
});

