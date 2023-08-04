<div class="container-fluid">
    <div class="col">
        <h1 class="text-center mt-3">Registro</h1>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="<?= base_url() . '/registrar' ?>" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Contrasena</label>
                    <input type="password" class="form-control" name="contrasena">
                </div>
                <div class="mb-3">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" value="admin" id="btnradio1" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio1">Administrador</label>

                        <input type="radio" class="btn-check" name="btnradio" value="user" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">Usuario</label>
                    </div>
                </div>
                <a href="<?= base_url() ?>" class="btn btn-dark">Volver</a>
                <button type="submit" class="btn btn-primary" name="btnRegistrar" onclick="return validacionCorreo()">Registrarse</button>
            </form>
        </div>
    </div>
</div>

<script>
    let mensaje = <?= $mensaje ?>

    if (mensaje == '1') {
        swal(':|', 'Hay campos vacios', 'info');
    }else if (mensaje == '2'){
        swal(':)', 'Registro realizado con exito', 'success');
    }else if (mensaje == '3'){
        swal(':s', 'El usuario ya se encuentra en uso', 'info');
    }
</script>