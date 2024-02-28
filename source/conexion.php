<?php
session_start();

// Obtener las variables de entorno para la conexión a la base de datos
$DB_HOST = $_ENV('DB_HOST');
$DB_USER = $_ENV('DB_USER');
$DB_PASSWORD = $_ENV('DB_PASSWORD');
$DB_NAME = $_ENV('DB_NAME');
$DB_PORT = $_ENV('DB_PORT');

// Crear la conexión a la base de datos utilizando las variables de entorno
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

include 'registro.php'; // O incluye el archivo que contiene la conexión a la base de datos



// Verificar si el usuario está logeado
if (isset($_SESSION['usuario'])) {
    // El usuario está logeado
    $usuario = $_SESSION['usuario'];
    // Puedes realizar acciones adicionales aquí si es necesario
} else {
    // El usuario no está logeado
    // Puedes redirigir a la página de inicio de sesión u otra página según tus necesidades
    // header("Location: login.php");
    // exit();
}

// Verificar si se enviaron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los valores del formulario y limpiarlos
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $contrasena = mysqli_real_escape_string($conn, $_POST['contrasena']);
    
    // Consulta SQL preparada para verificar las credenciales
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = ? OR email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $usuario);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) == 1) {
        // Usuario encontrado, verificar la contraseña
        $row = mysqli_fetch_assoc($result);
        if (password_verify($contrasena, $row['contraseña'])) {
            // Contraseña correcta, iniciar sesión y redirigir al usuario
            $_SESSION['usuario'] = $row['nombre_usuario']; // Puedes almacenar más información del usuario si lo deseas
            header("Location: ../index.php"); // Redirigir al usuario a la página principal
            exit();
        } else {
            // Contraseña incorrecta
            $error = "La contraseña ingresada es incorrecta. Por favor, inténtalo de nuevo.";
        }
    } else {
        // Usuario no encontrado
        $error = "El usuario ingresado no existe. Por favor, regístrate si eres nuevo.";
    }
}
