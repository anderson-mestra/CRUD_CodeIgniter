<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD con CodeIgniter 4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }
  </style>
</head>

<body>
  <div class="container-fluid row">
    <div class="col">
      <img src="public/images/codeigniter.png" height="100px" width="100px"></img>
    </div>
    <div class="col-9">
      <h1 class="text-center p-2">CRUD CODEIGNITER</h1>
    </div>
  </div>

  <br>

  <!-- formulario de registro -->
  <div class="container-fluid row">
    <form class="col p-4" method="POST" action="<?= base_url() . '/crear' ?>">
      <h3 class="font-weight-bold">Registro de estudiante</h3>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombreInput" name="nombre" maxlength="20">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="apellidoInput" name="apellido" maxlength="30">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Cedula</label>
        <input type="text" class="form-control" id="cedulaInput" name="cedula" minlength="7" maxlength="10" pattern="^[0-9]*$">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="email" class="form-control" id="correoInput" name="correo" maxlength="30">
      </div>

      <div class="">
        <button type="submit" class="btn btn-primary mt-3" name="btnRegistrar" onclick="return validacionCorreo()">Registrar</button>
      </div>

    </form>

    <div class="col-md-8 p-4">
      <!-- tabla para mostar la informacion almacenada -->
      <table class="table">
        <!-- cambiar color despues -->
        <thead class="bg-primary">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido(s)</th>
            <th scope="col">Cedula</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha de registro</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($datos as $key) :
          ?>
            <tr>
              <th scope="row"><?= $key->idEstudiante ?></th>
              <td><?= $key->nombre ?></td>
              <td><?= $key->apellido ?></td>
              <td><?= $key->cedula ?></td>
              <td><?= $key->correo ?></td>
              <td><?= $key->fechaIngreso ?></td>
              <td>
                <a class="btn btn-info p-1" href="<?= base_url() . '/obtenerID/' . $key->idEstudiante ?>">Editar</a>
                <a class="btn btn-danger p-1" href="<?= base_url() . '/eliminar/' . $key->idEstudiante ?>" onclick="return opcion()">Eliminar</a>
              </td>
            <?php endforeach; ?>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script src="../../../public/js/validaciones.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <script>
    function opcion() {

      let resultado = window.confirm('Esta seguro de borrar este registro?');
      if (resultado === true) {
        return true;
      } else
        return false;
    };

  //   function validacionCorreo() {
  //     valor = document.getElementById("correoInput").value;
  //     if (!/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor)) {
  //       alert('Formato invalido')
  //       return false;
  //     }else{
  //       return true;
  //     }
  //   }
  // </script>

  <script type="text/javascript">
    let mensaje = '<?= $mensaje ?>';

    switch (mensaje) {
      case 'vacio':
        swal(':|', 'Hay campos vacios', 'info');
        break;
      case '0':
        swal(':(', 'No se ha podido registrar', 'error');
        break;
      case '1':
        swal(':)', 'Registro realizado con exito', 'success');
        break;
      case '2':
        swal(':)', 'Estudiante actualizado con exito', 'success');
        break;
      case '3':
        swal(':(', 'No se ha podido actualizar', 'error');
        break;
      case '4':
        swal(':)', 'Estudiante borrado con exito', 'success');
        break;
      case '5':
        swal(':(', 'No se ha podido borrar', 'error');
        break;
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>