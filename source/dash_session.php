<?php
// Inicia la sesión si no está iniciada
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifica si NO hay un usuario autenticado
if(!isset($_SESSION['usuario'])) {
    // Si el usuario NO está autenticado, redirige a Login.php
    header("Location: Login.php");
    exit(); // Asegúrate de que el script se detenga después de redirigir
}