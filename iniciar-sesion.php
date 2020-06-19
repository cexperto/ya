<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">
  <title>Iniciar Sesión</title>
</head>
<body>
  <?php include 'header-h.html';?>
<section class="login">
      <section class="login__container">
        <h2>Inicia sesión</h2>
        <form class="login__container--form">
          <input class="input__login" name="c" type="text" placeholder="Correo">
          <input class="input__login" type="password" placeholder="Contraseña">
          <button class="button">Iniciar sesión</button>
          <div class="login__container--remember-me">
            <label>
              <input type="checkbox" name="" id="cbox1" value="checkbos">Recuérdame
            </label>
            <a href="/">Olvidé mi contraseña</a>
          </div>
        </form>
        <section class="login__container--social-media">
          <div><img src="img/icons/google-icon.png" alt="Google">Inicia sesión con Google</div>
          <div><img src="img/icons/twitter-icon.png" alt="Twitter">Inicia sesión con Twitter</div>
        </section>
        <p class="login__container--register">No tienes ninguna cuenta <a href="/register.php">Regístrate</a></p>
      </section>
  </section>
  <?php
  include 'footer.html';
  ?>
</body>
</html>