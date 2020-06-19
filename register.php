<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/register.css">
  <title>Register</title>
</head>
<body>
  <?php
  include 'header-h.html';
  ?>
<section class="register">
      <section class="register__container">
        <h2>Regístrate</h2>
        <form class="register__container--form">
          <input class="input__register" type="tetx" placeholder="Nombre">
          <input class="input__register" type="email" placeholder="Correo">
          <input class="input__register" type="password" placeholder="Contraseña">
          <button class="button">Registrarme</button>
        </form>
        <p class="register__container--register"><a href="iniciar-sesion.php">Iniciar sesion</a></p>
        
  </section>
  <?php
  include 'footer.html';
  ?>
</body>
</html>