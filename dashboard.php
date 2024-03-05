<?php // include 'source/estado.php'; ?>
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
                                <div class="text-container">esto es un test para probrar el nombre | Test of sound</div>
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
                    <p class="text1">esto es un test para probrar el nombre | Test of sound</p>
                    <p class="text2">No se que poner aqui</p>
                </div>
            </div>
            <div class="music-player-control center-control">
                <!-- Iconos -->
                <div class="icon-container">
                    <!-- Random Buttom -->
                    <button class="icon-button first-button" style="border: none; background: none; padding: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrows-shuffle" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 4l3 3l-3 3" />
                            <path d="M18 20l3 -3l-3 -3" />
                            <path d="M3 7h3a5 5 0 0 1 5 5a5 5 0 0 0 5 5h5" />
                            <path d="M21 7h-5a4.978 4.978 0 0 0 -3 1m-4 8a4.984 4.984 0 0 1 -3 1h-3" />
                        </svg>
                    </button>
                    <button class="icon-button second-button" style="border: none; background: none; padding: 0; display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrows-shuffle" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#a905b6" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M18 4l3 3l-3 3" />
                            <path d="M18 20l3 -3l-3 -3" />
                            <path d="M3 7h3a5 5 0 0 1 5 5a5 5 0 0 0 5 5h5" />
                            <path d="M21 7h-5a4.978 4.978 0 0 0 -3 1m-4 8a4.984 4.984 0 0 1 -3 1h-3" />
                        </svg>
                    </button>
                    <!-- Back Track Buttom -->
                    <button class="icon-button third-button" style="border: none; background: none; padding: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-track-prev" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M21 5v14l-8 -7z" />
                        <path d="M10 5v14l-8 -7z" />
                        </svg>
                    </button>
                    <button class="icon-button fourth-button" style="border: none; background: none; padding: 0; display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-track-prev" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#a905b6" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M21 5v14l-8 -7z" />
                        <path d="M10 5v14l-8 -7z" />
                        </svg>
                    </button>
                    <!-- Play/Pause Buttom -->
                    <button class="icon-button fifth-button" style="border: none; background: none; padding: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-play" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="black" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 4v16l13 -8z" />
                        </svg>
                    </button>
                    <button class="icon-button sixth-button" style="border: none; background: none; padding: 0; display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-pause" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" fill="black" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M6 5m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v12a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                        <path d="M14 5m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v12a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                        </svg>
                    </button>
                    <!-- Track Next Buttom -->
                    <button class="icon-button seventh-button" style="border: none; background: none; padding: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-track-next" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 5v14l8 -7z" />
                        <path d="M14 5v14l8 -7z" />
                        </svg>
                    </button>
                    <button class="icon-button eighth-button" style="border: none; background: none; padding: 0; display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-track-next" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#a905b6" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 5v14l8 -7z" />
                        <path d="M14 5v14l8 -7z" />
                        </svg>
                    </button>
                    <!-- Repeat Buttom -->
                    <button class="icon-button ninth-button" style="border: none; background: none; padding: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-repeat" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 12v-3a3 3 0 0 1 3 -3h13m-3 -3l3 3l-3 3" />
                        <path d="M20 12v3a3 3 0 0 1 -3 3h-13m3 3l-3 -3l3 -3" />
                        </svg>
                    </button>
                    <button class="icon-button tenth-button" id="repeatButton" style="border: none; background: none; padding: 0; display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-repeat" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#a905b6" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 12v-3a3 3 0 0 1 3 -3h13m-3 -3l3 3l-3 3" />
                        <path d="M20 12v3a3 3 0 0 1 -3 3h-13m3 3l-3 -3l3 -3" />
                        </svg>
                    </button>
                    <button class="icon-button eleventh-button" id="stopRepeatButton" style="border: none; background: none; padding: 0; display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-repeat-once" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#a905b6" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 12v-3a3 3 0 0 1 3 -3h13m-3 -3l3 3l-3 3" />
                        <path d="M20 12v3a3 3 0 0 1 -3 3h-13m3 3l-3 -3l3 -3" />
                        <path d="M11 11l1 -1v4" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="music-player-control right-control">
                <div class="right-control">
                    <span class="counter">0:00</span>
                    <span class="counter">/</span>
                    <span class="counter">3:30</span>
                </div>
                <div class="volume-control">
                    <div class="volume-bar-container">
                        <audio id="audio" src="test_sound.mp3"></audio>
                        <input type="range" min="0" max="100" value="50" class="volume-bar">
                        <div class="volume-icons">
                            <button class="volume-button volume-off-button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-volume-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M15 8a5 5 0 0 1 1.912 4.934m-1.377 2.602a5 5 0 0 1 -.535 .464" />
                                    <path d="M17.7 5a9 9 0 0 1 2.362 11.086m-1.676 2.299a9 9 0 0 1 -.686 .615" />
                                    <path d="M9.069 5.054l.431 -.554a.8 .8 0 0 1 1.5 .5v2m0 4v8a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l1.294 -1.664" />
                                    <path d="M3 3l18 18" />
                                </svg>
                            </button>
                            <button class="volume-button volume-2-button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-volume-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#a905b6" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M15 8a5 5 0 0 1 0 8" />
                                    <path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" />
                                </svg>
                            </button>
                            <button class="volume-button volume-button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-volume" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#a905b6" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M15 8a5 5 0 0 1 0 8" />
                                    <path d="M17.7 5a9 9 0 0 1 0 14" />
                                    <path d="M6 15h-2a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h2l3.5 -4.5a.8 .8 0 0 1 1.5 .5v14a.8 .8 0 0 1 -1.5 .5l-3.5 -4.5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
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


