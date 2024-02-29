<?php
session_start();

// Verificar si el usuario está logueado
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Login.php"); // Redirigir al usuario a login.php si no está logueado
    exit;
}
