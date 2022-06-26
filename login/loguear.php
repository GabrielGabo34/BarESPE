<?php
    include_once '../../Prueba/include/database.php';
    session_start();

    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    $query = "SELECT COUNT(*) as contar from usuarios where usuario = '$usuario' and contrasenia = '$contrasenia'";
    $consulta = mysqli_query($conn, $query);
    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['usuario'] = $usuario;
        header("location: https://barespel.herokuapp.com/index.php");
    }else{
        echo "DATOS INCORRECTOS";
    }
?>