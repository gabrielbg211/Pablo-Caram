<?php
// Iniciar la sesión si aún no está iniciada
session_start();
?>

<script>
// Crear una variable JavaScript con el estado del usuario
var usuarioLogeado = '<?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "Usuario no logeado"; ?>';

// Mostrar el estado del usuario en la consola
console.log(usuarioLogeado);
</script>