<?php
    include_once '../include/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tabla Menú</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<style>
    body {
        background-image: url("https://c4.wallpaperflare.com/wallpaper/1015/628/1024/tomato-hamburger-patty-sandwich-wallpaper-preview.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>
    <?php require '../partials/header.php' ?>
    <br><br>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="float-left">
                                <h4> Listado Menú </h4>
                            </div>
                            <div>
                                <input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar menú...">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <thead class="thead">
                                    <tr>
                                        <th>ID Bar</th>
                                        <th>ID Menú</th>
                                        <th>Nombre Menú</th>
                                        <th>Precio Menú</th>
                                        <th>Disponibilidad Menú</th>
                                        <th>Descripción Menú</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql = "SELECT * FROM menu";
                                    $result = mysqli_query($conn, $sql);
                                    while ($mostrar = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td>2</td>
                                        <td><?php echo $mostrar['id'] ?></td>
                                        <td><?php echo $mostrar['nombre'] ?></td>
                                        <td><?php echo $mostrar['precio'] ?></td>
                                        <td><?php echo $mostrar['disponibilidad'] ?></td>
                                        <td><?php echo $mostrar['descripcion'] ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>