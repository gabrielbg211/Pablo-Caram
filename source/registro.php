<?php
session_start();

$servername = "roundhouse.proxy.rlwy.net";
$username = "root";
$password = "Ea6ge6CDfdAHaGF2E6DFb1FDA6EbDHEh";
$database = "railway";
$db_port = "30344";

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $database, $db_port);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Verificar si se enviaron datos del formulario
if (isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['contrasena'])) {
    // Recuperar los datos del formulario
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    
    // Consultar si el usuario o el email ya existen en la base de datos
    $sql_usuario = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario'";
    $sql_email = "SELECT * FROM usuarios WHERE email = '$email'";
    
    $result_usuario = mysqli_query($conn, $sql_usuario);
    $result_email = mysqli_query($conn, $sql_email);
    
    // Verificar si ya existe el usuario o el email
    if (mysqli_num_rows($result_usuario) > 0) {
        $response['success'] = false;
        $response['message'] = "El nombre de usuario ya está registrado. Por favor, elija otro.";
    } elseif (mysqli_num_rows($result_email) > 0) {
        $response['success'] = false;
        $response['message'] = "El correo electrónico ya está registrado. Por favor, utilice otro.";
    } else {
        // Hashear la password antes de almacenarla en la base de datos
        $contrasena_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);
        
        // Insertar los datos en la base de datos
        $sql_insert = "INSERT INTO usuarios (nombre_usuario, email, password) VALUES ('$usuario', '$email', '$contrasena_hasheada')";
        
        if (mysqli_query($conn, $sql_insert)) {
            // Registro exitoso
            $response['success'] = true;
            $response['message'] = "Registro exitoso";
            
            // Iniciar sesión del nuevo usuario
            $_SESSION['usuario'] = $usuario;
        } else {
            // Error al insertar en la base de datos
            $response['success'] = false;
            $response['message'] = "Error al registrar usuario: " . mysqli_error($conn);
        }        
    }
    // Devolver la respuesta como JSON
    echo json_encode($response);
} else {
    // Datos del formulario no recibidos
    $response['success'] = false;
    $response['message'] = "Error: Datos del formulario no recibidos";
    // Devolver la respuesta como JSON
    echo json_encode($response);
}
