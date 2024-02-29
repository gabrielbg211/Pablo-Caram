<?php
session_start();
// Establecer el tiempo máximo de vida de la sesión en 5 minutos (300 segundos)
ini_set('session.gc_maxlifetime', 300);

// Establecer el tiempo de vida de la cookie de sesión en 0 para que persista después de cerrar el navegador
ini_set('session.cookie_lifetime', 0);

// Iniciar la sesión
session_start();
?>
