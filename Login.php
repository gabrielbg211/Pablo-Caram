<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style.css"/>
    <link rel="icon" type="image/webp" href="img/ICONO WEB.ico">
    <title>Iniciar sesión y Registro</title>
  </head>
  <style>
    /* Estilo para bloquear el scroll */
    .body-scroll-lock {
        overflow: hidden;
    }

    @media (min-width: 1280px) {
        #loader-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        opacity: 1;
        transition: opacity 0.5s;
    }
    
    #loader-video {
        max-width: 50%;
        max-height: 50%;
    }
  }
</style>
<body>
<?php include 'source/loader.php'; ?>
<?php include 'source/header.php'; ?>

<div class="container">
  <div class="forms-container">
    <div class="signin-signup">
    <form action="source/conexion.php" class="sign-in-form" method="POST">
    <h2 class="title">Iniciar sesión</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Usuario o Correo Electrónico" name="usuario" />
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Contraseña" name="contrasena" />
    </div>
    <input type="submit" value="Login" class="btn solid" />
    <p class="social-text">Iniciar sesión con plataformas sociales</p>
    <div class="social-media">
        <a href="#" class="social-icon">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-icon">
            <i class="fab fa-google"></i>
        </a>
    </div>
</form>
      <form action="source/registro.php" class="sign-up-form" method="POST">
        <h2 class="title">Registrate</h2>
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Usuario" name="usuario" />
        </div>
        <div class="input-field">
          <i class="fas fa-envelope"></i>
          <input type="email" placeholder="Email" name="email" />
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Contraseña" name="contrasena" />
        </div>
        <input type="submit" class="btn" value="Sign up" />
        <p class="social-text">Regístrese con las plataformas sociales</p>
        <div class="social-media">
          <a href="#" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-google"></i>
          </a>
        </div>
      </form>
    </div>
  </div>

  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
        <h3>Registro para nuevos artitas</h3>
        <p>
          ¿Nuevo en Caram Studio? Inscríbete ahora para empezar a vender tu música en todo el mundo.
        </p>
        <button class="btn transparent" id="sign-up-btn">
          Registrate
        </button>
      </div>
      <img src="img/log.svg" class="image" alt="" />
    </div>
    <div class="panel right-panel">
      <div class="content">
        <h3>Miembros de Caram Studio Iniciar sesión</h3>
        <p>
          Vamos a empezar.
        </p>
        <button class="btn transparent" id="sign-in-btn">
          Iniciar sesión
        </button>
      </div>
      <img src="img/register.svg" class="image" alt="" />
    </div>
  </div>
</div>

<!-- Imágenes adicionales -->
<?php include 'source/background.php'; ?>

<!-- Footer -->
<?php include 'source/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
