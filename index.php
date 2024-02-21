<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="img/ICONO WEB.ico">
    <link rel="preload" href="styles/style.css" as="style">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preload" href="js/script.js" as="script">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/molot" rel="stylesheet">
    <title>Distribution caram studio</title>

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


    <div class="main-content">
        <main class="contenedor">
            <div class="contenido">
                <div class="contenido__texto">
                    <h2 class="titulo">
                        <span>Distribution</span>
                        <span>caram</span>
                        <span>studio</span>
                    </h2>
                    <p class="texto">CaramStudio lleva la música y el entretenimiento en la sangre <span>por eso vinimos a darle solución a tu carrera musical e innovar</span> <span> Somos fanáticos de los desafíos, artistas y creadores.</span></p>
                    <button class="boton">
                        <span>¿Crecemos juntos?</span>
                        <svg class="icono-whatsapp" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                        </svg>
                    </button>
                </div>
                <img class="logo_lata" src="img/LOGO LATA.webp" alt="imagen nosotros">
            </div>
        </main>
    </div>

    <!-- Imágenes adicionales -->
    <?php include 'source/background.php'; ?>

    <!-- Footer -->
    <?php include 'source/footer.php'; ?>

    <!-- Script -->
    <script src="js/script.js"></script>
</body>

</html>
