let isPressing = false;
let isPressingSeventh = false;

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

// Luego puedes continuar con los otros botones
const firstButton = document.querySelector('.first-button');
const secondButton = document.querySelector('.second-button');
const thirdButton = document.querySelector('.third-button');
const fourthButton = document.querySelector('.fourth-button');
const fifthButton = document.querySelector('.fifth-button');
const sixthButton = document.querySelector('.sixth-button');
const seventhButton = document.querySelector('.seventh-button');
const eighthButton = document.querySelector('.eighth-button');
const ninthButton = document.querySelector('.ninth-button');
const tenthButton = document.querySelector('.tenth-button');
const eleventhButton = document.querySelector('.eleventh-button');
const repeatButton = document.getElementById('repeatButton');

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
    isPressing = true;
    thirdButton.style.display = 'none';
    fourthButton.style.display = 'block';
});
// Función para el cuarto botón
document.addEventListener('mouseup', () => {
    if (isPressing) {
        isPressing = false;
        fourthButton.style.display = 'none';
        thirdButton.style.display = 'block';
    }
});

// Función para el quiton botón
fifthButton.addEventListener('click', (event) => {
    event.preventDefault();
    fifthButton.style.display = 'none';
    sixthButton.style.display = 'block';
});
// Función para el sexto botón
sixthButton.addEventListener('click', (event) => {
    event.preventDefault();
    fifthButton.style.display = 'block';
    sixthButton.style.display = 'none';
});

// Función para el septimo botón
seventhButton.addEventListener('mousedown', () => {
    isPressingSeventh = true;
    seventhButton.style.display = 'none';
    eighthButton.style.display = 'block';
});
// Función para el octavo botón
document.addEventListener('mouseup', () => {
    if (isPressingSeventh) {
        isPressingSeventh = false;
        eighthButton.style.display = 'none';
        seventhButton.style.display = 'block';
    }
});

// Función para el noveno botón
ninthButton.addEventListener('click', (event) => {
    event.preventDefault();
    ninthButton.style.display = 'none';
    tenthButton.style.display = 'block';
    eleventhButton.style.display = 'none';
});
// Función para el décimo botón
tenthButton.addEventListener('click', (event) => {
    event.preventDefault();
    ninthButton.style.display = 'none';
    tenthButton.style.display = 'none';
    eleventhButton.style.display = 'block';
});
// Función para el undécimo botón
eleventhButton.addEventListener('click', (event) => {
    event.preventDefault();
    ninthButton.style.display = 'block';
    tenthButton.style.display = 'none';
    eleventhButton.style.display = 'none';
});


// funciones de presion de botones
const firstButtons = document.querySelectorAll('.first-button, .second-button, .fifth-button, .sixth-button, .ninth-button, .tenth-button, .eleventh-button');

firstButtons.forEach(button => {
    button.addEventListener('mousedown', () => {
        button.style.transform = 'scale(0.9)';
    });

    button.addEventListener('mouseup', () => {
        button.style.transform = 'scale(1)';
    });
});

const thirdButtons = document.querySelectorAll('.third-button, .fourth-button, .seventh-button, .eighth-button');

thirdButtons.forEach(button => {
    button.addEventListener('mousedown', () => {
        button.style.transform = 'scale(1)';
    });

    button.addEventListener('mouseup', () => {
        button.style.transform = 'scale(0.9)';
    });
});


// Volumen bar
const volumeBar = document.querySelector('.volume-bar');

// Función para guardar el volumen y la posición de la bola en el almacenamiento local del navegador
function saveVolume() {
    localStorage.setItem('volume', volumeBar.value);
}

// Función para cargar el volumen y la posición de la bola desde el almacenamiento local del navegador
function loadVolume() {
    const savedVolume = localStorage.getItem('volume');
    if (savedVolume !== null) {
        volumeBar.value = savedVolume;
        updateVolumeBarBackground(); // Actualizar el fondo del control deslizante de volumen
    }
}

// Cargar el volumen y la posición de la bola almacenados cuando la página se carga
window.addEventListener('load', function() {
    loadVolume();
});

// Actualizar el fondo del control deslizante de volumen y guardar el volumen cuando cambia
volumeBar.addEventListener('input', function() {
    updateVolumeBarBackground();
    saveVolume();
});

// Función para actualizar el fondo del control deslizante de volumen
function updateVolumeBarBackground() {
    const value = (volumeBar.value - volumeBar.min) / (volumeBar.max - volumeBar.min);
    const colorLeft = "#a905b6";
    const colorRight = "#ddd";
    const backgroundColor = `linear-gradient(to right, ${colorLeft} 0%, ${colorLeft} ${value * 100}%, ${colorRight} ${value * 100}%, ${colorRight} 100%)`;
    volumeBar.style.background = backgroundColor;
}

// Actualizar el fondo del control deslizante de volumen y guardar el volumen cuando cambia
volumeBar.addEventListener('input', function() {
    updateVolumeBar();
    saveVolume();
});

// Función para actualizar el fondo del control deslizante de volumen y mostrar los iconos correspondientes
function updateVolumeBar() {
    const value = (volumeBar.value - volumeBar.min) / (volumeBar.max - volumeBar.min);
    const colorLeft = "#a905b6";
    const colorRight = "#ddd";
    const backgroundColor = `linear-gradient(to right, ${colorLeft} 0%, ${colorLeft} ${value * 100}%, ${colorRight} ${value * 100}%, ${colorRight} 100%)`;
    volumeBar.style.background = backgroundColor;

    // Mostrar los iconos correspondientes según el valor de la barra de volumen
    const volumeIcons = document.querySelector('.volume-icons');
    if (value === 0) {
        volumeIcons.querySelector('.icon-tabler-volume-off').style.display = 'block';
        volumeIcons.querySelector('.icon-tabler-volume-2').style.display = 'none';
        volumeIcons.querySelector('.icon-tabler-volume').style.display = 'none';
    } else if (value <= 0.75) {
        volumeIcons.querySelector('.icon-tabler-volume-off').style.display = 'none';
        volumeIcons.querySelector('.icon-tabler-volume-2').style.display = 'block';
        volumeIcons.querySelector('.icon-tabler-volume').style.display = 'none';
    } else {
        volumeIcons.querySelector('.icon-tabler-volume-off').style.display = 'none';
        volumeIcons.querySelector('.icon-tabler-volume-2').style.display = 'none';
        volumeIcons.querySelector('.icon-tabler-volume').style.display = 'block';
    }
}

// Cargar el volumen y la posición de la bola almacenados cuando la página se carga
window.addEventListener('load', function() {
    loadVolume();
    updateVolumeBar();
});

const audio = document.getElementById('audio');

// Función para actualizar el volumen del elemento de audio según el valor del control deslizante de volumen
function updateAudioVolume() {
    const volume = volumeBar.value / 100; // Convertir el valor del control deslizante a un valor entre 0 y 1
    audio.volume = volume; // Establecer el volumen del elemento de audio
}

// Actualizar el volumen del audio cuando cambia el valor del control deslizante
volumeBar.addEventListener('input', function() {
    updateAudioVolume();
});

// Función para obtener el volumen actual del audio
function getCurrentAudioVolume() {
    return audio.volume * 100; // Convertir el volumen del elemento de audio a un valor entre 0 y 100
}

// Ejemplo de cómo usar getCurrentAudioVolume para obtener el volumen actual
const currentVolume = getCurrentAudioVolume();
console.log('Volumen actual:', currentVolume);


// Función para reproducir el audio
function playAudio() {
    audio.play();
}

// Función para pausar el audio
function pauseAudio() {
    audio.pause();
}

// Función para cambiar el botón a quinto botón (reproducción)
function changeToPlayButton() {
    fifthButton.style.display = 'block';
    sixthButton.style.display = 'none';
}

// Evento de clic para el quinto botón (reproducción)
fifthButton.addEventListener('click', function() {
    playAudio();
    fifthButton.style.display = 'none';
    sixthButton.style.display = 'block';
});

// Evento de clic para el sexto botón (pausa)
sixthButton.addEventListener('click', function() {
    pauseAudio();
    changeToPlayButton();
});

// Evento para cambiar el botón a quinto botón cuando el audio termine de reproducirse
audio.addEventListener('ended', function() {
    changeToPlayButton();
});

// Función para guardar el volumen en el almacenamiento local
function saveVolume() {
    localStorage.setItem('volume', volumeBar.value);
    audio.volume = volumeBar.value / 100; // Actualizar el volumen del audio
}

// Función para cargar el volumen desde el almacenamiento local
function loadVolume() {
    const savedVolume = localStorage.getItem('volume');
    if (savedVolume !== null) {
        volumeBar.value = savedVolume;
        audio.volume = savedVolume / 100; // Establecer el volumen del audio al valor guardado
    }
}

// Cargar el volumen cuando la página se carga
window.addEventListener('load', function() {
    loadVolume();
});

// Actualizar el volumen y guardarlo cuando cambia el control deslizante
volumeBar.addEventListener('input', function() {
    saveVolume();
});

// Repetir la canción en un bucle cuando se hace clic en el botón de repetición
repeatButton.addEventListener('click', function() {
    if (audio.loop) {
        audio.loop = false; // Desactivar la repetición si está activada
        repeatButton.classList.remove('active'); // Remover la clase de activación del botón
    } else {
        audio.loop = true; // Activar la repetición si está desactivada
        repeatButton.classList.add('active'); // Agregar la clase de activación al botón
    }
});

const stopRepeatButton = document.getElementById('stopRepeatButton');
// Detener la repetición cuando se hace clic en el botón de detención de repetición
stopRepeatButton.addEventListener('click', function() {
    if (audio.loop) {
        audio.loop = false; // Desactivar la repetición
        stopRepeatButton.style.display = 'none'; // Ocultar el botón de detención de repetición
    }
});


// Seleccionar los botones de volumen
const volumeButton = document.querySelector('.icon-tabler-volume');
const volume2Button = document.querySelector('.icon-tabler-volume-2');
const volumeOffButton = document.querySelector('.icon-tabler-volume-off');

// Variable para almacenar el volumen anterior
let previousVolume = 0;

// Función para cambiar el estado del botón y ajustar el volumen del audio
function toggleVolume() {
    if (audio.volume > 0) {
        // Guardar el volumen actual antes de silenciarlo
        previousVolume = audio.volume;
        // Silenciar el audio
        audio.volume = 0;
        // Cambiar el botón a estado de volumen apagado
        volumeButton.style.display = 'none';
        volume2Button.style.display = 'none';
        volumeOffButton.style.display = 'block';
    } else {
        // Restaurar el volumen anterior
        audio.volume = previousVolume;
        // Cambiar el botón al estado anterior
        volumeButton.style.display = 'none';
        volume2Button.style.display = 'block';
        volumeOffButton.style.display = 'none';
    }
}

// Agregar un evento de clic a los botones de volumen
volumeButton.addEventListener('click', toggleVolume);
volume2Button.addEventListener('click', toggleVolume);
volumeOffButton.addEventListener('click', toggleVolume);


// Función para ajustar la posición de la barra de volumen según el volumen del audio
function updateVolumeBarPosition() {
    // Obtener el valor del volumen actual y convertirlo a un valor entre 0 y 100
    const volume = audio.volume * 100;
    // Establecer el valor de la barra de volumen
    volumeBar.value = volume;
    // Actualizar el fondo de la barra de volumen
    updateVolumeBarBackground();
}

// Llamar a la función para ajustar la posición de la barra de volumen cuando la página se carga
window.addEventListener('load', updateVolumeBarPosition);

// Llamar a la función para ajustar la posición de la barra de volumen cuando cambie el volumen del audio
audio.addEventListener('volumechange', updateVolumeBarPosition);
