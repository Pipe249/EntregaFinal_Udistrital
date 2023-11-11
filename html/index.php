<?php  
  if (isset($_GET['status'])){
    echo '<script>alert("usuario invalido o inexistente verificar")</script>';
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio sesión</title>
    <link rel="stylesheet" href="../css/styleIndex.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Martel+Sans:wght@700&family=Nunito&family=Oswald:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div id="navigation-menu"></div>
    <section class="contenedorInicioSesion">
      <div class="login-card">
        <div class="login-header">
            <h2>Iniciar sesión</h2>
            <h5>Ingresa tu email y contraseña para iniciar sesión</h5>
        </div>
        <form action="../back/iniciosesion.php" method="POST" class="form">
          <div>
          <label for="">Usuario</label>
          <input name="user" type="text" id="correo" placeholder=" Ingrese su usuario" />
          </div>
          <div>
            <label for="">Contraseña</label>
            <input name="password" type="password" id="contraseña" placeholder=" Ingrese su Contraseña">
          </div>
          
          
          <button name="buttonInicio" type="submit">Iniciar sesión</button>
        </form>
        <div class="footer-login-card">
            <button id="RegisterButton">Registrarse</button>
            <button>¿olvido su contraseña?</button>
        </div>
      </div>
    </section>
    <script src="../js/main.js"></script>
  </body>
</html>
