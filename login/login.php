<?php
  include_once '../include/database.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
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
  <?php 
    if(isset($_GET['error'])){
      $error = $_GET['error'];
      if ($error = "incorrecto") {
        echo "<h2>El usuario y/o contraseña no son correctos</h2>";
      }
      if ($error = "vacio"){
        echo "<h2>Los datos enviados se encuentran vacíos</h2>";
      }
    }
  ?>

  <br><br><br><br><br><br><br>
  <h1>Iniciar Sesión</h1>

  <form action="https://barespel.herokuapp.com/login/loguear.php" method="POST">
    <input type="text" name="usuario" placeholder="Ingrese su usuario">
    <input type="text" name="contrasenia" placeholder="Ingrese su contraseña">
    <input type="submit" value="Ingresar">
  </form>
</body>

</html>