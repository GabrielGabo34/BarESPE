<?php
  /*include 'include/database.php';*/
  session_start();
  $usuario = $_SESSION['usuario'];


/*if (isset($_SESSION['user_id'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
  $records->bindParam(':id', $_SESSION['user_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = null;

  if (count($results) > 0) {
    $user = $results;
  }
}*/
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Sistema de control Bar-ESPE</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<style>
  body{
    background-image: url("https://images.alphacoders.com/519/thumb-1920-519509.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  h1{
    font-family: 'Courgette', cursive;
    color: white;
    text-shadow: 4px 4px black;
    font-size: 90px;
  }

</style>
  
<body>
  <?php 
    if(!isset($usuario)){
      header("location: https://barespel.herokuapp.com/login/login.php");
    }else{
      require 'partials/header.php';
      echo "<br><br><br><br><br><br><br><br><br><br><br>
      <h1>
        Bienvenido al sistema de Bar - ESPEL <br> $usuario
      </h1>";
    }
  
  ?>
</body>
</html>