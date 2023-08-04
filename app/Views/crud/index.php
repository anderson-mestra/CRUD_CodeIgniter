<header>
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col">
        <img src="public/images/codeigniter.png" height="100px" width="100px" alt="Icono CodeIgniter"></img>
      </div>
      <div class="col-8">
        <h1 class="text-center p-2">Hola, <?= session('usuario') ?></h1>
      </div>
      <div class="col d-flex justify-content-end">
        <a href="<?= base_url() . '/salir' ?>" class="btn btn-dark">Cerrar Sesion</a>
      </div>
    </div>
  </div>
</header>

<!-- formulario de registro -->
<hr>
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
      <button type="submit" class="btn btn-primary mt-3" name="btnRegistrar" onclick="return validacionCorreo()">Registrar
      </button>
    </div>

  </form>

  <div class="col-md-8 p-4">
    <!-- tabla para mostar la informacion almacenada -->
    <table class="table" id="tablaEstudiantes">
      <caption>Tabla informacion estudiantes</caption>
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
              <a class="btn btn-info p-1" href="<?= base_url() . '/obtenerID/' . $key->idEstudiante ?>">
                <i class="fa-solid fa-pen-to-square px-2"></i>
              </a>
              <a class="btn btn-danger p-1" href="<?= base_url() . '/eliminar/' . $key->idEstudiante ?>" onclick="return opcion()">
                <i class="fa-solid fa-trash px-2"></i>
              </a>
            </td>
          <?php endforeach; ?>
          </tr>
      </tbody>
    </table>
  </div>
</div>

<script src="public/js/JavaScript.js"></script>

<script type="text/javascript">
  let mensaje = '<?= $mensaje ?>';

  switch (mensaje) {
    case 'cedRep':
      swal(':s', 'La cedula ya esta en uso', 'info');
      break;
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