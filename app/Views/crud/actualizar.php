<?php

$id = $datos[0]['idEstudiante'];
$nombre = $datos[0]['nombre'];
$apellido = $datos[0]['apellido'];
$cedula = $datos[0]['cedula'];
$correo = $datos[0]['correo'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP-MySQL-BOOTSTRAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <h1 class="text-center p-2">Editar datos</h1>
    <!-- formulario de registro -->
    <div class="container-fluid row">
        <form class="col p-4" method="POST" action="<?= base_url() . '/actualizar' ?>">
            <h3 class="font-weight-bold">Registro de estudiante</h3>
            <div class="mb-3">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombreInput" name="nombre" value="<?= $nombre; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidoInput" name="apellido" value="<?= $apellido; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cedula</label>
                <input type="text" class="form-control" id="cedulaInput" name="cedula" value="<?= $cedula; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" id="correoInput" name="correo" value="<?= $correo; ?>">
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary mt-3" name="btnRegistrar">Actualizar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>