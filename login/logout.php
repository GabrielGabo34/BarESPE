<?php
  session_start();

  session_destroy();

  header('location: https://barespel.herokuapp.com/login/login.php');
  exit();
?>
