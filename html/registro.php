<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="../css/Register.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Martel+Sans:wght@700&family=Nunito&family=Oswald:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div id="navigation-menu"></div>
    <section class="contenedorInicioSesion">
      <div class="login-card">
        <div class="login-header">
          <h2>Registrarse</h2>
          <h5>Ingrese los datos respectivos para realizar el registro</h5>
        </div>
        <form action="../back/registro.php" method="POST" class="form">
          <div>
            <label for="">Nombres y Apellidos</label>
            <input
              name="name_lastName"
              type="text"
              id="Nombres"
              placeholder=" Ingrese sus Nombres"
              required
            />
          </div>
          <div>
            <label for="">Numero de Contacto</label
            ><input
              name="contactNumber"
              type="text"
              id="contacto"
              placeholder="Ingrese un numero de contacto"
            />
          </div>
          <div>
            <label for="">Correo Electronico</label>
            <input
              name="email"
              type="email"
              id="correo"
              placeholder=" Ingrese su usuario"
            />
          </div>
          <div>
            <label for=""> ingrese Contraseña</label>
            <input
              name="password"
              type="password"
              id="contraseña"
              placeholder=" Ingrese su Contraseña"
              required
            />
          </div>
          <button type="submit" name="buttonRegister">Registrarse</button>
        </form>
        <div class="footer-login-card">
          <button id="ButtonSignIn">Iniciar sesión</button>
        </div>
      </div>
    </section>
    <script src="../js/Register.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
