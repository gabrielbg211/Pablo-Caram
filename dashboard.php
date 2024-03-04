<?php include 'source/estado.php'; ?>
<?php include 'source/dash_session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadatos y enlaces de estilo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="img/ICONO WEB.ico">
    <link rel="preload" href="styles/style.css" as="style">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/dashboard.css">
    <link rel="preload" href="js/dashboard.js" as="script">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/molot" rel="stylesheet">
    <title>Dashboard</title>
    <!-- Estilos adicionales -->
    <style>
        .body-scroll-lock {
            overflow: hidden;
        }

        @media (min-width: 1280px) {
            #loader-wrapper {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #000;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 9999;
                opacity: 1;
                transition: opacity 0.5s;
            }
            
            #loader-video {
                max-width: 50%;
                max-height: 50%;
            }
        }
    </style>
</head>
<body>
    <!-- Inclusión de elementos PHP -->
    <?php include 'source/loader.php'; ?>
    <?php include 'source/header.php'; ?>

    <!-- Contenido principal -->
    <div class="wrapper">
        <!-- Menú lateral -->
        <div class="d-menu">
            <!-- Barra de búsqueda -->
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Buscar...">
                <button type="button" onclick="search()">Buscar</button>
            </div>
            <!-- Menú de opciones -->
            <p class="menu-title">Menu</p>
            <ul class="menu-list">
                <li><a href="#" class="menu-option" onclick="showSection('inicio')" id="inicio-title">Inicio</a></li>
                <li><a href="#" class="menu-option" onclick="showSection('Otra_Seccion')" id="Otra_Seccion-title">Otra_Seccion</a></li>
                <li><a href="#" class="menu-option" onclick="showSection('ganancias')" id="ganancias-title">Ganancias Compartidas</a></li>
                <li><a href="#" class="menu-option" onclick="showSection('estadisticas')" id="estadisticas-title">Estadísticas</a></li>
                <li><a href="#" class="menu-option" onclick="showSection('transacciones')" id="transacciones-title">Transacciones</a></li>
            </ul>
            <!-- Menú de marketing -->
            <p class="menu-title">Marketing</p>
            <ul class="menu-list">
                <li><a href="#" class="menu-option">Youtube</a></li>
                <li><a href="#" class="menu-option">Spotify</a></li>
            </ul>
        </div>    
        <!-- Contenido de las secciones -->
        <div id="inicio" class="d-content">
            <!-- Contenido de la sección "Inicio" -->
            <div class="contenido-inicio">
                <div class="half-width left-content">
                    <div class="photo-container">
                        <img src="img/Perfil.webp" alt="Foto" class="photo">
                    </div>
                </div>
                <div class="half-width right-content">
                    <div class="column-container">
                        <div class="content-left">
                            <div class="icon-text-container ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="blue" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <!-- Texto 1 -->
                                <p class="first-p">Artista Verificado</p>
                            </div>
                            <!-- Texto 2 -->
                            <p class="second-p" id="dynamicText">PablitoCaramStudio prueba</p>
                            <!-- Texto 3 -->
                            <div class="icon-text-container">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 white-fill">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                </svg>
                                <p class="last-p">72,654,127 Reproducciones.</p>
                            </div>
                            <!-- Botones -->
                            <div class="button-container">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                                    </svg>
                                    <span>Subir</span>
                                </button>
                                <button></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="otro-inicio">
                <h2>Lanzamientos</h2>
                <div class="pagination-container">
                    <button id="prevPage" class="rounded-button secondary">Anterior</button>
                    <button id="nextPage" class="rounded-button primary">Siguiente</button>
                </div>
                <table>
                    <tr>
                        <th></th>
                        <th>Título</th>
                        <th>ID de lanzamiento</th>
                        <th>UPC</th>
                        <th>ISRC</th>
                        <th>Fecha de lanzamiento</th>
                    </tr>
                    <tr class="colored-rows">
                        <td>1</td>
                        <td>
                            <div class="song-info">
                                <img src="img/LOGO LATA.webp" alt="Imagen de la canción">
                                <div class="text-container">ahora si se viene los bueno gente | Test of sound</div>
                            </div>
                        </td>
                        <td>578513</td>
                        <td>1872798</td>
                        <td>1AS5AS84</td>
                        <td>24/02/2024</td>
                    </tr>
                    <tr class="colored-rows">
                        <td>2</td>
                        <td>
                            <div class="song-info">
                                <img src="img/LOGO LATA.webp" alt="Imagen de la canción">
                                Nombre de la canción 
                            </div>
                        </td>
                        <td>578513</td>
                        <td>1872798</td>
                        <td>1AS5AS84</td>
                        <td>24/02/2024</td>
                    </tr>
                    <tr class="colored-rows">
                        <td>3</td>
                        <td>
                            <div class="song-info">
                                <img src="img/LOGO LATA.webp" alt="Imagen de la canción">
                                Nombre de la canción 
                            </div>
                        </td>
                        <td>578513</td>
                        <td>1872798</td>
                        <td>1AS5AS84</td>
                        <td>24/02/2024</td>
                    </tr>
                    <tr class="colored-rows">
                        <td>4</td>
                        <td>
                            <div class="song-info">
                                <img src="img/LOGO LATA.webp" alt="Imagen de la canción">
                                Nombre de la canción 
                            </div>
                        </td>
                        <td>578513</td>
                        <td>1872798</td>
                        <td>1AS5AS84</td>
                        <td>24/02/2024</td>
                    </tr>
                    <tr class="colored-rows">
                        <td>5</td>
                        <td>
                            <div class="song-info">
                                <img src="img/LOGO LATA.webp" alt="Imagen de la canción">
                                Nombre de la canción 
                            </div>
                        </td>
                        <td>578513</td>
                        <td>1872798</td>
                        <td>1AS5AS84</td>
                        <td>24/02/2024</td>
                    </tr>
                    <tr class="colored-rows">
                        <td>6</td>
                        <td>
                            <div class="song-info">
                                <img src="img/LOGO LATA.webp" alt="Imagen de la canción">
                                Nombre de la canción 
                            </div>
                        </td>
                        <td>578513</td>
                        <td>1872798</td>
                        <td>1AS5AS84</td>
                        <td>24/02/2024</td>
                    </tr>
                    <tr class="colored-rows">
                        <td>7</td>
                        <td>
                            <div class="song-info">
                                <img src="img/LOGO LATA.webp" alt="Imagen de la canción">
                                Nombre de la canción 
                            </div>
                        </td>
                        <td>578513</td>
                        <td>1872798</td>
                        <td>1AS5AS84</td>
                        <td>24/02/2024</td>
                    </tr>
                    <tr class="colored-rows">
                        <td>8</td>
                        <td>
                            <div class="song-info">
                                <img src="img/LOGO LATA.webp" alt="Imagen de la canción">
                                Nombre de la canción 
                            </div>
                        </td>
                        <td>578513</td>
                        <td>1872798</td>
                        <td>1AS5AS84</td>
                        <td>24/02/2024</td>
                    </tr>
                    <tr class="colored-rows">
                        <td>9</td>
                        <td>
                            <div class="song-info">
                                <img src="img/LOGO LATA.webp" alt="Imagen de la canción">
                                Nombre de la canción 
                            </div>
                        </td>
                        <td>578513</td>
                        <td>1872798</td>
                        <td>1AS5AS84</td>
                        <td>24/02/2024</td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="Otra_Seccion" class="d-content" style="display: none;">
            <!-- Contenido de la sección "Otra_Seccion" -->
            <div class="contenido-Otra_Seccion">
                <!-- Contenido principal aquí -->
            </div>
            <div class="otro-Otra_Seccion">
                <!-- Otro contenido aquí -->
            </div>
        </div>

        <div id="ganancias" class="d-content" style="display: none;">
            <!-- Contenido de la sección "Ganancias Compartidas" -->
            <div class="contenido-ganancias">
                <!-- Contenido principal aquí -->
            </div>
            <div class="otro-ganancias">
                <!-- Otro contenido aquí -->
            </div>
        </div>

        <div id="estadisticas" class="d-content" style="display: none;">
            <!-- Contenido de la sección "Estadísticas" -->
            <div class="contenido-estadisticas">
                <!-- Contenido principal aquí -->
            </div>
            <div class="otro-estadisticas">
                <!-- Otro contenido aquí -->
            </div>
        </div>

        <div id="transacciones" class="d-content" style="display: none;">
            <!-- Contenido de la sección "Transacciones" -->
            <div id="custom-loader"></div>
            <div class="contenido-transacciones">
                <!-- Contenido principal aquí -->
            </div>
            <div class="otro-transacciones">
                <!-- Otro contenido aquí -->
            </div>
        </div>
    </div>
    <!-- Reproductor de música -->
    <div class="music-player-overlay">
        <div class="music-player-controls">
            <div class="music-player-control left-control">
                <div class="image-container">
                    <img src="img/LOGO LATA.webp" alt="Imagen" class="player-image">
                </div>
                <div class="sub_text-container">
                    <p class="text1">Ahora si se viene los bueno gente | Test of sound</p>
                    <p class="text2">No se que poner aqui</p>
                </div>
            </div>
            <div class="music-player-control center-control">
                <!-- Iconos -->
                <div class="icon-container">
                    <img src="icons/random-svgrepo-com.svg" alt="Icono 1" class="icon white">
                    <img src="icons/backward-svgrepo-com.svg" alt="Icono 2" class="icon white">
                    <img src="icons/play-svgrepo-com.svg" alt="Icono 3" class="icon play-icon">
                    <img src="icons/forward-svgrepo-com.svg" alt="Icono 4" class="icon forward-icon">
                    <img src="icons/loading-svgrepo-com.svg" alt="Icono 5" class="icon white">
                </div>
                <!-- Contadores -->
                <div class="counters">
                    <span class="counter">0:00</span>
                    <!-- Barra de progreso -->
                    <div class="progress-bar">
                        <div class="progress"></div>
                    </div>
                    <span class="counter">3:30</span>
                </div>
            </div>
            <div class="music-player-control right-control">
                <!-- Aquí irá el contenido a la derecha -->
            </div>
        </div>
    </div>

    <!-- Inclusión de elementos PHP -->
    <?php include 'source/background.php'; ?>
    <?php include 'source/footer.php'; ?>

    <!-- Script -->
    <script src="js/dashboard.js"></script>
</body>
</html>
