<?php
  include_once '../include/database.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SignUp</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<style>
  body {
    background-image: url("https://images.alphacoders.com/519/thumb-1920-519509.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }

  h1 {
    font-family: 'Courgette', cursive;
    color: #0098cb;
    text-shadow: 4px 4px white;
    font-size: 60px;
  }

  @media only screen and (min-device-width: 400px) {
    body {
      background-image: url('https://images.alphacoders.com/519/thumb-1920-519509.jpg');
    }
  }
</style>

<body>

  <?php require '../partials/header.php' ?>

  <?php if (!empty($message)) : ?>
    <p> <?= $message ?></p>
  <?php endif; ?>
  <br><br><br><br>
  <h1>Crear cuenta nueva</h1>

  <form action="https://barespel.herokuapp.com/login/login.php" method="POST">
    <input name="email" type="text" placeholder="Ingresa tu email">
    <input name="user" type="text" placeholder="Ingresa tu usuario">
    <input name="password" type="password" placeholder="Ingresa tu contraseña">
    <input type="submit" value="Crear cuenta nueva">
  </form>

</body>

</html>