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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="col mt-3">
            <a class="btn fw-bold" href="<?= base_url() . '/CRUD' ?>">
                <i class="fa-solid fa-chevron-left fa-2xl"></i>
                Volver
            </a>
        </div>
        <div class="col">
            <div class="container-fluid">
                <h1 class="text-center p-2">Editar datos</h1>
            </div>
        </div>
    </div>
    <!-- formulario de registro -->
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <form class="col-md-4 p-4" method="POST" action="<?= base_url() . '/actualizar' ?>">
                <h3 class="font-weight-bold">Registro de estudiante</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombreInput" value='<?= $nombre ?>' name="nombre" maxlength="20">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidoInput" value='<?= $apellido ?>' name="apellido" maxlength="30">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cedula</label>
                    <input type="text" class="form-control" id="cedulaInput" value='<?= $cedula ?>' name="cedula" minlength="7" maxlength="10" pattern="^[0-9]*$">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correoInput" value='<?= $correo ?>' name="correo" maxlength="30">
                </div>
                <input type="hidden" value="<?= $id ?>" name='id'>
                <div class="row justify-content-center mx-1">
                    <button type="submit" class="btn btn-primary" name="btnRegistrar" onclick="return validacionCorreo()">Registrar
                    </button>
                </div>
            </form>
        </div>

    </div>

    <script src="public/js/JavaScript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>