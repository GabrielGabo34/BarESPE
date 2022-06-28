<?php
    require '../include/database.php';
    session_start();

    $error;
    if (!empty($_POST['usuario']) && !empty($_POST['contrasenia'])) {
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];

        $query = "SELECT COUNT(*) as contar from usuarios where usuario = '$usuario' and contrasenia = '$contrasenia'";
        $consulta = mysqli_query($conn, $query);
        $array = mysqli_fetch_array($consulta);

        if($array['contar']>0){
            $_SESSION['usuario'] = $usuario;
            header("location: https://barespel.herokuapp.com/index.php");
        }else{
            $error = "incorrecto";
            header("location: https://barespel.herokuapp.com/login/login.php");
        }    
    }else{
        $error = "vacio";
        header("location: https://barespel.herokuapp.com/login/login.php");
    }
    
?>