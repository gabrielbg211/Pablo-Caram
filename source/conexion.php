<?php
session_start();

// Definir las variables de conexión
$DB_HOST = "localhost";
$DB_USER = "gabriel";
$DB_PASSWORD = "root";
$DB_NAME = "caram_studio";
$DB_PORT = 3306; // Puerto predeterminado para MySQL

// Crear la conexión a la base de datos
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

