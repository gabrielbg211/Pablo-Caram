<?php
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Definir las variables de conexión
$servername = "roundhouse.proxy.rlwy.net";
$username = "root";
$password = "Ea6ge6CDfdAHaGF2E6DFb1FDA6EbDHEh";
$database = "railway";
$db_port = "30344";

// Inicializar mensaje vacío
$message = "";

// Verificar si se ha mostrado la alerta anteriormente
if (isset($_SESSION['alert_displayed']) && $_SESSION['alert_displayed'] === true) {
    // Limpiar la variable de sesión
    unset($_SESSION['alert_displayed']);
} else {
    // Verificar si se enviaron datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Crear la conexión a la base de datos
        $conn = mysqli_connect($servername, $username, $password, $database, $db_port);

        // Verificar la conexión
        if (!$conn) {
            die("Error de conexión: " . mysqli_connect_error());
        }

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
            // Usuario encontrado, verificar la password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($contrasena, $row['password'])) {
                // password correcta, iniciar sesión y redirigir al usuario
                $_SESSION['usuario'] = $row['nombre_usuario']; // Puedes almacenar más información del usuario si lo deseas
                header("Location: ../index.php"); // Redirigir al usuario a la página principal
                exit();
            } else {
                // password incorrecta
                $message = "Usuario o password incorrecta";
                $_SESSION['alert_displayed'] = true; // Marcar que se ha mostrado la alerta
                echo "<script>alert('$message');</script>"; // Mostrar alerta con JavaScript
                echo "<script>window.location.href = '../Login.php';</script>"; // Redirigir a Login.php con JavaScript
                exit();
            }
        } else {
            // Usuario no encontrado
            $message = "Usuario o password incorrecta";
            $_SESSION['alert_displayed'] = true; // Marcar que se ha mostrado la alerta
            echo "<script>alert('$message');</script>"; // Mostrar alerta con JavaScript
            echo "<script>window.location.href = '../Login.php';</script>"; // Redirigir a Login.php con JavaScript
            exit();
        }
    }
}