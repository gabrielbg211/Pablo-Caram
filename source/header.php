<header class="header" id="dashboard-header">
    <a class="a_Logo" href="index.php">
        <img class="header__logo" src="img/LOGO CARAM STUDIO.webp" alt="Logotipo">
    </a>
    <button class="boton-hamburguesa" id="boton-hamburguesa">
        <span class="hamburguesa-icono"></span>
    </button>
    <?php if (basename($_SERVER['PHP_SELF']) === 'dashboard.php') : ?>
        <!-- Mostrar elementos adicionales solo en el dashboard -->
        <nav class="dashboard-nav">
            <a href="#" class="navegacion__enlace">Elemento 1</a>
            <a href="#" class="navegacion__enlace">Elemento 2</a>
            <a href="#" class="navegacion__enlace"><span class="circle"></span>Elemento 3</a>
        </nav>
    <?php else : ?>
        <nav class="navegacion" id="navegacion">
            <a href="#" class="navegacion__enlace">Nuestro Equipo</a>
            <a href="#" class="navegacion__enlace">Novedades</a>
            <a href="#" class="navegacion__enlace">artistas</a>
            <a href="#" class="navegacion__enlace">contactos</a>
            <a href="#" class="navegacion__enlace">precios</a>
            <?php if (isset($_SESSION['usuario'])) : ?>
                <div class="dashboard-dropdown">
                    <a href="#" class="navegacion__enlace inicio-sesion" id="dashboard-link">
                        Cuenta
                        <svg class="icono-svg" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                        </svg>
                    </a>
                    <div class="dashboard-dropdown-content" id="dropdown-content">
                        <a href="dashboard.php" class="dashboard-button">dashboard</a>
                        <a href="source/cerrar_sesion.php" class="dashboard-button">Cerrar sesión</a>
                    </div>
                </div>
            <?php else : ?>
                <!-- Si no está logeado, mostrar enlace para iniciar sesión -->
                <a href="Login.php" class="navegacion__enlace inicio-sesion">
                    Inicio de sesión
                    <svg class="icono-svg" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                    </svg>
                </a>
            <?php endif; ?>
        </nav>
    <?php endif; ?>
</header>
