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
}