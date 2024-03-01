<?php
// Inicia la sesión si no está iniciada
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifica si ya hay un usuario autenticado
if(isset($_SESSION['usuario'])) {
    // Si el usuario está autenticado, redirige a dashboard.php
    header("Location: dashboard.php");
    exit(); // Asegúrate de que el script se detenga después de redirigir
}
