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