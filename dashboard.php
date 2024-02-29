<?php include 'source/estado.php'; ?>
<?php include 'source/conexion.php'; ?>
<?php include_once 'source/check_sesion.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="img/ICONO WEB.ico">
    <link rel="preload" href="styles/style.css" as="style">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/dashboard.css">
    <link rel="preload" href="js/dashboard.js" as="script">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/molot" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        /* Estilo para bloquear el scroll */
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
    <?php include 'source/loader.php'; ?>
    <?php include 'source/header.php'; ?>

    <div class="wrapper">
        <div class="d-menu">
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Buscar...">
                <button type="button" onclick="search()">Buscar</button>
            </div>
            <p class="menu-title">Menu</p>
            <ul class="menu-list">
                <li>
                    <a href="#" class="menu-option" onclick="showSection('inicio')">Inicio</a>
                </li>
                <li>
                    <a href="#" class="menu-option" onclick="showSection('lanzamientos')">Nuevo Lanzamiento</a>
                </li>
                <li>
                    <a href="#" class="menu-option" onclick="showSection('ganancias')">Ganancias Compartidas</a>
                </li>
                <li>
                    <a href="#" class="menu-option" onclick="showSection('estadisticas')">Estadísticas</a>
                </li>
                <li>
                    <a href="#" class="menu-option" onclick="showSection('transacciones')">Transacciones</a>
                </li>
            </ul>
            <p class="menu-title">Marketing</p>
            <ul class="menu-list">
                <li><a href="#" class="menu-option">Youtube</a></li>
                <li><a href="#" class="menu-option">Spotify</a></li>
            </ul>
        </div>    
        <div id="inicio" class="d-content">
            <div class="contenido-inicio">
                <!-- Contenido principal aquí -->
            </div>
            <div class="otro-inicio">
                <!-- Otro contenido aquí -->
            </div>
        </div>

        <div id="lanzamientos" class="d-content" style="display: none;">
            <div class="contenido-lanzamientos">
                <!-- Contenido principal aquí -->
            </div>
            <div class="otro-lanzamientos">
                <!-- Otro contenido aquí -->
            </div>
        </div>

        <div id="ganancias" class="d-content" style="display: none;">
            <div class="contenido-ganancias">
                <!-- Contenido principal aquí -->
            </div>
            <div class="otro-ganancias">
                <!-- Otro contenido aquí -->
            </div>
        </div>

        <div id="estadisticas" class="d-content" style="display: none;">
            <div class="contenido-estadisticas">
                <!-- Contenido principal aquí -->
            </div>
            <div class="otro-estadisticas">
                <!-- Otro contenido aquí -->
            </div>
        </div>

        <div id="transacciones" class="d-content" style="display: none;">
            <div class="contenido-transacciones">
                <!-- Contenido principal aquí -->
            </div>
            <div class="otro-transacciones">
                <!-- Otro contenido aquí -->
            </div>
        </div>
    </div>

    <!-- Imágenes adicionales -->
    <?php include 'source/background.php'; ?>

    <!-- Footer -->
    <?php include 'source/footer.php'; ?>

    <!-- Script -->
    <script src="js/dashboard.js"></script>
</body>
</html>
